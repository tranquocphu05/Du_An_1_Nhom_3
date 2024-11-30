<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    request_auth(true);
    load('helper','format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function createAction() {
    request_auth(true);
    load_view('create');
    
}
function saveCreatePostAction(){
    request_auth(true);
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $numberphone=$_POST['numberphone'];
    $address=$_POST['address'];
    $role=$_POST['role'];
    $data=["full_name"=>$full_name, "email"=>$email, "password"=>$password, "role"=>$role, "numberphone"=>$numberphone, "address"=>$address];
    if (empty($full_name)) {
        push_notification('danger', ['Vui lòng nhập vào họ và tên']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=account&action=create');
        die();
    }
    if (empty($email)) {
        push_notification('danger', ['Vui lòng nhập vào email']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=account&action=create');
        die();
    }
    if (empty($password)) {
        push_notification('danger', ['Vui lòng nhập vào mật khẩu']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=account&action=create');
        die();
    }
    if (empty($numberphone)) {
        push_notification('danger', ['Vui lòng nhập vào số điện thoại']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=account&action=create');
        die();
    }
    if (empty($address)) {
        push_notification('danger', ['Vui lòng nhập vào địa chỉ']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=account&action=create');
        die();
    }
    if (empty($role)) {
        push_notification('danger', ['Vui lòng nhập vào vai trò']);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=account&action=create');
        die();
    }
    add_user($data);
    push_notification('success', ['Tạo mới tài khoản thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=account');
}


function deleteAction() {
    request_auth(true);
    $id=$_GET['id'];
    delete_user($id);
    push_notification('success', ['Xoá tài khoản thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=account');

}
