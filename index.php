
<?php
if(isset($_POST['submit'])){
  $to = "iamkrishnadev1999@gmail.com, singhaakash498@gmail.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = '<h2>Ascoach Form Request Submitted</h2>
  <p><b>Name:</b> '.$first_name.''.$last_name.'</p>
  <p><b>Email Address:</b> '.$email.'</p>
  <p><b>Message:</b>'.$_POST['message'].'</p>';
  $headers =  "From: $from" . "\r\n" .
  "Reply-To: $email" . "\r\n" .
  "MIME-Version: 1.0\r\n" . 
"Content-Type: text/html; charset=iso-8859-1\r\n";
  mail($to,$subject,$message,$headers);
  // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  // You can also use header('Location: thank_you.php'); to redirect to another page.
  }


?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ASCoach &mdash; Aakash Singh Coaching</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- seo purpose -->
		<meta property="og:title" content="Home">
		<meta property="og:type" content="article">
		<meta property="og:url" content="http://ascoach.in/">
		<meta property="og:site_name" content="Ascoach">
		<meta property="og:description" content="Aakash Singh (Ascoach) providing to businesses, entrepreneurs or an individual looking for personal development, we can help all!
From businesses, entrepreneurs or an individual looking for personal development, we can help all! Ascoach solves the problems which are an hindrance to">

									<!-- <meta property="og:image" content="http://coachbsr.com/wp-content/uploads/2017/08/MLogo.png"> -->

    <meta name="description" content="Aakash Singh (Ascoach) providing to businesses, entrepreneurs or an individual looking for personal development, we can help all!
