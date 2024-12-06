
<?php  require "layout/client/header_client.php" ?>
<form action="/du_an_1_Nhom3/?role=client&mod=auth&action=saveEdit&id=<?= $list_users['id']; ?>" method="post" enctype="multipart/form-data">
<div class="container">
<div class="row mt-4">
        <!-- <input type="hidden" name="id"> -->
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="my-input">Họ và Tên</label>
            <input id="my-input" class="form-control" type="text" name="full_name" value="<?= $list_users['full_name'] ?>">
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
            <label for="my-input">Email</label>
            <input id="my-input" class="form-control" type="text" name="email" value="<?= $list_users['email']  ?>">
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
            <label for="my-input">Số điện thoại</label>
            <input id="my-input" class="form-control" type="text" name="numberphone" value="<?= $list_users['numberphone']  ?>">
        </div>
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
            <label for="my-input">CMND</label>
            <input id="my-input" class="form-control" type="text" name="cmnd" value="<?= $list_users['cmnd']  ?>">
        </div>
        <!-- <div class="form-group">
            <label for="my-input">Giới tính</label>
            <input id="my-input" class="form-control" type="radio" name="gender" > Nam
            <input id="my-input" class="form-control" type="radio" name="gender" > Nữ
        </div> -->
        
        <button type="submit" class="btn btn-primary col-lg-6 col-md-6 col-sm-12 mx-auto">Cập nhật</button>
        
</div>
</div>

</form>  
<?php  require "layout/client/footer_client.php" ?>

