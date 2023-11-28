<?php

$db = '';

class comment
{
    var $comment_id = null;
    var $product_id = null;
    var $user_id = null;
    var $date = null;
    var $content = null;



    public function getList()
    {
        $db = new connect();
        $query = 'SELECT * FROM commnet';
        $result = $db->pdo_query($query);
        return $result;
    }

    public function binhluan_select_by_id_product($id_product)
    {
        $db = new connect();
        $query = 'SELECT cmt.*pd.nameProduct FROM comment cmt JOIN pd id_product ON cmt.id_product = pd.id_product WHERE cmt.id_product =' . $id_product;
        $result = $db->pdo_query_one($query, $id_product);
        return $result;
    }
    public function add_comment($id_product, $content_cmt)
    {
        $db = new connect();
        $query = "INSERT INTO comment (id_product, content_cmt) VALUES ('$id_product', '$content_cmt')";
        $result = $db->pdo_execute($query);
        return $result;
    }
    public function getComMentDescLimit () {
        $db = new connect () ;
        $sql = "SELECT * FROM comment ORDER BY comment.id_comment DESC LIMIT 1" ;
        $result = $db -> pdo_query ($sql) ;
        return $result ; 
    }

    public function add_detail ($id_user , $id_comment) {
        $db = new connect () ;
        $sql = "INSERT INTO detail_cmt (id_user , id_comment) VALUES ('$id_user' , '$id_comment')";
        $result = $db -> pdo_execute ($sql);
        return $result; 
    }

    public function getComment ($id_product) {
        $db = new connect ();
        $sql = "SELECT comment.content_cmt AS content , detail_cmt.id_user AS IdUser, comment.date_cmt AS datecmt,  user.nameUser as ten, user.imgUser as avatar ,comment.id_comment
        FROM comment , detail_cmt, user 
        WHERE comment.id_product = '$id_product'
        AND detail_cmt.id_comment = comment.id_comment
        AND detail_cmt.id_user = user.id_user";
        $result = $db -> pdo_query ($sql);
        return $result;
    }

    public function getProduct ($id_product) {
        $db = new connect ();
        $sql = "SELECT COUNT(*) AS count 
        FROM comment, detail_cmt 
        WHERE comment.id_comment = detail_cmt.id_cmt_detail 
        AND comment.id_product = '$id_product'";
        $result = $db -> pdo_query ($sql);
        return $result;
    }

    public function getComment_Admin () {
        $db = new connect ();
        $sql = "SELECT products.name AS name, COUNT(*) AS count, MIN(date) AS old, MAX(date) AS new, products.product_id
        FROM comments, products
        WHERE comments.product_id = products.product_id
        GROUP BY products.product_id";
        $result = $db -> pdo_query ($sql);
        return $result;
    }

    public function getComment_Detail_Admin ($product_id) {
        $db = new connect ();
        $sql = "SELECT comments.content AS content, comments.date AS date, users.name AS user_cmt, products.product_id, comments.comment_id
        FROM  comments, users, products
        WHERE comments.product_id = products.product_id
        AND   comments.user_id = users.user_id
        AND   comments.product_id =  '$product_id'";
        $result = $db -> pdo_query ($sql);
        return $result;
    }

    public function delete_comment ($comment_id) {
        $db = new connect ();
        $sql = "DELETE FROM comments WHERE comment_id = ?";
        $result = $db -> pdo_execute($sql, $comment_id);
        return $result;
    }
    
    public function getCount()
    {
        $db = new connect();
        $select = "SELECT count(*) AS soluong FROM comment";
        $result = $db->pdo_query($select);
        return $result;
    }
    
}