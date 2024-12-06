 <!-------------------------------------------------------------------------------------------->

    <!--Form liên hệ nhanh-->
    <div class="container-fluid contact-home mt-5" style="background-color: antiquewhite;">
    <div class="row" style="background-color: antiquewhite;">
        <div class="col-md-6 col-sm-12">
            <div class="form-row mt-5 mb-4">
                <div class="col-md-3">
                    <img src="public/image/icon_home_contact.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-5">
                    <h2>Liên hệ nhanh</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <form action="">
                <div class="form-row mt-5">
                    <div class="form-group col-md-3 col-sm-4">
                        <input type="text" class="form-control custom-input" id="inputCity" placeholder="Điền tên của bạn">
                    </div>
                    <div class="form-group col-md-3 col-sm-4">
                        <input type="text" class="form-control custom-input" id="inputPhone" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group col-md-3 col-sm-4">
                        <input type="email" class="form-control custom-input" id="inputEmail" placeholder="Email liên hệ" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-10 col-sm-6">
                        <input type="text" class="form-control custom-input" id="inputName" placeholder="Điền tên của bạn">
                    </div>
                    <div class="form-group col-md-2 col-sm-6">
                        <input type="submit" class="form-control btn custom-btn" style="background-color:#fdb913;" value="Gửi đi">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CSS for hover zoom effect -->
<style>
    /* Hiệu ứng hover zoom cho các ô input */
    /* .custom-input {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-input:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        
    }

    .custom-input:focus {
        outline: none;
        transform: scale(1.1);
        box-shadow: 0 0 8px rgba(253, 185, 19, 0.8);
    }
    .custom-btn {
        transition: all 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #fca312;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px); 
    } */
    /* Tạo hiệu ứng cho các input */
.custom-input {
    border-radius: 10px;
    padding: 10px 15px;
    font-size: 16px;
    border: 1px solid #ccc;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}
.custom-input:focus {
    border-color: #fdb913; 
    box-shadow: 0 0 5px rgba(253, 185, 19, 0.6);
    outline: none; 
}

/* Tạo hiệu ứng cho nút gửi */
.custom-btn {
    border-radius: 10px; /* Bo góc cho nút */
    padding: 12px 25px; /* Thêm padding cho nút */
    font-size: 18px;
    text-align: center; 
    transition: background-color 0.3s ease, transform 0.3s ease; /* Thêm hiệu ứng cho nút */
}

/* Hiệu ứng khi hover vào nút */
.custom-btn:hover {
    background-color: #ff9f00; /* Màu nền khi hover */
    transform: scale(1.05); /* Phóng to nút khi hover */
    cursor: pointer; /* Thêm con trỏ khi hover */
}

/* Cải thiện bố cục của form */
.form-row {
    margin-bottom: 20px; /* Khoảng cách giữa các hàng */
}

.col-md-6.col-sm-12 {
    padding: 0 15px; /* Thêm khoảng cách giữa các cột */
}

/* Đảm bảo rằng các tiêu đề không bị lỗi font */
h2 {
    font-size: 24px; /* Tăng kích thước chữ tiêu đề */
    font-weight: bold; /* Chữ đậm */
    color: #333; /* Màu chữ tối */
}

</style>




        </div>
    </div>
    <!--End form liên hệ nhanh-->
    <!-------------------------------------------------------------------------------------------->

    <!--Footer-->

    <footer style="background-color: aquamarine;">
        <div class="container pt-3" >
            <div class="row text-justify">
                <div class="col-md-3 col-sm-12">
                    <!-- <img src="/Du_An_1_Poly_Hotel/public/image/" class="img-fluid" alt=""> -->
                    <p> Hotel mang trong mình khát khao định hình lại thị trường khách sạn truyền
                        thông qua việc nâng cao tiêu chuẩn các khách sạn và ứng dụng chuyển đổi số.
                        Từ đó xây dựng hệ sinh thái căn hộ cho thuê trải dài trên toàn lãnh thổ Việt Nam,
                        mang lại môi trường sống hạnh phúc, tiện nghi cho cộng đồng những người đi thuê khách sạn.</p>
                </div>
                <div class="col-md-3 col-sm-12 ">
                    <h2>Về chúng tôi</h2>
                    <a href="" class="text1" style="text-decoration: none; color: black">Giới thiệu</a> <br>
                    <a href="" class="text1" style="text-decoration: none; color: black">Tin tức</a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h2>Chính sách</h2>
                    <a href="" class="text1" style="text-decoration: none; color: black">Hợp tác</a> <br>
                    <a href="" class="text1" style="text-decoration: none; color: black">Bảo mật</a><br>
                    <a href="" class="text1" style="text-decoration: none; color: black">Đổi trả</a><br>
                    <a href="" class="text1" style="text-decoration: none; color: black">Tuyển dụng</a><br>
                </div>
                <div class="col-md-3 col-sm-12">
                    <h2>Liên hệ</h2>
                    <a href="" class="text1" style="text-decoration: none; color: black">Email:@gmail.com </a> <br>
                    <a href="" class="text1" style="text-decoration: none; color: black">Phone: 0327367912 </a><br>
                    <a href="" class="text1" style="text-decoration: none; color: black">Địa chỉ:  Hà Nội</a><br>

                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->

    <div class="text-center col-12" style="background: #16154e; color:white; height:55px">
        <p class="pt-3">Copyrights © 2023  Hotel.</p>
    </div>
<link rel="stylesheet" href="/public/css/style.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<!-- Swiper JS -->
<script src="public/js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="public/js/script.js">
    slide1();
    slide2();
    slide3();
</script>

</html>