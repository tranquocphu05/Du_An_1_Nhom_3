<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT p.id,p.name,p.image,p.count,p.price,p.description,p.created_at, p.created_id ,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id ");
    return $result;
}
function get_one_production($id) {
    $result = db_fetch_row("SELECT p.*,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id WHERE p.id = $id");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}
function get_one_category($id) {
    $result = db_fetch_row("SELECT c.id, c.name, c.description, c.created_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.created_id = u.id WHERE c.id = $id");
    return $result;
}   
function get_list_pro_by_catid($keyword){
    $result=  db_fetch_array("select * from  productions where name like '%".$keyword."%' ");
    return $result;
}
