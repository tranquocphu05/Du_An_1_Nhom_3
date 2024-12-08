<?php require "layout/client/header_client.php" ?>
    <!--Danh mục sản phẩm-->
    <div class="container">
    <h3>Danh mục sản phẩm</h3>
    <div class="row">
        <?php foreach ($categories as $category): ?>
            <div class="col-auto">
                <a href="/du_an_1_Nhom3/?role=client&mod=category&action=index&id=<?= $category['id'] ?>" 
                   class="category-btn btn btn-primary rounded-pill fs-6 fw-semibold text-white px-3 me-3">
                   <?= $category['name'] ?>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>
 <style>
    /* Tùy chỉnh hiệu ứng hover */
.category-btn {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Hiệu ứng zoom và bóng đổ khi hover */
.category-btn:hover {
    transform: scale(1.1); /* Phóng to 10% */
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.5); /* Bóng đổ */
}
.card-image {
    overflow: hidden; /* Đảm bảo phần hình ảnh không bị tràn ra ngoài */
    position: relative;
    border: 2px solid transparent; /* Thêm border mặc định, màu trong suốt */
    transition: border 0.3s ease; /* Thêm hiệu ứng cho border */
}

.card-image:hover {
    border: 2px solid #007bff; /* Khi hover, đổi màu border */
}

.card-image img {
    transition: transform 0.3s ease; /* Thêm hiệu ứng chuyển động cho hình ảnh */
}

.card-image:hover img {
    transform: scale(1.1); /* Tăng kích thước hình ảnh khi hover */
}

 </style>
    <!--End Danh mục sản phẩm-->

    <!--Sản phẩm liên quan-->
    
    <div class="slide-container swiper mt-4">
    <div class="row slide-content">
        <!-- sp -->
        <div class="card-wrapper swiper-wrapper col-12">
            <?php foreach ($pro_cat as $item) : ?>
                <div class="card swiper-slide">
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


