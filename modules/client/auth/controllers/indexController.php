<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $notifications = get_notification();
    load_view('index', ["notifications" => $notifications]);
}

function indexPostAction()
{
    // Validate login credentials
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth');
        exit();
    }

    $auth = get_auth_user($email, $password);
    if ($auth) {
        push_auth($auth);
        header('Location: /du_an_1_Nhom3/?role=client');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth');
    }
}

function infomationAction()
{
    if (is_auth()) {
        load_view('infomation');
    } else {
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth');
    }
}

function logoutAction()
{
    if (is_auth()) {
        remove_auth();
        header('Location: /du_an_1_Nhom3/?role=client');
    }
}

function sign_upAction()
{
    $notifications = get_notification();
    load_view('sign_up', ["notifications" => $notifications]);
}

function saveSignUpPostAction()
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nhaplaipassword = $_POST['nhaplaipassword'];
    $numberphone = $_POST['numberphone'];
    $gender = $_POST['gender'];

    // Validate user inputs
    if (empty($full_name)) {
        push_notification('danger', ['Vui lòng nhập họ và tên']);
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth&action=sign_up');
        exit();
    }
    if (empty($password) || $password !== $nhaplaipassword) {
        push_notification('danger', ['Mật khẩu không trùng khớp hoặc thiếu']);
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth&action=sign_up');
        exit();
    }
    if (empty($numberphone)) {
        push_notification('danger', ['Vui lòng nhập số điện thoại']);
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth&action=sign_up');
        exit();
    }
    if (empty($gender)) {
        push_notification('danger', ['Vui lòng nhập giới tính']);
        header('Location: /du_an_1_Nhom3/?role=client&mod=auth&action=sign_up');
        exit();
    }

    $data = [
        "full_name" => $full_name, 
        "email" => $email, 
        "password" => $password,
        "numberphone" => $numberphone, 
        "gender" => $gender
    ];
    insert_user($data);
    push_notification('success', ['Đăng ký tài khoản thành công']);
    header('Location: /du_an_1_Nhom3/?role=client&mod=auth&action=sign_up');
}

function editAction()
{
    request_auth(true);
    $id = $_GET['id'];
    $item = get_user_by_id($id);
    load_view('edit', ["list_users" => $item]);
}

function saveEditPostAction()
{
    request_auth(true);
    $id = $_GET['id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $numberphone = $_POST['numberphone'];
    $cmnd = $_POST['cmnd'];

    $data = ["full_name" => $full_name, "email" => $email, "numberphone" => $numberphone, "cmnd" => $cmnd];
    update_user($data, $id);
    push_notification('success', ['Cập nhật tài khoản thành công']);
    header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=infomation");
}
function changePasswordAction()
{
    if (is_auth()) {
        $notifications = get_notification();
        load_view('changePassword', ["notifications" => $notifications]);
    } else {
        header("location:/du_an_1_Nhom3/?role=client&mod=auth");
    }
}
function saveChangePasswordPostAction()
{
    if (is_auth()) {
        global $conn;
        $email = $_POST['email'];
        $password_old = $_POST['password_old'];
        $password_new = $_POST['password_new'];
        if (empty($password_old) || empty($password_new)) {
            push_notification('danger', ['Mật khẩu cũ hoặc mới không được để trống']);
            header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=changePassword");
            exit();
        }
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password_old' LIMIT 1";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) {
            $sql_update = mysqli_query($conn, "UPDATE users SET password='$password_new' WHERE email='$email'");
            push_notification('success', ['Đổi mật khẩu thành công']);
            header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=changePassword");
        } else {
            push_notification('danger', ['Mật khẩu hiện tại không đúng']);
            header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=changePassword");
        }
    } else {
        header("location:/du_an_1_Nhom3/?role=client&mod=auth");
    }
}

function forgotPasswordAction()
{
    $notifications = get_notification();
    load_view('forgotPassword', ["notifications" => $notifications]);
}

function saveForgotPasswordPostAction()
{
    require_once "mail/index.php";

    $addressMail = $_POST['email'];
    $addressMail = filter_var($addressMail, FILTER_SANITIZE_EMAIL);
    $addressMail = filter_var($addressMail, FILTER_VALIDATE_EMAIL);

    global $conn;

    if (empty($addressMail)) {
        push_notification('danger', ['Vui lòng nhập email!']);
        header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword");
        exit();
    }

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$addressMail'");
    if (mysqli_num_rows($sql) > 0) {
        $new_password = substr(rand(0, 999999), 0, 6);
        $sql_update = mysqli_query($conn, "UPDATE users SET password='$new_password' WHERE email='$addressMail'");

        if ($sql_update) {
            // Send email with new password
            $title = "Mật khẩu mới Poly's Hotel";
            $content = "Mật khẩu mới của bạn là: <p style='color:red;'>$new_password</p>";
            GuiMail($title, $content, $addressMail);
            push_notification('success', ['Mật khẩu đã được gửi về mail của bạn']);
            header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword");
        } else {
            push_notification('danger', ['Có lỗi xảy ra, vui lòng thử lại']);
            header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword");
        }
    } else {
        push_notification('danger', ['Email không tồn tại trong hệ thống']);
        header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword");
    }
}
