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

     <section class="products" id="products">
        <div class="heading">
            <h1>Our Popular <br><span>Products</span></h1>
            <a href="#" class="btn">Shop Now<i class='bx bx-right-arrow-alt'></i></a>
        </div>
        <div class="products-container">
            {{-- box 1 --}}
            <div class="box">
                <img src="{{ asset('img/p1.png') }}" alt="">
                <span>Fresh Item</span>
                <h2>Farm Fresh Organic <br>fruits 250g</h2>
                <h3 class="price">$7.99 <span>/kg</span></h3>
                <i class='bx bx-cart-alt'></i>
                <i class='bx bx-heart'></i>
                <span class="discount">-25%</span>
            </div>
            {{-- box 2 --}}
            <div class="box">
                <img src="{{ asset('img/p2.png') }}" alt="">
                <span>Fresh Item</span>
                <h2>Farm Fresh Organic <br>fruits 250g</h2>
                <h3 class="price">$7.99 <span>/kg</span></h3>
                <i class='bx bx-cart-alt'></i>
                <i class='bx bx-heart'></i>
                <span class="discount">-25%</span>
            </div>
            {{-- box 3 --}}
            <div class="box">
                <img src="{{ asset('img/p3.png') }}" alt="">
                <span>Fresh Item</span>
                <h2>Farm Fresh Organic <br>fruits 250g</h2>
                <h3 class="price">$7.99 <span>/kg</span></h3>
                <i class='bx bx-cart-alt'></i>
                <i class='bx bx-heart'></i>
                <span class="discount">-25%</span>
            </div>
            {{-- box 4 --}}
            <div class="box">
                <img src="{{ asset('img/p4.png') }}" alt="">
                <span>Fresh Item</span>
                <h2>Farm Fresh Organic <br>fruits 250g</h2>
                <h3 class="price">$7.99 <span>/kg</span></h3>
                <i class='bx bx-cart-alt'></i>
                <i class='bx bx-heart'></i>
                <span class="discount">-25%</span>
            </div>
            {{-- box 5 --}}
            <div class="box">
                <img src="{{ asset('img/p5.png') }}" alt="">
                <span>Fresh Item</span>
                <h2>Farm Fresh Organic <br>fruits 250g</h2>
                <h3 class="price">$7.99 <span>/kg</span></h3>
                <i class='bx bx-cart-alt'></i>
                <i class='bx bx-heart'></i>
                <span class="discount">-25%</span>
            </div>
            {{-- box 6 --}}
            <div class="box">
                <img src="{{ asset('img/p6.png') }}" alt="">
                <span>Fresh Item</span>
                <h2>Farm Fresh Organic <br>fruits 250g</h2>
                <h3 class="price">$7.99 <span>/kg</span></h3>
                <i class='bx bx-cart-alt'></i>
                <i class='bx bx-heart'></i>
                <span class="discount">-25%</span>
            </div>
        </div>
     </section>
</body>
</html>