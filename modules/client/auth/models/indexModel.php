<?php

function get_auth_user($email, $password) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    return $result;
}
function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $item;
}
function get_user_by_email($email){
    $item = db_fetch_row("SELECT * FROM `users` WHERE `email` = {$email}");
    return $item;

}
function insert_user($data){
    db_insert("users", $data);
}
function update_user($data,$id){
    db_update("users", $data, "id=$id" );
}
