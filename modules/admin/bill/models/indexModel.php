
<?php
// Lấy danh sách các chi tiết hóa đơn
function get_list_bill_detail() {
    $result = db_fetch_array("SELECT bd.*, p.name as `name` FROM `bill_details` bd INNER JOIN `productions` p ON bd.product_id = p.id");
    return $result;
}

function get_one_bill_detail($id) {
    $sql = "SELECT bd.*, p.name as `name` 
            FROM `bill_details` bd 
            INNER JOIN `productions` p 
            ON bd.product_id = p.id 
            WHERE bd.id = ?";
    $stmt = mysqli_prepare($GLOBALS['conn'], $sql);
    if ($stmt === false) {
        die('Failed to prepare SQL statement');
    }
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    // var_dump($result);
    // die();
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    // die();
    mysqli_free_result($result);
    return $row;
}

// Xóa thông tin chi tiết hóa đơn
function delet_bill_detail($id) {
    $sql = "DELETE FROM `bill_details` WHERE id = :id";
    $params = [':id' => $id];
    db_delete($sql, $params); 
}


?>
