<?php
class category
{
    
    var $id_category = null;
    var $name = null;
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM category";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($id_category)
    {
        $db = new connect();
        $query = "SELECT*FROM category WHERE id=" .$id_category;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($name){
        $db = new connect();
        $query = "INSERT INTO `category`(`name`) VALUES ('$name')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update( $id_category ,$name)
    {
        $db = new connect();
        $query = "UPDATE `category` SET `name`='$name' WHERE id =  $id_category";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($id_category)
    {
        $db = new connect();
        $query = "DELETE  FROM category WHERE id='$id_category'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
