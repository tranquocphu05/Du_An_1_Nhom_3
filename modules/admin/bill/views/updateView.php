<?php get_header('', 'Chỉnh sửa hóa đơn') ?>
<style>
    /* Tổng thể */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.container {
    width: 70%;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Tiêu đề */
h2 {
    text-align: center;
    color: #333;
}

/* Các label */
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

/* Các input */
input[type="text"],
input[type="email"],
input[type="number"],
input[type="file"],
input[type="checkbox"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

input[type="checkbox"] {
    width: auto;
    display: inline-block;
    margin-right: 10px;
}

/* Các checkbox */
input[type="checkbox"]:checked {
    background-color: #28a745;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Hiển thị lỗi hoặc thông báo */
form .error {
    color: red;
    margin-bottom: 20px;
}

/* Các dòng input */
input:focus {
    border-color: #4CAF50;
    outline: none;
}

/* Khoảng cách */
form {
    margin-top: 20px;
}

form .form-group {
    margin-bottom: 15px;
}

/* Các checkbox và label */
.checkbox-group {
    margin-bottom: 10px;
}

</style>
</style>
<div class="container">
    <h2>Cập nhật hóa đơn</h2>
    <form method="POST" action="">

        <div class="form-group">
            <label for="bill_id">Bill ID:</label>
            <input type="text" name="bill_id" value="<?php echo isset($bill_detail['bill_id']) ? $bill_detail['bill_id'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="product_id">Product ID:</label>
            <input type="text" name="product_id" value="<?php echo isset($bill_detail['product_id']) ? $bill_detail['product_id'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="check_in_date">Check-in Date:</label>
            <input type="text" name="check_in_date" value="<?php echo isset($bill_detail['check_in_date']) ? $bill_detail['check_in_date'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="check_out_date">Check-out Date:</label>
            <input type="text" name="check_out_date" value="<?php echo isset($bill_detail['check_out_date']) ? $bill_detail['check_out_date'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="total_money">Total Money:</label>
            <input type="number" name="total_money" value="<?php echo isset($bill_detail['total_money']) ? $bill_detail['total_money'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" value="<?php echo isset($bill_detail['full_name']) ? $bill_detail['full_name'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo isset($bill_detail['email']) ? $bill_detail['email'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo isset($bill_detail['address']) ? $bill_detail['address'] : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="numberphone">Phone Number:</label>
            <input type="text" name="numberphone" value="<?php echo isset($bill_detail['numberphone']) ? $bill_detail['numberphone'] : ''; ?>" required>
        </div>

        <div class="checkbox-group">
            <label for="confirm_room">
                <input type="checkbox" name="confirm_room" id="confirm_room" <?php echo isset($bill_detail['confirm_room']) && $bill_detail['confirm_room'] == 1 ? 'checked' : ''; ?>> Đã confirm
            </label>

            <label for="cancel_room">
                <input type="checkbox" name="cancel_room" id="cancel_room" <?php echo isset($bill_detail['cancel_room']) && $bill_detail['cancel_room'] == 1 ? 'checked' : ''; ?>> Đã cancel
            </label>

            <label for="checkin">
                <input type="checkbox" name="checkin" id="checkin" <?php echo isset($bill_detail['checkin']) && $bill_detail['checkin'] == 1 ? 'checked' : ''; ?>> Đã check-in
            </label>
        </div>

        <div class="form-group">
            <input type="submit" name="update" value="Update">
        </div>
    </form>
</div>

<script>
    // Enforce that only one checkbox can be checked at a time
    document.getElementById('confirm_room').addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('cancel_room').checked = false;
            document.getElementById('checkin').checked = false;
        }
    });

    document.getElementById('cancel_room').addEventListener('change', function() {
        if (this.checked) {

            document.getElementById('confirm_room').checked = false;
            document.getElementById('checkin').checked = false;
        }
    });

    document.getElementById('checkin').addEventListener('change', function() {
        if (this.checked) {

            // Uncheck the other checkboxes if this one is checked

            document.getElementById('confirm_room').checked = false;
            document.getElementById('cancel_room').checked = false;
        }
    });
</script>

<?php get_footer() ?>

