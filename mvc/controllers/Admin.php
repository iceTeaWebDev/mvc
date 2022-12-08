<?php

class Admin extends Controller
{
    public function index()
    {
        $user = $this->model('User');
        $bill = $this->model('Bill');
        $room = $this->model('Room');
        $amenities = $this->model('Amenities');
        $count_user = $user->count_user();
        $count_bill = $bill->count_bill();
        $count_room = $room->count_room();
        $count_amenities = $amenities->count_amenities();
        $this->view('admin/index', [
            "user" => $count_user,
            "bill" => $count_bill,
            "room" => $count_room,
            "amenities" => $count_amenities
        ]);
    }

    public function users()
    {
        $user = $this->model('User');
        $user_data = $user->get_all_user();
        for ($i = 0; $i < count($user_data); $i++) {
            $data = $user->count_bill($user_data[$i]['id']);
            $user_data[$i]['bills'] = $data[0]['COUNT(*)'];
        }
        $this->view('admin/users', [
            "users" => $user_data
        ]);
    }

    public function rooms()
    {
        $room = $this->model('Room');
        $room_data = $room->get_all_room();
        // for($i = 0; $i < count($user_data); $i++) {
        //     $data = $user->count_bill($user_data[$i]['id']);
        //     $user_data[$i]['bills'] = $data[0]['COUNT(*)'];
        // }
        $this->view('admin/rooms', [
            "rooms" => $room_data
        ]);
    }

    public function amenities()
    {
        $amenities = $this->model('Amenities');
        $amenities_data = $amenities->get_all_amenities();
        for ($i = 0; $i < count($amenities_data); $i++) {
            $data = $amenities->count_room($amenities_data[$i]['id']);
            $amenities_data[$i]['rooms'] = $data[0]['COUNT(room_id)'];
        }
        $this->view('admin/amenities', [
            "amenities" => $amenities_data
        ]);
    }

    public function bills()
    {
        $bill = $this->model('Bill');
        $bill_data = $bill->get_all_bill();
        // for($i = 0; $i < count($user_data); $i++) {
        //     $data = $user->count_bill($user_data[$i]['id']);
        //     $user_data[$i]['bills'] = $data[0]['COUNT(*)'];
        // }
        $this->view('admin/bills', [
            "bills" => $bill_data,
        ]);
    }

