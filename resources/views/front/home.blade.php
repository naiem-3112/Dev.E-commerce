<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dev Ecommerce</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_template/images/favicon.png')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap"
        rel="stylesheet" /> --}}

    <link rel="stylesheet" href="{{asset('front_template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front_template/css/slick-theme.css')}}">
</head>

<body>
    <button class="topbtn"><i class="fas fa-angle-up"></i></button>
    <!--TopBar-->
    @if($settingGeneral != null)
    <div class="container-fluid pt-2 pb-2 topbar">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left text-white">
                    {{ $settingGeneral->welcome_msg }}
                </div>
                <div class="col-6 topbar-right">
                    <ul class="menu">
                        <li><a href="#"><i class="fas fa-cog"></i> Settings <i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="#">my<span>profile</span></a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fas fa-money-check"></i> Currency <i
                                    class="fas fa-angle-down"></a></i>
                            <ul>
                                @foreach($currencies as $currency)
                                <li><a href="#">{{ $currency->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#"><i class="fas fa-language"></i> Language <i class="fas fa-angle-down"></i></a>
                            <ul>
                                @foreach($languages as $language)
                                <li><a href="#">{{ $language->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="">Login <i class="fas fa-sign-in-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End of Topbar-->

    <!--SearchBar-->
    <div class="container-fluid pt-4 pb-4 searchBar">
        <div class="container">
            <div class="row">
                <div>
                    <a href="index.html"><img src="{{asset('logo/website/'. $settingGeneral->logo)}}" class="img-fluid"
                            alt="Logo"></a>
                </div>
                <div class="col-md-6 col-lg-5 text-center">
                    <form action="#">
                        <input type="text" class="search_box" placeholder="Search what you want">
                        <div class="search_category">
                            <select class="nice-select">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="search_btn"><i class="fas fa-search"></i></button>

                    </form>
                </div>
                <div class="col-md-8 col-lg-6 text-center text-white searchbar-right">
                    <ul>
                        <li><a href="#"><i class="fas fa-headset"></i> Call Us:
                                <span>(+88){{ $settingGeneral->cell }}</span></a></li>
                        <li><a href="#"><i class="fas fa-balance-scale-left"></i>
                                <p class="count">5</p>
                            </a></li>

                        <li><a href="#"><i class="fas fa-bookmark"></i>
                                <p class="count">5</p>
                            </a></li>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i>
                                <p class="count">5</p> $20.00
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End of SearchBar-->
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light full-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <i class="fas fa-bars"></i> all categories <i
                                class="fas fa-angle-down pr-5"></i><span class="sr-only">(current)</span></a>
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }} <i class="fas fa-angle-right padding"></i></a>
                                <ul>
                                    @foreach($category->subCategories as $category)
                                    <li><a href="#">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item pr-2">
                        <a class="nav-link" href="#">Home <i class="fas fa-angle-down"></i></a>
                    </li>


                    <li class="nav-item pr-2">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">pages <i
                                class="fas fa-angle-down"></i></a>

                        {{-- <ul>
                            <li><a href="#">About Pge</a></li>
                            <li><a href="#">Cart Page</a></li>
                            <li><a href="#">Checkout Page</a></li>
                            <li><a href="#">Compare Page</a></li>
                            <li><a href="login-register.html">Login & Register Page</a></li>
                            <li><a href="#">Account Page</a></li>
                            <li><a href="#">Wishlist Page</a></li>
                        </ul> --}}

                    </li>
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">about us <i
                                class="fas fa-angle-down"></i></a>
                    </li>
                    <li class="nav-item pr-2">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">contact us <i
                                class="fas fa-angle-down"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End of NavBar-->

    <!--Banner Part-->
    <section id="slider-full banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                @foreach($products as $key => $product)
                <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
                    <img src="{{asset('images/product/'.$product->image)}}" class="img-fluid d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h2>{{ $product->category->name }}</h2>
                        <h1>{{ $product->name }}</h1>
                        <p>{{ $product->description }}</p>
                        <button type="button" class="btn btn-primary text-uppercase">Shop now</button>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
    <!--End of banner part-->

    <!-- INfo Start Here -->
    <div class="container-fluid pt-5 pb-4 text-center">
        <h3 class="section_title">our methods</h3>
        <div class="container methods">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-left">

                    <img src="{{asset('front_template/images/icons-1.png')}}" alt="">
                    <div class="method_txt">
                        <h2>Free shipping</h2>
                        <p>On all orders over $75.00</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-left">

                    <img src="{{asset('front_template/images/icons-2.png')}}" alt="">
                    <div class="method_txt">
                        <h4>Free returns</h2>
                            <p>On all orders over $75.00</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-left">

                    <img src="{{asset('front_template/images/icons-3.png')}}" alt="">
                    <div class="method_txt">
                        <h4>100% payment secure</h2>
                            <p>On all orders over $75.00</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-left">

                    <img src="{{asset('front_template/images/icons-4.png')}}" alt="">
                    <div class="method_txt">
                        <h2>support 24/7</h2>
                        <p>On all orders over $75.00</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- INfo End Here -->

    <!-- Category Isotope -->
    <div class="container-fluid pt-5 pb-4">
        <h3 class="section_title text-center">Choose the beset products that suits you</h3>
        <div class="container">
            <div class="work-top text-center pt-4 pb-4">
                <button type="button" data-filter="all">All</button>
                @foreach($categories as $category)
                <button type="button" data-filter=".{{ $category->name }}">{{ $category->name }}</button>
                @endforeach
            </div>

            <div class="row work-bottom">
                @foreach($categories as $category)
                @foreach($category->products as $product)
                <div class="hot_deals mix {{ $category->name }}">

                    <div class="hot_deals_image">

                        <img src="{{ asset('images/product/thumbnail/'. $product->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>

                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt">
                        <p>Product Type</p>
                        <h1>{{ $product->name }}</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>{{ $product->price }}</span></del><span>{{ $product->price }}</span><span class="discount"> 5%</span>
                        </p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <!-- end of category isotope -->

    <!-- best Seller part -->
    <div class="container-fluid pt-5 pb-4">
        <h3 class="section_title">Best Sellers</h3>
        <p class="section_description">Add bestselling products to weekly line up</p>
        <div class="container">
            <div class="row seller-slick">

                <div class="selling-item">
                    <div class="image_des">
                        <img src="{{asset('front_template/images/product_1-1.jpg')}}" alt="">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                    </div>
                    <div class="search_icon"><a href=""><i class="fas fa-search"></i></a></div>

                    <div class="img-overlay">
                        <a href="">add to cart</a>
                        <a class="text-right" href=""><i class="fas fa-balance-scale-right"></i></a>
                        <a class="text-right" href=""><i class="far fa-bookmark"></i></a>
                    </div>
                </div>

                <div class="selling-item">
                    <div class="image_des">
                        <img src="{{asset('front_template/images/product_2-1.jpg')}}" alt="">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                    </div>
                    <div class="search_icon"><a href=""><i class="fas fa-search"></i></a></div>

                    <div class="img-overlay">
                        <a href="">add to cart</a>
                        <a class="text-right" href=""><i class="fas fa-balance-scale-right"></i></a>
                        <a class="text-right" href=""><i class="far fa-bookmark"></i></a>
                    </div>
                </div>

                <div class="selling-item">
                    <div class="image_des">
                        <img src="{{asset('front_template/images/product_3-1.jpg')}}" alt="">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                    </div>
                    <div class="search_icon"><a href=""><i class="fas fa-search"></i></a></div>

                    <div class="img-overlay">
                        <a href="">add to cart</a>
                        <a class="text-right" href=""><i class="fas fa-balance-scale-right"></i></a>
                        <a class="text-right" href=""><i class="far fa-bookmark"></i></a>
                    </div>
                </div>

                <div class="selling-item">
                    <div class="image_des">
                        <img src="{{asset('front_template/images/product_4-1.jpg')}}" alt="">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                    </div>
                    <div class="search_icon"><a href=""><i class="fas fa-search"></i></a></div>

                    <div class="img-overlay">
                        <a href="">add to cart</a>
                        <a class="text-right" href=""><i class="fas fa-balance-scale-right"></i></a>
                        <a class="text-right" href=""><i class="far fa-bookmark"></i></a>
                    </div>
                </div>

                <div class="selling-item">
                    <div class="image_des">
                        <img src="{{asset('front_template/images/product_5-1.jpg')}}" alt="">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                    </div>
                    <div class="search_icon"><a href=""><i class="fas fa-search"></i></a></div>

                    <div class="img-overlay">
                        <a href="">add to cart</a>
                        <a class="text-right" href=""><i class="fas fa-balance-scale-right"></i></a>
                        <a class="text-right" href=""><i class="far fa-bookmark"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of best Seller part -->

    <!-- categories -->
    <div class="container-fluid pt-5 pb-4">
        <h3 class="section_title">Popular Categories</h3>
        <p class="section_description">Add Popular Categories to weekly line up</p>
        <div class="container">
            <div class="row category-slick">
                @foreach($categories as $category)
                <div class="popular_categories">
                    <div class="category_image">
                        <img src="{{asset('front_template/images/category_1.jpg')}}" alt="">
                    </div>
                    <div class="category_txt">
                        <h1>{{ $category->name }}</h1>
                        <p>{{ $category->products->count() }}</p>
                        <a href="">shop now <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End of categories -->

    <!-- Hot Deals -->
    <div class="container-fluid pt-5 pb-4">
        <h3 class="section_title">Hot Deals</h3>
        <p class="section_description">Add hot products to weekly line up</p>
        <div class="container">
            <div class="row hot-slick">

                <div class="hot_deals">
                    <div class="hot_deals_image">
                        <img src="{{asset('front_template/images/hot_deal_1-1.jpg')}}" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>

                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>

                <div class="hot_deals">
                    <div class="hot_deals_image">
                        <img src="{{asset('front_template/images/hot_deal_1-1.jpg')}}" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>

                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>

                <div class="hot_deals">
                    <div class="hot_deals_image">
                        <img src="{{asset('front_template/images/hot_deal_1-1.jpg')}}" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>

                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>

                <div class="hot_deals">
                    <div class="hot_deals_image">
                        <img src="{{asset('front_template/images/hot_deal_1-1.jpg')}}" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>

                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>

                <div class="hot_deals">
                    <div class="hot_deals_image">
                        <img src="{{asset('front_template/images/hot_deal_1-1.jpg')}}" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>

                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt">
                        <p>Product Type</p>
                        <h1>Product Name</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>$20</span></del><span> 34.21</span><span class="discount"> 5%</span>
                        </p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Hot Deals -->

    <!-- New Arrivals -->
    <div class="container-fluid pt-5 pb-4">
        <h3 class="section_title">New Arrivals</h3>
        <p class="section_description">Add New products to weekly line up</p>
        <div class="container">
            <div class="row hot-slick">
                @foreach($newProducts as $product)
                <div class="hot_deals">
                    <div>
                        <img src="{{asset('images/product/thumbnail/'.$product->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="search_icon">
                        <a href="" class="search_button"><i class="fas fa-search"></i></a>
                        <a href="" class="addtocart">add to cart</a>
                        <a href="#"><i class="fas fa-balance-scale-right"></i></a>
                        <a href="#"><i class="far fa-bookmark"></i></a>
                    </div>
                    <div class="hot_deals_txt" style="height: 100%; padding: 0">
                        <p>Product Type</p>
                        <h1>{{ $product->name }}</h1>
                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <i class="far fa-star"></i><i class="far fa-star"></i>
                        <p class="price"><del><span>${{ $product->pricre }}</span></del><span> {{ $product->price }}</span><span
                                class="discount"> 5%</span></p>
                        <p>Availablity: <span>300 in stock</span></p>
                        <p>Hurry Up Offers Ends in: <span>2h:30h:15s</span></p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="container-fluid pt-2 footer">
        <div class="row">
            <div class="col-md-6 col-lg-4 pt-5 text-left text-white footer-left">
                <div style="width: 80px; overflow: hidden; border-radius: 15%">
                    <a href="index.html"><img src="{{asset('logo/website/'. $settingGeneral->logo)}}" class="img-fluid"
                            alt="Logo"></a>
                </div>
                <p class="footer_txt">We are a team of designers and developers that create high quality HTML template
                </p>
                <i class="fas fa-phone-volume phone"></i><span>Need Help?</span>
                <p>(+800) {{ $settingGeneral->cell }}</p>
                <div class="icons">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                </div>
                <p class="copyright">Copyright © {{ $settingGeneral->copyright }}. All Rights Reserved</p>
            </div>
            <div class="col-md-6 col-lg-2 footer-right">
                <h2>Information</h2>
                <ul>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Delivery</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 footer-right">
                <h2>Custom Links</h2>
                <ul>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Delivery</a></li>
                    <li><a href="">Delivery</a></li>
                </ul>

            </div>
            <div class="col-md-6 col-lg-4 footer-right">
                <h2> Newsletter</h2>
                <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal
                    notice.</p>
                <div class="col-md-6 col-lg-5 text-center">
                    <form action="#">
                        <input type="text" class="search_box" placeholder="Enter Your Email Here">

                        <button class="search_btn search_btn_footer footer_btn">Sign Up</button>

                    </form>
                </div>
                <div class="app-img">
                    <a href="#"><img src="{{asset('front_template/images/app_store.png')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('front_template/images/google_play.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Footer -->
    {{--style="margin: 170px 170px 0 170px; style=" ""--}}
    @else
    <div class="row">
        <h2 style="margin-top: 100px;  background: #2b2b2b; padding: 10px; text-align: center; font-weight: bold; color: #c51f1a"
            class="col-lg-8 offset-2 col-md-8 offset-2">Please Set-up Your Setting Section First </h2>
    </div>
    <div class="row">
        <i style="margin: 0 auto; font-size: 50px; padding: 5px; color: red" class="fas fa-arrow-down"></i>
    </div>
    <div class="row">
        <a class="col-lg-2 offset-5 col-md-2 offset-5"
            style="border-bottom: 1px solid #5cb85c; text-align: center; font-weight: bold; text-decoration: none; color: #0e5b44"
            href="{{ route('admin.dashboard') }}" target="_blank">Go To Admin Dashboard</a>

    </div>
    @endif

    <!-- Script -->
    <script src="{{asset('front_template/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('front_template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front_template/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front_template/js/slick.min.js')}}"></script>
    <script src="{{asset('front_template/js/custom.js')}}"></script>
    <script src="{{asset('front_template/js/mixitup.min.js')}}"></script>
</body>

</html>
