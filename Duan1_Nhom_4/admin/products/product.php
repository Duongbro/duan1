<?php
class products
{
    
    var $id_product = null;
    var $name = null;
    var $sale_price = null;
    var $descibe = null;
    var $img= null;
    var $id_category = null;
    var $quantity = null;
    
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM products";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($id_product)
    {
        $db = new connect();
        $query = "SELECT*FROM products WHERE id=" .$id_product;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($name,$sale_price,$descibe,$img, $id_category, $quantity){
        $db = new connect();
        $query = "INSERT INTO `products`(`name`,`sale_price`,`descibe`,`img`,`id_category`,`quantity`) VALUES ('$name','$sale_price','$descibe','$img','$id_category','$quantity')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($id_product,$name,$sale_price,$descibe, $img, $id_category, $quantity)
    {
        $db = new connect();
        $query = "UPDATE `products` SET `name`='$name', `sale_price` = '$sale_price',`descibe`='$descibe', `img`='$img', `id_category`='$id_category', `quantity`='$quantity' WHERE id = $id_product";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($id_product)
    {
        $db = new connect();
        $query = "DELETE  FROM products WHERE id='$id_product'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
