<?php

class Home extends Controller
{

    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            $message = "";
            if (isset($_POST['check_in']) && isset($_POST['check_out'])) {
                if ($_POST['check_out'] <= $_POST['check_in']) {
                    $message = "missing check_out";
                    $this->view("home", [
                        "message" => $message
                    ]);
                } else {
                    $bill = $this->model('Bill');
                    $bill_date = $bill->get_all_date();
                    $this->view("home");
                    $this->view("room", array(
                        array("id" => "1", "room_name" => "room1", "room_image" => "hotel1.jpg", "room_price" => "1000000", "room_size"=>"2", "description"=>"description"),
                        array("id" => "2", "room_name" => "room2", "room_image" => "hotel2.jpg", "room_price" => "2000000", "room_size"=>"1", "description"=>"description")
                    ));
                }
            } else {
                $this->view("home");
            }
        } else {
            header("Location:login");
        }
    }

    public function detail($id) {
        $this->view("home");
        $this->view('detail', ["id" => $id]);
    }

    public function login()
    {
        // error
        $message = "";
        // load model
        $user = $this->model('User');

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user_data = $user->check_login($_POST['username'], $_POST['password']);
            if ($user_data) {
                $message = "ok";
                $_SESSION['user_id'] = $user_data['id'];
                header("Location:index");
            } else {
                $message = "miss username or password";
                $this->view("login", [
                    "message" => $message
                ]);
            }
        } else {
            $this->view("login", [
                "message" => $message
            ]);
        }
    }

    public function register()
    {
        // error
        $message = "";

        // load model
        $user = $this->model('User');

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])) {
            if ($_POST['password'] !== $_POST['re_password']) {
                $message = "missing re_password";
                $this->view("register", [
                    "message" => $message
                ]);
            } else {
                $user_data = $user->check_username($_POST['username']);
                if ($user_data) {
                    $message = "username already exists";
                    $this->view("register", [
                        "message" => $message
                    ]);
                } else {
                    $user->create_user($_POST['username'], $_POST['email'], $_POST['password']);
                    header("Location:login");
                }
            }
        } else {
            $this->view("register", [
                "message" => $message
            ]);
        }
    }

    public function logout()
    {
        unset($_SESSION["id"]);
        session_destroy();
        header("Location:login");
    }
}
