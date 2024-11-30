<?php require "layout/client/header_client.php" ?>
<!-- <?php var_dump ($pro_cat);


?> -->
 <!----------------------------------------------------------------------------------------------------->
    <!--Form Search-->
    <div class="container">
    <form action="/du_an_1_Nhom3/?role=client&mod=search&action=index" method="POST">
        <div class="row mt-4">
            <div class="form-group col-md-9 col-sm-12 mt-2">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="form-control pl-5" id="exampleInput" placeholder="Tìm kiếm..." name="keyword">
            </div>
            <div class="form-group col-md-3 col-sm-12 mt-2">
                <!-- <button type="submit" class="form-control bg-success" >Tìm kếm</button> -->
                <input type="submit" class="form-control bg-success"  value="Tìm kiếm" name="search">
            </div>
        </div>
    </form>
    </div>
    <!--End form search-->
    <!-------------------------------------------------------------------------------------------->
    <hr class="display-4" />
    <!--Trang chi tiết-->
    <div class="container mt-5">
    <input type="hidden" value="<?=$productions['id']?>" name="id">
      <div class="row">
        <div class="col-md-8">
          <div>
            <h2 value=""> <?= $productions['name']?> Phòng cho 4 người : Gồm người lớn , trẻ em </h2>
            <p>Địa chỉ: Trịnh Văn Bô, Hà Nội</p>
          </div>
          <div>
          <img src="<?=$productions['image'] ?>" alt="" width="100%" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 mt-3">
          <div class="card" style="width: 100%;">
         
            <div class="card-body">
             
            <form action="/du_an_1_Nhom3/?role=client&mod=bill&action=index" method="post">
              <input type="hidden" name="id" value="<?= $productions['id'] ?>">
            <div class="form-group">
                  <label for="my-input">Ngày nhận phòng</label>
                  <input id="my-input" class="form-control" type="date" name="check_in_date" required>
                </div>

                <div class="form-group">
                  <label for="my-input">Ngày trả phòng</label>
                  <input id="my-input" class="form-control" type="date" name="check_out_date" required>
                </div>
                <button type="submit" class="btn bg-success col-md-12">Đặt phòng</button>
            </form>

              <div class="mt-3 text-danger">
                <h3>Giá:$<?= $productions['price']?> / Đêm</h3> 
                <p>Lưu ý: Giá phòng sẽ thay đổi theo từng ngày từng thời điểm(ngày lễ, tết, cuối tuần)</p>
              </div>
            
              <!-- <a href="/du_an_1_Nhom3/?role=client&mod=bill" class="btn bg-success col-md-12">Đặt phòng</a> -->
              <div class="row text-center mt-2">
                <div class="col-6">
                  <p>Diện tích</p>
                  <p>15-30m2</p>
                </div>
                <div class="col-6">
                  <p>Trạng thái</p>
                  <p class="text-info"><?= $productions['status']==1 ? "Có thể thuê" : "Không thể thuê" ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <style>
        /* Định dạng danh sách ul */
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        /* Định dạng mục danh sách li */
        li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        /* Biểu tượng mục danh sách */
        li::before {
            content: "●"; /* Biểu tượng bullet */
            color: #007BFF; /* Màu của bullet */
            font-size: 18px;
            position: absolute;
            left: 0;
        }
    </style>  
      <div class="">

      <h3>Dịch Vụ Phòng Có :</h3>
    <ul>
       
        <li>Dịch vụ 1: Máy lạnh.</li>
        <li>Dịch vụ 2: Wifi.</li>
        <li>Dịch vụ 3: Đồ ăn nhanh</li>
        
        <li>Dịch vụ 4: Khăn Tắm , Đồ vệ sinh Cá nhân</li>
    </ul>


        <h3>Mô tả</h3>
        <div>
       
          <h5>
          <?=$productions['description']?>

          </h5>
          
        </div>
      </div>

    </div>
    <!--End trang chi tiết-->

    <!--Form bình luận-->
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
            <?php foreach ($comments as $comment):?>
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

        <form action="/du_an_1_Nhom3/?role=client&mod=product_details&action=addComments&id=<?= $productions['id'] ?>" method="post">
    
    <!--End form bình luận-->

    <!--Sản phẩm liên quan-->
      <div class="container">
          <h3>Các Phòng cùng loại : </h3>
      
        <div class="row">
         
          
              <div class="col-12">
             
            <div class="card text-left">
             
              <div class="card-body text col-12">
              <?php
            foreach($pro_cat as $item) :
             
             ?>
                <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>"> <h2 class="text">🏡<?= $item['name'] ?></h2></a>
                
                <?php endforeach ?>
             </div>
            </div>
           
            </div>


           

          
        </div>
      </div>
    <!--End Sản phẩm liên quan-->

    <!--Google Map-->
    <div class="container mt-3 mb-3">
      <h3>Bản đồ</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863855881391!2d105.7445984141576!3d21.038132792835867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2sFPT%20Polytechnic%20Hanoi!5e0!3m2!1sen!2s!4v1667839440057!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--End Google Map-->
<?php require "layout/client/footer_client.php" ?>
   <!--End Google Map-->

