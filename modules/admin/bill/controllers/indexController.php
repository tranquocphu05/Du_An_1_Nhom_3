<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    request_auth(true);
    load('helper', 'format');
    $data['bill_details'] = get_list_bill_detail();
    load_view('index', $data);
}
// function deleteAction(){
//     request_auth(true);
//     require_once "mail/index.php";
//     $id=$_GET['id'];

//     $data['bill_detail'] = get_list_bill_detail();

//     delete_bill_detail($id);

//     foreach($data['bill_detail']  as $bd){
//         $full_name=$bd['full_name'];
//         $name=$bd['name'];
//         $addressMail=$bd['email'];
//     }
//     // var_dump( $full_name, $addressMail);
//     // die();
//     $title="Thông báo huỷ lịch đặt phòng tại Poly's Hotel";
//     $content="<p>Xin chào,<b>$full_name</b></p>
//                 <p>Mình là nhân viên bên phía khách sạn Poly's Hotel. Mình gửi mail này để thông báo rằng rất tiếc khi phòng
//                   <b>$name</b> của <b>$full_name</b> đã bị huỷ. Lý do huỷ vì phòng <b>$name</b> gặp một vài sự cố cần chỉnh sửa.  </p>
//                 <p>Mình thay mặt cho Poly's Hotel rất xin lỗi bạn vì sự bất tiện này!!!</p>
//                 <p>Trân trọng </p>
//     ";
//     GuiMail($title, $content, $addressMail);
//     push_notification('success', ['Xoá hóa đơn thành công']);
//     header('location:/du_an_1_Nhom3/?role=admin&mod=bill&action=index');

//     load_view('delete',$data); 


// }


function updateAction() {
    request_auth(true);

    $bill_id = $_GET['id'] ?? null;
    if (!$bill_id) {
        push_notification('error', 'Bill ID is missing');
        header('Location: /du_an_1_Nhom3/?role=admin&mod=bill');
        die;
    }

    $bill_detail = get_one_bill_detail($bill_id);
    if (!$bill_detail) {
        push_notification('error', 'Bill not found');
        header('Location: /du_an_1_Nhom3/?role=admin&mod=bill');
        die;
    }

    load_view('update', ['bill_detail' => $bill_detail]);
}

function updatePostAction() {
    request_auth(true);

    $bill_id = $_GET['id'] ?? null;
    if (!$bill_id) {
        push_notification('error', 'Bill ID is missing');
        header('Location: /du_an_1_Nhom3/?role=admin&mod=bill');
        die;
    }

    $bill_detail = get_one_bill_detail($bill_id);
    if (!$bill_detail) {
        push_notification('error', 'Bill not found');
        header('Location: /du_an_1_Nhom3/?role=admin&mod=bill');
        die;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            "id" => $_POST['id'] ?? $bill_id,
            "email" => $_POST['email'] ?? null,
            "address" => $_POST['address'] ?? null,
            "numberphone" => $_POST['numberphone'] ?? null,
            "confirm_room" => isset($_POST['confirm_room']) ? 1 : 0,
            "cancel_room" => isset($_POST['cancel_room']) ? 1 : 0,
            "checkin" => isset($_POST['checkin']) ? 1 : 0,
            "full_name" => $_POST['full_name'] ?? null,
            "product_id" => $_POST['product_id'] ?? null,
            "check_in_date" => $_POST['check_in_date'] ?? null,
            "check_out_date" => $_POST['check_out_date'] ?? null,
            "total_money" => $_POST['total_money'] ?? null
        ];

        update_production($data, $bill_id);
        echo "<script>alert('Cập nhật bill thành công');</script>";
        echo "<script>window.location.href = '/du_an_1_Nhom3/?role=admin&mod=bill';</script>";
    }
}