From businesses, entrepreneurs or an individual looking for personal development, we can help all! Ascoach solves the problems which are an hindrance to">
    <meta name="keywords" content="ascoach, aakash singh, Aakash singh coaching, Ascoach, Krishnadev Thakur,aakash singh Bussiness, Bussiness , ascoach website,aakash singh websites,Krishnadev organisation, krishnadev website, businesses, aakash singh">

    <meta name="google-site-verification" content="49z712QM08xZwT48YBp1nd5NV8Nm2g0EObdDzvePgh8" />
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css  ">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        @media (min-width: 768px) {
    .img2 img{
      width:100%;height: 83px;object-fit:cover;   
    }
  }

  @media (max-width: 768px) {
    .img2 img{
      width:100%;height: 152px;object-fit:cover;   
    }
    .mr-5, .mx-5 {
      margin-right: 0rem!important;
  }
  }
    </style>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">AS<span>Coach</span></a></h1>
            <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">AS<span>Coach</span> <span class="text-primary">.</span> </a></h1> -->
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#training-section" class="nav-link">Our Training</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="service.html" class="nav-link">Doorstep</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
					  <!-- <li><a href="it-service/index.html" class="nav-link">IT-Service</a></li> -->

                <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        TAS Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  style="color:black !important;" href="service.html">Service</a>
          <a class="dropdown-item"  style="color:black !important;" href="it-service.php">IT Service</a>
         <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> 
      </li> -->
                <!-- <li><a href="#tas-section" class="nav-link">TAS Support</a></li> -->
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row">

          <div class="col-md-6 mt-lg-5 ml-auto text-left align-self-end align-self-md-center">
            <h1>Professional Life Coaching</h1>
            <p class="mb-4"><a href="#contact-section" class="btn btn-primary mr-2 mb-2">Get Started</a></p>
          </div>
            
        </div>
      </div>
    </div>  

    <!-- <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
            <h2 class="text-white">Special Offers</h2>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="mr-3"><span class="flaticon-bill display-3 text-special"></span></div>
            <div>
              <h3 class="text-white h4">50% less of every purchase</h3>
              <p class="text-special">A step-by-step guide to break into investment</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex">
            <div class="mr-3"><span class="flaticon-customer-service display-3 text-special"></span></div>
            <div>
              <h3 class="text-white h4">More programs than ever before</h3>
              <p class="text-special">The Complete main Investment divisions</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <section style="padding: 7em 0 0 !important;" class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-lg-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="images/about_2.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-6 order-md-1" data-aos="fade">
            <h2 class="section-title mb-3">Welcome to ASCoach</h2>
            <p style="font-size: 1.03em;" class="lead">We providing to businesses, entrepreneurs or an individual looking for personal development, we can help all!
              We respect, trust & care for each other. Our greatest strength is our team spirit & that will remain because a core of us come through the leagues together.
            </p>
            <p  style="font-size: 1.03em;" class="lead"> ASCoach solves the problems which are an hindrance to their business or self growth by offering his proven strategic programs personally curated for his clients. We providing quality services at your doorstep.</p>
            <!-- <p class="mb-4">The resulting partnership is a successful—and usually long-term—connection between my clients’ particular financing needs and the interests of the financing resource</p> -->

             <!-- ASCoach solves the problems which are an hindrance to their business or self growth by offering his proven strategic programs personally curated for his clients. -->
             <!-- <p><img src="images/signature.jpg" alt="Image" class="img-fluid w-25"></p> -->
          </div>
          
        </div>
      </div>
    </section>
  


    <div class="site-section bg-light" id="training-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Training</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled training">
              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach 03.jpg" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to develop leadership skills?</a></h2>
                  <span class="text-muted d-block mb-4">Leadership Skill</span>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p> -->
                </div>
              </li>

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach 04.jpg" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">Team work and have best productiity</a></h2>
                  <span class="text-muted d-block mb-4">Team Building</span>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p> -->
                </div>
              </li>

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach 01.jpg" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How To manage your Stress?</a></h2>
                  <span class="text-muted d-block mb-4">Stress Management   </span>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p> -->
                </div>
              </li>

            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled training">
              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach 05.jpg" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to develop your skills</a></h2>
                  <span class="text-muted d-block mb-4">PROFESSIONAL COURSES </span>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p> -->
                </div>
              </li>
              <!-- <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach 02.jpg" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to deal your business Conflict?</a></h2>
                  <span class="text-muted d-block mb-4">Conflict Management</span>
                </div>
              </li> -->

              <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach06 behaviorial training.png" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How to stay progressive in knowledge with training?</a></h2>
                  <span class="text-muted d-block mb-4">Behavioural Training </span>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p> -->
                </div>
              </li>

              <!-- <li class="mb-5 d-block d-lg-flex">
                <div class="mr-5 mb-4 img">
                  <a href="training-single.html">
                  <div class="img2">
                  <img src="images/ascoach 05.jpg" alt="Image" class="img-fluid">
                  </div>
                  </a>
                </div>
                <div>
                  <h2 class="h4"><a href="training-single.html" class="text-black">How To be a good salesman</a></h2>
                  <span class="text-muted d-block mb-4">Sales Training</span>
                  
                </div>
              </li> -->

              
             
            </ul>
            <ul class="list-unstyled training">
              <li class="mb-5 d-block d-lg-flex">
                  <div class="mr-5 mb-4 img">
                    <a href="training-single.html">
                    <div class="img2">
                    <img style="object-fit: fill;" src="images/personaliy developmemt.jpg" alt="Image" class="img-fluid">
                    </div>
                    </a>
                  </div>
                  <div>
                    <h2 class="h4"><a href="training-single.html" class="text-black">How To grow yourself</a></h2>
                    <span class="text-muted d-block mb-4">PERSONALITY DEVELOPMENT</span>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores .</p> -->
                  </div>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    
    
    <!-- <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 text-left">
            <h2 class="section-title mb-3">Meet Team</h2>
            <p class="lead">We are a team because we respect, trust & care for each other. Our greatest strength is our team spirit & that will remain because a core of us come through the leagues together.</p>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">  <img src="images/akash.jpeg" alt="Aaksh Singh" class="img-fluid"></div>
              
              </figure>
              <div class="p-3">
                <h3>Aakash Singh</h3>
                <span class="position">Expert Business Coach</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">
                <img style="object-fit: fill;" src="images/imageperson2.jpeg" alt="Image" class="img-fluid">
               </div>
              </figure>
              <div class="p-3">
                <h3>Prashant Chaudhari</h3>
                <span class="position">Expert Consultant</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <div class="img-card2">
                <img src="images/krishna.jpeg"   alt="Krishnadev Thakur" class="img-fluid">
               </div>
              </figure>
              <div class="p-3">
                <h3>Krishnadev Thakur</h3>
                <span class="position">Expert IT Service</span>
              </div>
            </div>
          </div>

       

          
        </div>
      </div>
    </section> -->


    <section class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-6" stylr="position: relative;">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev">Prev</a> / <a href="#" class="custom-next">Next</a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3">Social Life</h2>
                <p class="lead">What is good social life?</p>
                <p>Having strong relationships and love in your life Being able to manage your money Being in good health, with enough energy to get things done each day (physical well-being) Feeling engaged with where you live.</p>

                <!-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> -->
              </div>
              <div>
                <h2 class="section-title mb-3">Money &amp; Finance</h2>
                <p class="lead">Importance of Money & Finance</p>
                <p>Finance is the soul and blood of any business and no firm can survive without finance. It concerns itself with the management of monetary affairs of the firm—how money can be raised on the best terms available and how the procured money can be devoted to the best uses.</p>

                <!-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> -->
              </div>
              <div>
                <h2 class="section-title mb-3">Motivation</h2>
                <p class="lead">Motivation is always internal to the person.</p>
                <p>Human behaviour is caused by the various needs. A worker works in a factory because he needs money. Similarly, a thirsty man feels the need of water to conquer his thirst. The feeling of needs is a continuous process and the satisfaction of one need leads to the creation of a new one.</p>

                <!-- <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p> -->
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    

    <!-- <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-career"></span></div>
              <div>
                <h3>Business Consulting</h3>
                <p>We offer tailored consulting services for a variety of businesses and company situations.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-bill"></span></div>
              <div>
                <h3>Tax  Consulting</h3>
                <p>We will help you strategize to minimize income taxes and tax planning for closely held businesses.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-customer-service"></span></div>
              <div>
                <h3>IT Service</h3>
                <p>Strategic management of the IT directly influences your success in business.</p>
               
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plan"></span></div>
              <div>
                <h3>Insurance Consulting</h3>
                <p>We offer a wide range of expertise to help our clients adapt to a changing insurance market.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-growth"></span></div>
              <div>
                <h3>Financial Investment</h3>
                <p>Finance Investment is supporting your finance department in particularly challenging projects.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"> <img 
                src="images/rupee.svg"
                alt="MORTGAGE LOAN"
                height="42"
               style="margin: 11px 0 -2% !important;" />
              </div>
              <div>
                <h3>Mortgage Loan</h3>
                <p>Applying for a Mortgage loan has never been easier. Your new dreams starts here!.</p>
               
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->
    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Home Tutor</h2>
            <h4 style="color: #3a4971;" class="">Grow your child with ASCoach</h4>
          </div>
        </div>
        <div class="row align-items-stretch">
    <p class="lead">Now-a-days, Our day-to-day life is very busy, we don’t have time to focus our
