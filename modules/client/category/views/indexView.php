<?php require "layout/client/header_client.php" ?>
    <!--Danh mục sản phẩm-->
      <div class="container">
          <h3>Danh mục sản phẩm</h3>
          <div class="row">
            <?php foreach ($categories as $category):?>
              <a href="/du_an_1_Nhom3/?role=client&mod=category&action=index&id=<?= $category['id'] ?>" style="margin:10px 0px 0px 10px;" class="btn btn-primary rounded-pill fs-6 fw-semibold text-white px-3 me-3"><?= $category['name'] ?></a>
              <?php endforeach ?>
          </div>
      </div>
    <!--End Danh mục sản phẩm-->

    <!--Sản phẩm liên quan-->
    
    <div class="slide-container swiper mt-4">
        <div class="row slide-content">
            <!-- sp -->
            <div class="card-wrapper swiper-wrapper col-12">
                <?php foreach ($pro_cat as $item) : ?>
                    <div class="card swiper-slide ">
                        <div class="card-image">
                            <img src="<?= $item['image'] ?>" alt="" width="100%" class="img-fluid">
                        </div>

                        <div class="card-name text col-12">
                            <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>">
                                <h2 class="text"><?= $item['name'] ?> </h2>
                            </a>
                            <a href="" class="text-danger" style="float:left ; font-size:20px ;"> <?= $item['price'] ?></a>
                            <a href="" class="text" style="float:right ; "><span class="rounded-circle"><i class="fa-solid fa-heart" style="margin:0px 0px 0px 3.5px;"></i></span></a>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div> <br>
        <div class="swiper-pagination"></div>
    </div>
    <!--End Sản phẩm liên quan-->


<?php require "layout/client/footer_client.php" ?>


