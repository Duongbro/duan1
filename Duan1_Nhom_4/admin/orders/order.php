<?php
class oders
{
    
    var $oders_id = null;
    var $fullname = null;
    var $ema = null;
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
        $query = "SELECT*FROM oders WHERE id=" .$oders_id;
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
    public function update($oders_id,$fullname,$email,$phone, $address, $note, $oder_data, $status,$total_money)
    {
        $db = new connect();
        $query = "UPDATE `oders` SET `fullname`='$fullname', `email` = '$email', `phone`='$phone', `address`='$address', `note`='$note', ` oder_data`=' $oder_data',`$status` = 'status', `total_money`= '$total_money' WHERE id = $oders_id";
        $result = $db->pdo_execute($query);
        return $result;
    }
    
    public function delete($id_oders)
    {
        $db = new connect();
        $query = "DELETE  FROM oders WHERE id='$oders_id'";
        $result = $db->pdo_execute($query);
        return $result;
    }

}    
?>    

    
    
    
    
    

    

    