child. ASCoach launched home tutor service in Mira-bhayandar. In this, we
going to focus on education + personality development. Because During the
years of early childhood, a child's mind is vulnerable and easily influenced.
Children at this age look to others for guidance and self-affirmation. An
educator's role is to aid in the development of his or her students' personalities.
We as educators all know that our early childhood students seek our approval.
They look up to us and take our opinion as truth. The expectations that we
project onto our students affect their self-esteem and confidence. 
    </p>

        </div>
      </div>
    </section>
<!-- 
    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section> -->

    
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our Blog Posts</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
            <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">"Success is not final; failure is not fatal: it is the courage to continue that count."</a></h2>
              <div class="meta mb-4">Aakash Singh <span class="mx-2">&bullet;</span> June 18, 2020<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p> -->
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
            <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">"The harder you work for something, the greater you'll feel when you achieve it."</a></h2>
              <div class="meta mb-4">Aakash Singh <span class="mx-2">&bullet;</span> June 10, 2020<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p> -->
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="blog-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div> -->
          
        </div>
      </div>
    </section>



    <!-- <section class="site-section bg-light" id="tas-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Our TAS Support</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
            <img src="images/tas4.png" alt="Image" class="img-fluid">
          </div>

          <div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
            <img src="images/TAS2.png" alt="Image" class="img-fluid">
      
          </div>

        </div>
      </div>
    </section> -->

   


    <section class="site-section " id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Reach to us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Shop 01, Kala Nikaten Society, Shamshan Road, Bhayandar (E)</p>
            <!-- <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p> -->
          </div>
          <div class="col-md-4">
            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+91 836 961 3417</a></p>
          </div>
          <div class="col-md-4">
            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">admin@ascoach.in</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            <form action="" method="post" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name="submit" class="btn btn-primary btn-md text-white">
                </div>
              </div>  
            </form>

            

            
          </div>
          
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p class="mb-5">Aakash Singh’s objective is to tap into the unrealized potential and help you achieve your personal and business goals with ease and at a pace than you may have never imagined.</p>

                <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                <form action="#" method="post" class="footer-subscribe">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-white text-black" type="button" id="button-addon2">Send</button>
                    </div>
                  </div>
                </form>

              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-5">
              <img src="images/img_1.jpg" alt="" class="img-fluid mb-4">
              <h2 class="footer-heading mb-4">Some Aakash Singh quotes</h2>
              <p>Great people were not born great, instead they became great by making a decision that changed their entire lives</p>
            </div>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright  &copy; Ascoach <script>document.write(new Date().getFullYear());</script> All rights reserved  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  <script src="js/removeBanner.js"></script>
    
  </body>
</html>

