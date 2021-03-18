<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Product;
use App\Users;

new Database;
class LoginController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
//        if (isset($_SESSION['users'])) {
//            Blade::render('backend/public');
//        }
        Blade::render('backend/auth/login');
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


        $email = $_POST['email'];
        $password = $_POST['password'];
        $a = 1;
        $users = Users::all();
        $flat = 0;

        foreach ($users as $key => $user ) {

            if ($email == $user['email'] && $password == $user['password'] && $a == $user['status'] ){
                $flat = 1;
                $_SESSION['users'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email']
                ];

                if (isset($_POST['remember_me'])) {
                    setcookie('email', $email, time() + (3600 * 24 * 30));
                    setcookie('password', $_POST["password"], time() + (3600 * 24 * 30));
                }

            }
            header("location:home");


        }


        if ($flat==0) {
            echo "<script>alert('Không đúng tài khoản mk ')</script>";
            header("location:login");

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
        print_r($id['id']);
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
    public function logout(){
        unset($_SESSION['users']);
        header('Location:login');
    }
}
