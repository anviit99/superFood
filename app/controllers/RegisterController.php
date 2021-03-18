<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Mail\Mail;
use App\Product;
use App\Users;



new Database;

class RegisterController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Product::all()
     */
    public function index(){

        Blade::render('backend/auth/register');
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


        $name = $password = $email = "";
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
        if ($name != "" && $password != "" && $email != "") {
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $time = date('Y-m-d H:i:s');
            $users = Users::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'status' => 0,
            ]);


            if ($users) {
                $content = 'Chúc mừng bạn đã đăng ký tài khoản thành công<br>
                Tài khoản của bạn là :<br>
                            ' . $email . '<br>' .
                    'password: ' . $password . '<br>' .
                    'Click vào đây để kích hoạt tài khoản <a href="http://' . $_SERVER['HTTP_HOST'] . '/small/public/checkEmail/' . $email.'">Kích hoạt tài khoản</a>';
                //Gửi email thông báo tạo tài khoản thành công
                Mail::send($email, $name ,'Đăng ký tài khoản thành công',$content);
                echo "<script>alert('Vui lòng vào Gmail để xác thực!')</script>";
            }
        }
        else {
            echo "<script>alert('Đăng ký lỗi')</script>";
            header("location:register");

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
        echo "ok";

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
