<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT p.id,p.name,p.image,p.count,p.price,p.status,p.description,p.created_at, p.created_id ,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id ");
    
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT p.*,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id WHERE p.id = $id");
    //$result = db_fetch_row("SELECT c.id, c.name, c.description, c.created_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.created_id = u.id WHERE c.id = $id");

    return $result;
}

function create_production($name, $description,$target_file,$price,$categories,$status) {
    $user = get_auth();
    $id = db_insert('productions', [
        'name' => $name,
        'description' => $description,
        'status' => $status,
        'created_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s'),
        'image' => $target_file,
        
        'price' => $price,
        'category_id' => $categories
    ]);
    return $id;
}
// function create_production($data){
//     $user= get_auth();
//     db_insert('productions',$data);
    
// }

// function update_production($id, $name, $description,$target_file,$count,$price,$categories) {
//     db_update('productions', [
//         'name' => $name,
//         'description' => $description,
//         'image' => $target_file,
//         'count' => $count,
//         'price' => $price,
//         'category_id' => $categories,
//     ], "id = $id");
//     return true;
// }
function update_production($data,$id){
    db_update('productions', $data, "id=$id");
}
function delete_production($id) {
    db_delete('productions', "id = $id");
    return true;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}
// function get_one_category($id) {
//     $result = db_fetch_row("SELECT c.id, c.name, c.description, c.created_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.created_id = u.id WHERE c.id = $id");
//     return $result;
// }