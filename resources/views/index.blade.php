@extends('layouts.app')
@section('content')
<!-- Services Section Start -->
{{ Html::style('public/css/bootstrap.min.css') }}
<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our Services</h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lnr lnr-pencil"></i>
                    </div>
                    <h4>Content Writing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
                    <div class="icon">
                        <i class="lnr lnr-code"></i>
                    </div>
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="lnr lnr-mustache"></i>
                    </div>
                    <h4>Business Consultancy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Features Section Start -->
<section id="features" class="section" data-stellar-background-ratio="0.2">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Some Features</h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-xs-12 box-item">
                            <span class="icon">
                              <i class="lnr lnr-rocket"></i>
                            </span>
                            <div class="text">
                                <h4>Bootstrap 4 Based</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 box-item">
                            <span class="icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </span>
                            <div class="text">
                                <h4>Fully Responsive</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 box-item">
                            <span class="icon">
                              <i class="lnr lnr-layers"></i>
                            </span>
                            <div class="text">
                                <h4>Parallax Background</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 box-item">
                            <span class="icon">
                              <i class="lnr lnr-cog"></i>
                            </span>
                            <div class="text">
                                <h4>Easy to Customize</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div><div class="col-lg-4 col-sm-4 col-xs-12 box-item">
                            <span class="icon">
                              <i class="lnr lnr-layers"></i>
                            </span>
                            <div class="text">
                                <h4>Parallax Background</h4>
                                <p>Lorem Ipsum is simply d1ummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12 box-item">
                            <span class="icon">
                              <i class="lnr lnr-cog"></i>
                            </span>
                            <div class="text">
                                <h4>Easy to Customize</h4>
                                <p>Lorem Ipsum is simply du2mmy text of the printing and typesetting industry</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Portfolio Section -->
