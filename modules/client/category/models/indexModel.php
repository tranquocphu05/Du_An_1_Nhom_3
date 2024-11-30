<?php
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

// function get_one_production_cl($id,$category_id) {
//     // $result = db_fetch_array("SELECT p.*,u.full_name as `full_name` FROM `productions` p JOIN `categories` u ON p.category_id = u.id WHERE u.category_id= $category_id AND p.id <> $id");
    
//     $result=db_fetch_array("select * from  productions where category_id=".$category_id." AND id<>" .$id);
//     return $result;
// }
function get_list_pro_by_catid($cat){
    $result=  db_fetch_array("select * from  productions where category_id=$cat");
    return $result;
}
function get_list_productions() {
    $result = db_fetch_array("SELECT p.id,p.name,p.image,p.count,p.price,p.description,p.created_at, p.created_id ,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id ");
    
    return $result;
}