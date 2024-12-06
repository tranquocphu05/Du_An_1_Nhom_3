
<?php require "layout/client/header_client.php" ?>


<div class="user">
    <style>
        /* Container for User Profile */
.user {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

/* Sidebar for user actions (like logout, change password, etc.) */
.user1 {
    width: 25%;
    padding: 20px;
    border-right: 1px solid #ddd;
}

/* Main content area for user info */
.user2 {
    width: 70%;
    padding: 20px;
}

/* Title for the personal information section */
.user2 p {
    font-size: 25px;
    color: red;
    text-align: center;
    margin-bottom: 20px;
}

/* Form container styling */
.w3-container {
    padding: 0;
}

/* Row for each section */
.row {
    display: flex;
    flex-wrap: wrap;

}

/* Styling for each field */
.col-12 {
    width: 100%;
}

/* Styling individual form fields */
.col-12.col-md-6 {
    width: 48%;
}

/* Style for the labels or field names */
.col-12 col-md-6 {
    padding: 10px 0;
}

/* Horizontal line between form fields */
hr {
    margin-top: 5px;
    border: 1px solid #ddd;
}

/* Buttons and links inside the form */
.b {
    display: inline-block;
    margin: 10px 5px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
}

.b:hover {
    background-color: #0056b3;
}

/* Styling for the links inside the user actions (item3, item2, etc.) */
.user1 .item3, .user1 .item2 {
    margin: 10px 0;
}

.user1 a {
    text-decoration: none;
    color: #007bff;
    font-size: 16px;
}

.user1 a:hover {
    color: #0056b3;
}

/* Adjust for mobile screens */
@media screen and (max-width: 768px) {
    .user {
        flex-direction: column;
    }

    .user1, .user2 {
        width: 100%;
    }

    .col-12.col-md-6 {
        width: 100%;
    }
}

/* Prevent styles from affecting the footer */
footer {
    /* Any footer-specific styling should remain as is */
    background-color: #f8f9fa;
    padding: 10px 20px;
    text-align: center;
    border-top: 1px solid #ddd;
}

    </style>
    <div class="user1">
        <div class="item1">
            <!-- <img src="public/image/addfb.png" alt="" style="width:200px; margin-left:10px;"> -->
            <p style="margin-left:5px;"><?= $_SESSION["auth"]['full_name']  ?></p>
        </div>
        <div class="item2">
            <?php
            if (($_SESSION['auth']['role']) == 2) { ?>
                <a href="/du_an_1_Nhom3/?role=admin">Đăng nhập trang quản trị</a>
            <?php } ?>

        </div>
        <!-- <div class="item3">
            <a href="/du_an_1_Nhom3/?role=client&mod=bill&action=index">Đơn phong đang chờ</a>
        </div> -->

       
        <div class="item3">
            <a href="/du_an_1_Nhom3/?role=client&mod=bill&action=list">Danh sách đặt lịch</a>
        </div>
 <!-- danh sách yêu thich-->
        <!-- <div class="item4">
            <a href="">Danh sách yêu thích</a>
        </div> -->
        <div class="item2">
            <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword">Quên mật khẩu</a>
        </div>
        <div class="item5">
            <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=logout">Đăng xuất</a>
        </div>
    </div>
    <div class="user2">
        <p style="font-size:25px;color:red;text-align:center;">THÔNG TIN CÁ NHÂN</p>
        <form action="" method="post" class="w3-container">
            <div class="row">
               
                            <!-- <p class="col-12 col-sm-12 col-md-6 col-lg-6">
                               <input class="w3-input" type="text" style="background: none;"  value="Họ và Tên: <?= $_SESSION["auth"]['full_name'] ?>">
                            </p>
                        
                            <p class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <input class="w3-input" type="text" style="background: none;">
                               
                            </p> -->
             
                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
                    Tên:<?= $_SESSION["auth"]['full_name'] ?> <hr style="margin-top:-1px">
                  
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
                    Email:<?= $_SESSION["auth"]['email'] ?>
                    <hr style="margin-top:-1px">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
                    Số điện thoại:<?= $_SESSION["auth"]['numberphone'] ?>
                    <hr style="margin-top:-1px">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
    <?php
    if (isset($_SESSION["auth"]) && isset($_SESSION["auth"]['cmnd'])) {
        echo 'CMND: ' . htmlspecialchars($_SESSION["auth"]['cmnd']);
    } else {
        echo 'CMND: Not available';
    }
    ?>
    <hr style="margin-top:-1px">
</div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
                    Giới tính:<?= $_SESSION["auth"]['gender'] == 1 ? "Nam" : "Nữ" ?>
                    <hr style="margin-top:-1px">
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px;">
                    Tên:<input type="button" value="Nguyễn Năng Tuyền" style="text-align:left;">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px ;">
                    Số điện thoại:<input type="button" value="0366897934"  style="text-align:left;">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px;">
                    Email:<input type="button" value="tuyennnph26714@fpt.edu.vn"style="text-align:left;">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px ;">
                    Ngày sinh:<input type="button" value="31/03/2003"style="text-align:left;">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px;">
                    Giới tính:<input type="button" value="Nam"style="text-align:left;">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 10px;">
                    Mật khẩu:<input type="button" value="123456"style="text-align:left;">
                </div>
            </div> -->
            <div class="row2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 " style="margin-top: 10px;">
                    <!-- <input class="a" type="button" value="Đổi mật khẩu"> -->
                    <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=changePassword" class="b btn btn-primary">Đổi mật khẩu</a>
                    <?php if ($_SESSION['auth']['role'] == 2 || $_SESSION['auth']['role'] == 1) { ?>
                        <a href="http://localhost/du_an_1_Nhom3/?role=client&mod=auth&action=edit&id=<?= $_SESSION['auth']['id'] ?>" class="b btn btn-primary">Chỉnh sửa</a>
                    <?php } ?>
                    <!-- <input class="b" type="button" value="Chỉnh sửa"> -->
                </div>
            </div>
        </form>

    </div>
</div>
<?php require "layout/client/footer_client.php" ?>