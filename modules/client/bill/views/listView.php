<?php require "layout/client/header_client.php" ?>

<div class="user">
    <div class="user1">
        <div class="item1">
            <p class="user-name"><?= $_SESSION["auth"]['full_name'] ?></p>
        </div>
        <div class="item2">
            
            <?php if ($_SESSION['auth']['role'] == 2) { ?>
                <a href="/du_an_1_Nhom3/?role=admin" class="btn btn-admin">Đăng nhập trang quản trị</a>
            <?php } ?>
        </div>
        <div class="item3">
            <a href="/du_an_1_Nhom3/?role=client&mod=bill&action=list" class="btn btn-bill">Danh sách đặt lịch</a>
        </div>
        <div class="item2">
            <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword" class="btn btn-forgot">Quên mật khẩu</a>
        </div>
        <div class="item5">
            <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=logout" class="btn btn-logout">Đăng xuất</a>
        </div>
    </div>

    <div class="user2">
        <p class="table-title">DANH SÁCH ĐẶT LỊCH</p>
        <form action="" method="post" class="table-form">
            <div class="table-container">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Tên phòng</th>
                            <th>Ngày nhận phòng</th>
                            <th>Ngày trả phòng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bill_details as $value) {
                            echo '
                                <tr> 
                                    <td>' . $value['id'] . '</td>
                                    <td>' . $value['name'] . '</td>
                                    <td>' . $value['check_in_date'] . '</td>
                                    <td>' . $value['check_out_date'] . '</td>
                                    <td>' . $value['price'] . '</td>
                                    <td>' . $value['status'] . '<h5> Đã Đặt Thành Công</h5></td>
                                </tr>
                            ';
                        } ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

<?php require "layout/client/footer_client.php" ?>

<!-- Custom CSS -->
<style>
    /* General Layout */
    .user {
        display: flex;
        justify-content: space-between;
        padding: 30px;
    }

    .user1 {
        width: 25%;
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .user2 {
        width: 70%;
        background-color: #fff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .user-name {
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }

    /* Styling the buttons */
    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        text-align: center;
        margin-bottom: 10px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .btn:hover {
        opacity: 0.9;
        transform: scale(1.05);
    }

    .btn-admin {
        background-color: #007bff;
        color: #fff;
    }

    .btn-bill {
        background-color: #28a745;
        color: #fff;
    }

    .btn-forgot {
        background-color: #ffc107;
        color: #fff;
    }

    .btn-logout {
        background-color: #dc3545;
        color: #fff;
    }

    /* Table Styling */
    .table-container {
        margin-top: 20px;
        overflow-x: auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th,
    .table td {
        padding: 12px;
        text-align: center;
        font-size: 16px;
    }

    .table th {
        background-color: #f8f9fa;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-title {
        font-size: 24px;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
    }

    /* Responsiveness for smaller screens */
    @media (max-width: 768px) {
        .user {
            flex-direction: column;
        }

        .user1,
        .user2 {
            width: 100%;
            margin-bottom: 20px;
        }

        .table-container {
            overflow-x: scroll;
        }
    }
</style>
