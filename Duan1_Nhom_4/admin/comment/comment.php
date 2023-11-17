<?php
class comments
{
    
    var $comments_id = null;
    var $product_id = null;
    var $user_id = null;
    var $date= null;
    var $content = null;
    
  

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM comments";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($comments_id)
    {
        $db = new connect();
        $query = "SELECT*FROM comments WHERE id=" . $comments_id;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($product_id,$user_id, $date, $content){
        $db = new connect();
        $query = "INSERT INTO `commenst`(`product_id`,`user_id`,`date`,`conten`) VALUES ('$product_id','$user_id','$date','$content')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($product_id ,$user_id, $date, $content)
    {
        $db = new connect();
        $query = "UPDATE `comments` SET `product_id`='$product_id', `user_id` = '$user_id',`date`='$date',  `content`='$content' WHERE id =  $comments_id";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($comments_id)
    {
        $db = new connect();
        $query = "DELETE  FROM comments WHERE id=' $comments_id'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
