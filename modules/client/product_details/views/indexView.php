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



  <!-- Sản phẩm liên quan -->
  <div class="related-products mt-5">
    <h3 class="section-title">Các Phòng cùng loại:</h3>
    <div class="row">
      <?php foreach($pro_cat as $item): ?>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>">
              <h5 class="text-primary">🏡 <?= $item['name'] ?></h5>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
 <!-- Google Map -->
 <div class="container mt-5 mb-3">
    <h3 class="section-title">Bản đồ</h3>
    <iframe src="https://www.google.com/maps/embed?pb=... (your map embed link here) ..." width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</div>

<!--End trang chi tiết-->

<!-- Bình luận -->
      <div class="container mt-3">
        <h3>Bình luận</h3> <br>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-light">
              <thead class="thead-light">
              <tr>
                <th>Name</th>
                <th>Nội dung</th>
                <th>Date/time</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($comments as $comment): ?>
                  <tr>
                  <th><?= $comment['full_name']?></th>
                <th style="max-width: 300px;
    word-wrap: break-word;
    word-break: break-word;"><?= $comment['description']?></th>
                <th><?= $comment['created_at'] ?></th>
                  </tr>
                  <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
        <?php if(is_auth()){ ?>
            <form action="/du_an_1_Nhom3/?role=client&mod=product_details&action=addComments&id=<?= $productions['id'] ?>" method="post">
              <div class="row">
                <div class="col-md-10 mt-1">
                  <input id="my-input" class="form-control" type="text" name="description" placeholder="Bình luận">
                </div>
                <div class="form-group col-md-2 mt-1">
            <input id="my-input" class=" btn btn-primary w-100" type="submit" name="" value="Gửi">
                </div>
              </div>
            </form>
            <?php }else{ ?>
              <h5 style="margin-bottom:10px">Vui lòng đăng nhập để bình luận</h5>
          <?php } ?>
      </div>

<?php require "layout/client/footer_client.php" ?>

<!-- Custom CSS -->
<style>
  /* General Styles */
  .container {
    max-width: 1200px;
  }

  .section-title {
    font-size: 1.75rem;
    font-weight: 600;
    color: #007bff;
    margin-bottom: 20px;
  }

  .product-title {
    font-size: 2.25rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
  }

  .product-location {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 20px;
  }

  /* Card Image Hover Effect */
  .card-image {
    overflow: hidden;
    position: relative;
    border-radius: 10px;
  }

  .card-image img {
    transition: transform 0.3s ease;
    width: 100%;
  }

  .card-image:hover img {
    transform: scale(1.1);
  }

  /* Button Styles */
  .btn {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease, color 0.3s ease;
    padding: 12px 15px;
    font-size: 1.2rem;
  }

  .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    background-color: #28a745;
    color: white;
  }

  /* Services List Styling */
  /* Service List Styling */
.service-list {
    list-style-type: none; /* Remove default bullets */
    padding: 0;
    margin: 0;
    font-size: 1.2rem;
}

.service-list li {
    margin-bottom: 15px;
    padding-left: 30px; /* Add space for the icon */
    position: relative;
    font-weight: 500;
    color: #555;
}

/* Adding the service icon */
.service-list li .service-icon {
    position: absolute;
    left: 0;
    top: 0;
    font-size: 1.5rem;
    color: #28a745; /* Icon color */
    margin-top: 6px; /* Adjust for vertical alignment */
}

/* Style for the text beside the icons */
.service-list li span {
    font-size: 1.2rem;
    padding-left: 35px; /* Adjust text padding to align with icon */
    color: #333; /* Text color */
}

/* Optional Hover Effect for List Items */
.service-list li:hover {
    color: #007bff;
    background-color: #f8f9fa;
    border-radius: 8px;
    padding-left: 40px; /* Add space when hovering */
}

.service-list li:hover .service-icon {
    color: #007bff; /* Change icon color on hover */
}

  /* Comment Section Styling */
  .comment-text {
    max-width: 300px;
    word-wrap: break-word;
    word-break: break-word;
  }

  /* Table Styling */
  .table-hover tbody tr:hover {
    background-color: #f8f9fa;
  }

  .table-light th, .table-light td {
    text-align: center;
    vertical-align: middle;
    padding: 12px;
  }

  /* Related Products */
  .related-products .card {
    border: 1px solid #f1f1f1;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
  }

  .related-products .card:hover {
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  }

  /* Google Map */
  iframe {
    border-radius: 8px;
  }
</style>

