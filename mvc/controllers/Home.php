<?php

class Home extends Controller
{
    public function test()
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
                        array("id" => "1", "room_name" => "room1", "room_image" => "hotel1.jpg", "room_price" => "1000000", "room_size" => "2", "description" => "description"),
                        array("id" => "2", "room_name" => "room2", "room_image" => "hotel2.jpg", "room_price" => "2000000", "room_size" => "1", "description" => "description")
                    ));
                }
            } else {
                $this->view("home");
            }
        } else {
            header("Location:login");
        }
    }

    public function detail($id)
    {
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
        $user = $this->model('User');
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['tel'])) {
            if ($_POST['password'] !== $_POST['re_password']) {
                $this->view("register", [
                    "message" => "missing re_password"
                ]);
            } else {
                $user_data = $user->check_username($_POST['username']);
                if ($user_data) {
                    $this->view("register", [
                        "message" => "username already exists"
                    ]);
                } else {
                    $user->create_user($_POST['username'], $_POST['email'], $_POST['password'], $_POST['tel']);
                    echo "<script type='text/javascript'>alert('Success');</script>";
                    $this->view("register", [
                        "message" => ""
                    ]);
                }
            }
        } else {
            $this->view("register", [
                "message" => ""
            ]);
        }
    }

    public function logout()
    {
        unset($_SESSION["id"]);
        session_destroy();
        header("Location:index");
    }

    public function index()
    {
        $user = $this->model('User');
        $room = $this->model('Room');
        $room_data = $room->get_all_room();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user_data = $user->check_login($_POST['username'], $_POST['password']);
            if ($user_data) {
                $_SESSION['user_id'] = $user_data['id'];
                $this->view('index', [
                    "rooms" => $room_data
                ]);
            } else {
                $this->view('index', [
                    "message" => "Fail",
                    "rooms" => $room_data
                ]);
            }
        } else {
            $this->view('index', [
                "rooms" => $room_data
            ]);
        }
    }

    public function room_search()
    {
        $room = $this->model('Room');
        if (isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['room_amount']) && isset($_POST['guests'])) {
            $_SESSION['check_in'] = $_POST['start_date'];
            $_SESSION['check_out'] = $_POST['end_date'];
            $room_data = $room->get_all_room();
            $date = array();
            foreach ($room_data as $key => $val) {
                $x = $room->search_room_v2($_POST['start_date'], $_POST['end_date'], $val['id']);
                $date[$val['id']] = $x;
            }
            $this->view("room-search", [
                "rooms" => $room_data,
                "date" => $date
            ]);
        }
    }

    public function single_room($id)
    {
        $user = $this->model('User');
        $room = $this->model('Room');
        $bill = $this->model('Bill');
        $room_data = $room->get_one_room($id);
        $amenities_data = $room->get_amenities($id);
        $rooms_data = $room->get_all_room();
        $booked_date = $room->get_booked_date($id);
        if (isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['guests']) && isset($_POST['payment'])) {
            $status = "";
            if($_POST['payment'] == 'on') {
                $status = 'paid';
            } else {
                $status = 'unpaid';
            }
            if (isset($_SESSION['user_id'])) {
                $user_data = $user->get_one_user($_SESSION['user_id']);

                $startTimeStamp = strtotime($_POST['start_date']);
                $endTimeStamp = strtotime($_POST['end_date']);

                $timeDiff = abs($endTimeStamp - $startTimeStamp);

                $numberDays = $timeDiff / 86400;  // 86400 seconds in one day

                // and you might want to convert to integer
                $numberDays = intval($numberDays);

                $bill_price = ($room_data['price_per_day'] - $room_data['discount']) * $numberDays;
                $room_check = $room->check_room($_POST['start_date'], $_POST['end_date'], $_POST['guests'], $id);
                if ($room_check) {
                    $last_check = $bill->create_bill((string)$_SESSION['user_id'], $id, $_POST['start_date'], $_POST['end_date'], $user_data['username'], $user_data['tel'], $user_data['email'], $bill_price, $status);
                    $booked_date = $room->get_booked_date($id);
                    if ($last_check) {
                        echo "<script type='text/javascript'>alert('Success');</script>";
                    } else {
                        echo "<script type='text/javascript'>alert('Fail');</script>";
                    }
                } else {
                    echo "<script type='text/javascript'>alert('Fail');</script>";
                }
                $this->view('single-room', [
                    "room" => $room_data,
                    "amenities" => $amenities_data,
                    "rooms" => $rooms_data,
                    "booked" => $booked_date
                ]);
            } else {
                echo "<script type='text/javascript'>alert('Pls Login');</script>";
                $this->view('single-room', [
                    "room" => $room_data,
                    "amenities" => $amenities_data,
                    "rooms" => $rooms_data,
                    "booked" => $booked_date,
                    "message" => "PLS login"
                ]);
            }
        }

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user_data = $user->check_login($_POST['username'], $_POST['password']);
            if ($user_data) {
                $_SESSION['user_id'] = $user_data['id'];
                $this->view('single-room', [
                    "room" => $room_data,
                    "amenities" => $amenities_data,
                    "rooms" => $rooms_data,
                    "booked" => $booked_date
                ]);
            } else {
                $this->view('single-room', [
                    "room" => $room_data,
                    "amenities" => $amenities_data,
                    "rooms" => $rooms_data,
                    "booked" => $booked_date,
                    "message" => "Fail"
                ]);
            }
        }
        $this->view('single-room', [
            "room" => $room_data,
            "amenities" => $amenities_data,
            "rooms" => $rooms_data,
            "booked" => $booked_date
        ]);
    }
}
