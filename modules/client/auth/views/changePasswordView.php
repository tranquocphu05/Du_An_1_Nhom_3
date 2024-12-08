<?php require "layout/client/header_client.php" ?>
<!----------------------------------------------------------------------------------------------------->
        <!--Đăng ký-->
        <div class="container bg-light">
            <div class="row mt-5">
                <div class="col-md-6 img-login">
                    <!-- <img src="public/image/logopolyhotel.png" class="img-fluid" width="100%" alt=""> -->
                </div>
                <div class="col-md-6 mt-5">
                    <h2>Đổi mật khẩu</h2>
                    <!-- <div class="form-row mt-3">
                       <div class="form-group col-lg-6 col-md-12 col-12">
                        <i class="fa-brands fa-google" style="position:absolute ; font-size: 23px; padding: 9px;"></i>
                        <input id="my-input" class="form-control" type="submit" name="" value="Đăng nhập Google">
                       </div>
                       <div class="form-group col-lg-6 col-md-12 col-12">
                        <i class="fa-brands fa-facebook" style="position:absolute ; font-size: 25px; padding: 8px ;"></i>
                        <input id="my-input" class="form-control" type="submit" name="" value="Đăng nhập Facebook">
                       </div>
                    </div>
                    <h5 class="text-center mt-2 mb-3">-Hoặc-</h5> -->
                    <form action="/du_an_1_Nhom3/?role=client&mod=auth&action=saveChangePassword" method="POST">
                        <!-- <div class="form-group">
                             <label for="my-login">Email</label> 
                            <input id="my-login" class="form-control border-bottom"  type="text" name="full_name" placeholder="Họ và tên" >
                        </div> -->
                        <div class="form-group">
                            <!-- <label for="my-login">Email</label> -->
                            <input id="my-login" class="form-control border-bottom"  type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6 ">
                                <!-- <label for="my-login">Email</label> -->
                                <input id="my-login" class="form-control border-bottom"  type="password" name="password_old" placeholder="Mật khẩu hiện tại">
                            </div>
                            <div class="form-group col-lg-6 ">
                                <!-- <label for="my-login">Email</label> -->
                                <input id="my-login" class="form-control border-bottom"  type="password" name="password_new" placeholder="Mật khẩu mới">
                            </div>
                            
                        </div>
                        
                        <!-- <div class="form-group">
                            <label for="my-login">
                                <input id="my-login" class=""  type="radio" name="gender" value="1">
                                Nam</label>
                                <label for="my-login">
                                    <input id="my-login" class=""  type="radio" name="gender" value="2">
                                    Nữ</label>
                          
                        </div> -->
                        <div class="form-group">
                        <?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg): ?>
                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                        </div>
                        
        
                        <div class="form-group">
                            <!-- <label for="my-login">Email</label> -->
                            <input id="my-login" class="form-control border-bottom bg-success text-white"   type="submit" name="" value="Đổi mật khẩu">
                            <!-- <?php  header("location:/du_an_1_Nhom3/?role=client&mod=auth&action=infomation")?> -->
                         
                        </div>
                        
                    </form>
                    <!-- <div style="margin-bottom:40px ;">
                        Bạn đã có tài khoản? <a href="/du_an_1_Nhom3/?role=client&mod=auth" style="color:#00a79e;">Đăng nhập</a>
                    </div> -->
                 
                </div>
            </div>
        </div>
        <!--ENd Đăng ký-->
<?php require "layout/client/footer_client.php" ?>