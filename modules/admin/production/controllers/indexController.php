<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    request_auth(true);
    $data['productions'] = get_list_productions();
    load_view('index', $data);
}

function createAction()
{
    request_auth(true);
    $data['categories'] = get_list_categories();
    load_view('create', $data);
    

}

function saveCreatePostAction()
{
    request_auth(true);
    $categories = $_POST['category_id'];
    $name = $_POST['name'];
    // $count = $_POST['count'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $target_dir = "./upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên phòng']);
        header('Location:/du_an_1_Nhom3/?role=admin&mod=production&action=create');
        die();
    } if (empty($description)) {
        push_notification('danger', ['Vui lòng nhập vào chi tiết phòng']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=production&action=create');
        die();
    }
     if (empty($price)) {
        push_notification('danger', ['Vui lòng nhập vào giá phòng']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=production&action=create');
        die();
    }
    create_production($name, $description, $target_file, $price, $categories, $status);
    push_notification('success', ['Tạo mới sản phẩm thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=production');
}

function deleteAction()
{
    request_auth(true);
    $id = $_GET['id_prod'];
    delete_production($id);
    push_notification('success', ['Xoá phòng thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=production');
}

function updateAction()
{
    request_auth(true);
    $id = $_GET['id'];
    $production = get_one_production($id);
    $data['production'] = $production;
    $categories = get_list_categories();
    $data['categories'] = $categories;
    // $data1['category'] = $categories;

    if ($production) {
        load_view('update', $data);
    } else {
        header('Location: /du_an_1_Nhom3/?role=admin&mod=production');
    }
}

function updatePostAction()
{
    request_auth(true);
    $id = $_POST['id'];
    $categories = $_POST['category_id'];
    $name = $_POST['name'];
    $count = $_POST['count'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target_dir = "./upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    if ($_FILES["image"]["size"] != 0) {
        $data = ["id" => $id, "description" => $description, "name" => $name, "count" => $count, "status" => $status, "price" => $price, "image" => $target_file, "category_id" => $categories];

    } else {
        $data = ["id" => $id, "description" => $description, "name" => $name, "count" => $count, "price" => $price, "category_id" => $categories, "status" => $status];
    }
    update_production($data, $id);
    push_notification('success', ['Chỉnh sửa phòng thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=production');
}
