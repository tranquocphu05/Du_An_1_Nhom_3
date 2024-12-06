<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Bootstrao Icons-->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


</head>
<body>
<style>
    /* Swiper container */
.slide-container {
    position: relative;
}

/* Các hiệu ứng zoom cho hình ảnh trong slider */
.product-image {
    transition: transform 0.4s ease, box-shadow 0.4s ease; /* Tăng thời gian và thêm hiệu ứng shadow */
    transform-origin: center center; /* Đảm bảo hình ảnh zoom vào giữa */
    will-change: transform; /* Tối ưu hóa hiệu suất khi zoom */
}

/* Khi hover vào hình ảnh */
.card:hover .product-image {
    transform: scale(1.1); /* Phóng to hình ảnh 10% */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Thêm bóng cho sản phẩm khi zoom */
}

/* Tùy chỉnh khi zoom vào */
.card {
    transition: transform 0.3s ease; /* Mượt mà khi phóng to cả card */
}

.card:hover {
    transform: scale(1.03); /* Phóng to nhẹ nhàng card (bao gồm hình ảnh và nội dung) */
    transition: transform 0.3s ease; /* Mượt mà khi phóng to */
}

/* Đảm bảo sản phẩm trong swiper không bị vượt ra ngoài */
.swiper-wrapper {
    display: flex;
    flex-wrap: nowrap;
}

.swiper-slide {
    flex: 0 0 auto;
    margin-right: 20px; /* Khoảng cách giữa các sản phẩm */
    overflow: hidden; /* Đảm bảo hình ảnh không tràn ra ngoài khi zoom */
}

/* Tạo hiệu ứng mượt cho phần tử khi hover */
.swiper-slide:hover {
    transform: scale(1.05); /* Phóng to nhẹ khi hover vào cả slide */
    transition: transform 0.3s ease;
}

</style>
<!-- About Area start -->
<section class="about-area pt-130 rpt-100 rel">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-part rmb-55">
                            <div class="top-part">
                                <img src="/Du_An_1_Nhom3/assets2/images/about/about1.jpg" alt="About"> <a href="du_an_1_Nhom3/?role=client"></a>
                                <div class="icon wow fadeInLeft delay-0-2s"><i class="flaticon-hotel"></i></div>
                            </div>
                            <div class="bottom-part">
                                <a href="https://www.youtube.com/watch?v=79BEz0QI__E" class="mfp-iframe video-play-text wow fadeInRight delay-0-2s">
                                    <i class="fal fa-play"></i>
                                    <span><b>Thước Phim Hotel </b><br> <i>Videos</i></span>
                                </a>
                                <img src="/Du_An_1_Nhom3/assets2/images/about/about2.jpg" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-part">
                            <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">Giới Thiệu Về Hotel</span>
                                <h2>Luôn đem lại cho quý khách những trải nhiệm tốt nhất về dịch và giấc ngủ êm ái trên chiếc giường sang trọng</h2>
                                <p>Chúng tôi luôn tin rằng bản thân mình sẽ luôn làm hài lòng những vị khách xấu tính nhất về dịch vụ và chất lượng vẻ sang trọng của khách sạn chúng tôi</p>
                            </div>
                            <div class="feature-list wow fadeInUp delay-0-3s">
                                <div class="feature-item">
                                    <div class="icon">
                                        <i class="flaticon-check-mark"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Trusted Partners</h5>
                                        <p>Sed ut perspiciatis omniste natus voluptatem accus</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="icon">
                                        <i class="flaticon-check-mark"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Luxury Services</h5>
                                        <p>Quis autem voluptate velise molestiae conse rem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-author wow fadeInUp delay-0-4s">
                                <div class="author">
                                    <img src="/Du_An_1_Nhom3/assets2/images/about/about-author.jpg" alt="Author">
                                </div>
                                <div class="description">
                                    <h5></h5>
                                    <span>Developer Web</span>
                                </div>
                                <div class="signature">
                                    <img src="/Du_An_1_Nhom3/assets2/images/about/signature.png" alt="Signature">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    
        
<!--End Slide show-->
<!-------------------------------------------------------------------------------------------->

<!--Form Search, Lọc -->
<div class="container">
    <!-- <form action="/du_an_1_Nhom3/?role=client&mod=search&action=index" method="POST">
        <div class="row mt-4">
            <div class="form-group col-md-9 col-sm-12 mt-2">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input  style="border: 2px black solid;" type="text" class="form-control pl-5" id="exampleInput" placeholder="Tìm kiếm..." name="keyword">
            </div>
            <div class="form-group col-md-3 col-sm-12 mt-2">
                <button type="submit" class="form-control bg-success" >Tìm kếm</button> -->
                <!-- <input type="submit" class="form-control bg-success"  value="Tìm kiếm" name="search">
            </div>--> 
