<?php
class Room extends DB
{
    public function get_all_room()
    {
        $query = "SELECT * FROM room";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function add_room($name, $image, $price_per_day, $max_guests, $description, $bed, $discount)
    {
        $query = "INSERT INTO room (name, image, price_per_day, max_guests, description, bed, discount) VALUES (:name, :image, :price_per_day, :max_guests, :description, :bed, :discount)";

        $obj = $this->conn->prepare($query);

        $obj->bindValue(':name', $name, PDO::PARAM_STR);
        $obj->bindValue(':image', $image, PDO::PARAM_STR);
        $obj->bindValue(':price_per_day', $price_per_day, PDO::PARAM_STR);
        $obj->bindValue(':max_guests', $max_guests, PDO::PARAM_STR);
        $obj->bindValue(':description', $description, PDO::PARAM_STR);
        $obj->bindValue(':bed', $bed, PDO::PARAM_STR);
        $obj->bindValue(':discount', $discount, PDO::PARAM_STR);

        if ($obj->execute()) {
            return true;
        }
        return false;
    }

    public function search_room($check_in, $check_out, $guests)
    {
        $bill_query = "SELECT check_in, check_out, room_id FROM bill";
        $bill_obj = $this->conn->prepare($bill_query);
        $bill_obj->execute();
        $bill_data = $bill_obj->fetchAll(PDO::FETCH_ASSOC);
        $room_id = array();
        foreach ($bill_data as $bill) {
            if ($check_in >= $bill['check_out'] || $check_out <= $bill['check_in']) {
            } else {
                array_push($room_id, $bill['room_id']);
            }
        }

        $room_query = "SELECT * FROM room";
        $room_obj = $this->conn->prepare($room_query);
        $room_obj->execute();
        $room_data = $room_obj->fetchAll(PDO::FETCH_ASSOC);
        foreach ($room_data as $key => $val) {
            if ($val["max_guests"] < $guests) {
                unset($room_data[$key]);
            } else {
                for ($i = 0; $i < count($room_id); $i++) {
                    if ($val['id'] == $room_id[$i]) {
                        unset($room_data[$key]);
                    }
                }
            }
        }
        return $room_data;
    }

    public function search_room_v2($check_in, $check_out, $id)
    {
        $bill_query = "SELECT check_in, check_out FROM bill WHERE room_id=:room_id";
        $bill_obj = $this->conn->prepare($bill_query);
        $bill_obj->bindValue(':room_id', $id, PDO::PARAM_STR);
        $bill_obj->execute();
        $bill_data = $bill_obj->fetchAll(PDO::FETCH_ASSOC);
        $room_date = array();
        array_push($room_date, array(
            "check_in" => $check_in,
            "check_out" => $check_out
        ));
        foreach ($bill_data as $bill) {
            foreach ($room_date as $key => $val) {
                if ($val['check_in'] >= $bill['check_out'] || $val['check_out'] <= $bill['check_in']) {
                    array_push($room_date, array(
                        "check_in" => $val['check_in'],
                        "check_out" => $val['check_out']
                    ));
                    unset($room_date[$key]);
                } else if ($val['check_in'] < $bill['check_in'] && $val['check_out'] > $bill['check_out']) {
                    array_push($room_date, array(
                        "check_in" => $val['check_in'],
                        "check_out" => $bill['check_in']
                    ));
                    array_push($room_date, array(
                        "check_in" => $bill['check_out'],
                        "check_out" => $val['check_out']
                    ));
                    unset($room_date[$key]);
                } else if ($val['check_in'] >= $bill['check_in'] && $val['check_in'] < $bill['check_out'] && $val['check_out'] > $bill['check_out']) {
                    array_push($room_date, array(
                        "check_in" => $bill['check_out'],
                        "check_out" => $val['check_out']
                    ));
                    unset($room_date[$key]);
                } else if ($val['check_in'] < $bill['check_in'] && $val['check_out'] <= $bill['check_out'] && $val['check_out'] > $bill['check_in']) {
                    array_push($room_date, array(
                        "check_in" => $val['check_in'],
                        "check_out" => $bill['check_in']
                    ));
                    unset($room_date[$key]);
                } else {
                    unset($room_date[$key]);
                }
            }
        }
        return $room_date;
    }

    public function check_room($check_in, $check_out, $guests, $id)
    {
        $bill_query = "SELECT check_in, check_out, room_id FROM bill WHERE room_id=:room_id";
        $bill_obj = $this->conn->prepare($bill_query);
        $bill_obj->bindValue(':room_id', $id, PDO::PARAM_STR);
        $bill_obj->execute();
        $bill_data = $bill_obj->fetchAll(PDO::FETCH_ASSOC);
        $room_id = array();
        if ($bill_data) {
            foreach ($bill_data as $bill) {
                if ($check_in >= $bill['check_out'] || $check_out <= $bill['check_in']) {
                } else {
                    array_push($room_id, $bill['room_id']);
                }
            }
        }

        if ($room_id) {
            return false;
        } else {
            $room_query = "SELECT * FROM room WHERE id=:id";
            $room_obj = $this->conn->prepare($room_query);
            $room_obj->bindValue(':id', $id, PDO::PARAM_STR);
            $room_obj->execute();
            $room_data = $room_obj->fetch(PDO::FETCH_ASSOC);
            if ($room_data['max_guests'] < $guests) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function get_one_room($id)
    {
        $query = "SELECT * FROM room WHERE id=:id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function get_amenities($room_id)
    {
        $query = "SELECT amenities.name FROM amenities INNER JOIN room_amenities ON amenities.id=room_amenities.amenities_id WHERE room_amenities.room_id=:room_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function get_booked_date($room_id)
    {
        $query = "SELECT check_in, check_out FROM bill WHERE room_id=:room_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
        return array();
    }

    public function update_room($name, $image, $price_per_day, $max_guests, $description, $bed, $discount, $id)
    {
        $query = "UPDATE room SET name=:name, image=:image, price_per_day=:price_per_day, max_guests=:max_guests, description=:description, bed=:bed, discount=:discount WHERE id=:id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':name', $name, PDO::PARAM_STR);
        $obj->bindValue(':image', $image, PDO::PARAM_STR);
        $obj->bindValue(':price_per_day', $price_per_day, PDO::PARAM_STR);
        $obj->bindValue(':max_guests', $max_guests, PDO::PARAM_STR);
        $obj->bindValue(':description', $description, PDO::PARAM_STR);
        $obj->bindValue(':bed', $bed, PDO::PARAM_STR);
        $obj->bindValue(':discount', $discount, PDO::PARAM_STR);
        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }

    public function delete_room($id)
    {
        $query = "DELETE FROM room WHERE id=:id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':id', $id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }

    public function count_room()
    {
        $query = "SELECT COUNT(id) FROM room";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetch(PDO::FETCH_ASSOC);
        }
        return array();
    }
}
