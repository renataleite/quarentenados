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
        return execute($sql);
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM items ORDER BY id";

        $rs = execute($sql);
        $result = $rs->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public static function get($id)
    {
        $sql = "SELECT * FROM items WHERE id = $id";

        $rs = execute($sql);
        $result = $rs->fetchObject(Item::class);
        return $result;
    }


    public static function delete($id)
    {
        $sql = "DELETE FROM items WHERE id = $id";

        return execute($sql);
    }

    public static function getByType($typeId)
    {
        $sql = "SELECT * FROM items WHERE type_id = $typeId ORDER BY id";

        $rs = execute($sql);
        $result = $rs->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function upload($input_field)
    {
        $file_info = $_FILES[$input_field];
        if ($file_info['name'] == '') {
            return  ['success' => true, 'file_name' => ""];
        }

        $ext = strtolower(pathinfo($_FILES[$input_field]['name'], PATHINFO_EXTENSION));
        $new_file_name = uniqid('image_', true) . '.' . $ext;
        $target_file = "uploads/" . $new_file_name;

        if ($file_info['size'] > 3000000) {
            return  ['success' => false, 'message' => "Desculpe, a imagem não pode ultrapassar 3Mb."];
        }

        // Check if image file is a actual image or fake image
        list($width, $height, $type, $attr) = getimagesize($file_info["tmp_name"]);
        $ratio = round($width / $height, 2);
        if ($ratio != 1.5) {
            return  ['success' => false, 'message' => "O arquivo possui a proporção $ratio. Utilize a razão 1.5"];
        }

        // Allow certain file formats
        if (!in_array($ext, ['jpg', 'png', 'jpeg', 'gif', 'svg'])) {
            return  ['success' => false, 'message' => "Desculpe, apenas JPG, JPEG, PNG e GIF são permitidos."];
        }

        //make file upload
        if (!move_uploaded_file($file_info["tmp_name"], $target_file)) {
            return  ['success' => false, 'message' => "Ocorreu um erro ao fazer o upload."];
        }

        return ['success' => true, 'file_name' => $new_file_name];
    }
}
