<?php
// lấy thông tin phòng bằng id từ database
function get_one_production($id) {
    $result = db_fetch_row("SELECT p.*,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id WHERE p.id = $id");
    return $result;
}

function get_list_pro_by_catid($cat)
{
    $result=  db_fetch_array("select * from  productions where category_id=$cat");
    return $result;

}
function get_list_view($data,$id){
    db_update("productions",$data , "id=$id" );
}



function get_list_comments($id) {
    $result = db_fetch_array("SELECT c.*,u.full_name as `full_name`  FROM `comments` c  JOIN `users` u ON c.created_id = u.id where c.product_id=${id} order by c.id desc");
    return $result;
}
function manage_comments() {
    $result = db_fetch_array("SELECT COUNT(c.description) as sum, p.id, p.name  FROM `comments` c INNER JOIN `productions` p ON c.product_id = p.id GROUP BY c.product_id");
    return $result;
}
function add_comments($data){
    db_insert("comments",$data);
}