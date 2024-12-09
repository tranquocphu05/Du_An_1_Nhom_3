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

