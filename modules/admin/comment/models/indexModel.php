<?php
function get_list_comments($id){
    $result = db_fetch_array("SELECT c.*,u.full_name as `full_name` FROM `comments` c INNER JOIN `users` u ON c.created_id=u.id=${id} order by c.id desc");
    return $result;
}
function manage_comments() {
    $result = db_fetch_array("SELECT COUNT(c.description) as sum, p.id, p.name  FROM `comments` c INNER JOIN `productions` p ON c.product_id = p.id GROUP BY c.product_id");
    return $result;
}
function delete_comment($id){
    db_delete("comments", "id=$id");
}
?>