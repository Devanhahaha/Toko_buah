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

    <section class="categories" id="categories">
        <div class="heading">
            <h1>Browse Our Hottest <br><span>Categories</span></h1>
            <a href="#" class="btn">See All<i class='bx bx-right-arrow-alt'></i></a>
        </div>
        <div class="categories-container">
            {{-- box 1 --}}
            <div class="box box1">
                <img src="{{ asset('img/cate1.png') }}" alt="">
                <h2>Fruits</h2>
                <span>22 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            {{-- box 2 --}}
            <div class="box box2">
                <img src="{{ asset('img/cate2.png') }}" alt="">
                <h2>VGtables</h2>
                <span>22 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            {{-- box 3 --}}
            <div class="box box3">
                <img src="{{ asset('img/cate3.png') }}" alt="">
                <h2>Drinks</h2>
                <span>22 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            {{-- box 4 --}}
            <div class="box box4">
                <img src="{{ asset('img/cate4.png') }}" alt="">
                <h2>Fresh Nuts</h2>
                <span>22 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
            {{-- box 5 --}}
            <div class="box box5">
                <img src="{{ asset('img/cate5.png') }}" alt="">
                <h2>Spices</h2>
                <span>22 Items</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </div>
    </section>
</body>
</html>