<?php require "layout/client/header_client.php" ?>
<!----------------------------------------------------------------------------------------------------->
<style>
    /* Style for the login buttons */
.btn-outline-danger, .btn-outline-primary {
    position: relative;
    padding-left: 40px;
    font-weight: 600;
    height: 45px;
}

/* Form input and button styling */
.form-control {
    border-radius: 30px;
    padding-left: 20px;
}

#my-login {
    border-radius: 30px;
}

/* Hover effect on buttons */
.btn:hover {
    opacity: 0.9;
}

/* Notifications styling */
.alert {
    font-size: 14px;
    border-radius: 30px;
    padding: 10px;
}

/* Customizing text color for the "sign up" link */
a.text-primary {
    color: #00a79e !important;
}

/* Custom responsive design */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }
}
/* Styling for the submit button */
#my-login {
    border-radius: 30px;
    transition: all 0.3s ease-in-out; /* Smooth transition for the hover effect */
}

/* Hover effect for the submit button */
#my-login:hover {
    background-color: #007bff; /* Change background color on hover */
    transform: scale(1.05); /* Zoom effect - increase the size by 5% */
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.6); /* Optional: add a glowing shadow */
}

</style>
        <!--Đăng nhập-->
        <div class="container bg-light py-5">
    <div class="row justify-content-center mt-5">
        <!-- Image Section (Optional) -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <!-- <img src="./public/image/logopolyhotel.png" class="img-fluid" width="100%" alt=""> -->
        </div>
        
        <!-- Login Form Section -->
        <div class="col-md-6 mt-5">
            <h2 class="text-center mb-4">Đăng nhập</h2>

            <!-- Social Media Login Buttons -->
            <div class="form-row mt-3">
                <div class="form-group col-lg-6 col-md-12 col-12">
                    <button class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center" style="position:relative;">
                        <i class="fa-brands fa-google" style="position:absolute; left:10px; font-size: 20px;"></i>
                        Đăng nhập Google
                    </button>
                </div>
                <div class="form-group col-lg-6 col-md-12 col-12">
                    <button class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center" style="position:relative;">
                        <i class="fa-brands fa-facebook" style="position:absolute; left:10px; font-size: 20px;"></i>
                        Đăng nhập Facebook
                    </button>
                </div>
            </div>

            <!-- Or Divider -->
            <h5 class="text-center my-4">- Hoặc -</h5>

            <!-- Email & Password Login Form -->
            <form action="/du_an_1_Nhom3/?role=client&mod=auth" method="post">
                <div class="form-group">
                    <input id="my-login" class="form-control border-bottom" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input id="my-login" class="form-control border-bottom" type="password" name="password" placeholder="Password" required>
                </div>

                <!-- Alternative login and forgot password links -->
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">Đăng nhập bằng số điện thoại</span>
                    <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=forgotPassword" class="text-muted">Quên mật khẩu?</a>
                </div>

                <!-- Notifications for errors or messages -->
                <?php foreach ($notifications as $notification) : ?>
                    <?php foreach ($notification['msgs'] as $msg): ?>
                        <div class="alert alert-<?= $notification['type'] ?> alert-dismissible fade show mb-3" role="alert">
                            <?= $msg ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <!-- Submit Button -->
                <div class="form-group">
                    <input id="my-login" class="form-control bg-success text-white" type="submit" value="Đăng nhập" >
                </div>
            </form>

            <!-- Registration Link -->
            <div class="text-center" style="margin-bottom:40px;">
                Bạn chưa có tài khoản? <a href="/du_an_1_Nhom3/?role=client&mod=auth&action=sign_up" class="text-primary">Đăng ký</a>
            </div>
        </div>
    </div>
</div>

        <!--ENd Đăng nhập-->
       
