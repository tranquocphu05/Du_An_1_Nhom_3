<?php

function construct() {
    load_model('index');
}


function indexAction() {
    // đẩy phòng lên giao diện trang chủ
    $data['productions'] = get_list_productions();
<<<<<<< HEAD
=======
 
>>>>>>> origin/main
    // đẩy phẩn dịch vụ lên trang chủ
    $data['services'] = get_list_services();
    $data['categories'] = get_list_categories();
// chuyển sang trang chủ với dữ liệu trên
    load_view('index', $data);
}

