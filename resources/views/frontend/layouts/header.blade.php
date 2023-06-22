 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">Contact</a>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cartAn.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="{{ Route('login') }}">Sign in</a>
                                <a href="{{ Route('contact') }}">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="#"><a href="{{ Route('index') }}">New</a></li>
                            <li><a href="{{ Route('shop') }}">Shop<i class="arrow_carrot-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ Route('shop') }}">Men</a></li>
                                    <li><a href="{{ Route('shop') }}">Women</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ Route('nike') }}">Brands<i class="arrow_carrot-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ Route('nike') }}">Nike</a></li>
                                    <li><a href="{{ Route('addidas') }}">Adidas</a></li>
                                    <li><a href="{{ Route('van') }}">Vans</a></li>
                                    <li><a href="{{ Route('supreme') }}">Supreme</a></li>
                                    <li><a href="{{ Route('converse') }}">Converse</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ Route('aboutUs') }}">Pages<i class="arrow_carrot-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ Route('aboutUs') }}">About Us</a></li>
                                    <!-- <li><a href="./shop-details.html">Shop Details</a></li> -->
                                    <li><a href="{{ Route('shoppingCart') }}">Shopping Cart</a></li>
                                    <li><a href="{{ Route('checkOut') }}">Check Out</a></li>
                                    <li><a href="{{ Route('blogDetail') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ Route('blog') }}">Blog</a></li>
                            <!-- <li><a href="./contact.html">Contacts</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->