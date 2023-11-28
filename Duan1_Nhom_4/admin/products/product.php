<?php

$db = '';

class products
{
    var $product_id = null;
    var $name = null;
    var $price = null;
    var $describe = null;
    var $img = null;
    var $category_id = null;
    var $quantity = null;
    var $sale_price = null;
    var $status = null;
    var $short_describe = null;
    var $thumbnail = null;
    var $image = null;
    var $size_id = null;
    var $name_size = null;

    public function getList()
    {
        $db = new connect();
        $query = 'SELECT * FROM products'; //viết câu lệnh sql select *
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getByID_Product($product_id)
    {
        $db = new connect();
        $query = 'SELECT * FROM products WHERE product_id =' . $product_id;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    public function getBy_IDCategory($category_id)
    {
        $db = new connect();
        $query = 'SELECT * 
                  FROM products
                  WHERE category_id =' . $category_id;
        $result = $db->pdo_query($query,$category_id);
        return $result;
    }

    public function getThumbnailByID_Product($product_id)
    {
        $db = new connect();
        $query = 'SELECT thumbnails.image, thumbnails.thumbnail_id
                  FROM products, thumbnails
                  WHERE thumbnails.product_id = products.product_id
                  AND products.product_id ='. $product_id;
        $result = $db->pdo_query($query,$product_id);
        return $result;
    }


    public function add_product($name, $price, $describe, $img, $category_id, $quantity, $sale_price, $status, $short_describe)
    {
        $db = new connect();
        $query = "INSERT INTO products (name, price, `describe`, img, category_id, quantity, sale_price, status, short_describe) VALUES ('$name', '$price', '$describe', '$img', '$category_id', '$quantity', '$sale_price', '$status', '$short_describe')";
        $result = $db->pdo_execute($query);
        return $result;
    }
    public function add_thumbnail($image, $product_id)
    {
        $db = new connect();
        $query = "INSERT INTO thumbnails (image, product_id) VALUES ('$image', '$product_id')";
        $result = $db->pdo_execute($query);
        return $result;
    }
    public function add_size($name_size, $product_id)
    {
        $db = new connect();
        $query = "INSERT INTO size_products (name_size, product_id) VALUES ('$name_size', '$product_id')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    public function update_product($product_id, $name, $price, $describe, $img, $category_id, $quantity, $sale_price, $status, $short_describe)
    {
        $db = new connect();
        $query = "UPDATE products SET `name` = '$name', `price` = '$price',  `describe` = '$describe',`img` = '$img', `category_id` = '$category_id', `quantity` = '$quantity', `sale_price` = '$sale_price', `status` = '$status', `short_describe` = '$short_describe' WHERE product_id = ". $product_id;
        $result = $db->pdo_query($query);
        return $result;
    }
    

    public function delete($product_id)
    {
        $db = new connect();
        $query = "DELETE FROM products WHERE product_id = ". $product_id;
        $result = $db->pdo_query_one($query);
        return $result;
    }

    public function getList_DESC()
    {
        $db = new connect();
        $select = "SELECT * FROM products ORDER BY product_id DESC";
        $result = $db->pdo_query($select);
        return $result;
    }

    public function search($search)
    {
        $db = new connect();
        $query = " SELECT * FROM products WHERE name LIKE '%$search%'";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getCount()
    {
        $db = new connect();
        $select = "SELECT count(*) AS img FROM products";
        $result = $db->pdo_query($select);
        return $result;
    }

  
}
