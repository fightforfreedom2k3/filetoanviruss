<?php

require_once "../DB/dbhelper.php";
require_once "../common/utility.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./main/main.php" ?>
</head>

<body>
    <?php require_once "./main/header.php"; ?>

    <section>

        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="
           background-image: url('../public/image/carosel1.jpg');
           height: 250px;
           margin-top: 50px;
         ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Liên hệ</h1>
                        <h4 class="mb-3">Trang chủ / Liên hệ</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </section>

    <!--Main -->
    <div class="Main">
        <div class="container-fluid">

            <div class="row">
                <!-- Thông tin liên hệ -->
                <div class="col-sm-6" style="padding: 40px 0 0 60px;">
                    <h5 style="color: #c30206; font-weight: bold;">THÔNG TIN LIÊN HỆ</h5>
                    <div class="footer-item-content">
                        <div class="d-flex mt-1">
                            <div class="text-center">
                                <i class="fas fa-map-marker-alt content-detail-icon"></i>
                            </div>
                            <div class="text-left ml-2">
                                <span>Số 1, Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội</span>
                            </div>
                        </div>
                        <div class="d-flex mt-1">
                            <div>
                                <i class="fas fa-phone content-detail-icon"></i>
                            </div>
                            <div class="text-left ml-2">
                                <span>0943 216 069</span>
                            </div>
                        </div>
                        <div class="d-flex mt-1">
                            <div>
                                <i class="far fa-envelope content-detail-icon"></i>
                            </div>
                            <div class="text-left ml-2">
                                <span>hoang15122003@gmail.com</span>
                                <span>hoang.nh211012@sis.hust.edu.vn</span>
                            </div>
                        </div>
                        <div class="d-flex mt-1">
                            <div>
                                <i class="fab fa-skype content-detail-icon"></i>
                            </div>
                            <div class="text-left ml-2">
                                <span>hoang15122003</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- Form đăng ký -->
                    <div class="container register-form">
                        <div class="form">
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Họ và tên *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Số điện thoại *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Địa chỉ *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" cols="auto" rows="5" placeholder="Lời nhắn"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btnSubmit">Gửi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section style="margin-top: 100px;">
        <div class="container text-center">
            <div class="text-center">
                <h5><strong>SẢN PHẨM GIẢM GIÁ</strong></h5>
                <hr class="my-3" style="height: 2px; background-color: #cdcdcd;">
            </div>
            <div class="row">
                <?php
                require_once "product.php";
                ?>
            </div>
            <?= paginarion($number, $page, '') ?>
        </div>
    </section>
            <div class="row">
                <!-- Google Map -->
                <div class="col-sm-12">
                    <div id="map" style="width:100%;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.634176901271!2d105.8400686750308!3d21.007296380636596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac71294bf0ab%3A0xc7e2d20e5e04a9da!2zxJDhuqFpIEjhu41jIELDoWNoIEtob2EgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1706166224796!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "./main/footer.php"; ?>

</body>

</html>