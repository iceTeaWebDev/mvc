<?php
class User extends DB
{
    public function get_all_user()
    {
        $query = "SELECT * FROM user";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function get_one_user($id) {
        $query = "SELECT * FROM user WHERE id=:id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function count_bill($user_id)
    {
        $query = "SELECT COUNT(*) FROM bill WHERE user_id=:user_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':user_id', $user_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function check_login($username, $password)
    {
        $query = "SELECT * FROM user WHERE username=:username AND password=:password";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':username', $username, PDO::PARAM_STR);
        $obj->bindValue(':password', $password, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function check_username($username)
    {
        $query = "SELECT * FROM user WHERE username=:username";
        $obj = $this->conn->prepare($query);

        $obj->bindValue(':username', $username, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function create_user($username, $email, $password, $tel)
    {
        $user_query = "INSERT INTO user (username, email, password, tel) VALUES (:username, :email, :password, :tel)";

        $user_obj = $this->conn->prepare($user_query);

        $user_obj->bindValue(':username', $username, PDO::PARAM_STR);
        $user_obj->bindValue(':email', $email, PDO::PARAM_STR);
        $user_obj->bindValue(':password', $password, PDO::PARAM_STR);
        $user_obj->bindValue(':tel', $tel, PDO::PARAM_STR);
        if ($user_obj->execute()) {
            return true;
        }
        return false;
    }

    public function update_user($username, $email, $password, $user_id)
    {
        $user_query = "UPDATE user SET username=:username, email=:email, password=:password WHERE user_id=:user_id";

        $user_obj = $this->conn->prepare($user_query);

        $user_obj->bindValue(':username', $username, PDO::PARAM_STR);
        $user_obj->bindValue(':email', $email, PDO::PARAM_STR);
        $user_obj->bindValue(':password', $password, PDO::PARAM_STR);
        $user_obj->bindValue(':user_id', $user_id, PDO::PARAM_STR);
        if ($user_obj->execute()) {
            return true;
        }
        return false;
    }

    public function delete_user($user_id)
    {
        $user_query = "DELETE FROM user WHERE user_id=:user_id";
        $user_obj = $this->conn->prepare($user_query);
        $user_obj->bindValue(':user_id', $user_id, PDO::PARAM_STR);
        if ($user_obj->execute()) {
            return true;
        }
        return false;
    }
    public function count_user()
    {
        $query = "SELECT COUNT(id) FROM user";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }
}
