<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Devan</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <!-- header -->
     <header>
        <a href="" class="logo"><i class='bx bxs-basket'></i>Delicacy</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="{{ route('halamanhome.index') }}" class="{{ Request::routeIs('halamanhome.index') ? 'home-active' : '' }}">Home</a></li>
            <li><a href="{{ route('halamanproduct.index') }}" class="{{ Request::routeIs('halamanproduct.index') ? 'home-active' : '' }}">Product</a></li>
            <li><a href="{{ route('halamankategori.index') }}" class="{{ Request::routeIs('halamankategori.index') ? 'home-active' : '' }}">Categories</a></li>
            <li><a href="{{ route('halamanabout.index') }}" class="{{ Request::routeIs('halamanabout.index') ? 'home-active' : '' }}">About</a></li>
            <li><a href="{{ route('halamancustomer.index') }}" class="{{ Request::routeIs('halamancustomer.index') ? 'home-active' : '' }}">Customer</a></li>
        </ul>
        <div class="profile">
            <img src="img/profile.jpeg" alt="">
            <span>Devan</span>
            <i class="bx bx-caret-down"></i>
        </div>
     </header>

     <!-- home -->
      <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <!--slide 1-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are delicacy</span>
                    <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <img src="img/home1.png" alt="">
            </div>
            <!--slide 2-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are delicacy</span>
                    <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <img src="img/home2.png" alt="">
            </div>
            <!--slide 3-->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>We are delicacy</span>
                    <h1>Choose delicacy <br> the best healthy <br> chicken salad</h1>
                    <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <img src="img/home3.png" alt="">
            </div>
        </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </section>

      <section class="footer" id="footer">
        <div class="footer-box">
            <a href="#" class="logo"><i class="bx bxs-basket"></i>Delicacy</a>
            <p>GymVast, 50th Street,4th <br>Floor,NYC 10022</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-youtube' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h2>Categories</h2>
            <a href="#">Fruits & Vegetabels</a>
            <a href="#">Dairy Product</a>
            <a href="#">Package Food</a>
            <a href="#">Bevarage</a>
        </div>
        <div class="footer-box">
            <h2>Useful Links</h2>
            <a href="#">Payment & Tax</a>
            <a href="#">Terms Of Use</a>
            <a href="#">My Blog</a>
            <a href="#">Return Policy</a>
        </div>
        <div class="footer-box">
            <h2>Newsletter</h2>
            <p>Get 10% Discount with <br>Email Newsletter</p>
            <form action="">
                <i class='bx bx-envelope' ></i>
                <input type="email" name="" id="" placeholder="Enter Your Email">
                <i class='bx bx-arrow-back bx-rotate-180' ></i>
            </form>
        </div>
      </section>
      <div class="copyright">
        <p>&#169; Toko Buah Devan All Right Reserved.</p>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <!-- js -->
       <script src="js/main.js"></script>
</body>
</html>