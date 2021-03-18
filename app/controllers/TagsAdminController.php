<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Product;
use App\Tags;
use App\Users;

new Database;
class TagsAdminController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $new_tags = Tags::all();
        Blade::render('backend/news_tags/index',compact('new_tags'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){
       Blade::render('backend/news_tags/add');


    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $tags = $_POST['nameTags'];
        $tag = Tags::create(
            [
                'name' => $tags
            ]
        );
        if($tag){
            header('Location:/small/public/admin/tags');
        }
        else{
            echo "<script>alert('Thêm Tag thất bại'); window.location= '/small/public/admin/tags/create';</script>";
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
        $tags = Tags::find($id['id']);
        Blade::render('backend/news_tags/edit',compact('tags'));
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Product::find($id)->update($data)
     */
    public function update($id){
        $nameTags = $_POST['nameTags'];
        $found_tags = Tags::find($id['id']);
        $tags = $found_tags->update([
            'name' => $nameTags,
        ]);
        if($tags){
            header('Location:/small/public/admin/tags');
        }
        else{
            echo "<script>alert('Sửa Tag thất bại'); window.location= '/small/public/admin/tags';</script>";
        }

    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
       Tags::destroy($id);
        header('Location:/small/public/admin/tags');
    }
}
