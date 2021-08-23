<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../foodvietnam/css/style.css">
    <title>menu</title>
</head>
<style>
    :root {
        --primary-color: #0F9D58;
        --background-color: #f0f3f7;
        --secon-color: #9da2ad;
        --grey: #7a7a7b;
        --white: #ffffff;
        --footer: rgb(255, 224, 224);
    }

    .menu-item:hover {
        color: var(--white);
        background-color: var(--primary-color);
        border-radius: 1rem;
    }

    .menu-item.active1 {
        color: var(--white);
        background-color: var(--primary-color);
        border-radius: 1rem;
    }
</style>

<body>
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="#home">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="../../foodvietnam/gioithieu.php">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="../../foodvietnam/index.php#cactinhthanh">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="../../foodvietnam/index.php#testimonial">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>

    <div class="nav">
        <div class="menu-wrap">
            <a href="../../foodvietnam/index.php/">
                <div class="logo">
                    ẨM THỰC MIỀN TRUNG
                </div>
            </a>
            <div class="menu h-xs">
                <a href="../../foodvietnam/index.php">
                    <div class="menu-item active1" id="active1">
                        Trang chủ
                    </div>
                </a>
                <a href="../../foodvietnam/gioithieu.php">
                    <div class="menu-item active2">
                        Giới thiệu
                    </div>
                </a>
                <a href="../../foodvietnam/index.php#cactinhthanh">
                    <div class="menu-item active3">
                        Các tỉnh thành
                    </div>
                </a>
                <a href="../../foodvietnam/index.php#testimonial">
                    <div class="menu-item active4">
                        Tour du lịch
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <div class="cart-btn">
                    <i class="bx bx-search" id='search-btn'></i>
                    <i class='bx bx-book-heart' id='heart-btn'></i>
                    <a href="../../foodvietnam/login/"><i class='bx bx-user-circle'></i></a>
                </div>
            </div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="tìm kiếm...">
            <label for="search-box" class="bx bx-search"></label>
        </div>

        <ul id="buyItems" class="heart-items-container">
            <h2>Mục yêu thích</h2>
            <li class="heart-items">
                <span class="fas fa-times"></span>
                <img src="assets/nghean.jpg" alt="">
                <div class="content">
                    <h3 class="productName">Quảng Nam</h3>
                    <a href="">Xem ngay</a>
                </div>
            </li>
            <li class="heart-items">
                <span class="fas fa-times"></span>
                <img src="assets/nghean.jpg" alt="">
                <div class="content">
                    <h3 class="productName">Đà Nẵng</h3>
                    <a href="">Xem ngay</a>
                </div>
            </li>            <li class="heart-items">
                <span class="fas fa-times"></span>
                <img src="assets/nghean.jpg" alt="">
                <div class="content">
                    <h3 class="productName">Quãng Ngãi</h3>
                    <a href="">Xem ngay</a>
                </div>
            </li>

        </ul>
    </div>
<script src="../index.js"></script>
</body>

</html>