<section id="portfolios" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Portfolio</h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Portfolio Controller/Buttons -->
                <div class="controls text-center">
                    <a class="filter active btn btn-common" data-filter="all">
                        All
                    </a>
                    @foreach($portfolioTypes as $portfolioType)
                    <a class="filter btn btn-common" data-filter=".{{$portfolioType->name}}">{{$portfolioType->name}}</a>
                    @endforeach
                </div>
                <!-- Portfolio Controller/Buttons Ends-->
            </div>

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix {{$portfolio->name}}">
                        <div class="portfolio-item">
                            <div class="shot-item overlay">
                                <a data-fancybox="{{$portfolio->title}}" data-toolbar="false" data-small-btn="true"
                                   data-caption="<p style='font-size:24px'><a href='{{$portfolio->url}}' target='_blank'><strong>{{$portfolio->title}}</strong></a></p>{{$portfolio->description}}"
                                   href="{{$portfolio->img}}" >
                                    <img src="{{$portfolio->img}}" alt="" />
                                    <i class="lnr lnr-eye item-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">--}}
                    {{--<div class="portfolio-item">--}}
                        {{--<div class="shot-item overlay">--}}
                            {{--<a data-fancybox="gallery" data-toolbar="false" data-small-btn="true" data-caption="This image has a caption<a href='http://www.google.com'>12321</a>" href="img/portfolio/img1.jpg" >--}}
                                {{--<img src="img/portfolio/img1.jpg" alt="" />--}}
                                {{--<i class="lnr lnr-eye item-icon"></i>--}}
                            {{--</a>--}}
                            {{--<a data-fancybox="gallery" data-toolbar="false" data-small-btn="true" data-caption="This image has a caption<a href='http://www.google.com'>1aaa2321</a>" href="img/portfolio/img2.jpg" ></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <!-- Container Ends -->
</section>
<div class="pager-list" style="text-align:center;margin-bottom: 20px;"></div>

<!-- Portfolio Section Ends -->

<!-- Start Video promo Section -->
<section class="video-promo section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="video-promo-content text-center">
                    <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Our Intro video</h2>
                    <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
                    <a href="https://www.youtube.com/watch?v=IXoMDwh4Cq8" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Video Promo Section -->

<!-- Start Pricing Table Section -->
<div id="pricing" class="section pricing-section">
    <div class="container cd-pricing-container">
        <div class="section-header">
            <h2 class="section-title">Pricing Table</h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>

        <div class="cd-pricing-switcher">
            <p class="fieldset">
                <input type="radio" name="price" value="monthly" id="monthly" checked>
                <label for="monthly">Business</label>
                <input type="radio" name="price" value="yearly" id="yearly">
                <label for="yearly">Community</label>
                <span class="cd-switch"></span>
            </p>
        </div> <!-- .cd-pricing-switcher -->
        <div id="price_table">
            <div class="front row pricing-tables cd-pricing-wrapper">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-details">
                            <h2>Free</h2>
                            <span>$00</span>
                            <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-common">Get Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-details">
                            <h2>Popular</h2>
                            <span>$3.99</span>
                            <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-common">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-details">
                            <h2>Premium</h2>
                            <span>$9.50</span>
                            <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-common">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="back row pricing-tables cd-pricing-wrapper">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-details">
                            <h2>Free</h2>
                            <span>$100</span>
                            <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-common">Get Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-details">
                            <h2>Popular</h2>
                            <span>$32.99</span>
                            <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-common">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-details">
                            <h2>Premium</h2>
                            <span>$93.50</span>
                            <ul>
                                <li>Consectetur adipiscing</li>
                                <li>Nunc luctus nulla et tellus</li>
                                <li>Suspendisse quis metus</li>
                                <li>Vestibul varius fermentum erat</li>
                            </ul>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-common">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Pricing Table Section -->

<!-- Counter Section Start -->
<div class="counters section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-clock"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">1589</span></h3>
                        <h4>Working Hours</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-briefcase"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">699</span></h3>
                        <h4>Completed Projects</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-user"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">203</span></h3>
                        <h4>No. of Clients</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-heart"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">1689</span></h3>
                        <h4>Peoples Love</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Section End -->

<!-- Team section Start -->
<section id="team" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Team</h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <img src="img/team/team1.jpg" alt="">
                    <div class="team-details">
                        <div class="team-inner">
                            <h4 class="team-title">Jhon Doe</h4>
                            <p>Chief Technical Officer</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <img src="img/team/team2.jpg" alt="">
                    <div class="team-details">
                        <div class="team-inner">
                            <h4 class="team-title">Paul Kowalsy</h4>
                            <p>CEO & Co-Founder</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <img src="img/team/team3.jpg" alt="">
                    <div class="team-details">
                        <div class="team-inner">
                            <h4 class="team-title">Emilly Williams</h4>
                            <p>Business Manager</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <img class="img-fulid" src="img/team/team4.jpg" alt="">
                    <div class="team-details">
                        <div class="team-inner">
                            <h4 class="team-title">Patricia Green</h4>
                            <p>Graphic Designer</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team section End -->

<!-- testimonial Section Start -->
<div id="testimonial" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="touch-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <img src="img/testimonial/customer1.jpg" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                            <h3>Jone Deam</h3>
                            <span>Fondor of Jalmori</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial/customer2.jpg" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                            <h3>Oidila Matik</h3>
                            <span>President Lexo Inc</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial/customer3.jpg" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                            <h3>Alex Dattilo</h3>
                            <span>CEO Optima Inc</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial/customer4.jpg" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. send do <br> adipisicing ciusmod tempor incididunt ut labore et</p>
                            <h3>Paul Kowalsy</h3>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial Section Start -->

<!-- Blog Section -->
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Blog</h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos! <br> Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="img/blog/img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <div class="meta-tags">
                            <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <h3>
                            <a href="single-post.html">How often should you tweet?</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="img/blog/img2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <div class="meta-tags">
                            <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <h3>
                            <a href="single-post.html">Content is still king</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="img/blog/img3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <div class="meta-tags">
                            <span class="date"><i class="lnr  lnr-clock"></i>2 Days Ago</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <h3>
                            <a href="single-post.html">Social media at work</a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn-rm">Read More <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
        </div>
    </div>
</section>
<!-- blog Section End -->

<!-- Contact Section Start -->
<section id="contact" class="section" data-stellar-background-ratio="-0.2">
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="contact-us">
                        <h3>Contact With us</h3>
                        <div class="contact-address">
                            <p>Centerville Road, DE 19808, US </p>
                            <p class="phone">Phone: <span>(+94 123 456 789)</span></p>
                            <p class="email">E-mail: <span>(contact@Katimaz.com)</span></p>
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="contact-block">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@endsection