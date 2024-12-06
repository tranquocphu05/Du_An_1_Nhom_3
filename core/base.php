<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

session_start();

// get Controller name
function get_controller() {
    global $config;
    $controller = isset($_GET['controller']) ? $_GET['controller'] : $config['default_controller'];
    return $controller;
}
function load($type, $name) {
    if ($type == 'lib')
        $path = LIBPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if ($type == 'helper')
        $path = HELPERPATH . DIRECTORY_SEPARATOR . "{$name}.php";
    if (file_exists($path)) {
        require "$path";
    } else {
        echo "{$type}:{$name} không tồn tại";
    }
}

function get_action() {
    global $config;
    $action = isset($_GET['action']) ? $_GET['action'] : $config['default_action'];
    return $action;
}

function get_role() {
    global $config;
    $role = isset($_GET['role']) ? $_GET['role'] : $config['default_role'];
    return $role;
}

function get_module() {
    global $config;
    $module = isset($_GET['mod']) ? $_GET['mod'] : $config['default_module'];
    return $module;
}
function load_model($name) {
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $name . 'Model.php';
    if (file_exists($path)) {
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}
function load_view($name, $data_send = array()) {
    global $data;
    $data = $data_send;
    $path = MODULESPATH . DIRECTORY_SEPARATOR . get_role() . DIRECTORY_SEPARATOR .  get_module() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $name . 'View.php';
    if (file_exists($path)) {
        if (is_array($data)) {
            foreach ($data as $key_data => $v_data) {
                $$key_data = $v_data;
            }
        }
        require $path;
    } else {
        echo "Không tìm thấy {$path}";
    }
}

function call_function($list_function = array()) {
    if (is_array($list_function)) {
        foreach ($list_function as $f) {
            if (function_exists($f)) { // Sửa ở đây
                $f();
            }
        }
    }
}
?>