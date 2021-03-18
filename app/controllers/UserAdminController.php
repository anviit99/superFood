<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Product;
use App\Roles;
use App\Users;

new Database;
class UserAdminController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){
        $users = Users::all();
        Blade::render('backend/users/index',compact("users"));
    }
    /*
     * @function create()
     * View form create
     * Type data : Array
     * Example : Product::create($data)
     */
    public function create(){


    }
    public  function add() {
        $roles = Roles::all();
        Blade::render('backend/users/add',compact('roles'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Product::create($data)
     */
    public function store(){

        $name = $password = $email =$role_id= "";
        if (empty($_POST['name'])) {

            $name = "";
        }
        else {

            $name = $_POST["name"];
        }
        if (empty($_POST['email'])) {
            $email = "";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $email = "";
            }
            $checkMailUser = Users::where('email', $email)->get();
            if (!$checkMailUser->isEmpty()) {
                $email = "";
            }

        }
        if (empty($_POST['password'])) {
            $password ="";
        }
        else {
            $password = $_POST['password'];
        }

        if (isset($_FILES['fileToUpload'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], '');
        }
        $role_id = $_POST['role_id'];
        if ($role_id == '') {
            $role_id = null;
        }

        if ($name != "" && $password != "" && $email != "" ) {


            $users = Users::create([
                'image' => $image_src,
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role_id' => $role_id,
            ]);
            if ($users) {
                echo "<script>alert('Sign Up successfully!')</script>";
                header("location:/small/public/home/users");

            }
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
        $user = Users::find($id['id']);
        $roles = Roles::all();



        Blade::render('backend/users/edit',compact("user",'roles'));
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
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role_id = $_POST['role_id'];
        if ($role_id == '') {
            $role_id = null;
        }


        $found_user = Users::find($id['id']);
        if (isset($_FILES['fileToUpload'])) {
            $image_src = uploadFile($_FILES['fileToUpload'], '');
        }
        $user = $found_user->update([
            'image' => $image_src,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id,
        ]);
        header("location:/small/public/home/users");
    }

    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Product::delete()
     */
    public function delete($id){
        $user = Users::destroy($id['id']);
       if($user){
           header('location:/small/public/home/users');
       }


    }
    public function active($id)

    {

        $user = Users::find($id['id']);
        $user->update([
                'status' => '1',
            ]
        );
        header(
            "Location:/small/public/home/users"
        );

    }
    public  function deactivate($id){
        $user = Users::find($id['id']);
        $user->update([
                'status' => '0',
            ]
        );
        header(
            "Location:/small/public/home/users"
        );
    }
}
