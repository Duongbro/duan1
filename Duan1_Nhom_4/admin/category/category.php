<?php
class categories
{
    
    var $category_id = null;
    var $name = null;
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM category";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($category_id)
    {
        $db = new connect();
        $query = "SELECT*FROM category WHERE id=" .$category_id;
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
    public function update( $category_id ,$name)
    {
        $db = new connect();
        $query = "UPDATE `category` SET `name`='$name' WHERE id =  $category_id";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($category_id)
    {
        $db = new connect();
        $query = "DELETE  FROM category WHERE id='$category_id'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    

    
    
    
    

    

    
