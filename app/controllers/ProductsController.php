<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Product;
use App\Products;
use App\Users;

new Database;
class ProductsController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $products = Products::all();
        Blade::render('frontend/products/index',compact('products'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){


    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){
        $name = $_POST['name'];
        $product = Product::create([
            'name' => $name,
            'image' => '',
            'price' => '',
            'price_old' => ''
        ]);
        if($product){
            echo 'ok';
        }
        else{
            echo 'fail';
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
       $product = Products::find($id['id']);
        Blade::render('frontend/products/detail',compact('product'));
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

    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){

    }
}
