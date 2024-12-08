

<?php  


function get_one_production($id) {
    $result = db_fetch_row("SELECT p.*,u.full_name as `full_name` FROM `productions` p JOIN `users` u ON p.created_id = u.id WHERE p.id = $id");
    return $result;
}
function get_list_bill() {
    $result = db_fetch_array("SELECT * FROM `bill`");
    return $result;
}
function get_list_bill_detail() {
    $result = db_fetch_array("SELECT * FROM `bill_details`");
    return $result;
}
function get_one_bill($created_id){
    $result=db_fetch_row("SELECT * FROM `bill` where created_id=$created_id");
    return $result;

}
function get_bill_detail_by_id($created_id){
    $result=db_fetch_array("SELECT b.created_id, bd.*, p.name as `name`, p.price as `price` FROM `bill` b INNER JOIN `bill_details` bd  on b.id =bd.bill_id INNER JOIN productions p on p.id=bd.product_id  where b.created_id=$created_id");
    return $result;

}
function get_list_bill_product(){
    $result = db_fetch_array("SELECT bd.*, p.name as `name` FROM `bill_details` bd INNER JOIN  `productions` p ON bd.product_id = p.id");
    return $result;
}
function insert_bill($data){
    db_insert("bill", $data);
}
function insert_bill_detail($data){
    db_insert("bill_details", $data);
}





?>