    public function add_room()
    {
        $room = $this->model('Room');
        $amenities = $this->model("Amenities");
        $amenities_data = $amenities->get_all_amenities();
        $imageErr = "";
        $price_per_dayErr = "";
        $discountErr = "";
        $max_guestsErr = "";
        $message = "";
        if (!empty($_POST['name']) && !empty($_POST['price_per_day']) && !empty($_POST['discount']) && !empty($_POST['max_guests']) && !empty($_POST['description']) && !empty($_POST['bed'])) {
            $uploadOk = 1;
            if (trim($_POST['description']) == '' || trim($_POST['name']) == '' || trim($_POST['price_per_day']) == '' || trim($_POST['discount']) == '' || trim($_POST['max_guests']) == '' || trim($_POST['bed']) == '') {
                $uploadOk = 0;
                $message = "All data need";
            }
            if (!is_numeric($_POST['price_per_day']) || (float)$_POST['price_per_day'] <= 0) {
                $uploadOk = 0;
                $price_per_dayErr = "Enter a number";
            }

            if ((float)$_POST['price_per_day'] <= (float)$_POST['discount']) {
                $uploadOk = 0;
                $price_per_dayErr = "Enter a price_per_day > discount";
            }

            if (!is_numeric($_POST['discount']) || (float)$_POST['discount'] <= 0) {
                $uploadOk = 0;
                $discountErr = "Enter a number";
            }

            if (!is_numeric($_POST['max_guests']) || (float)$_POST['max_guests'] <= 0) {
                $uploadOk = 0;
                $max_guestsErr = "Enter a number";
            }

            $target_dir = "./mvc/views/upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
            } else {
                $imageErr = "File is not an image.";
                $uploadOk = 0;
            }


            // Check if file already exists
            if (file_exists($target_file)) {
                $imageErr = "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 500000) {
                $imageErr = "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // $imageErr = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $try_add = $room->add_room($_POST['name'], $_FILES["image"]["name"], $_POST['price_per_day'],  $_POST['max_guests'], $_POST['description'], $_POST['bed'], $_POST['discount']);
                    if ($try_add) {
                        $message = "Success";
                    } else {
                        $message = "Fail";
                    }
                } else {
                    $imageErr = "Sorry, there was an error uploading your file.";
                }
            }
        }
        $this->view('admin/add_room', [
            "amenities" => $amenities_data,
            'imageErr' =>  $imageErr,
            'price_per_dayErr' => $price_per_dayErr,
            'discountErr' => $discountErr,
            'max_guestsErr' => $max_guestsErr,
            'message' => $message
        ]);
    }

    public function update_room($id)
    {
        $amenities = $this->model('Amenities');
        $amenities_data = $amenities->get_all_amenities();
        $room = $this->model('Room');
        $room_data = $room->get_one_room($id);
        $room_amenities = $amenities->get_room_amenities($id);
        $imageErr = "";
        $price_per_dayErr = "";
        $discountErr = "";
        $max_guestsErr = "";
        $room_image = "";
        $message = "";
        if (!empty($_POST['name']) && !empty($_POST['price_per_day']) && !empty($_POST['discount']) && !empty($_POST['max_guests']) && !empty($_POST['description']) && !empty($_POST['bed'])) {
            $uploadOk = 1;
            if (trim($_POST['description']) == '' || trim($_POST['name']) == '' || trim($_POST['price_per_day']) == '' || trim($_POST['discount']) == '' || trim($_POST['max_guests']) == '' || trim($_POST['bed']) == '') {
                $uploadOk = 0;
                $message = "All data need";
            }
            if (!is_numeric($_POST['price_per_day']) || (float)$_POST['price_per_day'] <= 0) {
                $uploadOk = 0;
                $price_per_dayErr = "Enter a number";
            }

            if ((float)$_POST['price_per_day'] <= (float)$_POST['discount']) {
                $uploadOk = 0;
                $price_per_dayErr = "Enter a price_per_day > discount";
            }

            if (!is_numeric($_POST['discount']) || (float)$_POST['discount'] <= 0) {
                $uploadOk = 0;
                $discountErr = "Enter a number";
            }

            if (!is_numeric($_POST['max_guests']) || (float)$_POST['max_guests'] <= 0) {
                $uploadOk = 0;
                $max_guestsErr = "Enter a number";
            }
            if (!empty($_FILES["image"]['name'])) {
                $target_dir = "./mvc/views/upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image

                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check !== false) {
                } else {
                    $imageErr = "File is not an image.";
                    $uploadOk = 0;
                }


                // Check if file already exists
                if (file_exists($target_file)) {
                    $imageErr = "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["image"]["size"] > 500000) {
                    $imageErr = "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    $imageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    // $imageErr = "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        $room_image = $_FILES["image"]["name"];
                    } else {
                        $imageErr = "Sorry, there was an error uploading your file.";
                        $uploadOk == 0;
                    }
                }
            } else {
                $room_image = $room_data['image'];
            }
            if ($uploadOk == 1) {
                $amenities->delete_room_amenities($id);
                foreach ($amenities_data as $x) {
                    if (isset($_POST[$x['id']])) {
                        $amenities->add_room_amenities($id, $x['id']);
                    }
                }
                $try_update = $room->update_room($_POST['name'], $room_image, $_POST['price_per_day'],  $_POST['max_guests'], $_POST['description'], $_POST['bed'], $_POST['discount'], $id);
                if ($try_update) {
                    $message = "Success";
                    $room_data = $room->get_one_room($id);
                    $room_amenities = $amenities->get_room_amenities($id);
                } else {
                    $message = "Fail";
                }
            }
        }
        $this->view('admin/update_room', [
            'room' => $room_data,
            'amenities' => $amenities_data,
            'room_amenities' => $room_amenities,
            'imageErr' =>  $imageErr,
            'price_per_dayErr' => $price_per_dayErr,
            'discountErr' => $discountErr,
            'max_guestsErr' => $max_guestsErr,
            'message' => $message
        ]);
    }

    public function delete_room($id)
    {
        $room = $this->model('Room');
        $amenities = $this->model('Amenities');
        $comment = $this->model('Comment');
        $bill = $this->model('bill');
        $comment->delete_comment_by_room($id);
        $amenities->delete_room_amenities($id);
        $bill->delete_bill_by_room($id);
        $room_delete = $room->delete_room($id);
        if ($room_delete) {
            header("Location:../rooms");
        } else {
            echo "error";
        }
    }

    public function add_amenities()
    {
        $amenities = $this->model('Amenities');
        $message = "";
        $success = "";
        if (!empty($_POST['name'])) {
            $upload = 1;

            if (trim($_POST['name']) == '') {
                $upload = 0;
                $message = "All data needed";
            }
            if ($amenities->check_amenities($_POST['name'])) {
                $upload = 0;
                $message = "Amenties already exists";
            }
            if ($upload == 1) {
                $amenities->create_amenities($_POST['name']);
                $success = "Success";
            }
        }
        $this->view('admin/add_amenities', [
            "message" => $message,
            "success" => $success
        ]);
    }

    public function update_amenities($id)
    {
        $amenities = $this->model('Amenities');
        $amenities_data = $amenities->get_one_amenities($id);
        $message = "";
        $success = "";
        if (!empty($_POST['name'])) {
            $upload = 1;
            if (trim($_POST['name']) == '') {
                $upload = 0;
                $message = "All data needed";
            }
            if ($amenities->check_amenities($_POST['name'])) {
                $upload = 0;
                $message = "Amenties already exists";
            }
            if ($upload == 1) {
                $amenities->update_amenities($_POST['name'], $id);
                $success = "Success";
            }
        }
        $this->view('admin/update_amenities', [
            "message" => $message,
            "amenities" => $amenities_data,
            "success" => $success
        ]);
    }

    public function delete_amenities($id)
    {
        $amenities = $this->model('Amenities');
        $amenities->delete_room_amenities($id);
        $amenities_delete = $amenities->delete_amenities($id);
        if ($amenities_delete) {
            header("Location:../amenities");
        } else {
            echo "error";
        }
    }

    public function update_user() {
        
    }
}
