<?php

class Bill extends DB
{
    public function get_all_date()
    {
        $query = "SELECT check_in, check_out FROM bill";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function get_all_bill() {
        $query = "SELECT * FROM bill INNER JOIN room ON bill.room_id = room.id";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function create_bill($user_id, $room_id, $check_in, $check_out, $bill_user_name, $bill_user_tel, $bill_user_email, $price, $status) {
        $user_query = "INSERT INTO bill (user_id, room_id, check_in, check_out, bill_user_name, bill_user_tel, bill_user_email, price, status) VALUES (:user_id, :room_id, :check_in, :check_out, :bill_user_name, :bill_user_tel, :bill_user_email, :price, :status)";

        $user_obj = $this->conn->prepare($user_query);

        $user_obj->bindValue(':user_id', $user_id, PDO::PARAM_STR);
        $user_obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        $user_obj->bindValue(':check_in', $check_in, PDO::PARAM_STR);
        $user_obj->bindValue(':check_out', $check_out, PDO::PARAM_STR);
        $user_obj->bindValue(':bill_user_name', $bill_user_name, PDO::PARAM_STR);
        $user_obj->bindValue(':bill_user_tel', $bill_user_tel, PDO::PARAM_STR);
        $user_obj->bindValue(':bill_user_email', $bill_user_email, PDO::PARAM_STR);
        $user_obj->bindValue(':price', $price, PDO::PARAM_STR);
        $user_obj->bindValue(':status', $status, PDO::PARAM_STR);
        if ($user_obj->execute()) {
            return true;
        }
        return false;
    }
    public function delete_bill_by_room($room_id) {
        $query = "DELETE FROM bill WHERE room_id=:room_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }
    public function count_bill()
    {
        $query = "SELECT COUNT(id) FROM bill";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }
}
