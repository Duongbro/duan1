<?php
class products
{
    
    var $product_id = null;
    var $name = null;
    var $sale_price = null;
    var $descibe = null;
    var $img= null;
    var $category_id = null;
    var $quantity = null;
    var $price= null;
    
    

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
        $query = "SELECT*FROM products WHERE id=" .$product_id;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($name,$sale_price,$descibe,$img, $category_id,$price, $quantity){
        $db = new connect();
        $query = "INSERT INTO `products`(`name`,`sale_price`,`descibe`,`img`,`category_id`,`quantity`) VALUES ('$name','$sale_price','$descibe','$img','$category_id','$quantity')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($product_id,$name,$sale_price,$descibe, $img, $category_id,$price, $quantity)
    {
        $db = new connect();
        $query = "UPDATE `products` SET `name`='$name', `sale_price` = '$sale_price',`descibe`='$descibe', `img`='$img', `id_category`='$category_id',`price`='price', `quantity`='$quantity' WHERE id = $id_product";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($product_id)
    {
        $db = new connect();
        $query = "DELETE  FROM products WHERE id='$product_id'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