<!-- </div> -->
    <!-- </form> --> 

    <form action="" method="GET">
    <div class="row">
        <!-- Price Filter -->
        <div class="form-group col-md-6">
            <label for="price_filter" class="form-label">Lọc theo giá</label>
            <select id="price_filter" name="price_filter" class="form-control">
                <option value="" disabled selected>Chọn mức giá</option>
                <option value="under_1m">Dưới 1 triệu</option>
                <option value="above_1m">Trên 1 triệu</option>
                <option value="under_500k">Dưới 500k</option>
            </select>
        </div>

        <!-- Room Type Filter -->
        <div class="form-group col-md-6">
            <label for="room_type" class="form-label">Lọc theo loại phòng</label>
            <div class="dropdown">
                <button class="btn btn-outline-primary w-100 dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lọc theo loại phòng
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
                    <?php foreach ($categories as $category) : ?>
                        <a class="dropdown-item" href="/du_an_1_Nhom3/?role=client&mod=category&action=index&id=<?= $category['id'] ?>">
                            <?= htmlspecialchars($category['name']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</form>



</div>
<!--End form search, lọc-->
<!-------------------------------------------------------------------------------------------->
<hr class="display-4">
<!--Content-->


<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12 text">
            <h1>Khám phá khách sạn , Phòng </h1>
            <p style="font-size: 15px; color:gray;"></p>
        </div>
    </div>


    <div class="slide-container swiper mt-4">
        <div class="row slide-content">
            <!-- sp -->
            <div class="card-wrapper swiper-wrapper col-12">

             

              <?php foreach($production4 as $item) : ?>
                <div class="card swiper-slide ">
                    <div class="card-image">
                        <img src="<?=$item['image'] ?>" alt="" width="100%" class="img-fluid">
                    </div>
                    
                    <div class="card-name text col-12">
                        <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>">
                            <h2 class="text"><?= $item['name']?> </h2>
                        </a>
                        <a href="" class="text-danger" style="float:left ; font-size:20px ;">$<?= $item['price']?></a>
                        <a href="/du_an_1_Nhom3/?role=client&mod=cart&id=<?php echo $item['id']?>" class="text" style="float:right ; "></a>
                    </div>
                </div>
                <?php endforeach ?>

                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div> <br>
            <div class="swiper-pagination"></div>
            
        </div>
    </div>



    <!--End Content-->
    <!-------------------------------------------------------------------------------------------->

  

    <!-------------------------------------------------------------------------------------------->

   
<!-------------------------------------------------------------------------------------------->

<!--Banner 2-->
<div class="container-fluid">
    <div class="row mt-4">
        <img src="public/image/banner4.png" alt="" class="img-fluid">
    </div>
</div>
<!--End Banner 2-->

<!-------------------------------------------------------------------------------------------->

<!--Top Favorite Rooms-->

<div class="container-fluid mt-4">
    <div class="row text-center">
        <div class="col-12 text">
            <h1>Phòng được nhiều người yêu thích nhất</h1>
        </div>
    </div>



    <div class="slide-container swiper mt-4">
        <div class="row slide-content2">
            <div class="card-wrapper swiper-wrapper col-12">
                <?php foreach ($production as $item) : ?>
                    <div class="card swiper-slide ">
                        <div class="card-image">
                            <img src="<?= $item['image'] ?>" alt="" width="100%" class="img-fluid">
                        </div>

                        <div class="card-name text col-12">
                            <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>">
                                <h2 class="text"><?= $item['name'] ?> </h2>
                            </a>
                            <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>" class="text-danger" style="float:left ; font-size:20px ;">$<?= $item['price'] ?></a>
                                                       <a href="" class="text" style="float:right ; "></a>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div> <br>
        <div class="swiper-pagination2 mx-auto"></div>


    </div>
</div>
<!--End Top Favorite Rooms-->
<!-------------------------------------------------------------------------------------------->
<hr class="display-4">
<!--List Room-->
<div class="container-fluid mt-4">
    <div class="row text-center">
        <div class="col-12 text">
            <h1>Khám phá thêm</h1>
            <p style="font-size: 15px; color:gray;"> Chúng tôi đưa ra cho bạn những gợi ý khác có thể bạn sẽ quan
                tâm</p>

        </div>
    </div>
    <div class="slide-container swiper mt-4">
        <div class="row slide-content3">
            <div class="card-wrapper swiper-wrapper col-12">
                <?php foreach ($productions as $item) : ?>
                    <div class="card swiper-slide ">
                        <div class="card-image">
                            <img src="<?= $item['image'] ?>" alt="" class="img-fluid" width="100%">
                        </div>
                        <div class="card-name text col-12">
                            <a href="/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=<?= $item['id'] ?>">
                                <h2 class="text"><?= $item['name'] ?> </h2>
                            </a>
                            <a href="" class="text-danger" style="float:left ; font-size:20px ;"> $<?= $item['price'] ?></a>
                                                       <a href="" class="text" style="float:right ; "></a>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div> <br>
        <div class="swiper-pagination3 mx-auto"></div>
    </div>


</div>
<!--End List Room-->
<!-------------------------------------------------------------------------------------------->
<hr class="display-4">
<!--Dịch vụ tiện ích-->
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12 text">
            <h1>Dịch vụ tiện ích</h1>
            <p style="font-size: 15px; color:gray;"> Hotel còn có các dịch vụ tiện ích khác với mong muốn làm
                hài lòng du khách</p>
        </div>
    </div>

    <div class="row text-center">
        <!-- <p>Ăn uống, giặt ủi, thuê xe, spa, thu đổi ngoại tệ, dọn phòng</p> -->
        <?php foreach ($services as $item) :?>

            <div class="col-md-2 col-sm-4 col-4">
                <a href=""><img src="<?= $item['image'] ?>" width="100" height="108" alt=""></a> <br>
                <a href=""><?= $item['name'] ?></a>
            </div>

        <?php endforeach ?>
    </div>

</div>
</div>








<!--End dịch vụ tiện ích-->
<!-------------------------------------------------------------------------------------------->
<hr class="display-4">
<!--Bài viết nổi bật-->
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12 text">
            <h1>Bài viết nổi bật</h1>
        </div>
    </div>

    <div class="row text-center mt-4">
        <div class="col-md-4 col-sm-6 ">
            <div class="card">
                <a href=""><img src="public/image/sp1.jpg" class="img-fluid" alt=""></a>
                <div class="card-body">
                    <a href="">
                        <h5 class="card-title">Không gian phong</h5>
                    </a>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Voluptatem nihil fugit, omnis animi eius voluptatibus sed dolores? Debitis, sequi,
                        laboriosam dolor tempore omnis suscipit qui nihil doloribus voluptas amet quam!</p>
                    <a href="">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
            <div class="card">
                <a href=""><img src="public/image/sp1.jpg" class="img-fluid" alt=""></a>
                <div class="card-body">
                    <a href="">
                        <h5 class="card-title">Cách làm giàu sau một đêm</h5>
                    </a>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Voluptatem nihil fugit, omnis animi eius voluptatibus sed dolores? Debitis, sequi,
                        laboriosam dolor tempore omnis suscipit qui nihil doloribus voluptas amet quam!</p>
                    <a href="">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
            <div class="card">
                <a href=""><img src="public/image/sp1.jpg" class="img-fluid" alt=""></a>
                <div class="card-body">
                    <a href="">
                        <h5 class="card-title">Cách làm giàu sau một đêm</h5>
                    </a>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Voluptatem nihil fugit, omnis animi eius voluptatibus sed dolores? Debitis, sequi,
                        laboriosam dolor tempore omnis suscipit qui nihil doloribus voluptas amet quam!</p>
                    <a href="">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Bài viết nổi bật-->

<!-------------------------------------------------------------------------------------------->
<hr class="display-4 mt-5">
<!--Đối tác tiêu biểu-->
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-12 text">
            <h1>Đối tác tiêu biểu</h1>
        </div>
        <div class="flex">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2022/07/08/1657286372391-45dab552eed9b787bfc93547e26c6d87.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558339553631-9cebb9f6a7a3b0e427b7a2d9da2fd8c0.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558339557703-5697f31b3e12a942eabc0f613bff8fb9.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558339567663-c7c5e25757f0d69375aa6de6ad57958f.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2021/04/07/1617781232473-330f36367feac4132c5af1b3df54d3f1.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558339648624-307f4a5f54e873a6c9f272673f193062.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558339663962-2037bef017440339eda165360a5e239f.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2019/05/20/1558339666745-2be0cc98504595cda91d0a2a5342a20b.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2021/04/07/1617781263528-febaf8c61699a7df689ffbd475abd453.png?tr=dpr-2,h-19,q-75,w-57" alt="">
    <img class="me-3" src="https://ik.imagekit.io/tvlk/image/imageResource/2021/04/07/1617781253184-2ef4eea06e759ab13bc30fac59e715ad.png?tr=dpr-2,h-19,q-75,w-57" alt="">
</div>


    </div>

</div>
<hr class="display-4">
<div class="container-fluid">
    <div class="row text-center">
        <!-- <img src="public/image/banner5.png" class="img-fluid" alt="">
    </div> -->
</div>
<hr class="display-4">
<!--End Đối tác tiêu biểu-->




</body>
</html>