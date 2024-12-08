<?php require "layout/client/header_client.php"; ?>

<!----------------------------------------------------------------------------------------------------->

<!-- Quên mật khẩu -->
<div class="container bg-light py-5">
    <div class="row justify-content-center mt-5">
        <!-- Left Image Section (Optional) -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <!-- <img src="public/image/logopolyhotel.png" class="img-fluid" width="100%" alt=""> -->
        </div>

        <!-- Forgot Password Form Section -->
        <div class="col-md-6 mt-5">
            <h2 class="text-center mb-4">Quên mật khẩu</h2>
            
            <!-- Forgot Password Form -->
            <form action="/du_an_1_Nhom3/?role=client&mod=auth&action=saveForgotPassword" method="POST">
                <div class="form-group">
                    <input id="my-login" class="form-control" type="email" name="email" placeholder="Email" required>
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
                    <input id="my-login" class="form-control bg-success text-white" type="submit" name="submit" value="Lấy lại mật khẩu">
                </div>
            </form>

            <!-- Login Redirect -->
            <div class="text-center" style="margin-bottom:40px;">
                Bạn đã có tài khoản? <a href="/du_an_1_Nhom3/?role=client&mod=auth" class="text-primary">Đăng nhập</a>
            </div>
        </div>
    </div>
</div>
<!-- End Quên mật khẩu -->

<?php require "layout/client/footer_client.php" ?>

<!-- Custom CSS -->
<style>
    /* General Styling for the form elements */
    .form-control {
        border-radius: 30px; /* Rounded corners for input fields */
        padding-left: 20px;   /* Padding inside the input fields */
        transition: all 0.3s ease-in-out; /* Smooth transition for hover effect */
    }

    /* Custom Styling for the submit button */
    #my-login {
        border-radius: 30px;
        transition: all 0.3s ease-in-out;
    }

    /* Hover effect for the submit button */
    #my-login:hover {
        transform: scale(1.05); /* Zoom effect on hover */
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.6); /* Optional glow effect */
        opacity: 0.9; /* Slight opacity change */
    }

    /* Padding and Spacing */
    .container {
        padding: 30px;
    }

    /* Styling for notifications (alerts) */
    .alert {
        font-size: 14px;
        border-radius: 30px;
        padding: 10px;
    }

    /* Custom styles for the login link */
    a.text-primary {
        color: #00a79e !important;
    }

    /* Responsive Design for smaller screens */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }
    }
</style>
