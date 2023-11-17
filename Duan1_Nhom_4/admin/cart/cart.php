<?php
class carts
{
    
    var $carts_id = null;
    var $product_id = null;
    var $password = null;
    var $user_id = null;
    var $quantity= null;
    var $status = null;
   
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM carts";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById( $carts_id)
    {
        $db = new connect();
        $query = "SELECT*FROM carts WHERE id=" . $carts_id;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($product_id ,$password, $id_user,$quantity, $status){
        $db = new connect();
        $query = "INSERT INTO `carts`(`$product_id`,`password`,`id_user`,`quantity`,`status`) VALUES ('$product_id','$id_user','$email','$quantity','$status')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update( $carts_id,$product_id ,$password, $id_user,$quantity, $status )
    {
        $db = new connect();
        $query = "UPDATE `carts` SET `$product_id`='$product_id', `password` = '$password',`id_user`='$id_user', `quantity`='$quantity', `status`='$status' WHERE id =  $carts_id";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete( $carts_id)
    {
        $db = new connect();
        $query = "DELETE  FROM carts WHERE id=' $carts_id'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
