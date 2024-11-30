<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `user_id` = {$id}");
    return $item;
}
function add_user($data){
    db_insert("users", $data);
}
function delete_user($id){
      db_delete("users","id = $id");
}