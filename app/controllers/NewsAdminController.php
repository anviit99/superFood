<?php
namespace App\controllers;
use App\Blade\Blade;
use App\Categories;
use App\database\Database;
use App\LinkNewsTags;
use App\News;
use App\Product;
use App\Tags;
use App\Users;
use function GuzzleHttp\Promise\all;

new Database;
class NewsAdminController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $news = News::all();
        $tags = Tags::all();
        $categories =Categories::all();
        $newsTags =LinkNewsTags::all();
        Blade::render("backend/news/index",compact("news",'tags','categories','newsTags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function add(){

        Blade::render("backend/news/Add");
    }
    public function create(){

        $tags = Tags::all();
        $html = getCategory($parent_id = 0);
        Blade::render('backend/news/add', compact('html', 'tags'));

    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
       $title = $_POST['title'];
       $description = $_POST['description'];
       $contentAdd = $_POST['newsContentAdd'];
       $author = $_POST['author'];
       $category = $_POST['newsCategoryUpdate'];
        if (isset($_FILES['uploadImg'])) {

            $image_src = uploadFile($_FILES['uploadImg'], 'news');
        };

        $news = News::create([
                'title' => $title,
                'description' => $description,
                'content' => $contentAdd,
                 'author' => $author,
                   'images' => $image_src,
            'category_id' => $category,
            ]);
        if ($news) {
                $tag = $_POST['tags'];
                if(!empty($tag)){
                    foreach ($tag as $tag_id){
                        LinkNewsTags::create(
                        [
                            'news_id' => $news->id,
                            'tag_id' => $tag_id
                        ]
                        );
                    }
                }
            echo "<script>alert('Sign Up successfully!')</script>";
            header('location:/small/public/admin/news');
        }


    }
    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     * Example : Product::find($id)
     */
    public function show($id){
        $news= News::find($id['id']);
        $tags = Tags::all();
        $newsTags =LinkNewsTags::all();
        $html = getCategory($news->category_id);
        Blade::render("backend/news/edit",compact('news','html','tags','newsTags'));
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Product::find($id)->update($data)
     */
    public function edit() {



    }
    public function update($id){

        $title = $_POST['title'];
        $description = $_POST['description'];
        $contentAdd = $_POST['newsContentAdd'];
        $author = $_POST['author'];
        $category = $_POST['newsCategoryUpdate'];
        $found_news = News::find($id['id']);
        $news = $found_news->update([
            'title' =>$title,
            'description'=>$description,
            'content' => $contentAdd,
            'author' => $author,
            'category_id' =>$category,
        ]);
        if ($news){
            $tags = $_POST["tags"];
            if (!empty($tags)) {
                $newsTag = LinkNewsTags::where('news_id', $found_news->id)->get();
                $selected_tags = [];
                if (!$newsTag->isEmpty()) {
                    foreach ($newsTag as $tag) {
                        $selected_tags[$tag->tag_id] = $tag->tag_id;
                    }
                }
                foreach ($tags as $tag_id) {
                    //  Kiểm tra nếu có rồi thì bỏ qua
                    $newsTag = LinkNewsTags::where('news_id', $found_news->id)->where('tag_id', $tag_id)->get();
                    //  Insert thêm vào nếu chưa có
                    if ($newsTag->isEmpty()) {
                        LinkNewsTags::create([
                            'news_id' => $found_news->id,
                            'tag_id' => $tag_id
                        ]);
                    }
                    unset($selected_tags[$tag_id]);
                }
                //  Loại bỏ tag thừa
                if (!empty($selected_tags)){
                    $arr = [];
                    foreach ($selected_tags as $v) {
                        $arr[] = $v;
                    }
                    LinkNewsTags::where('news_id', $found_news->id)->whereIn('tag_id', $arr)->delete();
                }
            }else{
                // trường hợp mà không chọn tag nào thì xóa hết các liên kết
                LinkNewsTags::where('news_id', $found_news->id)->delete();
            }
            header('Location:/small/public/admin/news');
        } else {
//            echo "<script>alert('Sửa tin thất bại'); window.location= '/small/admin/news';</script>";
        }



    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        $news = News::destroy($id['id']);
        if($news){
            header('location:/small/public/admin/news');
        }
    }
}
