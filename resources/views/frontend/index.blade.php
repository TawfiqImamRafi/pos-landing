@extends('frontend.layouts.layout')

@section('main_content')

<!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-8">
                            <div class="banner-content z-index-1">
                                <div class="icon-seller mb-20">
                                    <img src="assets/images/banner/style2/best-seller.png" alt="banner">
                                </div>
                                <h1 class="title">{{__('karbari.best')}}<span> {{__('karbari.application')}}</span><br>
                                {{__('karbari.testing-tool')}}-DataTrix</h1>
                                <p class="desc">
                                   {{__('karbari.desc')}} 
                                </p>
                                <div class="btn-part">
                                    <a class="readon started get-new" href="about.html">{{__('karbari.getstarted')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-img">
                   <div class="images-part"> 
                        <img src="assets/images/banner/style2/bnr-ly2.png" alt="">
                    </div>
                   <img class="layer-img" src="assets/images/banner/style2/bnr-ly1.png" alt=""> 
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services style6 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style8/1.png" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">                            
                                        <h3 class="title"><a href="web-development.html">{{__('karbari.service-title')}}</a></h3>
                                    </div>
                                    <p class="services-txt">  {{__('karbari.service-desc')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style8/2.png" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">                            
                                        <h3 class="title"><a href="web-development.html">{{__('karbari.service-title')}}</a></h3>
                                    </div>
                                    <p class="services-txt">  {{__('karbari.service-desc')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style8/3.png" alt="">
                                </div>
                                <div class="services-content">
                                    <div class="services-title">                            
                                        <h3 class="title"><a href="web-development.html"></a>{{__('karbari.service-title')}}</h3>
                                    </div>
                                    <p class="services-txt">  {{__('karbari.service-desc')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style4 pb-100 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testing-img">
                                <img src="assets/images/about/about-testing.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15 md-pt-60">
                            <div class="about-content">
                                <div class="logo-img">
                                    <img src="assets/images/about/why.png" alt="">
                                </div>
                                <h2 class="title">Easier and Faster Testing with <span>AI Testbot</span></h2>
                                <p>
                                    We've been building creative tools together for over a decade and have a deep appreciation tools.
                                </p>
                                <ul class="rs-features-list">
                                    <li><i class="fa fa-check"></i><span>Build at the speed of innovation </span></li>
                                    <li><i class="fa fa-check"></i><span>Quick Results in 20 minutes</span></li>
                                    <li><i class="fa fa-check"></i><span>No Coding, No Setup</span></li>
                                    <li><i class="fa fa-check"></i><span>Drive Business Impact</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Counter Section Start -->
            <div id="rs-counter" class="rs-counter style3 gray-color modify2 pt-90 pb-80">
                <div class="container">
                    <div class="counter-top-area">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 md-pb-50">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count k purple-color">20</span>
                                        </div>
                                        <h3 class="title">Happy Clients</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 md-pb-50">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count k blue-color">25</span>
                                        </div>
                                        <h3 class="title">Projects Done</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 sm-pb-50">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus pink-color">95</span>
                                        </div>
                                        <h3 class="title">Have Companies</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-list">
                                    <div class="counter-text">
                                        <div class="count-number">
                                            <span class="rs-count plus paste-color">50</span>
                                        </div>
                                        <h3 class="title">Team Members</h3>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->

            <!-- Project Section Start -->
            <div id="rs-project" class="rs-project style6 modify1 pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title5 mb-50 text-center">
                        <div class="logo-icon">
                            <img src="assets/images/portfolio.png" alt="">
                        </div>
                        <h2 class="title">Recent <span>Case Studies</span></h2>
                        <p class="desc">
                            We've been building creative tools together for over a decade and have a deep appreciation for software applications and  AI tools.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-40">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="assets/images/project/style4/1.jpg" alt="images">
                                    <div class="plus-icon"><a href="case-studies-style1.html"><i class="fa fa-plus"></i></a></div>
                                </div>
                                <div class="project-content"> 
                                    <h3 class="title"><a href="case-studies-style1.html">Growth Strategies</a></h3>
                                    <span class="category"><a href="case-studies-style1.html">Application Testing</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-40">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="assets/images/project/style4/2.jpg" alt="images">
                                    <div class="plus-icon"><a href="case-studies-style1.html"><i class="fa fa-plus"></i></a></div>
                                </div>
                                <div class="project-content"> 
                                    <h3 class="title"><a href="case-studies-style1.html">Product Design</a></h3>
                                    <span class="category"><a href="case-studies-style1.html">Application Testing</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 md-mb-40">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="assets/images/project/style4/3.jpg" alt="images">
                                    <div class="plus-icon"><a href="case-studies-style1.html"><i class="fa fa-plus"></i></a></div>
                                </div>
                                <div class="project-content"> 
                                    <h3 class="title"><a href="case-studies-style1.html">Analytic Solutions</a></h3>
                                    <span class="category"><a href="case-studies-style1.html">Application Testing</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="assets/images/project/style4/4.jpg" alt="images">
                                    <div class="plus-icon"><a href="case-studies-style1.html"><i class="fa fa-plus"></i></a></div>
                                </div>
                                <div class="project-content"> 
                                    <h3 class="title"><a href="case-studies-style1.html">Product Engineering</a></h3>
                                    <span class="category"><a href="case-studies-style1.html">Application Testing</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-part mt-60 md-mt-30 text-center">
                        <a class="readon started" href="case-studies-style1.html">view Case Studies</a>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->
            <!-- Pricing section start -->
            <div id="rs-pricing" class="rs-pricing pt-relative style2 modify1 pt-120 pb-150 md-pt-80 md-pb-80"> 
                <div class="container pt-relative">
                    <div class="sec-title2 text-center mb-45">
                        <h2 class="title title2">
                           Our Pricing Plan
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 md-pb-30">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge secondary-bg">
                                    Silver
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/1.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">29.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>1 Native Android App</span></li>
                                        <li><i class="fa fa-close"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now price" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-pb-30">
                            <div class="pricing-table light-gray-bg">
                                <div class="pricing-badge secondary-bg">
                                    Gold
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/2.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">39.99</span>
                                        <span class="table-period">Monthly Package</span>
                                    </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>2 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now price" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pricing-table new-style2">
                                <div class="pricing-badge secondary-bg">
                                    Platinum
                                </div>
                                <div class="pricing-icon">
                                    <img src="assets/images/pricing/main-home/icons/3.png" alt="">
                                </div>
                                <div class="pricing-table-price">
                                        <div class="pricing-table-bags">
                                            <span class="pricing-currency">$</span>
                                            <span class="table-price-text">79.99</span>
                                            <span class="table-period">Monthly Package</span>
                                        </div>
                                </div>
                                <div class="pricing-table-body">
                                    <ul>
                                        <li><i class="fa fa-check"></i><span>Powerful Admin Panel</span></li>
                                        <li><i class="fa fa-check"></i><span>3 Native Android App</span></li>
                                        <li><i class="fa fa-check"></i><span>Multi-Language Support</span></li>
                                        <li><i class="fa fa-check"></i><span>Support via E-mail and Phone</span></li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a class="readon buy-now price" href="#">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing section end -->

            <!-- Testimonial Section Start -->
            <div id="rs-testimonial" class="rs-testimonial style6 gray-color pt-100 pb-100 md-pt-80 md-pb-80 md-pl-15 md-pr-15">
               <div class="sec-title5 mb-60 text-center">
                   <div class="logo-icon">
                       <img src="assets/images/heart.png" alt="">
                   </div>
                   <h2 class="title">Clients <span> Testimonials</span></h2>
                   <p class="desc">
                       We've been building creative tools together for over a decade and have a deep appreciation for software applications and  AI tools.
                   </p>
               </div>
               <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/1.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Sonia Akter</div>
                                <span class="testi-title">Graphic Designer</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/2.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Shammi Akther</div>
                                <span class="testi-title">CEO, Brick Consulting</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/3.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Tohidul Islam</div>
                                <span class="testi-title">Web Developer</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/4.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Abu Sayed</div>
                                <span class="testi-title">SEO Marketing</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/5.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Abdul Korim</div>
                                <span class="testi-title">Design Lead</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/1.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Sonia Akter</div>
                                <span class="testi-title">Graphic Designer</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/2.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Shammi Akther</div>
                                <span class="testi-title">CEO, Brick Consulting</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/3.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Tohidul Islam</div>
                                <span class="testi-title">Web Developer</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/4.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Abu Sayed</div>
                                <span class="testi-title">SEO Marketing</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/5.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Abdul Korim</div>
                                <span class="testi-title">Design Lead</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/1.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Sonia Akter</div>
                                <span class="testi-title">Graphic Designer</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/2.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Shammi Akther</div>
                                <span class="testi-title">CEO, Brick Consulting</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/3.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Tohidul Islam</div>
                                <span class="testi-title">Web Developer</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/4.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Abu Sayed</div>
                                <span class="testi-title">SEO Marketing</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="assets/images/testimonial/main-home/5.jpg" alt="Images">
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">Abdul Korim</div>
                                <span class="testi-title">Design Lead</span>
                                <div class="rating">
                                    <img src="assets/images/testimonial/main-home/rating.png" alt="Images">
                                </div>
                            </div>
                        </div>
                        <div class="item-content-basic">
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
                            <span><img src="assets/images/testimonial/main-home/quote11.png" alt="Images"></span>
                        </div>
                    </div>
               </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style2 pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">  
                    <div class="sec-title5 mb-60 text-center">
                        <div class="logo-icon">
                            <img src="assets/images/tips.png" alt="">
                        </div>
                        <h2 class="title">Recent <span> Technology</span> Updates</h2>
                        <p class="desc">
                            We've been building creative tools together for over a decade and have a deep appreciation for software applications and  AI tools.
                        </p>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Software Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 16 Nov 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Necessity May Give Us Your Best Virtual Court System</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button style2"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/inner/2.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html"> Web Development</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 20 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Tech Products That Makes Its Easier to Stay at Home</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button style2"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/inner/3.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 22 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Open Source Job Report Show More Openings Fewer</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button style2"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/inner/4.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Artifical Intelligence</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 26 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Types of Social Proof What its Makes Them Effective</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button style2"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/inner/2.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Digital Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 28 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Tech Firms Support Huawei Restriction, Balk at Cost</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button style2"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">It Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> 30 December 2020</li>
                                   <li class="admin"><i class="fa fa-user-o"></i> admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html">Servo Project Joins The Linux Foundation Fold Desco</a></h3>
                               <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled...</p>
                               <div class="blog-button style2"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Call Action Section Start -->
            <div class="rs-call-action bg17 pb-100 pt-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="action-wrap">
                                <div class="icon-img">
                                    <img src="assets/images/call-us/rocket.png" alt="Images">
                                </div>
                                <h2 class="title">Let’s Start a Cool Project With <span class="watermark">Braintech</span></h2>
                                <div class="btn-part mt-43">
                                    <a class="readon started" href="contact.html">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call Action Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact pt-120 gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With Expert Engineers.</h2>
                                </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Email:</span>
                                        <a href="tel:123222-8888">(123) 222-8888</a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone:</span>
                                       <a href="#">support@rstheme.com</a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc">New Jesrsy, 1201, USA</div>
                                   </div>
                               </div>
                           </div>
                        </div> 
                        <div class="col-lg-8 pl-70 md-pl-15 md-mt-40">
                            <div class="contact-widget onepage-style">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>

                               </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="https://rstheme.com/products/html/braintech/mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <div class="form-group mb-0">
                                                <input class="readon learn-more submit" type="submit" value="Submit Now">
                                            </div>
                                        </div>  
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-canvas pt-120 md-pt-70">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14601.855254448343!2d90.3703357!3d23.8021006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b2cd1d4af09132f!2sDatatrix%20Soft!5e0!3m2!1sen!2sbd!4v1618216182814!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div> 
            </div>
            <!-- Contact Section End -->
        </div> 

@endsection