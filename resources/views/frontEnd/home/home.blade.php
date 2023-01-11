@extends('frontEnd.master')
@section('content')
    <!-- SITE HEADER -->
    @include('frontEnd.include.header')
    <!-- .site-header -->

    <!-- HERO AREA -->
    <section class="hero-area" id="hero-area">
        <div class="container">
            <div class="hero-content d-flex justify-content-center">
                <div class="row d-flex align-items-center justify-content-center">

                    <div class="col-xl-6 order-xl-last image-block">
                        <div class="image-wrapper" data-tilt data-tilt-max="10">
                            <ul class="hero-facts">
                                <li>
                                    <p>{{count($portfolios)}}<span>+</span></p>
                                    <h4>Total <br>Projects</h4>
                                </li>
                                <li>
                                    <p>8<span>+</span></p>
                                    <h4>Worldwide <br>Clients</h4>
                                </li>

                            </ul>
                            <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/oie_pdjQpURuydGw.png" alt="hero main image" style="height: 430px; width: 300px;  border-radius: 15px">
                        </div> <!-- .image-wrapper -->
                    </div> <!-- .image-block -->

                    <div class="col-xl-6 order-xl-first content-block">
                        <h1 class="hero-head"><small>Hello, I'm</small>Shakhawat <strong>Hossain</strong></h1>
                        <p>
                            A passionate <strong>Backend Developer</strong> from <strong>Bangladesh!</strong>
                        </p>
                        <div class="link-group">
                            <a class="btn-main" href="#contact-section">Contact Me</a>
                            <ul class="hero-social list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/shakhawathossain6" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://github.com/shakhawatsabbir" target="_blank"><i class="fab fa-github"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/shakhawat.sabbir" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul> <!-- .hero-social -->
                        </div> <!-- .link-group -->
                    </div> <!-- .content-block -->

                </div> <!-- .row -->
            </div> <!-- .hero-content -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-hero-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/hero-element-1.png" alt="hero element 1">
            <img class="de-hero-2 elem-move" src="{{asset('frontEndAsset')}}/assets/image/design-elements/hero-element-2.png" alt="hero element 2">
            <img class="de-hero-3 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/hero-element-3.png" alt="hero element 3">
            <img class="de-hero-4 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/hero-element-4.png" alt="hero element 4">
            <img class="de-hero-5 elem-move" src="{{asset('frontEndAsset')}}/assets/image/design-elements/hero-element-5.png" alt="hero element 5">
        </div> <!-- .design-elements -->
    </section> <!-- .hero-area -->

    <!-- INTRO SECTION -->
    <section class="intro-section section-block">
        <div class="container">
            <div class="section-title">
                <h2>Welcome to my World</h2>
                <p class="lead">
                    I'm a young tech enthasist and entrepreneur who love to take risk. I grew up in a tech family in Bangladesh.
                </p>
            </div><!-- .section-title -->
            <div class="row">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up">
                    <div class="item-wrapper">
                        <div class="icon-box"><i class="pe-7s-science"></i></div>
                        <div class="content-wrapper">
                            <h3>Creativity</h3>
                            <p>
                                I am constantly using all my creativity to complete task and remove complexities form the backend of various website.
                            </p>
                        </div> <!-- .content-wrapper -->
                    </div> <!-- .item-wrapper -->
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
                    <div class="item-wrapper">
                        <div class="icon-box"><i class="pe-7s-diamond"></i></div>
                        <div class="content-wrapper">
                            <h3>Dedication</h3>
                            <p>
                                I am always dedicated to my work. I am
                                very interested in completing new tasks.
                            </p>
                        </div> <!-- .content-wrapper -->
                    </div> <!-- .item-wrapper -->
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                    <div class="item-wrapper">
                        <div class="icon-box"><i class="pe-7s-rocket"></i></div>
                        <div class="content-wrapper">
                            <h3>Hard Work</h3>
                            <p>
                                I love to take challenges. I am very interested
                                in working on that. I love to do hard work.
                            </p>
                        </div> <!-- .content-wrapper -->
                    </div> <!-- .item-wrapper -->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->

        <div class="design-elements">
            <img class="de-intro-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/intro-element-1.png" alt="intro element 1">
        </div> <!-- .design-elements -->

    </section> <!-- .intro-section -->

    <!-- ABOUT SECTION -->
    <section class="about-section section-block" id="about-section" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000">
                    <div class="img-wrapper about-img-wrap" data-tilt data-tilt-max="10">
                        <img class="about-img-1 img-fluid" src="{{asset('frontEndAsset')}}/assets/image/oie_acqiDSrF1uFE.png " alt="about image" style="border-radius: 10px">
                        <img class="about-img-2 img-fluid" src="{{asset('frontEndAsset')}}/assets/image/photo-1579403124614-197f69d8187b.avif" alt="about image 2"style="height: 330px; width: 50% ; border-radius: 10px">
                    </div>
                </div>
                <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-delay="400" data-aos-duration="2000">
                    <h2><span>About Me</span>Back-End Developer from Bangladesh</h2>
                    <p>
                        I am MD Shakhawat Hossain from Bangladesh and started working as a back end developer.
                        I am always doing something new. I work with all my knowledge on PHP
                        Laravel Framework and learn something new every day.
                    </p>
                    <p>
                        I have used my skills to complete several projects which are listed below in my portfolio.
                    </p>
                    <div class="personal-details row">
                        <div class="col-md-6">
                            <ul class="personal-info">
                                <li>
                                    <h4>Name</h4>
                                    <p>Md Shakhawat Hossain</p>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <p>shakahossain201@gmail.com</p>
                                </li>
                                <li>
                                    <h4>Phone</h4>
                                    <p>+880 18465-50244</p>
                                </li>
                            </ul> <!-- .personal-info -->
                        </div> <!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="personal-info">
                                <li>
                                    <h4>Age</h4>
                                    <p>22 Years</p>
                                </li>
                                <li>
                                    <h4>Education</h4>
                                    <p>Diploma Engineering  in CSE</p>
                                </li>
                                <li>
                                    <h4>Freelance</h4>
                                    <p>Available</p>
                                </li>
                            </ul> <!-- .personal-info -->
                        </div> <!-- .col-md-6 -->
                    </div> <!-- .personal-details -->
                    <a class="btn-main" href="{{route('download.cv')}}">Download CV</a>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-about-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/about-element-1.png" alt="about element 1">
            <img class="de-about-2 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/about-element-2.png" alt="about element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .about-section -->

    <!-- SKILL SECTION -->
    <section class="skill-section section-block" id="skill-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 content-block" data-aos="fade-down" data-aos-duration="2000">
                    <h2><span>My Skills</span>I'm great in what I do and I'm loving it</h2>
                    <p class="lead">
                        I learned a lot from my experience. I can code the following tasks.
                        I am increasing my experience day by day.
                    </p>
                </div>
                <div class="col-xl-6 progress-block">
                    <div class="progress-wrapper">
                        <h4>Html 5</h4>
                        <p class="progress-value">94%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <h4>CSS &amp; Bootstrap 5</h4>
                        <p class="progress-value">88%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <h4>PHP (OOP)</h4>
                        <p class="progress-value">76%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <h4>PHP Laravel</h4>
                        <p class="progress-value">82%</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </section> <!-- .skill-section -->

    <!-- PORTFOLIO SECTION -->
    <section class="portfolio-section section-block" id="portfolio-section">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p class="lead">
                    Below are some of the effective websites I have created using my experience.
                    You can visit the websites <br> by going to read more
                </p>
            </div>
            <!-- .section-title -->
           @foreach($portfolios as $portfolio)
                <div class="row ">
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body " >
                                <img src="{{asset($portfolio->image)}}" alt="" class="img-fluid ">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 ">
                            <div class="card-body">
                                <h3 class="mt-3">{{$portfolio->portfolio_title}}</h3>
                                <p class="mt-4">{{$portfolio->portfolio_description}}</p>
                                <a href="{{$portfolio->link}}" target="_blank" class="btn mt-5 btn-main ">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body " >--}}
{{--                            <img src="{{asset($portfolioFirst->image)}}" alt="" class="img-fluid ">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="mt-3">{{$portfolioFirst->portfolio_title}}</h3>--}}
{{--                            <p class="mt-4">{{$portfolioFirst->portfolio_description}}</p>--}}
{{--                            <a href="" class="btn mt-5 btn-main ">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="mt-3">{{$portfolioSecond->portfolio_title}}</h3>--}}
{{--                            <p class="mt-4">{{$portfolioSecond->portfolio_description}}</p>--}}
{{--                            <a href="" class="btn mt-5 btn-main ">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class=" col-12 col-md-6">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body " >--}}
{{--                            <img src="{{asset($portfolioSecond->image)}}" alt="" class="img-fluid ">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body " >--}}
{{--                            <img src="{{asset($portfolioThird->image)}}" alt="" class="img-fluid ">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="mt-3">{{$portfolioThird->portfolio_title}}</h3>--}}
{{--                            <p class="mt-4">{{$portfolioThird->portfolio_description}}</p>--}}
{{--                            <a href="" class="btn mt-5 btn-main ">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card border-0">--}}
{{--                        <div class="card-body text-center " >--}}
{{--                            <a href="" class="btn mt-5 portfolio-btn-view ">View all portfolio</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-portfolio-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/portfolio-element-1.png" alt="portfolio element 1">
            <img class="de-portfolio-2 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/portfolio-element-2.png" alt="portfolio element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .portfolio-section -->

    <!-- SERVICE SECTION -->
    <section class="service-section section-block" id="service-section">
        <div class="container">
            <div class="section-title dark">
                <h2>Service</h2>
                <p class="lead">
                    Below are the main services that we usually perform.
                </p>
            </div><!-- .section-title -->
            <div class="row">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-monitor"></i></div>
                        <h3>Web Design</h3>
                        <p>
                            It all Starts with a Professional Website.
                            Boost Your Business With a Professional Site. 24/7 support center.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-joy"></i></div>
                        <h3>Web Application</h3>
                        <p>
                            It all Starts with a Professional Website.
                            Boost Your Business With a Professional Site. 24/7 support center.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-display2"></i></div>
                        <h3>Web Development</h3>
                        <p>
                            It all Starts with a Professional Website.
                            Boost Your Business With a Professional Site. 24/7 support center.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-lock"></i></div>
                        <h3>Security System</h3>
                        <p>

                            When we create a website, we do different algorithms for each pitch on that website.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-edit"></i></div>
                        <h3>Custom Algorithm</h3>
                        <p>
                            When we create a website, we do different algorithms for each pitch on that website.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="1000">
                    <div class="content-wrapper service-tilt" data-tilt data-tilt-max="15">
                        <div class="icon-box"><i class="pe-7s-coffee"></i></div>
                        <h3>Web Consulting</h3>
                        <p>
                            We explain how a website works, what pitch is needed through consultants.
                        </p>
                    </div>
                </div>
            </div><!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-service-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/service-element-1.png" alt="service element 1">
            <img class="de-service-2 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/service-element-2.png" alt="service element 2">
            <img class="de-service-3 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/service-element-3.png" alt="service element 3">
        </div> <!-- .design-elements -->
    </section> <!-- .service-section -->

    <!-- FEATURES SECTION -->
    <section class="features-section section-block" id="features-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 image-block" data-aos="fade-right" data-aos-duration="1500">
                    <div class="image-wrapper">
                        <img class="img-fluid feature-photo" src="{{asset('frontEndAsset')}}/assets/image/feature-photo.png" alt="features photo" data-tilt data-tilt-max="10">
                    </div> <!-- .image-wrapper -->
                </div> <!-- .image-block -->
                <div class="col-xl-6 content-block" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">
                    <h2 class="block-title"><span>Why work with me</span>Best result with top user experience</h2>
                    <p>
                        People who get website development from us are very
                        happy with our services.
                    </p>
                    <ul class="features-list">
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="pe-7s-umbrella"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>Lifetime Support</h4>

                                <p>
                                    I give my life time support to all who take service from us
                                </p>
                            </div>

                        </li>
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="pe-7s-box2"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>No Coding Required</h4>

                                <p>
                                    I give my life time support to all who take service from us.
                                </p>
                            </div>

                        </li>
                        <li class="d-flex align-items-start">
                            <div class="icon-block">
                                <div class="icon-box"><i class="pe-7s-refresh-2"></i></div>
                            </div>
                            <div class="content-wrapper">
                                <h4>Regular Updates</h4>

                                <p>
                                    We help all those who are served by us to be constantly updated.
                                </p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- .features-section -->

    <!-- TESTIMONIAL SECTION -->
    <!--	<section class="testimonial-section section-block" id="testimonial-section">-->
    <!--		<div class="container">-->
    <!--			<div class="section-title dark">-->
    <!--				<h2>Testimonials</h2>-->
    <!--				<p class="lead">-->
    <!--					Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non-->
    <!--					proident, sunt in culim id est.-->
    <!--				</p>-->
    <!--			</div>&lt;!&ndash; .section-title &ndash;&gt;-->
    <!--			<div class="testimonial-carousel swiper">-->
    <!--				<div class="swiper-wrapper">-->
    <!--					<div class="testimonial-item swiper-slide">-->
    <!--						<div class="item-wrapper">-->
    <!--							<div class="quote-icon">-->
    <!--								<img src="{{asset('frontEndAsset')}}/assets/image/quote-icon.png" alt="quote icon">-->
    <!--							</div>-->
    <!--							<p>-->
    <!--								Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir cm id est laborum.-->
    <!--							</p>-->
    <!--							<div class="quote-author d-flex align-items-center justify-content-center">-->
    <!--								<div class="image-block">-->
    <!--									<img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/testimonial/testimonial-author-1.jpg" alt="testimonial author">-->
    <!--								</div>-->
    <!--								<h4>James Anderson<span>Web Developer</span></h4>-->
    <!--							</div>-->
    <!--							-->
    <!--						</div> &lt;!&ndash; .item wrapper &ndash;&gt;-->
    <!--					</div> &lt;!&ndash; .testimonial-item &ndash;&gt;-->
    <!--					<div class="testimonial-item swiper-slide">-->
    <!--						<div class="item-wrapper">-->
    <!--							<div class="quote-icon">-->
    <!--								<img src="{{asset('frontEndAsset')}}/assets/image/quote-icon.png" alt="quote icon">-->
    <!--							</div>-->
    <!--							<p>-->
    <!--								Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir cm id est laborum.-->
    <!--							</p>-->
    <!--							<div class="quote-author d-flex align-items-center justify-content-center">-->
    <!--								<div class="image-block">-->
    <!--									<img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/testimonial/testimonial-author-3.jpg" alt="testimonial author">-->
    <!--								</div>-->
    <!--								<h4>Dona Josefine<span>Web Developer</span></h4>-->
    <!--							</div>-->
    <!--							-->
    <!--						</div> &lt;!&ndash; .item wrapper &ndash;&gt;-->
    <!--					</div> &lt;!&ndash; .testimonial-item &ndash;&gt;-->
    <!--					<div class="testimonial-item swiper-slide">-->
    <!--						<div class="item-wrapper">-->
    <!--							<div class="quote-icon">-->
    <!--								<img src="{{asset('frontEndAsset')}}/assets/image/quote-icon.png" alt="quote icon">-->
    <!--							</div>-->
    <!--							<p>-->
    <!--								Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir cm id est laborum.-->
    <!--							</p>-->
    <!--							<div class="quote-author d-flex align-items-center justify-content-center">-->
    <!--								<div class="image-block">-->
    <!--									<img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/testimonial/testimonial-author-4.jpg" alt="testimonial author">-->
    <!--								</div>-->
    <!--								<h4>Mark Anthony <span>Web Developer</span></h4>-->
    <!--							</div>-->
    <!--							-->
    <!--						</div> &lt;!&ndash; .item wrapper &ndash;&gt;-->
    <!--					</div> &lt;!&ndash; .testimonial-item &ndash;&gt;-->
    <!--					<div class="testimonial-item swiper-slide">-->
    <!--						<div class="item-wrapper">-->
    <!--							<div class="quote-icon">-->
    <!--								<img src="{{asset('frontEndAsset')}}/assets/image/quote-icon.png" alt="quote icon">-->
    <!--							</div>-->
    <!--							<p>-->
    <!--								Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute ir cm id est laborum.-->
    <!--							</p>-->
    <!--							<div class="quote-author d-flex align-items-center justify-content-center">-->
    <!--								<div class="image-block">-->
    <!--									<img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/testimonial/testimonial-author-2.jpg" alt="testimonial author">-->
    <!--								</div>-->
    <!--								<h4>Sanjida Ema<span>Web Developer</span></h4>-->
    <!--							</div>-->
    <!--							-->
    <!--						</div> &lt;!&ndash; .item wrapper &ndash;&gt;-->
    <!--					</div> &lt;!&ndash; .testimonial-item &ndash;&gt;-->
    <!--				</div> &lt;!&ndash; .swiper-wrapper &ndash;&gt;-->
    <!--				<div class="swiper-pagination"></div>-->
    <!--			</div> &lt;!&ndash; .testimonial-carousel &ndash;&gt;-->
    <!--		</div> &lt;!&ndash; .container &ndash;&gt;-->
    <!--	</section> &lt;!&ndash; .testimonial-section &ndash;&gt;-->

{{--    <!-- BLOG SECTION -->--}}
{{--    <section class="blog-section section-block" id="blog-section">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>From My Blog</h2>--}}
{{--                <p class="lead">--}}
{{--                    Duis aute irure dolor in reprehen pteur sint occaecat cupidatat non--}}
{{--                    proident, sunt in culim id est.--}}
{{--                </p>--}}
{{--            </div><!-- .section-title -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 large-post" data-aos="fade-right" data-aos-duration="1200">--}}

{{--                    <!-- Modal -->--}}
{{--                    <div class="modal fade" id="blogModal1" tabindex="-1" aria-labelledby="blogModal1" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">--}}
{{--                            <div class="modal-content">--}}

{{--                                <div class="modal-body">--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>--}}
{{--                                    <div class="row blog-content">--}}
{{--                                        <div class="col-xl-12">--}}
{{--                                            <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/blog_full_01.jpg" alt="blog post image 01">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-8 offset-xl-2">--}}
{{--                                            <div class="content-wrapper">--}}
{{--                                                <h2 class="blog-title">Javascript algorythm and data structure for beginner</h2>--}}
{{--                                                <ul class="blog-meta d-md-flex align-items-center justify-content-md-center">--}}
{{--                                                    <li><a href="#"><i class="bi bi-folder-fill"></i> Javascript</a></li>--}}
{{--                                                    <li><i class="bi bi-calendar3"></i> November 22, 2022</li>--}}
{{--                                                    <li><i class="bi bi-clock"></i> 10 min</li>--}}
{{--                                                </ul>--}}
{{--                                                <p>--}}
{{--                                                    Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus rhoncus blandit. Nulla vel varius felis. Integer felis urna, auctor hendrerit ante vitae, scelerisque bibendum quam. Proin libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut suscipit erat. Integer aliquam erat eget hendrerit ultricies. In pharetra eu ante consequat tincidunt. Curabitur vulputate ligula risus, ac auctor magna vulputate sit amet. Sed finibus neque neque, euismod porta felis vehicula at. Donec a sem id augue sagittis tincidunt non sit amet risus.--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                    cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                </p>--}}
{{--                                                <p>--}}
{{--                                                    Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae fringilla ex. Nam id dui dignissim, maximus ligula id, tempus metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis luctus. Mauris consectetur leo est, non finibus tellus posuere quis. Integer mollis felis a tristique facilisis. Nam convallis est id iaculis mattis.--}}
{{--                                                </p>--}}
{{--                                                <div class="post-footer row">--}}
{{--                                                    <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">--}}
{{--                                                        <h4>Tags:</h4>--}}
{{--                                                        <ul class="tag-list list-inline">--}}
{{--                                                            <li class="list-inline-item"><a href="#">Web Design</a></li>--}}
{{--                                                            <li class="list-inline-item"><a href="#">Social Media</a></li>--}}
{{--                                                            <li class="list-inline-item"><a href="#">Application</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">--}}
{{--                                                        <h4>Share:</h4>--}}
{{--                                                        <ul class="tag-list list-inline">--}}
{{--                                                            <li class="list-inline-item">--}}
{{--                                                                <a class="facebook-share" href="#"><i class="bi bi-facebook"></i></a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="list-inline-item">--}}
{{--                                                                <a class="twitter-share" href="#"><i class="bi bi-twitter"></i></a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="list-inline-item">--}}
{{--                                                                <a class="linkedin-share" href="#"><i class="bi bi-linkedin"></i></a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div> <!-- .row -->--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="content-wrapper">--}}
{{--                        <div class="post-content">--}}
{{--                            <ul class="post-meta">--}}
{{--                                <li class="post-date">--}}
{{--                                    <i class="pe-7s-clock"></i>--}}
{{--                                    November 22, 2022--}}
{{--                                </li>--}}
{{--                                <li class="post-cat">--}}
{{--                                    <a href="#"><i class="pe-7s-folder"></i> Web Design</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal1">Javascript algorythm and data structure for beginners</a></h3>--}}



{{--                        </div>--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/post-thumbnail-01.jpg" alt="post thumnail">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-6 post-group">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">--}}
{{--                            <!-- Modal -->--}}
{{--                            <div class="modal fade" id="blogModal2" tabindex="-1" aria-labelledby="blogModal2" aria-hidden="true">--}}
{{--                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">--}}
{{--                                    <div class="modal-content">--}}

{{--                                        <div class="modal-body">--}}
{{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>--}}
{{--                                            <div class="row blog-content">--}}
{{--                                                <div class="col-xl-12">--}}
{{--                                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/blog_full_03.jpg" alt="blog post image 02">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-8 offset-xl-2">--}}
{{--                                                    <div class="content-wrapper">--}}
{{--                                                        <h2 class="blog-title">Typescript algorythm and data structure for beginner</h2>--}}
{{--                                                        <ul class="blog-meta d-md-flex align-items-center justify-content-md-center">--}}
{{--                                                            <li><a href="#"><i class="bi bi-folder-fill"></i> Javascript</a></li>--}}
{{--                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>--}}
{{--                                                            <li><i class="bi bi-clock"></i> 10 min</li>--}}
{{--                                                        </ul>--}}
{{--                                                        <p>--}}
{{--                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus rhoncus blandit. Nulla vel varius felis. Integer felis urna, auctor hendrerit ante vitae, scelerisque bibendum quam. Proin libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut suscipit erat. Integer aliquam erat eget hendrerit ultricies. In pharetra eu ante consequat tincidunt. Curabitur vulputate ligula risus, ac auctor magna vulputate sit amet. Sed finibus neque neque, euismod porta felis vehicula at. Donec a sem id augue sagittis tincidunt non sit amet risus.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae fringilla ex. Nam id dui dignissim, maximus ligula id, tempus metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis luctus. Mauris consectetur leo est, non finibus tellus posuere quis. Integer mollis felis a tristique facilisis. Nam convallis est id iaculis mattis.--}}
{{--                                                        </p>--}}
{{--                                                        <div class="post-footer row">--}}
{{--                                                            <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">--}}
{{--                                                                <h4>Tags:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Web Design</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Social Media</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Application</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">--}}
{{--                                                                <h4>Share:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="facebook-share" href="#"><i class="bi bi-facebook"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="twitter-share" href="#"><i class="bi bi-twitter"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="linkedin-share" href="#"><i class="bi bi-linkedin"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div> <!-- .row -->--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="content-wrapper">--}}
{{--                                <div class="post-content">--}}
{{--                                    <ul class="post-meta">--}}
{{--                                        <li class="post-date">--}}
{{--                                            <i class="pe-7s-clock"></i>--}}
{{--                                            November 22, 2022--}}
{{--                                        </li>--}}
{{--                                        <li class="post-cat">--}}
{{--                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal2">Design a wesite using Figma easily</a></h3>--}}
{{--                                </div>--}}
{{--                                <div class="image-wrapper">--}}
{{--                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/post-thumbnail-03.jpg" alt="post thumnail">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">--}}
{{--                            <!-- Modal -->--}}
{{--                            <div class="modal fade" id="blogModal3" tabindex="-1" aria-labelledby="blogModal3" aria-hidden="true">--}}
{{--                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">--}}
{{--                                    <div class="modal-content">--}}

{{--                                        <div class="modal-body">--}}
{{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>--}}
{{--                                            <div class="row blog-content">--}}
{{--                                                <div class="col-xl-12">--}}
{{--                                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/blog_full_04.jpg" alt="blog post image 03">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-8 offset-xl-2">--}}
{{--                                                    <div class="content-wrapper">--}}
{{--                                                        <h2 class="blog-title">Javascript algorythm and data structure for beginner</h2>--}}
{{--                                                        <ul class="blog-meta d-md-flex align-items-center justify-content-md-center">--}}
{{--                                                            <li><a href="#"><i class="bi bi-folder-fill"></i> Javascript</a></li>--}}
{{--                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>--}}
{{--                                                            <li><i class="bi bi-clock"></i> 10 min</li>--}}
{{--                                                        </ul>--}}
{{--                                                        <p>--}}
{{--                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus rhoncus blandit. Nulla vel varius felis. Integer felis urna, auctor hendrerit ante vitae, scelerisque bibendum quam. Proin libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut suscipit erat. Integer aliquam erat eget hendrerit ultricies. In pharetra eu ante consequat tincidunt. Curabitur vulputate ligula risus, ac auctor magna vulputate sit amet. Sed finibus neque neque, euismod porta felis vehicula at. Donec a sem id augue sagittis tincidunt non sit amet risus.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae fringilla ex. Nam id dui dignissim, maximus ligula id, tempus metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis luctus. Mauris consectetur leo est, non finibus tellus posuere quis. Integer mollis felis a tristique facilisis. Nam convallis est id iaculis mattis.--}}
{{--                                                        </p>--}}
{{--                                                        <div class="post-footer row">--}}
{{--                                                            <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">--}}
{{--                                                                <h4>Tags:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Web Design</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Social Media</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Application</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">--}}
{{--                                                                <h4>Share:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="facebook-share" href="#"><i class="bi bi-facebook"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="twitter-share" href="#"><i class="bi bi-twitter"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="linkedin-share" href="#"><i class="bi bi-linkedin"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div> <!-- .row -->--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="content-wrapper">--}}
{{--                                <div class="post-content">--}}
{{--                                    <ul class="post-meta">--}}
{{--                                        <li class="post-date">--}}
{{--                                            <i class="pe-7s-clock"></i>--}}
{{--                                            November 22, 2022--}}
{{--                                        </li>--}}
{{--                                        <li class="post-cat">--}}
{{--                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal3">Break on through to the other side</a></h3>--}}
{{--                                </div>--}}
{{--                                <div class="image-wrapper">--}}
{{--                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/post-thumbnail-04.jpg" alt="post thumnail">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">--}}
{{--                            <!-- Modal -->--}}
{{--                            <div class="modal fade" id="blogModal4" tabindex="-1" aria-labelledby="blogModal4" aria-hidden="true">--}}
{{--                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">--}}
{{--                                    <div class="modal-content">--}}

{{--                                        <div class="modal-body">--}}
{{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>--}}
{{--                                            <div class="row blog-content">--}}
{{--                                                <div class="col-xl-12">--}}
{{--                                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/blog_full_05.jpg" alt="blog post image 04">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-8 offset-xl-2">--}}
{{--                                                    <div class="content-wrapper">--}}
{{--                                                        <h2 class="blog-title">Javascript algorythm and data structure for beginner</h2>--}}
{{--                                                        <ul class="blog-meta d-md-flex align-items-center justify-content-md-center">--}}
{{--                                                            <li><a href="#"><i class="bi bi-folder-fill"></i> Javascript</a></li>--}}
{{--                                                            <li><i class="bi bi-calendar3"></i> November 22, 2022</li>--}}
{{--                                                            <li><i class="bi bi-clock"></i> 10 min</li>--}}
{{--                                                        </ul>--}}
{{--                                                        <p>--}}
{{--                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus rhoncus blandit. Nulla vel varius felis. Integer felis urna, auctor hendrerit ante vitae, scelerisque bibendum quam. Proin libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut suscipit erat. Integer aliquam erat eget hendrerit ultricies. In pharetra eu ante consequat tincidunt. Curabitur vulputate ligula risus, ac auctor magna vulputate sit amet. Sed finibus neque neque, euismod porta felis vehicula at. Donec a sem id augue sagittis tincidunt non sit amet risus.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae fringilla ex. Nam id dui dignissim, maximus ligula id, tempus metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis luctus. Mauris consectetur leo est, non finibus tellus posuere quis. Integer mollis felis a tristique facilisis. Nam convallis est id iaculis mattis.--}}
{{--                                                        </p>--}}
{{--                                                        <div class="post-footer row">--}}
{{--                                                            <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">--}}
{{--                                                                <h4>Tags:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Web Design</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Social Media</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Application</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">--}}
{{--                                                                <h4>Share:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="facebook-share" href="#"><i class="bi bi-facebook"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="twitter-share" href="#"><i class="bi bi-twitter"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="linkedin-share" href="#"><i class="bi bi-linkedin"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div> <!-- .row -->--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="content-wrapper">--}}
{{--                                <div class="post-content">--}}
{{--                                    <ul class="post-meta">--}}
{{--                                        <li class="post-date">--}}
{{--                                            <i class="pe-7s-clock"></i>--}}
{{--                                            October 23, 2021--}}
{{--                                        </li>--}}
{{--                                        <li class="post-cat">--}}
{{--                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal4">Imagine there is no heaven</a></h3>--}}
{{--                                </div>--}}
{{--                                <div class="image-wrapper">--}}
{{--                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/post-thumbnail-05.jpg" alt="post thumnail">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">--}}
{{--                            <!-- Modal -->--}}
{{--                            <div class="modal fade" id="blogModal5" tabindex="-1" aria-labelledby="blogModal5" aria-hidden="true">--}}
{{--                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">--}}
{{--                                    <div class="modal-content">--}}

{{--                                        <div class="modal-body">--}}
{{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x"></i></button>--}}
{{--                                            <div class="row blog-content">--}}
{{--                                                <div class="col-xl-12">--}}
{{--                                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/blog_full_06.jpg" alt="blog post image 05">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xl-8 offset-xl-2">--}}
{{--                                                    <div class="content-wrapper">--}}
{{--                                                        <h2 class="blog-title">Javascript algorythm and data structure for beginner</h2>--}}
{{--                                                        <ul class="blog-meta d-md-flex align-items-center justify-content-md-center">--}}
{{--                                                            <li><a href="#"><i class="bi bi-folder-fill"></i> Javascript</a></li>--}}
{{--                                                            <li><i class="bi bi-calendar3"></i> October 21, 2021</li>--}}
{{--                                                            <li><i class="bi bi-clock"></i> 10 min</li>--}}
{{--                                                        </ul>--}}
{{--                                                        <p>--}}
{{--                                                            Sed vitae nulla eu velit fringilla hendrerit. Fusce luctus rhoncus blandit. Nulla vel varius felis. Integer felis urna, auctor hendrerit ante vitae, scelerisque bibendum quam. Proin libero leo, pulvinar nec iaculis ac, sodales nec tellus. Sed ut suscipit erat. Integer aliquam erat eget hendrerit ultricies. In pharetra eu ante consequat tincidunt. Curabitur vulputate ligula risus, ac auctor magna vulputate sit amet. Sed finibus neque neque, euismod porta felis vehicula at. Donec a sem id augue sagittis tincidunt non sit amet risus.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
{{--                                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                                        </p>--}}
{{--                                                        <p>--}}
{{--                                                            Vestibulum aliquet pulvinar neque sed ullamcorper. Ut vitae fringilla ex. Nam id dui dignissim, maximus ligula id, tempus metus. Sed commodo dui vitae dui pulvinar, eu dignissim turpis luctus. Mauris consectetur leo est, non finibus tellus posuere quis. Integer mollis felis a tristique facilisis. Nam convallis est id iaculis mattis.--}}
{{--                                                        </p>--}}
{{--                                                        <div class="post-footer row">--}}
{{--                                                            <div class="blog-tags col-lg-8 d-md-flex align-items-md-center">--}}
{{--                                                                <h4>Tags:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Web Design</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Social Media</a></li>--}}
{{--                                                                    <li class="list-inline-item"><a href="#">Application</a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="blog-share col-lg-4 d-flex align-items-center justify-content-xxl-end">--}}
{{--                                                                <h4>Share:</h4>--}}
{{--                                                                <ul class="tag-list list-inline">--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="facebook-share" href="#"><i class="bi bi-facebook"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="twitter-share" href="#"><i class="bi bi-twitter"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                    <li class="list-inline-item">--}}
{{--                                                                        <a class="linkedin-share" href="#"><i class="bi bi-linkedin"></i></a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div> <!-- .row -->--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="content-wrapper">--}}
{{--                                <div class="post-content">--}}
{{--                                    <ul class="post-meta">--}}
{{--                                        <li class="post-date">--}}
{{--                                            <i class="pe-7s-clock"></i>--}}
{{--                                            October 23, 2021--}}
{{--                                        </li>--}}
{{--                                        <li class="post-cat">--}}
{{--                                            <a href="#"><i class="pe-7s-folder"></i> Web Design</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <h3><a href="#" data-bs-toggle="modal" data-bs-target="#blogModal5">When the musics over turn off the light</a></h3>--}}
{{--                                </div>--}}
{{--                                <div class="image-wrapper">--}}
{{--                                    <img class="img-fluid" src="{{asset('frontEndAsset')}}/assets/image/blog/post-thumbnail-06.jpg" alt="post thumnail">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- .row -->--}}
{{--        </div> <!-- .container -->--}}
{{--        <div class="design-elements">--}}
{{--            <img class="de-blog-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/blog-element-1.png" alt="blog element 1">--}}
{{--            <img class="de-blog-2 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/blog-element-2.png" alt="blog element 2">--}}
{{--        </div> <!-- .design-elements -->--}}
{{--    </section> <!-- .blog-section -->--}}

{{--    <!-- PARTNER SECTION -->--}}
{{--    <section class="partner-section" id="partner-section">--}}
{{--        <div class="container">--}}

{{--            <div class="section-title dark visually-hidden">--}}
{{--                <h2>Partners</h2>--}}
{{--            </div><!-- .section-title -->--}}

{{--            <div class="partnerCarousel">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_1.png" alt="partner logo 01">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_2.png" alt="partner logo 02">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_3.png" alt="partner logo 03">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_4.png" alt="partner logo 04">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_5.png" alt="partner logo 05">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_6.png" alt="partner logo 06">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_7.png" alt="partner logo 07">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_8.png" alt="partner logo 08">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-wrapper">--}}
{{--                            <img src="{{asset('frontEndAsset')}}/assets/image/partner/partner_logo_9.png" alt="partner logo 09">--}}
{{--                        </div> <!-- .image-wrapper -->--}}
{{--                    </div><!-- .swiper-slide -->--}}
{{--                </div> <!-- .swiper-wrapper -->--}}
{{--            </div> <!-- .partnerCarousel -->--}}
{{--        </div> <!-- .container -->--}}
{{--    </section> <!-- .partner section -->--}}

    <!-- CONTACT SECTION -->
    <section class="contact-section section-block" id="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Get in Touch</h2>
                <p class="lead">
                    If you want to know or want to know something related to web development, you can contact the following information or message
                </p>
            </div><!-- .section-title -->

            <div class="row contact-options">
                <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down" data-aos-duration="1000">
                    <div class="icon-box"><i class="pe-7s-map-marker"></i></div>
                    <div class="content-wrapper">
                        <h4>Address</h4>
                        <address>Kathal Bagan, Dhanmondi, Dhaka</address>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                    <div class="icon-box"><i class="pe-7s-call"></i></div>
                    <div class="content-wrapper">
                        <h4>Phone</h4>
                        <a href="#">+880 18465 50244</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-xxl-center align-items-xl-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
                    <div class="icon-box"><i class="pe-7s-mail"></i></div>
                    <div class="content-wrapper">
                        <h4>Email</h4>
                        <a href="#">shakahossain201@gmail.com</a>
                    </div>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                    <div class="map-wrapper" id="mapwrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9745151010475!2d90.38536877425874!3d23.748288188859465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b922697b5427%3A0xdfac18f0868c9f54!2sKathal%20Bagan%20Bazar!5e0!3m2!1sbn!2sbd!4v1671958743647!5m2!1sbn!2sbd" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 form-block" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1100">
                    <h3>Write me a message</h3>
                    <P class="text-center mb-3">{{session('massage')}}</P>
                    <div class="form-message">
                        <p></p>
                    </div>
                    <form class="row g-3" method="POST" action="{{route('massage')}}">
                        @csrf
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <label class="form-label visually-hidden">Name</label>
                                <input type="text" class="form-control"  placeholder="Name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="input-group mb-3">
                                <label class="form-label visually-hidden">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <label class="form-label visually-hidden">Message</label>
                            <textarea class="form-control mb-3"  name="massage" placeholder="Your message here*" required></textarea>
                            <button type="submit" class="btn btn-main" name="submit">Send Message</button>
                        </div>
                    </form> <!-- .row -->
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="design-elements">
            <img class="de-contact-1 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/contact-element-1.png" alt="contact element 1">
            <img class="de-contact-2 elem-updown" src="{{asset('frontEndAsset')}}/assets/image/design-elements/contact-element-2.png" alt="contact element 2">
        </div> <!-- .design-elements -->
    </section> <!-- .contact-section -->

@endsection
