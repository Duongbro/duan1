<?php
class oders
{
    
    var $id_oders = null;
    var $fullname = null;
    var $email = null;
    var $phone = null;
    var $address= null;
    var $note = null;
    var $oder_data = null;
    var $status = null;
    var $total_money = null;
    

    public function getlist()
    {
        $db = new connect();
        $query = "SELECT*FROM oders";
        $result = $db->pdo_query($query);
        return $result;
    }

    public function getById($id_oders)
    {
        $db = new connect();
        $query = "SELECT*FROM oders WHERE id=" .$id_oders;
        $result = $db->pdo_query_one($query);
        return $result;
    }
    // viết một hàm insert dữ liệu, thêm mới dữ liệu
    public function add($fullname,$email,$phone, $address, $note,$oder_data, $status,$total_money){
        $db = new connect();
        $query = "INSERT INTO `oders`(`fullname`,`email`,`phone`,`address`,`note`,`oder_data`,`status`,`total_money`) VALUES ('$fullname','$email','$phone','$address','$note','$oder_data',' $status','$total_money')";
        $result = $db->pdo_execute($query);
        return $result;
    }

    // hàm cập nhật dữ liệu
    public function update($id_oders,$fullname,$email,$phone, $address, $note, $oder_data, $status,$total_money)
    {
        $db = new connect();
        $query = "UPDATE `oders` SET `fullname`='$fullname', `email` = '$email', `phone`='$phone', `address`='$address', `note`='$note', ` oder_data`=' $oder_data',`$status` = 'status', `total_money`= '$total_money' WHERE id = $id_oders";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($id_oders)
    {
        $db = new connect();
        $query = "DELETE  FROM oders WHERE id='$id_oders'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
