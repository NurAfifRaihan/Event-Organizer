<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Project Event Organizer</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/css/main.css') }}">    
    <link rel="stylesheet" href="{{ asset ('admin/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') }}">

  </head>
  <body>
      <div class="menu-wrap">
        <nav class="menu navbar">
          <div class="icon-list navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#video-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>                              
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">Our Works</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>     
              <li class="nav-item">
                <a class="nav-link" href="#blog">Type</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ ('/dashboard')}}">Admin</a>
              </li> 
            </ul>
          </div>
        </nav> 
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
      </div>      
  	<!-- Header Section Start -->

    <header id="video-area" data-stellar-background-ratio="0.5">    
      <div id="block" data-vide-bg="{{ asset ('admin/video/video') }}"></div>
      <div class="fixed-top">
          <div class="container">
            <div class="logo-menu">
              <a href="{{ url ('/home3') }}" class="logo"><span class="lnr lnr-diamond"></span> Event Organizer</a>
              <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>    
            </div>           
          </div>
      </div>
      <div class="overlay overlay-2"></div>      
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Crystal Event Organizer</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Amanah | Terjangkau | Terpercaya </p>
              <a href="{{ url ('/booking') }}" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><i class="bi bi-clipboard2-minus"></i> Booking Now!</a>
            </div>
          </div>
        </div> 
      </div>      
    </header>
    <!-- Header Section End --> 


    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Services</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Melayani berbagai macam jenis acara <br> Organizing dengan harga murah</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="bi bi-flower2"></i>
              </div>
              <h4>Pernikahan</h4>
              <p>Nikmati dengan harga mulai dari 5000k</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="bi bi-balloon"></i>
              </div>
              <h4>Ulang Tahun</h4>
              <p>Nikmati dengan harga mulai dari 1000k</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="bi bi-mortarboard"></i>
              </div>
              <h4>Wisuda</h4>
              <p>Nikmati dengan harga mulai dari 1500k</p>
            </div>
          </div>
          <!-- <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-layers"></i>
              </div>
              <h4>UI/UX Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1s">
              <div class="icon">
                <i class="lnr lnr-tablet"></i>
              </div>
              <h4>App Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-briefcase"></i>
              </div>
              <h4>Digital Marketing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <!-- <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Amazing <span>Features</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="content-left text-right wow fadeInLeft animated" data-wow-offset="10">
              <div class="box-item left">
                <span class="icon">
                  <i class="lnr lnr-rocket"></i>
                </span>
                <div class="text">
                  <h4>Bootstrap 4 Based</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lnr lnr-laptop-phone"></i>
                </span>
                <div class="text">
                  <h4>Fully Responsive</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-item left">
                <span class="icon">
                  <i class="lnr lnr-cog"></i>
                </span>
                <div class="text">
                  <h4>HTML5 & CSS3</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="show-box wow fadeInDown animated" data-wow-offset="10">
              <img src="/features/feature.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="content-right text-left wow fadeInRight animated" data-wow-offset="10">
              <div class="box-item right">
                <span class="icon">
                  <i class="lnr lnr-camera-video"></i>
                </span>
                <div class="text">
                  <h4>Video Background</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lnr lnr-magic-wand"></i>
                </span>
                <div class="text">
                  <h4>Parallax Sections</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <div class="box-item right">
                <span class="icon">
                  <i class="lnr lnr-spell-check"></i>
                </span>
                <div class="text">
                  <h4>Ajax Contact Form</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Features Section End -->    

    <!-- Start Video promo Section -->
    <!-- <section class="video-promo section" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Our Introductory Video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Learn more about us, its only 30mins</p>
                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Video Promo Section -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Works</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Dokumentasi Project Kami <br></p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center wow fadeInUp" data-wow-delay=".6s">
              <a class="control mixitup-control-active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="control btn btn-common" data-filter=".marketing">
                Pernikahan 
              </a>
              <a class="control btn btn-common" data-filter=".planning">
                Ulang Tahun
              </a>
              <a class="control btn btn-common" data-filter=".research">
                Wisuda 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->          

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing marketing">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="{{ asset ('admin/img/portfolio/wed.jpg') }}">
                      <img src="{{ asset ('admin/img/portfolio/wed.jpg') }}" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="{{ asset ('admin/img/portfolio/ultah.jpg') }}">
                      <img src="{{ asset ('admin/img/portfolio/ultah.jpg') }}" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="{{ asset ('admin/img/portfolio/wisuda1.jpg') }}">
                      <img src="{{ asset ('admin/img/portfolio/wisuda1.jpg') }}" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="{{ asset ('admin/img/portfolio/wed1.jpg') }}">
                      <img src="{{ asset ('admin/img/portfolio/wed1.jpg') }}" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="{{ asset ('admin/img/portfolio/ultah1.jpg') }}">
                      <img src="{{ asset ('admin/img/portfolio/ultah1.jpg') }}" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="{{ asset ('admin/img/portfolio/wisuda.jpg') }}">
                      <img src="{{ asset ('admin/img/portfolio/wisuda.jpg') }}" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Daftar <span>Harga</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Menyediakan berbagai macam kelas <br> dengan harga terjangkau</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table table-left wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lnr lnr-rocket"></i> 
              </div>
              <div class="pricing-details">
                <h2>Standar Plan</h2>
                <span>1499k</span>
                <ul>
                  <li>Meyediakan Layanan</li>
                  <li>Dengan 5 Orang Staff</li>
                  <!-- <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li> -->
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lnr lnr-heart"></i> 
              </div>
              <div class="pricing-details">
                <h2>Popular Plan</h2>
                <span>3499k</span>
                <br>
                <ul>
                  <li>Meyediakan Layanan</li>
                  <li>Dengan 10 Orang Staff</li>
                  <!-- <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li> -->
                </ul>
              </div>
              <br>
              <br>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table table-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lnr lnr-magic-wand"></i> 
              </div>
              <div class="pricing-details">
                <h2>Premium Plan</h2>
                <span>6999k</span>
                <ul>
                  <li>Menyediakan Layanan</li>
                  <li>Dengan 20 Orang Staff</li>
                  <!-- <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li> -->
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">Get Plan</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
    <div class="counters section" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="wow fadeInUp" data-wow-delay=".2s">
              <div class="facts-item"> 
                <div class="icon">
                  <i class="bi bi-emoji-heart-eyes"></i>
                </div>                
                <div class="fact-count">
                  <h3><span class="counter">100</span>%</h3>
                  <h4>Amanah</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="wow fadeInUp" data-wow-delay=".4s">
              <div class="facts-item">
                <div class="icon">
                  <i class="bi bi-currency-exchange"></i>
                </div>                
                <div class="fact-count">
                  <h3><span class="counter">700</span></h3>
                  <h4>Murah</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="wow fadeInUp" data-wow-delay=".6s">
              <div class="facts-item">
                <div class="icon">
                  <i class="bi bi-wallet2"></i>
                </div>                
                <div class="fact-count">
                  <h3><span class="counter">10000</span>+</h3>
                  <h4>Terjangkau</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="wow fadeInUp" data-wow-delay=".8s">
              <div class="facts-item">
                <div class="icon">
                  <i class="bi bi-magic"></i>
                </div>                
                <div class="fact-count">
                  <h3><span class="counter">1689</span></h3>
                  <h4>Design Modern</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="{{ asset ('admin/img/testimonial/han.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Konsepnya bagus, unik dan modern</p>
                  <h3>Rehan</h3>
                  <span>CEO Optima Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="{{ asset ('admin/img/testimonial/nur.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Organizer dengan harga murah tapi design bagus dan juga amanah</p>
                  <h3>Nurul</h3>
                  <span>President Lexo Inc</span>
                </div>
              </div>
              <div class="testimonial-item">
                <img src="{{ asset ('admin/img/testimonial/mi.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>Designnya unik ya organizernya murah lagi 😍</p>
                  <h3>Rahmi</h3>
                  <span>Marketing Head Matrix Media</span>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- testimonial Section Start -->

    <!-- Download Section Start -->
    <!-- <section id="download" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><span>Download</span> Our App</h2>
        </div>
        <div class="row">
          <div class="col-md-12">            
            <div class="download-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <a href="#" class="btn btn-border"><i class="fa fa-apple"></i>Download Now</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Download Section End -->

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Event <span>Type</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Menyediakan berbagai macam jenis event <br> </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset ('admin/img/blog/wed2.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="#">Pernikahan mewah dengan organizer murah?</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 23, 2021</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 35 Comments</a></span>
                </div>
                <p>
                Menyediakan layanan organizing pernikahan dengan harga terjangkau namun memiliki design modern
                </p>
                <!-- <a href="single-post.html" class="btn btn-common btn-rm">Read More</a> -->
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset ('admin/img/blog/ultah2.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                  <a href="#">Pesta Ulang Tahun</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Jun 18, 2023</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 21 Comments</a></span>
                </div>
                <p>
                  Menyediakan layanan organizing acara ulang tahun dengan harga terjangkau dan memiliki design yang aesthetic
 
                </p>
                <!-- <a href="single-post.html" class="btn btn-common btn-rm">Read More</a> -->
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.9s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{ asset ('admin/img/blog/wisuda2.jpg') }}" alt="">
                </a>                
              </div>
              <div class="blog-item-text">    
                <h3>
                  <a href="#">Acara Wisuda</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Jun 19, 2022</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 50 Comments</a></span>
                </div>
                <p>
                  Menyediakan layanan organizing acara wisuda dengan harga terjangkau dan memiliki design yang bisa dicustome

                </p>
                <!-- <a href="single-post.html" class="btn btn-common btn-rm">Read More</a> -->
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Contact Section Start -->
    <!-- <section id="contact" class="section">
      <div class="container">
        <div class="row justify-content-md-center">          
          <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">            
            <div class="contact-block">
              <div class="section-header">          
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Booking <span>Now</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
              </div>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" placeholder="Your Message" rows="11" data-error="Write your message" required></textarea>
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
    </section> -->
    <!-- Contact Section End -->

    <!-- Subcribe Section Start -->
    <!-- <div id="subscribe" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe <span>Newsletter</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe to get all latest news from us.</p>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-8">
              <form class="text-center form-inline wow fadeInUp" data-wow-delay="0.3s">
                <input class="mb-20 form-control" name="email" placeholder="Your Email Address">
                <button class="sub_btn">subscribe</button>
              </form>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Subcribe Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>
            <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <p>Project Event Organizer &copy; 2023 - Designed & Developed by <a rel="nofollow" href="{{ url ('https://uideck.com') }}">UIdeck</a></p>
            </div>  
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset ('admin/js/jquery-min.js') }}"></script>
    <script src="{{ asset ('admin/js/tether.min.js') }}"></script>
    <script src="{{ asset ('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('admin/js/classie.js') }}"></script>
    <script src="{{ asset ('admin/js/mixitup.min.js') }}"></script>
    <script src="{{ asset ('admin/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset ('admin/js/owl.carousel.min.js') }}"></script>    
    <script src="{{ asset ('admin/js/jquery.stellar.min.js') }}"></script>    
    <script src="{{ asset ('admin/js/jquery.nav.js') }}"></script>    
    <script src="{{ asset ('admin/js/smooth-scroll.js') }}"></script>    
    <script src="{{ asset ('admin/js/smooth-on-scroll.js') }}"></script>    
    <script src="{{ asset ('admin/js/wow.js') }}"></script>    
    <script src="{{ asset ('admin/js/menu.js') }}"></script>
    <script src="{{ asset ('admin/js/jquery.vide.js') }}"></script>
    <script src="{{ asset ('admin/js/jquery.counterup.min.js') }}"></script>    
    <script src="{{ asset ('admin/js/jquery.magnific-popup.min.js') }}"></script>    
    <script src="{{ asset ('admin/js/waypoints.min.js') }}"></script>    
    <script src="{{ asset ('admin/js/form-validator.min.js') }}"></script>
    <script src="{{ asset ('admin/js/contact-form-script.js') }}"></script>     
    <script src="{{ asset ('admin/js/main.js') }}"></script>
    
  </body>
</html>