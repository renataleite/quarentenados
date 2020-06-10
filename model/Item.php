<?php
require_once 'tools/connection.php';

class Item
{

    public $id;
    public $title;
    public $description;
    public $image;
    public $link;
    public $insta_user;
    public $type_id;

    public function insert()
    {
        $sql = "INSERT INTO items (title, description, image, link, insta_user, type_id)
        VALUES ('$this->title', '$this->description', '$this->image', '$this->link', '$this->insta_user', '$this->type_id')";

        return execute($sql);
    }

    public function update()
    {
        $sql = "UPDATE items SET title='$this->title', description='$this->description', image='$this->image', link='$this->link', 
        insta_user='$this->insta_user', type_id='$this->type_id' WHERE id = $this->id";
        //print_r($sql); exit;
        return execute($sql);
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM items";

        $rs = execute($sql);
        $result = $rs->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public static function get($id)
    {
        $sql = "SELECT * FROM items WHERE id = $id";

        $rs = execute($sql);
        $result = $rs->fetchObject();
        return $result;
    }


    public static function delete($id)
    {
        $sql = "DELETE FROM items WHERE id = $id";

        return execute($sql);
    }

    public static function getByType($typeId)
    {
        $sql = "SELECT * FROM items WHERE type_id = $typeId";

        $rs = execute($sql);
        $result = $rs->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}
