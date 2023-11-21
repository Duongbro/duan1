<?php
    class users{
        var $user_id  = null;
        var $name = null;
        var $password = null;
        var $fullname = null;
        var $email = null;
        var $phone = null;
        var $address = null;
        var $role = null;
        var $avatar = null;

        function getUsers()
        {
            $db = new connect();
            $select = "SELECT * FROM users";
            return $db->pdo_query($select);
        }
        public function addUsers($name, $email, $password, $avatar, $address)
    {
        $db = new connect();
        $query = "INSERT INTO users (name, email, password, avatar, address) VALUES ('$name', '$email','$password', '$avatar', '$address')";
        $result = $db->pdo_execute($query);
        return $result;
    }
        public function delete($user_id )
    {
        $db = new connect();
        $query = "DELETE FROM users WHERE user_id  = ". $user_id ;
        $result = $db->pdo_query_one($query);
        return $result;

        
    }
        public function checkUsers($username,$password) 
        { 
            $db = new connect();               
            $select="SELECT * FROM users WHERE name='$username' AND password='$password'"; 
            $result = $db->pdo_query_one($select);
            if($result!=null) 
                return true; 
            else 
                return false;
        }

        public function usersid($username,$password) 
        { 
            $db = new connect();               
            $select="SELECT user_id  FROM users WHERE name='$username' AND password='$password'"; 
            $result = $db->pdo_query_one($select);
            return $result;
        }
        public function getCount1()
        {
            $db = new connect();
            $select = "SELECT count(*) AS soluong FROM users";
            $result = $db->pdo_query($select);
            return $result;
        }

        public function doimatkhau($password, $user_id ){
            $db = new connect();
            $query = "UPDATE users SET password= ? WHERE user_id  = ?";
            $result = $db->pdo_execute($query,$password,$user_id );
            return $result;
        }

        public function getByID($user_id )
    {
        $db = new connect();
        $query = "SELECT * FROM users WHERE user_id  = ". $user_id ;
        $result = $db->pdo_query_one($query);
        return $result;
    }

    public function updateUser($user_id , $name, $email, $password, $avatar, $address)
    {
        $db = new connect();
        $query = "UPDATE users SET `name`='$name', `email`='$email', `password`='$password', `avatar`='$avatar', `address`='$address' WHERE user_id  = ".$user_id ;
        $result = $db->pdo_query($query);
        return $result;
    }
}
?>