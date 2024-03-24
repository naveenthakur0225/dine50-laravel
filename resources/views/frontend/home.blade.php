@extends('layouts.app')
@section('title', 'Home Page')
@section('content') 
    <div class="wrapper">
        <div class="containerr home-page">
            
            <div id="login-sidepanel" class="login-sidepanel"> @include('frontend.pages.login')</div>
            
            <div class="site-banner m-auto pt-2 pb-5">
                <div class="pt-4 banner-title">
                    <h1 class="text-white text-center mb-2">Get <span class="mighty-text">50%</span> off at Dine-in</h2>
                    <p  class="text-white text-center mt-3 mb-5"> Enjoy greatest saving offers and benefits at 40+ restaurants</p>
                </div>
                <div class="slider-outer mb-5">
                    <div class="my-slider mb-5">
                        <div><img class="img-fluid" src="https://static.timesprime.com/2x/discoveryhomepagenew.png" alt="slider-img"></div>
                        <div><img class="img-fluid" src="https://static.timesprime.com/2x/homepageg1.png" alt="slider-img"></div>
                        <div><img class="img-fluid" src="https://static.timesprime.com/2x/hotstar1yearhp.png" alt="slider-img"></div>
                        <div><img class="img-fluid" src="https://static.timesprime.com/2x/sony1yearhp.png" alt="slider-img"></div>
                        <div><img class="img-fluid" src="https://static.timesprime.com/2x/ythomenew.png" alt="slider-img"></div>
                    </div>
                </div>
                <div class="joinCtaContainer text-white d-flex justify-content-center pb-4">
                    <div class="joinCtaContainer-inner">
                        <p >Limited Period Offer</p>
                        <div class="membershipButton mt-2">
                            <button class="btn text-white site-button">
                                Starting ₹1199 @ ₹999
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="text-center text-white">
                    <p class="mb-1 fs-16">Already a member ?</p>
                    <a href="" class="text-white fs-16">Login</a>                
                </div>
                <div class="section-breaker mt-3 mb-5"></div>
            </div>
            <div class="membership-section">
                <div class="marquee-outer">
                    <marquee>
                        <span>20+ Subscriptions | Benefits on 40+ Brands | Access to Exclusive Events |</span>
                        <span>20+ Subscriptions | Benefits on 40+ Brands | Access to Exclusive Events |</span>
                        <span>20+ Subscriptions | Benefits on 40+ Brands | Access to Exclusive Events |</span>
                        <span>20+ Subscriptions | Benefits on 40+ Brands | Access to Exclusive Events |</span>
                        <span>20+ Subscriptions | Benefits on 40+ Brands | Access to Exclusive Events |</span>
                    </marquee>
                </div>
                <div class="membership-heading">
                    <h2 class="text-white  text-center fs-40 fw-700">
                        <span>The only <span class="membership-bold">Membership</span> with</span>
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                         <span class="animation-text">
                            <span class="membership-bold">20+ Subscription</span>
                        </span>
                    </h2>
                </div>
                <div class="search-membership">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-trvel-tab" data-bs-toggle="pill" data-bs-target="#pills-travel" type="button" role="tab" aria-controls="pills-travel" aria-selected="false">Travel</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-entertainment-tab" data-bs-toggle="pill" data-bs-target="#pills-entertainment" type="button" role="tab" aria-controls="pills-entertainment" aria-selected="false">Entertainment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-food-dining-tab" data-bs-toggle="pill" data-bs-target="#pills-food-dining" type="button" role="tab" aria-controls="pills-food-dining" aria-selected="false">Food & Dining</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="text-white   tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem  all</div>
                        <div class="text-white   tab-pane fade" id="pills-travel" role="tabpanel" aria-labelledby="pills-travel-tab">lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem travel</div>
                        <div class="text-white   tab-pane fade" id="pills-entertainment" role="tabpanel" aria-labelledby="pills-entertainment-tab">lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem Entertainment </div>
                        <div class="text-white   tab-pane fade" id="pills-food-dining" role="tabpanel" aria-labelledby="pills-food-dining-tab">lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem  food dining</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.open-login-nav').on('click', function(event) {
                event.preventDefault();
                $('.login-sidepanel').css('width', '400px');
                // $('.login-sidepanel').css('position', 'absolute');
                $('nav.navbar').css('z-index', '0');
                $('body').addClass('login-nav-opened');
            });
            $('.close-login-nav').on('click', function(event) {
                $('.login-sidepanel').css('width', '0px');
                // $('.login-sidepanel').css('position', 'fixed');
                $('nav.navbar').css('z-index', '1');
                $('body').removeClass('login-nav-opened');
            });
            $('.my-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                speed: 500,
                infinite: true,
                autoplaySpeed: 1000,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                        slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                        slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>
@endsection