<?php
class carts
{
    
    var $id_carts = null;
    var $id_product = null;
    var $password = null;
    var $id_user = null;
    var $quantity= null;
    var $status = null;
   
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM carts";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($id_carts)
    {
        $db = new connect();
        $query = "SELECT*FROM carts WHERE id=" .$id_carts;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($id_product ,$password, $id_user,$quantity, $status){
        $db = new connect();
        $query = "INSERT INTO `carts`(`id_product`,`password`,`id_user`,`quantity`,`status`) VALUES ('$id_product','$id_user','$email','$quantity','$status')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($id_carts,$id_product ,$password, $id_user,$quantity, $status )
    {
        $db = new connect();
        $query = "UPDATE `carts` SET `$id_product`='$id_product', `password` = '$password',`id_user`='$id_user', `quantity`='$quantity', `status`='$status' WHERE id = $id_carts";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($id_carts)
    {
        $db = new connect();
        $query = "DELETE  FROM carts WHERE id='$id_carts'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
