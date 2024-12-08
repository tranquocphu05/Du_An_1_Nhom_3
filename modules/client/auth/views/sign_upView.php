<?php require "layout/client/header_client.php" ?>
<!----------------------------------------------------------------------------------------------------->

<!-- Đăng ký -->
<div class="container bg-light py-5">
    <div class="row justify-content-center mt-5">
        <!-- Left Image Section (Optional) -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <!-- <img src="public/image/logopolyhotel.png" class="img-fluid" width="100%" alt=""> -->
        </div>

        <!-- Registration Form Section -->
        <div class="col-md-6 mt-5">
            <h2 class="text-center mb-4">Tạo tài khoản</h2>
            
            <!-- Registration Form -->
            <form action="/du_an_1_Nhom3/?role=client&mod=auth&action=saveSignUp" method="POST">
                <div class="form-group">
                    <input id="my-login" class="form-control" type="text" name="full_name" placeholder="Họ và tên" required>
                </div>
                <div class="form-group">
                    <input id="my-login" class="form-control" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <input id="my-login" class="form-control" type="password" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <input id="my-login" class="form-control" type="password" name="nhaplaipassword" placeholder="Nhập lại mật khẩu" required>
                    </div>
                </div>
                <div class="form-group">
                    <input id="my-login" class="form-control" type="number" name="numberphone" placeholder="Số điện thoại" required>
                </div>
                <div class="form-group">
                    <label class="mr-3">
                        <input type="radio" name="gender" value="1"> Nam
                    </label>
                    <label>
                        <input type="radio" name="gender" value="2"> Nữ
                    </label>
                </div>

                <!-- Display Notifications -->
                <div class="form-group">
                    <?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg): ?>
                            <span class="alert alert-<?= $notification['type'] ?> alert-dismissible fade show mb-3"><?= $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <input id="my-login" class="form-control bg-success text-white" type="submit" value="Tạo tài khoản">
                </div>
            </form>

            <!-- Login Redirect -->
            <div class="text-center" style="margin-bottom:40px;">
                Bạn đã có tài khoản? <a href="/du_an_1_Nhom3/?role=client&mod=auth" class="text-primary">Đăng nhập</a>
            </div>
        </div>
    </div>
</div>
<!-- End Đăng ký -->

<!-- Custom CSS -->
<style>
    /* Custom styling for the form elements */
    .form-control {
        border-radius: 30px; /* Rounded corners for input fields */
        padding-left: 20px;   /* Padding inside the input fields */
    }

    #my-login {
        border-radius: 30px; /* Apply rounded corners to the button */
        transition: all 0.3s ease-in-out; /* Smooth transition for hover effect */
    }

    /* Hover effect for the submit button */
    #my-login:hover {
        transform: scale(1.05); /* Zoom effect on hover */
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.6); /* Optional glow effect */
        opacity: 0.9; /* Slight opacity change */
    }

    /* Form section padding */
    .container {
        padding: 30px;
    }

    /* Alerts for notifications */
    .alert {
        font-size: 14px;
        border-radius: 30px;
        padding: 10px;
    }

    /* Custom styles for the login link */
    a.text-primary {
        color: #00a79e !important;
    }

    /* Custom responsive design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }
    }
</style>
