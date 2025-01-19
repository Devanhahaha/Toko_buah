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

     <section class="about" id="about">
        <img src="{{ asset('img/about.png') }}" alt="">
        <div class="about-text">
            <span>About Us</span>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente est quis. Quam id atque cupiditate facilis neque perferendis porro?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, consequuntur aperiam!</p>
            <a href="#" class="btn">Learn More<i class='bx bx-right-arrow-alt'></i></a>
        </div>
     </section>
</body>
</html>