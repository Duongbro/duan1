<?php
class user
{
    
    var $id_user = null;
    var $name = null;
    var $password = null;
    var $fullname = null;
    var $email= null;
    var $phone = null;
    var $address = null;
    var $role = null;
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM user";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($id)
    {
        $db = new connect();
        $query = "SELECT*FROM user WHERE id=" .$id;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($name,$password,$fullname,$email, $phone, $address, $role){
        $db = new connect();
        $query = "INSERT INTO `user`(`username`,`password`,`role_id`,`email`,`sdt`) VALUES ('$name','$password','$email','$phone','$address','$role')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($id_user ,$name,$fullname, $password, $email, $phone,$address,$role)
    {
        $db = new connect();
        $query = "UPDATE `user` SET `name`='$name', `fullname` = '$fullname',`password`='$password', `phone`='$phone', `email`='$email', `role`='$role' WHERE id = $id_user";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($id)
    {
        $db = new connect();
        $query = "DELETE  FROM user WHERE id='$id'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
