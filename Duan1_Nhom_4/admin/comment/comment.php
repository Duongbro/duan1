<?php
class comment
{
    
    var $id_comment = null;
    var $id_product = null;
    var $id_user = null;
    var $fullname = null;
    var $date= null;
    var $content = null;
  

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM comment";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById( $id_comment)
    {
        $db = new connect();
        $query = "SELECT*FROM comment WHERE id=" . $id_comment;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($id_product,$id_user, $fullname, $date, $content){
        $db = new connect();
        $query = "INSERT INTO `comment`(`id_product`,`id_user`,`fullname`,`date`,`conten`) VALUES ('$id_product','$id_user','$fullname','$date','$content')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($id_product ,$id_user,$fullname, $date, $email, $content)
    {
        $db = new connect();
        $query = "UPDATE `comment` SET `id_product`='$id_product', `id_user` = '$id_user',`date`='$date', `email`='$email', `content`='$content' WHERE id =  $id_comment";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete( $id_comment)
    {
        $db = new connect();
        $query = "DELETE  FROM comment WHERE id=' $id_comment'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
