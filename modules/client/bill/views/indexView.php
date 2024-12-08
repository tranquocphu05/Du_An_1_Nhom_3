<?php include "./layout/client/header_client.php" ?>

<form action="/du_an_1_Nhom3/?role=client&mod=bill&action=insertBill" method="post">
    <h3>Thông tin đặt hàng</h3>

    <div class="container">
    <div class="card-body">
        <div class="row">
            <div class="col col-6 mt-3">
                <div class="form-group">
                    <label>Tên người đặt hàng</label>
                    <div class="input-group">
                        <input type="text" name="full_name" class="form-control" required placeholder="Tên người đặt hàng" aria-describedby="basic-addon2" />
                    </div>
                </div>
            </div>
            <div class="col col-6 mt-3">
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <input type="text" name="email" class="form-control" required placeholder="Email" aria-describedby="basic-addon2" />
                        <!-- <div class="input-group-append"><span class="input-group-text">VND</span></div> -->
                    </div>
                </div>
            </div>
            <div class="col col-6 mt-3">
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <div class="input-group">
                        <input type="text" name="address" class="form-control" required placeholder="Địa chỉ" aria-describedby="basic-addon2" />
                        <!-- <div class="input-group-append"><span class="input-group-text">VND</span></div> -->
                    </div>
                </div>
            </div>
            <div class="col col-6 mt-3">
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <div class="input-group">
                        <input type="text" name="numberphone" class="form-control" required placeholder="Tên người đặt hàng" aria-describedby="basic-addon2" />
                        <!-- <div class="input-group-append"><span class="input-group-text">VND</span></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>


    <style>
        .formdathang {
            margin-left: 200px;
        }

        .formdathang div {
            margin-top: 10px;
        }

        .formdathang input {
            width: 760px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .pt_thanhtoan {
            margin-left: 200px;
        }

        .pt_thanhtoan input {
            margin-top: 10px;
            /* margin-left: 10px; */
        }
    </style>


    <div class="thongtinsanpham">
        <table>
            <thead>
                <tr>
                    <th>Tên phòng</th>
                    <th>Hình</th>
                    <th>Thời gian nhận phòng</th>
                    <th>Thời gian trả phòng</th>
                    <th>Thành tiền</th>
                    <th><a href="/du_an_1_Nhom3/?role=client&mod=bill&action=delete" class="">Xoá tất cả</a></th>
                </tr>
            </thead>

            

            <tbody>
                <?php
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $item) {
                        $price = date("d", strtotime(($item['check_out_date'])) - strtotime($item['check_in_date'])) * $item['price'];

                        echo '
                        <tr>
                            <td>' . $item['name'] . '</td>
                            <td><img src="' . $item['image'] . '" width="50"></td>
                            <td>' . $item['check_in_date'] . '</td>
                            <td>' . $item['check_out_date'] . '</td>
                            <td>$' . $price . '</td>

                            <td><a href="/du_an_1_Nhom3/?role=client&mod=bill&action=delete&id=' . $key . '">Xóa  </a>  </td>
                        </tr>
                        
                        
                        ';
                    }
                }
                ?>

            </tbody>

        </table>
    </div>

    <br>


    <div class="dongydathang">
        <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
        <input type="reset" value="Nhập lại" name="nhaplai">
    </div>
</form>



<style>
    h3 {
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center;
        font-size: 25px;
    }

    table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;

    }

    table,
    td,
    th {
        border: 1px solid black;
    }

    th {
        padding: 15px;
    }

    .dongydathang input {
        width: 150px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid gray;
        float: right;
        margin-left: 10px;
        background-color: black;
        color: white;
        text-align: center;
    }

    .dongydathang input:hover {
        background-color: white;
        color: black;
    }
</style>

