<?php
// lấy tất cả thông tin của tất cả các phòng trong dâttabase
function get_list_productions() {
    // $result = db_fetch_array("SELECT p.id,p.name,p.image,p.count,p.price,p.description,p.created_at, p.created_id ,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id ");
    $result=db_fetch_array("select *  from productions  where 1 order by id ");
    return $result;
}
// lấy bốn sản phẩm tiêu biểu trong database
function lodall_sanpham(){
    // $sql="select * from productions where 1 order by views desc limit 0,10";
    $result=db_fetch_array("select * from productions where 1 order by id desc limit 0,4");
    // $result=$production;
    return   $result;
}
// lấy thông tin của 10 phòng có lượt thích từ cao xg thấp
function lodall_sanpham_top10(){
    // $sql="select * from productions where 1 order by views desc limit 0,10";
    $result=db_fetch_array("select * from productions where 1 order by views desc limit 0,10");
    // $result=$production;
    return   $result;
}
function get_list_services() {
    $result = db_fetch_array("SELECT s.id, s.name, s.description,s.price,s.image,
     s.created_id, s.created_at, u.full_name, u.id as `uid` FROM `service` 
     s INNER JOIN `users` u ON s.created_id = u.id");
    return $result;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}

