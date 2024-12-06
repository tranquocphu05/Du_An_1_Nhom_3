<?php
function get_list_services(){
    $result = db_fetch_array("SELECT s.id, s.name, s.description,s.price,s.image, s.created_id, s.created_at, u.full_name, u.id as `uid` FROM `service` s INNER JOIN `users` u ON s.created_id = u.id");
    return $result;
}
function get_one_services($id){
    $result=db_fetch_row("SELECT  s.*, u.full_name, u.id as `uid` FROM `service` s INNER JOIN `users` u ON s.created_id = u.id WHERE s.id = $id");
    return $result;
}
function create_services($name, $price,$description,$target_file){
    $user = get_auth();
    $id = db_insert('service',[
        'name' => $name,
        'price' => $price,
        'description' => $description,
        'image' => $target_file,
        'created_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}
function update_services($data,$id){
    db_update('service',$data,"id=$id");
}
function delete_service($id){
    db_delete('service',"id=$id");
    return true;
}

?>