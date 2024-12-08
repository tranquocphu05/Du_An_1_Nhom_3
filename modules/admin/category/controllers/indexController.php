<?php

function construct() {
  // request_auth(false);
    load_model('index');
}

function indexAction() {
    request_auth(true);
    $data['categories'] = get_list_categories();
    load_view('index', $data);
}



function createAction() {
  request_auth(true);
   load_view('create');
}

function createPostAction() {
   request_auth(true);

   $name = $_POST['name'];
   $description = $_POST['description'];
   if (empty($name)) {
       push_notification('danger', ['Vui lòng nhập vào tên loại phòng']);
       header('Location: /du_an_1_Nhom3/?role=admin&mod=category&action=create');
       die();
   }if (empty($description)) {
       push_notification('danger', ['Vui lòng nhập vào mô tả']);
       header('Location: /du_an_1_Nhom3/?role=admin&mod=category&action=create');
       die();
   }

   
   create_category($name, $description);
   push_notification('success', ['Tạo mới loại phòng thành công']);
   header('Location: /du_an_1_Nhom3/?role=admin&mod=category');
}
