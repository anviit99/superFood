<?php
namespace App\controllers;
use App\Blade\Blade;
use App\Categories;
use App\database\Database;
use App\Product;
use App\Users;

new Database;
class CategoriesAdminController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $categories = Categories::all();

        Blade::render("backend/news_categories/index",compact("categories"));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){

    $html = getCategory($parent_id =0);
    Blade::render('backend/news_categories/add',compact('html'));

    }
    public  function  add(){
        Blade::render("backend/news_categories/add");
    }


    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){

        $name = $_POST['nameCategories'];
        $cate = $_POST['CategoryAdd'];
        $category = Categories::create([
            'name' => $name,
            'parent_id' => $cate,
        ]);
        if($category){
            header('Location:/small/public/admin/categories');
        }
        else{
            echo "<script>alert('Thêm danh mục thất bại'); window.location= '/superFood/admin/newsCategories/';</script>";
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
        $categories= Categories::find($id['id']);
        Blade::render("backend/news_categories/edit",compact("categories"));
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
        $name = $_POST['name'];
        $found_categories = Categories::find($id['id']);
        $categories = $found_categories->update([

            'name' => $name,

        ]);
        header("location:/small/public/admin/categories");

    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        echo "ok";
        Categories::destroy($id);
        header('location:/small/public/admin/categories');

    }
}
