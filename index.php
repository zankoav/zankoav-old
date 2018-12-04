<?php get_header();

	$options    = get_option( 'zankoav_theme_options' );
	$logoUrl    = $options['logo'];
	$workTime   = $options[ 'work_time_' . Lang::current() ];
	$phone      = $options['phone'];
	$email      = $options['email'];
	$facebook   = $options['facebook'];
	$instagramm = $options['instagramm'];
	$map        = $options[ 'address_' . Lang::current() ];
?>


    <!-- Preloader Start-->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- Preloader End -->


    <!-- Top-Bar START -->
    <div id="top-bar" class="hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <ul class="top-bar-info">
                        <li><i class="fa fa-clock-o"></i><?= Lang::get( 'time' ); ?>: <?= $workTime; ?></li>
                        <li><i class="fa fa-phone"></i> <?= Lang::get( 'phone' ); ?>: <?= $phone; ?></li>
                        <li><i class="fa fa-envelope-o"></i><?= Lang::get( 'email' ); ?>: <?= $email; ?></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 right-holder hidden-sm">
                    <a href="#" class="top-appoinment"><?= Lang::get( 'question' ); ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Top-Bar END -->


    <!-- Navbar START -->
    <header>
        <nav class="navbar navbar-default navbar-custom" data-spy="affix" data-offset-top="50">
            <div class="container">
                <div class="row">
                    <div class="navbar-header navbar-header-custom">
                        <button type="button" class="navbar-toggle collapsed menu-icon" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-logo" href="/"><img src="<?= $logoUrl; ?>" alt="logo"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right navbar-links-custom">
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar END -->


    <!-- Slider START -->
    <div class="pogoSlider" id="js-main-slider">

        <div class="pogoSlider-slide" data-transition="fade" data-duration="1000"
             style="background-image:url(http://via.placeholder.com/1520x505);">
            <div class="container">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="750" data-delay="500">You Can change the World</h2>
                            <p class="pogoSlider-slide-element hidde" data-in="slideRight" data-out="slideUp"
                               data-duration="750" data-delay="900">Every failure is a blessing hidden under the mask,
                                provided that it teaches something that a person would not otherwise learn. Most of the
                                so-called failures are just a temporary defeat.</p>
                            <a href="#" class="button-lg button-primary mt-30 pogoSlider-slide-element"
                               data-in="slideRight" data-out="slideDown" data-duration="1150" data-delay="500">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pogoSlider-slide" data-transition="fade" data-duration="1000"
             style="background-image:url(http://via.placeholder.com/1520x505);">
            <div class="container">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="750" data-delay="500">You Can, If You Believe You Can</h2>
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp"
                               data-duration="750" data-delay="900">Define your goals! Work to achieve them! Direct your
                                thoughts, control emotions, act, and you will become the true creator of your destiny.
                                You will find the answers you need if you look for them.</p>
                            <a href="#" class="button-lg button-primary mt-30 pogoSlider-slide-element"
                               data-in="slideRight" data-out="slideDown" data-duration="1150" data-delay="500">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pogoSlider-slide" data-transition="fade" data-duration="1000"
             style="background-image:url(http://via.placeholder.com/1520x505);">
            <div class="container">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="750" data-delay="500">Courage is grace under pressure</h2>
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp"
                               data-duration="750" data-delay="900">The starting point of any achievement is desire.
                                Keep it constantly in your memory. Weak desires bring in weak results, just as a small
                                amount of fire gives a small amount of heat.</p>
                            <a href="#" class="button-lg button-primary mt-30 pogoSlider-slide-element"
                               data-in="slideRight" data-out="slideDown" data-duration="1150" data-delay="500">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pogoSlider-slide" data-transition="fade" data-duration="1000"
             style="background-image:url(http://via.placeholder.com/1520x505);">
            <div class="container">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp"
                                data-duration="750" data-delay="500">Make Business Easy with us</h2>
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp"
                               data-duration="750" data-delay="900">If people wanted to improve themselves instead of
                                saving the whole world, if they tried to achieve inner freedom instead of liberating all
                                of humanity, how much they would do for the real liberation of mankind..</p>
                            <a href="#" class="button-lg button-primary mt-30 pogoSlider-slide-element"
                               data-in="slideRight" data-out="slideDown" data-duration="1150" data-delay="500">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider END -->


    <!-- Top Articles START -->
    <div class="section-block" id="overview">
        <div class="container">
            <div class="section-heading center-holder">
                <h2>Let's make your own Business</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                    labore et dolore magna aliqua. </p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUpSm" data-wow-delay=".1s">
                    <article class="service-article clearfix">
                        <div class="article-icon">
                            <i class="icon-smartphone-10"></i>
                        </div>
                        <div class="article-text">
                            <h3>Mobile friendly</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                risus sollicitudin pellentesque et non erat.</p>
                            <a href="#">Read More</a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUpSm" data-wow-delay=".3s">
                    <article class="service-article clearfix">
                        <div class="article-icon">
                            <i class="icon-thinking-head"></i>
                        </div>
                        <div class="article-text">
                            <h3>Dedicated support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                risus sollicitudin pellentesque et non erat.</p>
                            <a href="#">Read More</a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUpSm" data-wow-delay=".5s">
                    <article class="service-article clearfix">
                        <div class="article-icon">
                            <i class="icon-credit-card"></i>
                        </div>
                        <div class="article-text">
                            <h3>Modern design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                risus sollicitudin pellentesque et non erat.</p>
                            <a href="#">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Articles END -->


    <!-- Services START -->
    <div class="section-block-grey" id="services">
        <div class="container">
            <div class="section-heading center-holder">
                <h2>Our Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                    labore et dolore magna aliqua. </p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay=".1s">
                    <div class="service-block">
                        <img src="http://via.placeholder.com/360x240" alt="service-image">
                        <div class="inner-padd clearfix">
                            <div class="service-block-content">
                                <h4>Business Advisor</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="service-block-icon">
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="service-block">
                        <img src="http://via.placeholder.com/360x240" alt="service-image">
                        <div class="inner-padd clearfix">
                            <div class="service-block-content">
                                <h4>Financial Planing</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="service-block-icon">
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                    <div class="service-block">
                        <img src="http://via.placeholder.com/360x240" alt="service-image">
                        <div class="inner-padd clearfix">
                            <div class="service-block-content">
                                <h4>Marketing</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="service-block-icon">
                                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services END -->


    <div id="about">
        <!-- About section START -->
        <div class="section-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay=".4s">
                        <div class="section-heading left-holder mt-20">
                            <h2>We are creative company</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-1 wow fadeInUpSm" data-wow-delay=".1s">
                        <img src="http://via.placeholder.com/360x540" class="border-round img-shadow" alt="about-img">
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-1 wow fadeIn" data-wow-delay=".4s">
                        <div class="text-content mt-30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <a href="#" class="button-primary mt-30">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About section END -->


        <!-- CountUp Section START -->
        <div class="section-block-parallax" style="background-image: url(http://via.placeholder.com/1520x305);">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDownSm" data-wow-delay=".1s">
                        <div class="countup-box">
                            <h4 class="countup">1200</h4>
                            <h5>Hours Of Work</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDownSm" data-wow-delay=".3s">
                        <div class="countup-box">
                            <h4 class="countup">500</h4>
                            <h5>Complete Project</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDownSm" data-wow-delay=".5s">
                        <div class="countup-box">
                            <h4 class="countup">100</h4>
                            <h5>Happy Clients</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDownSm" data-wow-delay=".7s">
                        <div class="countup-box">
                            <h4 class="countup">20</h4>
                            <h5>Awards</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CountUp Section END -->
    </div>


    <div id="features">
        <!-- Features Boxes START -->
        <div class="section-block-grey">
            <div class="container">
                <div class="section-heading center-holder">
                    <h2>Why Choose Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                        labore et dolore magna aliqua. </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay=".1s">
                        <div class="service-box clearfix">
                            <div class="box-icon">
                                <i class="icon-price-tag"></i>
                            </div>
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                    risus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="service-box clearfix">
                            <div class="box-icon">
                                <i class="icon-taking-notes"></i>
                            </div>
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                    risus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                        <div class="service-box clearfix">
                            <div class="box-icon">
                                <i class="icon-stopwatch-1"></i>
                            </div>
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                    risus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay=".7s">
                        <div class="service-box clearfix">
                            <div class="box-icon">
                                <i class="icon-scientist-avatar"></i>
                            </div>
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                    risus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay=".9s">
                        <div class="service-box clearfix">
                            <div class="box-icon">
                                <i class="icon-thinking-head"></i>
                            </div>
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                    risus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.1s">
                        <div class="service-box clearfix">
                            <div class="box-icon">
                                <i class="icon-smartphone-6"></i>
                            </div>
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget
                                    risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Boxes END -->


        <!-- Team Members START -->
        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <h2>Team Members</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                        labore et dolore magna aliqua. </p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUpSm" data-wow-delay=".1s">
                        <div class="team-member">
                            <div class="team-member-image">
                                <img src="http://via.placeholder.com/262x321" alt="member">
                                <div class="team-member-overlay">
                                    <div class="team-member-content">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h4>Ann Smith</h4>
                                <h6>Designer</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUpSm" data-wow-delay=".3s">
                        <div class="team-member">
                            <div class="team-member-image">
                                <img src="http://via.placeholder.com/262x321" alt="member">
                                <div class="team-member-overlay">
                                    <div class="team-member-content">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h4>Ben Doe</h4>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUpSm" data-wow-delay=".5s">
                        <div class="team-member">
                            <div class="team-member-image">
                                <img src="http://via.placeholder.com/262x321" alt="member">
                                <div class="team-member-overlay">
                                    <div class="team-member-content">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h4>Jane Brown</h4>
                                <h6>Marketing</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUpSm" data-wow-delay=".7s">
                        <div class="team-member">
                            <div class="team-member-image">
                                <img src="http://via.placeholder.com/262x321" alt="member">
                                <div class="team-member-overlay">
                                    <div class="team-member-content">
                                        <a href="#"><i class="fa fa-facebook-official"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h4>John Watson</h4>
                                <h6>Business analyst</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Members END -->
    </div>


    <div id="projects">
        <!-- Portfolio START -->
        <div class="section-block-grey">
            <div class="container">
                <div class="section-heading center-holder">
                    <h2>Latest Projects</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                        labore et dolore magna aliqua. </p>
                </div>

                <div class="latest-projects">
                    <div id="filters" class="center-holder">
                        <button class="isotop-button" data-filter="*">Show all</button>
                        <button class="isotop-button" data-filter=".financical">Financical</button>
                        <button class="isotop-button" data-filter=".business">Business</button>
                        <button class="isotop-button" data-filter=".marketing">Marketing</button>
                    </div>

                    <div class="row">
                        <div class="isotope-grid">
                            <div class="col-md-4 col-sm-6 col-xs-12 isotope-item business">
                                <a href="project-detail.html">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="http://via.placeholder.com/360x240" alt="project-img">
                                            <div class="project-item-overlay">
                                                <h4>Designing</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 isotope-item business marketing">
                                <a href="project-detail.html">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="http://via.placeholder.com/360x240" alt="project-img">
                                            <div class="project-item-overlay">
                                                <h4>Development</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 isotope-item marketing financical">
                                <a href="project-detail.html">
                                    <div class="project-item ">
                                        <div class="overlay-container">
                                            <img src="http://via.placeholder.com/360x240" alt="project-img">
                                            <div class="project-item-overlay">
                                                <h4>Making Money</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 isotope-item business financical">
                                <a href="project-detail.html">
                                    <div class="project-item ">
                                        <div class="overlay-container">
                                            <img src="http://via.placeholder.com/360x240" alt="project-img">
                                            <div class="project-item-overlay">
                                                <h4>Programming</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 isotope-item marketing">
                                <a href="project-detail.html">
                                    <div class="project-item ">
                                        <div class="overlay-container">
                                            <img src="http://via.placeholder.com/360x240" alt="project-img">
                                            <div class="project-item-overlay">
                                                <h4>Amazing</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12 isotope-item financical business">
                                <a href="project-detail.html">
                                    <div class="project-item ">
                                        <div class="overlay-container">
                                            <img src="http://via.placeholder.com/360x240" alt="project-img">
                                            <div class="project-item-overlay">
                                                <h4>Fashion</h4>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio END -->


        <!-- Testmonials START -->
        <div class="section-block-parallax" style="background-image: url(http://via.placeholder.com/1520x471);">
            <div class="container">
                <div class="section-heading white-color center-holder">
                    <h2>What our Clients Say</h2>
                </div>
                <div class="owl-carousel owl-theme" id="testmonials">
                    <div class="testmonial-block clearfix">
                        <div class="testmonial-img">
                            <img src="http://via.placeholder.com/80x80" alt="testmonial-img">
                        </div>
                        <div class="testmonial-text">
                            <div class="ml-15">
                                <span>Web Developer</span>
                                <strong>Martin Harris</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="testmonial-block clearfix">
                        <div class="testmonial-img">
                            <img src="http://via.placeholder.com/80x80" alt="testmonial-img">
                        </div>
                        <div class="testmonial-text">
                            <div class="ml-15">
                                <span>Designer</span>
                                <strong>Ann Hill</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="testmonial-block clearfix">
                        <div class="testmonial-img">
                            <img src="http://via.placeholder.com/80x80" alt="testmonial-img">
                        </div>
                        <div class="testmonial-text">
                            <div class="ml-15">
                                <span>Marketing</span>
                                <strong>Joe Doe</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testmonials END -->
    </div>


    <div id="blog">
        <!-- Blog Grid START -->
        <div class="section-block-grey">
            <div class="container">
                <div class="section-heading center-holder">
                    <h2>Lates News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                        labore et dolore magna aliqua. </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay=".1s">
                        <div class="blog-grid">
                            <div class="blog-grid-img">
                                <img src="http://via.placeholder.com/358x189" alt="blog-img">
                            </div>

                            <div class="blog-grid-content inner-padd">
                                <h4><a href="#">Basic Optimization Of Websites</a></h4>
                                <div class="admin-info">
                                    <i class="icon-users"></i><span>Admin</span>
                                </div>
                                <div class="admin-info">
                                    <i class="icon-calendar-6"></i><span>11 Ogt 2017</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form.</p>
                                <div class="blog-grid-button">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-grid">
                            <div class="blog-grid-img">
                                <img src="http://via.placeholder.com/358x189" alt="blog-img">
                            </div>

                            <div class="blog-grid-content inner-padd">
                                <h4><a href="#">Basic Optimization Of Websites</a></h4>
                                <div class="admin-info">
                                    <i class="icon-users"></i><span>Admin</span>
                                </div>
                                <div class="admin-info">
                                    <i class="icon-calendar-6"></i><span>11 Ogt 2017</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form.</p>
                                <div class="blog-grid-button">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-grid">
                            <div class="blog-grid-img">
                                <img src="http://via.placeholder.com/358x189" alt="blog-img">
                            </div>

                            <div class="blog-grid-content inner-padd">
                                <h4><a href="#">Basic Optimization Of Websites</a></h4>
                                <div class="admin-info">
                                    <i class="icon-users"></i><span>Admin</span>
                                </div>
                                <div class="admin-info">
                                    <i class="icon-calendar-6"></i><span>11 Ogt 2017</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form.</p>
                                <div class="blog-grid-button">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Grid END -->
    </div>


    <div id="pricing">
        <!-- Pricing List START -->
        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <h2>Pricing List</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut
                        labore et dolore magna aliqua. </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUpSm" data-wow-delay=".1s">
                        <div class="pricing">
                            <div class="inner-padd">
                                <div class="pricing-box">
                                    <h4>Basic</h4>
                                    <h2>$ 25.9</h2>
                                    <p>Per Month AUD inlc GST</p>
                                    <div class="pricing-info">
                                        <p><i class="icon-add"></i> <span>24/7 Support</span></p>
                                        <p><i class="icon-add"></i> <span>Unlimited styles</span></p>
                                        <p><i class="icon-add"></i> <span>Regular Updates</span></p>
                                        <p><i class="icon-add"></i> <span>Strategic Development</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-button">
                                <a href="#">Purchase</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUpSm" data-wow-delay=".3s">
                        <div class="pricing">
                            <div class="inner-padd">
                                <div class="pricing-box">
                                    <h4>Starter</h4>
                                    <h2>$ 49.9</h2>
                                    <p>Per Month AUD inlc GST</p>
                                    <div class="pricing-info">
                                        <p><i class="icon-add"></i> <span>24/7 Support</span></p>
                                        <p><i class="icon-add"></i> <span>Unlimited styles</span></p>
                                        <p><i class="icon-add"></i> <span>Regular Updates</span></p>
                                        <p><i class="icon-add"></i> <span>Strategic Development</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-button">
                                <a href="#">Purchase</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUpSm" data-wow-delay=".5s">
                        <div class="pricing">
                            <div class="inner-padd">
                                <div class="pricing-box">
                                    <h4>Professional</h4>
                                    <h2>$ 89.9</h2>
                                    <p>Per Month AUD inlc GST</p>
                                    <div class="pricing-info">
                                        <p><i class="icon-add"></i> <span>24/7 Support</span></p>
                                        <p><i class="icon-add"></i> <span>Unlimited styles</span></p>
                                        <p><i class="icon-add"></i> <span>Regular Updates</span></p>
                                        <p><i class="icon-add"></i> <span>Strategic Development</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-button">
                                <a href="#">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing List START -->
    </div>


    <!-- Partners Section START -->
    <div class="partner-section-grey">
        <div class="container">
            <div class="owl-carousel owl-theme partners wow fadeInLeft" id="our-partners">
                <div class="item">
                    <img src="http://via.placeholder.com/216x108" alt="partner-image">
                </div>

                <div class="item">
                    <img src="http://via.placeholder.com/216x108" alt="partner-image">
                </div>

                <div class="item">
                    <img src="http://via.placeholder.com/216x108" alt="partner-image">
                </div>

                <div class="item">
                    <img src="http://via.placeholder.com/216x108" alt="partner-image">
                </div>

                <div class="item">
                    <img src="http://via.placeholder.com/216x108" alt="partner-image">
                </div>

                <div class="item">
                    <img src="http://via.placeholder.com/216x108" alt="partner-image">
                </div>
            </div>
        </div>
    </div>
    <!-- Partners Section END -->


    <!-- Footer START -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- Col 1 Start -->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="footer-column-1">
                            <img src="<?= $logoUrl ?>" alt="footer-logo">
                            <div class="text-content mt-25">
                                <p class="grey-color">Lorem ipsum dolor sit amet, ad per sint graece, vix quod nusquam
                                    ea.</p>
                                <div class="white-color mt-20">
                                    <p><i class="fa fa-envelope-o"></i><?= Lang::get( 'email' ); ?>: <?= $email; ?></p>
                                    <p><i class="fa fa-phone"></i><?= Lang::get( 'phone' ); ?>: <?= $phone; ?></p>
                                    <p><i class="fa fa-clock-o"></i><?= Lang::get( 'time' ); ?>: <?= $workTime; ?></p>
                                    <p><i class="fa fa-map-marker"></i><?= Lang::get( 'map' ); ?>: <?= $map; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col 1 End -->

                    <!-- Col 2 Start -->
                    <div class="col-md-3 col-sm-12 col-xs-12  col-md-offset-1">
                        <div class="footer-column-heading">
                            <h6>Recent Posts</h6>
                        </div>
                        <div class="footer-post clearfix">
                            <div class="footer-post-img">
                                <img src="http://via.placeholder.com/66x54" alt="post-img">
                            </div>
                            <div class="footer-post-content">
                                <h6><a href="blog-post.html">Lorem ipsum dolor sit amet, ad per sint graece</a></h6>
                            </div>
                        </div>

                        <div class="footer-post clearfix">
                            <div class="footer-post-img">
                                <img src="http://via.placeholder.com/66x54" alt="post-img">
                            </div>
                            <div class="footer-post-content">
                                <h6><a href="blog-post.html">Lorem ipsum dolor sit amet, ad per sint graece</a></h6>
                            </div>
                        </div>

                        <div class="footer-post clearfix">
                            <div class="footer-post-img">
                                <img src="http://via.placeholder.com/66x54" alt="post-img">
                            </div>
                            <div class="footer-post-content">
                                <h6><a href="blog-post.html">Lorem ipsum dolor sit amet, ad per sint graece</a></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Col 2 End -->

                    <!-- Col 3 Start -->
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="footer-column-heading">
                            <h6>Links</h6>
                        </div>
                        <ul>
                            <li><a href="#top-bar">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#projects">Portfolio</a></li>
                        </ul>
                    </div>
                    <!-- Col 3 End -->

                    <!-- Col 4 Start -->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="footer-column-heading">
                            <h6>Newsletter</h6>
                        </div>
                        <div class="input-group newsletter-form">
                            <input type="email" placeholder="Your Email">
                            <span class="input-group-btn">
				        <button class="btn btn-default" type="submit"><i class="fa fa-paper-plane-o"
                                                                         aria-hidden="true"></i></button>
				      </span>
                        </div>
                    </div>
                    <!-- Col 4 End -->
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="bottom-icons white-color">
                            <a target="_blank" href="<?= $facebook; ?>"><i class="fa fa-facebook"></i></a>
                            <!--                            <a href="#"><i class="fa fa-twitter"></i></a>-->
                            <a target="_blank" href="<?= $instagramm; ?>"><i class="fa fa-instagram"></i></a>
                            <!--                            <a href="#"><i class="fa fa-pinterest"></i></a>-->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="grey-color right-holder mt-10">
                            <p>© Copyright 2017-<?= date( 'Y' ); ?>. <?= Lang::get( 'All Rights reserved' ) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->


<?php get_footer(); ?>