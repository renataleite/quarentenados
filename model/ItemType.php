<?php

class ItemType
{

    public $id;
    public $name;


    public function insert()
    {
        $sql = "INSERT INTO item_type (name)
        VALUES ('$this->name')";

        return execute($sql);
    }

    public function update()
    {
        $sql = "UPDATE item_type SET name='$this->name' WHERE id = $this->id ";

        return execute($sql);
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM item_type";

        $rs = execute($sql);
        $result = $rs->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public static function get($id)
    {
        $sql = "SELECT * FROM item_type WHERE id = $id";

        $rs = execute($sql);
        $result = $rs->fetchObject();
        return $result;
    }


    public static function delete($id)
    {
        $sql = "DELETE FROM item_type WHERE id = $id";

        return execute($sql);
    }
}
