@extends('layout.master')
@section('index')
    
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Corporate Business Information Online</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Finance Solution Information Online</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->
				 <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Finance Solution Information Online</h1>
                                    <div class="animation animated-item-2">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="feature" style="display:none">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h2>Fast</h2>
                            <p>Having a baby can be a nerve wracking experience for new</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h2>Easy</h2>
                            <p>If you are looking for a new way to promote your business that</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <h2>Cheap</h2>
                            <p>Okay, you’ve decided you want to make money with Affiliate</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                    <div class="col-md-3 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="icon">
                                <i class="fa fa-arrows"></i>
                            </div>
                            <h2>Editable</h2>
                            <p>A Pocket PC is a handheld computer, which features many</p>
                        </div>
                    </div>
                    <!--/.col-md-3-->
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->

	<section id="services" class="service-item animated fadeInUpBig" >
        <div class="container">
            <div class="center fadeInDown ">
                <h2>Our Service</h2>
                <p class="lead">We aim to make our service accessible to everyone.  If you need help to contact us you can ask someone else for advice. Or you can ask them to deal with us on your behalf.</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4 ">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <!-- <img class="img-responsive" src="images/services/ux.svg"> -->
                            <img class="img-responsive" src="images/services/5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Startup Agency</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Finance Solution</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Marketing & SEO Agency</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Corporate Business</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Food & Restaurant</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Travel Agency</h3>
                            <p>Hydroderm is the highly desired anti-aging cream on</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->


    <section id="recent-works" style="display:none">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">We aim to make our service accessible to everyone.  If you need help to contact us you can ask someone else for advice.</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images\portfolio\item-1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images\portfolio\item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images\portfolio\item-2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images\portfolio\item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images\portfolio\item-3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images\portfolio\item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images\portfolio\item-4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images\portfolio\item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images\portfolio\item-5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images\portfolio\item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images\portfolio\item-6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="images\portfolio\item-6.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Show More</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->

    

    <section id="middle" class="skill-area" style="background-image: url(images/skill-bg.png)" style="display: none !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="skill">
                        <h2>We Completed 2500+ Projects Yearly Successfully & Counting</h2>
                        <!-- <h2>Our Skills</h2> -->
                        <p>We aim to make our service accessible to everyone.  If you need help to contact us you can ask someone else for advice.</p>
                    </div>
                </div>
				
				
				
				<div class="sectiontitle" style="position:absolute">
    <!-- <h2>Projects statistics</h2> -->
    <!-- <span class="headerLine"></span> -->
</div>
<!-- <div id="projectFacts" class="sectionClass"> -->
    <!-- <div class="fullWidth eight columns"> -->
        <!-- <div class="projectFactsWrap "> -->
            <!-- <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;"> -->
                <!-- <i class="fa fa-briefcase"></i> -->
                <!-- <p id="number1" class="number">12</p> -->
                <!-- <span></span> -->
                <!-- <p>Services</p> -->
            <!-- </div> -->
            <!-- <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;"> -->
                <!-- <i class="fa fa-smile-o"></i> -->
                <!-- <p id="number2" class="number">55</p> -->
                <!-- <span></span> -->
                <!-- <p>Design</p> -->
            <!-- </div> -->
            <!-- <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;"> -->
                <!-- <i class="fa fa-coffee"></i> -->
                <!-- <p id="number3" class="number">359</p> -->
                <!-- <span></span> -->
                <!-- <p>Complete Project</p> -->
            <!-- </div> -->
            <!-- <div class="item wow fadeInUpBig animated animated" data-number="2000+" style="visibility: visible;"> -->
                <!-- <i class="fa fa-smile-o"></i> -->
                <!-- <p id="number4" class="number">2000+</p> -->
                <!-- <span></span> -->
                <!-- <p>Happy clients</p> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->


                <!--/.col-sm-6-->

                <!-- <div class="col-sm-6"> -->
                    <!-- <div class="progress-wrap"> -->
                        <!-- <h3>Startup Agency</h3> -->
                        <!-- <div class="progress"> -->
                            <!-- <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"> -->
                                <!-- <span class="bar-width">85%</span> -->
                            <!-- </div> -->

                        <!-- </div> -->
                    <!-- </div> -->

                    <!-- <div class="progress-wrap"> -->
                        <!-- <h3>Finance Solution</h3> -->
                        <!-- <div class="progress"> -->
                            <!-- <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%"> -->
                                <!-- <span class="bar-width">95%</span> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->

                <!-- <div class="col-sm-6"> -->
                    <!-- <div class="progress-wrap"> -->
                        <!-- <h3>Travel Agency</h3> -->
                        <!-- <div class="progress"> -->
                            <!-- <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> -->
                                <!-- <span class="bar-width">80%</span> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->

                    <!-- <div class="progress-wrap"> -->
                        <!-- <h3>Food & Restaurant</h3> -->
                        <!-- <div class="progress"> -->
                            <!-- <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%"> -->
                                <!-- <span class="bar-width">90%</span> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#middle-->

    <section id="content" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 fadeInDown">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Startup Agency</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Finance Solution</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Marketing & SEO Agency</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Corporate Business</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Food & Restaurant</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="img-responsive" src="images\tab2.png">
                                            </div>
                                            <div class="media-body">
                                                <h2>Adipisicing elit</h2>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active in text-right" id="tab2">
                                        <div class="video-box">
                                            <img src="images\tab-video-bg.png" alt="video">
                                            <a class="video-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" rel="prettyPhoto"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                    </div>
                                </div>
                                <!--/.tab-content-->
                            </div>
                            <!--/.media-body-->
                        </div>
                        <!--/.media-->
                    </div>
                    <!--/.tab-wrap-->
                </div>
                <!--/.col-sm-6-->

            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#content-->

    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Testimonials</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images\client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images\review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Mr. Anil</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images\client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images\review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Mr. Guddu</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images\client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images\review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Mr. Amit</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images\client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images\review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Mr Tom</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images\client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images\review.png" alt="">
                        <img src="images\review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Mr. Rampal</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="images\client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="images\review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
                        <h4>- Mr. Singh</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="fadeInDown" style="text-align: center;">
                <h2 style="font-size:35px">Subscribe Newsletter</h2><br>
                <p class="lead"> Subscribe to Our Newsletter & Stay updated.</p>
            </div>
					
		    <div class="container">
				<div class="row center">
				  <div class="col-lg-3"></div>
					<div class="col-lg-6">
						<form class="form-inline m-subscribe1__form">
						  <input type="email" class="form-control" id="cta_newsletter_email" placeholder="Email..." style="padding:22px; border-radius: 50px" >
						  <button type="submit" class="btn btn-primary mb-2" style="padding:50px; border-radius: 50px; border-radius: 50px; padding: 13px 35px 13px 35px;">SUBSCRIBE</button>
						</form>
					</div>	
				   <div class="col-lg-3"></div>
		        </div>
		    </div>
        </div>


   
                <!-- </div> -->
				<!-- </div> -->
                
        <!--/.container-->
    </section>
    <!--/#partner-->

 @endsection