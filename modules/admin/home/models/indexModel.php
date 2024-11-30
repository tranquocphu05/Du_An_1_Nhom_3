<?php 

function get_list_categories() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.created_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.created_id = u.id");
    return $result;
}

?>
