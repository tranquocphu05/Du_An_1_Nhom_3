<form method="POST" action="">

    <label for="bill_id">Bill ID:</label>
    <input type="text" name="bill_id" value="<?php echo isset($bill_detail['bill_id']) ? $bill_detail['bill_id'] : ''; ?>" required><br>

    <label for="product_id">Product ID:</label>
    <input type="text" name="product_id" value="<?php echo isset($bill_detail['product_id']) ? $bill_detail['product_id'] : ''; ?>" required><br>

    <label for="check_in_date">Check-in Date:</label>
    <input type="text" name="check_in_date" value="<?php echo isset($bill_detail['check_in_date']) ? $bill_detail['check_in_date'] : ''; ?>" required><br>

    <label for="check_out_date">Check-out Date:</label>
    <input type="text" name="check_out_date" value="<?php echo isset($bill_detail['check_out_date']) ? $bill_detail['check_out_date'] : ''; ?>" required><br>

    <label for="total_money">Total Money:</label>
    <input type="number" name="total_money" value="<?php echo isset($bill_detail['total_money']) ? $bill_detail['total_money'] : ''; ?>" required><br>

    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name" value="<?php echo isset($bill_detail['full_name']) ? $bill_detail['full_name'] : ''; ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo isset($bill_detail['email']) ? $bill_detail['email'] : ''; ?>" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" value="<?php echo isset($bill_detail['address']) ? $bill_detail['address'] : ''; ?>" required><br>

    <label for="numberphone">Phone Number:</label>
    <input type="text" name="numberphone" value="<?php echo isset($bill_detail['numberphone']) ? $bill_detail['numberphone'] : ''; ?>" required><br>

    <label for="confirm_room">Confirm Room:</label>
    <input type="checkbox" name="confirm_room" id="confirm_room" <?php echo isset($bill_detail['confirm_room']) && $bill_detail['confirm_room'] == 1 ? 'checked' : ''; ?>> Đã confirm<br>

    <label for="cancel_room">Cancel Room:</label>
    <input type="checkbox" name="cancel_room" id="cancel_room" <?php echo isset($bill_detail['cancel_room']) && $bill_detail['cancel_room'] == 1 ? 'checked' : ''; ?>> Đã cancel<br>

    <label for="checkin">Check-in:</label>
    <input type="checkbox" name="checkin" id="checkin" <?php echo isset($bill_detail['checkin']) && $bill_detail['checkin'] == 1 ? 'checked' : ''; ?>> Đã check-in<br>

    <input type="submit" name="update" value="Update"/>
</form>

<script>
    // Listen for change events on the checkboxes and enforce the logic that only one checkbox can be checked at a time.
    document.getElementById('confirm_room').addEventListener('change', function() {
        if (this.checked) {
            // Uncheck the other checkboxes if this one is checked
            document.getElementById('cancel_room').checked = false;
            document.getElementById('checkin').checked = false;
        }
    });

    document.getElementById('cancel_room').addEventListener('change', function() {
        if (this.checked) {
            // Uncheck the other checkboxes if this one is checked
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
