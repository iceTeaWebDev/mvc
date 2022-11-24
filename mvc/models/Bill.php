<?php

class Bill extends DB {
    public function get_all_date() {
        $query = "SELECT check_in, check_out FROM bill";
        $obj = $this->conn->prepare($query);
        if ($obj->execute()) {
            return $obj->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
