<?php
class Amenities extends DB
{
    public function get_all_amenities()
    {
        $query = "SELECT * FROM amenities";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function count_room($amenities_id)
    {
        $query = "SELECT COUNT(room_id) FROM room_amenities WHERE amenities_id=:amenities_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':amenities_id', $amenities_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function add_room_amenities($room_id, $amenities_id)
    {
        $query = "INSERT INTO room_amenities (room_id, amenities_id) VALUES (:room_id, :amenities_id)";

        $obj = $this->conn->prepare($query);

        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        $obj->bindValue(':amenities_id', $amenities_id, PDO::PARAM_STR);

        if ($obj->execute()) {
            return true;
        }
        return false;
    }

    public function get_room_amenities($room_id)
    {
        $query = "SELECT * FROM room_amenities WHERE room_id=:room_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function delete_room_amenities($room_id)
    {
        $query = "DELETE FROM room_amenities WHERE room_id=:room_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }

    public function count_amenities()
    {
        $query = "SELECT COUNT(id) FROM amenities";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }
    public function create_amenities($name) {
        $user_query = "INSERT INTO amenities (name) VALUES (:name)";

        $user_obj = $this->conn->prepare($user_query);

        $user_obj->bindValue(':name', $name, PDO::PARAM_STR);
        if ($user_obj->execute()) {
            return true;
        }
        return false;
    }

    public function check_amenities($name) {
        $query = "SELECT * FROM amenities WHERE name=:name";
        $obj = $this->conn->prepare($query);

        $obj->bindValue(':name', $name, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function get_one_amenities($id) {
        $query = "SELECT * FROM amenities WHERE id=:id";
        $obj = $this->conn->prepare($query);

        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function update_amenities($name, $id) {
        $query = "UPDATE amenities SET name=:name WHERE id=:id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':name', $name, PDO::PARAM_STR);
        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }

    public function delete_amenities($id) {
        $query = "DELETE FROM amenities WHERE id=:id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }
}
