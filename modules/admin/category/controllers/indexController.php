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

function deleteAction() {
    request_auth(true);
    $id = $_GET['id_cate'];
    delete_category($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=category');
}

function updateAction()
{
    request_auth(true);

    $id = $_GET['id_cate'];
    $cate = get_one_category($id);
    $data['category'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: /du_an_1_Nhom3/?role=admin&mod=category');
    }
}

function updatePostAction() {
       request_auth(true);

    $id = $_GET['id_cate'];
    $cate = get_one_category($id);
    if (!$cate) {
        header('Location: /du_an_1_Nhom3/?role=admin&mod=category');
        die();
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: /du_an_1_Nhom3/?role=admin&mod=category&action=update&id_cate='.$id);
    }
    update_category($id, $name, $description);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: /du_an_1_Nhom3/?role=admin&mod=category');
}