<?php
function get_list_categories() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.created_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.created_id = u.id");
    return $result;
}

function get_one_category($id) {
    $result = db_fetch_row("SELECT c.id, c.name, c.description, c.created_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.created_id = u.id WHERE c.id = $id");
    return $result;
}

function delete_category($id) {
    db_delete('categories', "id = $id");
    return true;
}


function create_category($name, $description) {
    $user = get_auth();
    $id = db_insert('categories', [
        'name' => $name,
        'description' => $description,
        'created_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}