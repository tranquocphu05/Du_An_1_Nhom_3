<?php

function construct() {
    // request_auth(true);
    load_model('index');
}
function indexAction() {
    //request_auth(true);
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}
function indexPostAction() {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: /du_an_1_Nhom3/?role=adminmod=auth');
    }

    $auth = get_auth_user($username, $password);
    if ($auth && $auth['role']) {
        push_auth($auth);
        header('Location:/du_an_1_Nhom3/role=admin');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location:/du_an_1_Nhom3/?role=admin&mod=auth');
    }
}
function logoutAction(){
    remove_auth();
    header('Location: /du_an_1_Nhom3/?role=admin&mod=auth');
}