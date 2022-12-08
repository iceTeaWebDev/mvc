<?php

class Comment extends DB {
    public function delete_comment_by_room($room_id) {
        $query = "DELETE FROM comment WHERE room_id=:room_id";
        $obj = $this->conn->prepare($query);
        $obj->bindValue(':room_id', $room_id, PDO::PARAM_STR);
        if ($obj->execute()) {
            return true;
        }
        return false;
    }
}