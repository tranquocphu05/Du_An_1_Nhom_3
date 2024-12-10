<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT p.id,p.name,p.image,p.count,p.price,p.status,p.description,p.created_at, p.created_id ,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id ");
    
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT p.*,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id WHERE p.id = $id");
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
