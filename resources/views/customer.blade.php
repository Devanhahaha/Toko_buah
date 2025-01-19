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

     <section class="customer" id="customer">
        <h2>Why Customer's Love Us?</h2>
        <div class="customer-container">
            {{-- review 1 --}}
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star-half' ></i>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit aspernatur cupiditate itaque excepturi quae in ratione!</p>
                <div class="review-profile">
                    <img src="{{ asset('img/c1.jpg') }}" alt="">
                    <h3>Michele Smith</h3>
                </div>
            </div>
            {{-- review 2 --}}
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star-half' ></i>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit aspernatur cupiditate itaque excepturi quae in ratione!</p>
                <div class="review-profile">
                    <img src="{{ asset('img/c2.jpg') }}" alt="">
                    <h3>Michele Smith</h3>
                </div>
            </div>
            {{-- review 3 --}}
            <div class="box">
                <i class='bx bxs-quote-alt-left'></i>
                <div class="stars">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star-half' ></i>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit aspernatur cupiditate itaque excepturi quae in ratione!</p>
                <div class="review-profile">
                    <img src="{{ asset('img/c3.jpg') }}" alt="">
                    <h3>Michele Smith</h3>
                </div>
            </div>
        </div>
     </section>
</body>
</html>