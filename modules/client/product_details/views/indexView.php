<?php require "layout/client/header_client.php" ?>

<!--Trang chi tiết-->
<div class="container mt-5">
  <input type="hidden" value="<?=$productions['id']?>" name="id">
  <div class="row">
    <!-- Left side: Product details -->
    <div class="col-md-8">
      <h2 class="product-title"><?= $productions['name']?> - Phòng cho 4 người: Gồm người lớn, trẻ em </h2>
      <p class="product-location"><strong>Địa chỉ:</strong> Trịnh Văn Bô, Hà Nội</p>

      <div class="card-image">
        <img src="<?=$productions['image']?>" alt="Product Image" class="img-fluid rounded shadow">
      </div>
    </div>

    <!-- Right side: Booking form -->
    <div class="col-md-4 mt-3">
      <div class="card shadow-lg border-light rounded-lg" style="margin-top: 94px;">
        <div class="card-body">
          <form action="/du_an_1_Nhom3/?role=client&mod=bill&action=index" method="post">
            <input type="hidden" name="id" value="<?= $productions['id'] ?>">

            <div class="form-group">
              <label for="check_in_date">Ngày nhận phòng</label>
              <input id="check_in_date" class="form-control" type="date" name="check_in_date" required>
            </div>

            <div class="form-group">
              <label for="check_out_date">Ngày trả phòng</label>
              <input id="check_out_date" class="form-control" type="date" name="check_out_date" required>
            </div>

            <button type="submit" class="btn btn-success w-100 btn-lg">Đặt phòng</button>
          </form>

          <div class="mt-3 text-danger">
            <h3 class="price">Giá: $<?= $productions['price'] ?> / Đêm</h3>
            <p>Lưu ý: Giá phòng sẽ thay đổi theo từng ngày, đặc biệt là ngày lễ, tết, cuối tuần.</p>
          </div>

          <div class="row text-center mt-2">
            <div class="col-6">
              <p><strong>Diện tích</strong></p>
              <p>15-30m²</p>
            </div>
            <div class="col-6">
              <p><strong>Trạng thái</strong></p>
              <p class="text-info"><?= $productions['status'] == 1 ? "Có thể thuê" : "Không thể thuê" ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Dịch vụ phòng -->
  <!-- Dịch Vụ Phòng Có -->
<div class="services mt-5">
    <h3 class="section-title">Dịch Vụ Phòng Có:</h3>
    <ul class="service-list">
        <li><i class="fas fa-snowflake service-icon"></i> <span>Máy lạnh</span></li>
        <li><i class="fas fa-wifi service-icon"></i> <span>Wifi miễn phí</span></li>
        <li><i class="fas fa-hamburger service-icon"></i> <span>Đồ ăn nhanh</span></li>
        <li><i class="fas fa-towel service-icon"></i> <span>Khăn tắm, đồ vệ sinh cá nhân</span></li>
    </ul>
</div>

 
 


<?php require "layout/client/footer_client.php" ?>

