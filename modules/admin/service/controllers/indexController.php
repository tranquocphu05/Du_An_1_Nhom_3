<?php
function construct(){
    load_model('index');
}

function indexAction(){
    request_auth(true);
    $data['services'] = get_list_services();
    load_view('index',$data);
}
function createAction(){
    request_auth(true);
    load_view("create");
}
function saveCreatePostAction() {
    request_auth(true);   
    $name=$_POST['name'];
    $price=$_POST['price'];   
    $description=$_POST['description'];   
    $image=$_FILES['image']['name'];
    $target_dir = "./upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên dịch vụ']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=service&action=create');
        die();
        
    }if (empty($price)) {
        push_notification('danger', ['Vui lòng nhập vào giá dịch vụ']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=service&action=create');
        die();
    }
    if (empty($description)) {
        push_notification('danger', ['Vui lòng nhập vào mô tả']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=service&action=create');
        die();
       
    }
    create_services($name, $price, $description,$target_file);
    push_notification('success', ['Tạo mới dịch vụ thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=service');
}
function deleteAction(){
    request_auth(true);
    $id=$_GET['id_service'];
    delete_services($id);
    push_notification('success',['Xóa dịch vụ thành công']);
    header('Location:/du_an_1_Nhom3/?role=admin&mod=service');
}
function updatePostAction() {
    request_auth(true);

    $id = $_GET['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image=$_FILES['image']['name'];
    $target_dir = "./upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    if($_FILES["image"]["size"]!=0){
        $data=["id"=>$id, "description"=>$description, "name"=>$name, "price"=>$price, "image"=>$target_file];
       
    }else{
        $data=["id"=>$id, "description"=>$description, "name"=>$name, "price"=>$price];

    }
 update_services($data,$id);
 push_notification('success', ['Chỉnh sửa dịch vụ thành công']);
 header('Location: /du_an_1_Nhom3/?role=admin&mod=service');
}
?>