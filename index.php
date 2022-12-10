<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css" >
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <!-- Glightbox -->
    <link rel="stylesheet" href="assets/vendors/css/glightbox.min.css">
    <!-- Animate on scroll CSS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Landing Page! </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light menu shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <!--Logo image goes here -->
		      <img src="images/Anur.png" width="100" height="100" alt="Logo image">
        </a>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">faz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <a href="https://wa.me/+2348137541749" target="_blank">
            <button type="button" class="rounded-pill btn-rounded"> 
              +2348137541749
              <span>
                <i class="fas fa-phone-alt"></i>
              </span>
            </button>
          </a>
        </div>
      </div>
    </nav>
    <!--START  THE INTRO SECTION-->
    <section id="home" class="intro-section">
      <div class="container">
        <div class="row align-items-center text-white">
          <!--START  THE CONTENT FOR THE INTRO-->
          <div class="col-md-12 intros text-center" data-aos="zoom-in-up" data-aos-duration="1500">
            <h1 class="display-2" >
              <span class="display-2--intro">Welcome to <span class="me"> An-Nur</span> info-tech.</span>
              <span class="display-2--description lh-base">Let expand your business with technology</span>
            </h1>
            <a href="#contact">
              <button type="button" class="rounded-pill btn-rounded"> 
                Get in touch
                <span>
                  <i class="fas fa-arrow-right"></i>
                </span>
              </button>
            </a>
          </div>
        </div>
      </div>
      <!--APPLY WAVES FROM getwaves.io -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,186.7C384,181,480,107,576,106.7C672,107,768,181,864,213.3C960,245,1056,235,1152,202.7C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!--START SECTION 4 - THE SERVICES -->
    <section id="services" class="services">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold"> Our services
            <div class="heading-line mb-1"></div>
          </h1>
        </div>
     
      <!--START THE DESCRIPTION CONTENT -->
        <div class="row pt-2 pb-2 mt-0 mb-3">
          <div class="col-md-6 border-right">
            <div class="bg-dark p-3">
              <h2 class="fw-bold text-capitalize text-center">
                Our Services Range From Initial Design To Deployment Anywhere Anytime
              </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-dark p-4 text-start">
              <p class="fw-light">
                We strategically solve every business problems facing an organization.
                Website Development, Social Media Integration & Customization, Hosting & Domain Name Registration, Digital Marketing, Content Management Systems, etc. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--START THE CONTENT FOR THE SERVICES -->
    <div class="container">
      <!--START THE MARKETING CONTENT -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block fas fa-paper-plane"></div>
            <h3 class="display-3--title mt-1">IT Support</h3>
            <p class="lh-lg">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              At ipsum deleniti libero! Officia magni corrupti suscipit a, libero rem officiis esse? 
              Dolores architecto vel cumque fugit sed praesentium.
            </p>
            <button type="button" class="rounded-pill btn-rounded border-primary"> 
              learn more
              <span>
                <i class="fas fa-arrow-right"></i>
              </span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/services/Customer Service_Monochromatic.png" alt="marketing illustration" class="img-fluid">
          </div>
        </div>
      </div>
      <!--START THE WEB DEVELOPMENT CONTENT -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="images/services/Web development _Monochromatic.png" alt="development illustration" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="services__content">
              <div class="icon d-block fas fa-code"></div>
              <h3 class="display-3--title mt-1">Web design/development</h3>
              <p class="lh-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                At ipsum deleniti libero! Officia magni corrupti suscipit a, libero rem officiis esse? 
                Dolores architecto vel cumque fugit sed praesentium.
              </p>
              <button type="button" class="rounded-pill btn-rounded border-primary"> 
                learn more
                <span>
                  <i class="fas fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!--START THE MARKETING CONTENT -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="services__content">
              <!-- <i class="fa-sharp fa-solid fa-comments-dollar"></i> -->
              <!-- <div class="icon d-block fas fa-code"> -->
              <div class="icon d-block fas fa-solid fa-comments-dollar">
                
              </div>
              <h3 class="display-3--title mt-1">Marketing</h3>
              <p class="lh-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                At ipsum deleniti libero! Officia magni corrupti suscipit a, libero rem officiis esse? 
                Dolores architecto vel cumque fugit sed praesentium.
              </p>
              <button type="button" class="rounded-pill btn-rounded border-primary"> 
                learn more
                <span>
                  <i class="fas fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="images/services/Marketing _Two Color.png" alt="development illustration" class="img-fluid">
          </div>
        </div>
      </div>
      <!--START THE NETWORKING CONTENT -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/services/Network _Monochromatic.png" alt="hosting illustration" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="services__content">
              <div class="icon d-block fas fa-cloud-upload-alt"></div>
              <h3 class="display-3--title mt-1">Networking</h3>
              <p class="lh-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                At ipsum deleniti libero! Officia magni corrupti suscipit a, libero rem officiis esse? 
                Dolores architecto vel cumque fugit sed praesentium.
              </p>
              <button type="button" class="rounded-pill btn-rounded border-primary"> 
                learn more
                <span>
                  <i class="fas fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!--START THE CLOUD HOSTING CONTENT -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="services__content">
              <div class="icon d-block fas fa-cloud-upload-alt"></div>
              <h3 class="display-3--title mt-1">Cloud hosting</h3>
              <p class="lh-lg">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                At ipsum deleniti libero! Officia magni corrupti suscipit a, libero rem officiis esse? 
                Dolores architecto vel cumque fugit sed praesentium.
              </p>
              <button type="button" class="rounded-pill btn-rounded border-primary"> 
                learn more
                <span>
                  <i class="fas fa-arrow-right"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/services/Data Hosting_Monochromatic.png" alt="hosting illustration" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <!--START  SECTION 5 - THE TESTIMONIALS-->
    <section id="testimonials" class="testimonials">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,229.3C672,235,768,213,864,181.3C960,149,1056,107,1152,122.7C1248,139,1344,213,1392,250.7L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row text-center text-white">
          <h1>Testimomials</h1>
          <hr style="width: 100%; height: 3px;" class="mx-auto">
          <p class="lead pt-1">What our clients are saying</p>   
        </div>
        <!--START  THE CAROUSEL CONTENT -->
          <!--Carousel*********** -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!--CAROUSEL ITEM 1-->
                <div class="carousel-item active">
                  <!--TESTIMONIALS CARD-->
                  <div class="testimonials__card">
                    <p class="lh-lg">
                      <i class="fas fa-quote-left"></i>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Quibusdam cupiditate quaerat libero reprehenderit minus, 
                      voluptatem tempora voluptas aspernatur quos veritatis blanditiis!
                      <i class="fas fa-quote-right"></i>
                      <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </p>
                  </div>
                  <!--CLIENTS PICTURES-->
                  <div class="testimonials__picture">
                    <img src="images/testimonials/img.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
                  </div>
                  <!--CLIENT NAME AND ROLE-->
                  <div class="testimonials__name">
                    <h3>Bello Ibrahim</h3>
                    <p class="fw-light">CEO & Founder</p>
                  </div>
                </div>
                <!--CAROUSEL ITEM 2-->
                <div class="carousel-item">
                  <!--TESTIMONIALS CARD-->
                  <div class="testimonials__card">
                    <p class="lh-lg">
                      <i class="fas fa-quote-left"></i>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Quibusdam cupiditate quaerat libero reprehenderit minus, 
                      voluptatem tempora voluptas aspernatur quos veritatis blanditiis!
                      <i class="fas fa-quote-right"></i>
                      <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </p>
                  </div>
                  <!--CLIENTS PICTURES-->
                  <div class="testimonials__picture">
                    <img src="images/testimonials/img.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
                  </div>
                  <!--CLIENT NAME AND ROLE-->
                  <div class="testimonials__name">
                    <h3>Yahaya Kolawole</h3>
                    <p class="fw-light">Financial Manager</p>
                  </div>
                </div>
                <!--CAROUSEL ITEM 3-->
                <div class="carousel-item">
                  <!--TESTIMONIALS CARD-->
                  <div class="testimonials__card">
                    <p class="lh-lg">
                      <i class="fas fa-quote-left"></i>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Quibusdam cupiditate quaerat libero reprehenderit minus, 
                      voluptatem tempora voluptas aspernatur quos veritatis blanditiis!
                      <i class="fas fa-quote-right"></i>
                      <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </p>
                  </div>
                  <!--CLIENTS PICTURES-->
                  <div class="testimonials__picture">
                    <img src="images/testimonials/img.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
                  </div>
                  <!--CLIENT NAME AND ROLE-->
                  <div class="testimonials__name">
                    <h3>Yusuf Akeem</h3>
                    <p class="fw-light">Manager </p>
                  </div>
                </div>
                <!--CAROUSEL ITEM 4-->
                <div class="carousel-item">
                  <!--TESTIMONIALS CARD-->
                  <div class="testimonials__card">
                    <p class="lh-lg">
                      <i class="fas fa-quote-left"></i>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Quibusdam cupiditate quaerat libero reprehenderit minus, 
                      voluptatem tempora voluptas aspernatur quos veritatis blanditiis!
                      <i class="fas fa-quote-right"></i>
                      <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </p>
                  </div>
                  <!--CLIENTS PICTURES-->
                  <div class="testimonials__picture">
                    <img src="images/testimonials/img.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
                  </div>
                  <!--CLIENT NAME AND ROLE-->
                  <div class="testimonials__name">
                    <h3>Olajide Soliu</h3>
                    <p class="fw-light">CEO & MD</p>
                  </div>
                </div>
                <!--CAROUSEL ITEM 5-->
                <div class="carousel-item">
                  <!--TESTIMONIALS CARD-->
                  <div class="testimonials__card">
                    <p class="lh-lg">
                      <i class="fas fa-quote-left"></i>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      Quibusdam cupiditate quaerat libero reprehenderit minus, 
                      voluptatem tempora voluptas aspernatur quos veritatis blanditiis!
                      <i class="fas fa-quote-right"></i>
                      <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </p>
                  </div>
                  <!--CLIENTS PICTURES-->
                  <div class="testimonials__picture">
                    <img src="images/testimonials/img.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
                  </div>
                  <!--CLIENT NAME AND ROLE-->
                  <div class="testimonials__name">
                    <h3>Ibrahim Ibrahim</h3>
                    <p class="fw-light">Assistant Manager</p>
                  </div>
                </div>
            </div>
            <!-- PLACING THE CAROUSEL LEFT AND RIGHT BUTTON TO THE CENTER-->
            <div class="text-center">
              <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"></button>
              <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"></button>
            </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,160C384,139,480,85,576,101.3C672,117,768,203,864,213.3C960,224,1056,160,1152,154.7C1248,149,1344,203,1392,229.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    
    <!--START  SECTION 6 - THE FAQ-->
    <section id="faq" class="faq">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold text-uppercase">faq</h1>
          <div class="heading-line"></div>
          <p class="lead">Frequently asked question, get knowledge before hand </p>
        </div>
        <!--ACCORDIAN CONTENT-->
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="accordion" id="accordionExample">
              <!--ACCORDIAN COMMENT 1 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What are the main features?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <!--ACCORDIAN COMMENT 2 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Do i have to pay after trial
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <!--ACCORDIAN COMMENT 3 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How can i get started after trial?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <!--ACCORDIAN COMMENT 4 -->
              <div class="accordion-item shadow mb-3">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can i be refunded if am not satisfied?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
    <!--START  SECTION 8- GET STARTED -->
    <section id="contact" class="get-started">
      <div class="container">
        <div class="row text-center">
          <h1 class="display-3 fw-bold text-capitalize"> get started </h1>
          <div class="heading-line"></div>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit similique nostrum.
          </p>
        </div>

        <!--START  THE STA CONTENT -->
        <div class="row text-white">
          <div class="col-12 col-lg-6 bg-get-started shadow p-3">
            <div class="cta-info w-100">
              <h4 class="display-4 fw-bold" data-aos="fade-out" data-aos-delay="100">
                100% Satisfaction Guaranteed
              </h4>
              <ul>
                <li data-aos="fade-up-right" data-aos-delay="300">Do you have any questions or comments regarding how our services can meet your business needs?</li>
                <li data-aos="fade-up-right" data-aos-delay="400">Do you need any customised solution for any of demanding time-sensitive projects or business process?</li>
                <li data-aos="fade-up-right" data-aos-delay="500">Are you interested in IT Security & Data Protection Training as an individual or company?</li>
                <li data-aos="fade-up-right" data-aos-delay="600">Do you want to know how we can help position your business for success?</li>
              </ul>
              <h3 class="display-3--brief" data-aos="fade-up-right" data-aos-delay="700">What will be the next step?</h3>
              <ul class="cta-info__list" data-aos="fade-up-right" data-aos-delay="800">
                <li>We'll prepare the proposal.</li>
                <li>We'll discuss it together</li>
                <li>Let's start the discussion.</li>
              </ul>
            </div>
          </div>

          
          <!-- Alert, alert dismissing with icons -->
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>          
          <div class="col-12 col-lg-6 bg-white shadow p-3">
            <div class="form w-100 pb-2">
              <?php
                if(isset($_SESSION['msg'])){
              ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#check-circle-fill"/></svg>
                    <?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php
                }elseif(isset($_SESSION['msg_err'])){
              ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <?php echo $_SESSION['msg_err']; unset($_SESSION['msg_err']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php
                }
              ?>

              <h1 class="mb-5"> Start your project</h1>
              <form action="" method="post" class="row">
                <div class="col-lg-6 col-md-6 mb-3">
                  <input type="text" placeholder="First name" name="firstName" id="inputFirstName" class="shadow form-control form-control-lg" autocomplete="off">
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                  <input type="text" placeholder="Last name" name="lastName" id="inputLastName" class="shadow form-control form-control-lg" autocomplete="off">
                </div>
                <div class="col-lg-12 mb-3">
                  <input type="text" name="companyName" placeholder="Your company/organization name" id="inputCompany" class="shadow form-control form-control-lg" autocomplete="off"> 
                </div>
                <div class="col-lg-12 mb-3">
                  <input type="email" name="emailAddress" placeholder="Email address" id="inputEmail" class="shadow form-control form-control-lg" autocomplete="off">
                </div>
                <div class="col-lg-12 mb-3">
                  <input type="text" name="subject" placeholder="Subject" id="subject" class="shadow form-control form-control-lg" autocomplete="off">
                </div>
                <div class="col-lg-12 mb-3">
                  <textarea name="message" placeholder="Message..." id="message" class="shadow form-control form-control-lg" rows="8"></textarea>
                </div>
                <div class="text-center d-grid mt-1">
                  <button type="submit" name="btn_submit" class="btn btn-primary rounded-pill pt-3 pb-3">
                    submit
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <!--START SECTION 9 - THE FOOTER-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <!--CONTENT FOR THE MOBILE NUMBER-->
          <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
            <div class="contact-box__icon">
              <!--SVG for Mobile number-->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                <path d="M15 7a2 2 0 0 1 2 2" />
                <path d="M15 3a6 6 0 0 1 6 6" />
              </svg>
            </div>
            <div class="contact-box__info">
              <a href="https://wa.me/+2348137541749" target="_blank" class="contact-box__info--title">+234 8137541749</a>
              <p class="contact-box__info--subtitle">Mon-Sat 8am-5pm</p>
            </div>
          </div>
          <!--CONTENT FOR THE EMAIL-->
          <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
            <div class="contact-box__icon">
              <!--SVG for Email-->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="3 9 12 15 21 9 12 3 3 9" />
                <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                <line x1="3" y1="19" x2="9" y2="13" />
                <line x1="15" y1="13" x2="21" y2="19" />
              </svg>
            </div>
            <div class="contact-box__info">
              <a href="mailto:support@an-nur-info-tech.com;info@an-nur-info-tech.com" target="_blank" class="contact-box__info--title">support@an-nur-info-tech.com</a>
              <p class="contact-box__info--subtitle">Online support</p>
            </div>
          </div>
          <!--CONTENT FOR THE LOCATION-->
          <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
            <div class="contact-box__icon">
              <!--SVG for Location-->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="18" y1="6" x2="18" y2="6.01" />
                <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                <line x1="9" y1="4" x2="9" y2="17" />
                <line x1="15" y1="15" x2="15" y2="20" />
              </svg>
            </div>
            <div class="contact-box__info">
              <a href="#" class="contact-box__info--title">Kwara state & Lagos state. Nigeria</a>
              <p class="contact-box__info--subtitle">
                No.135 ibrahim taiwo road offa, kwara state.
                Tejumola street apapa iyanapaja lagos, lagos state.
              </p>
              
            </div>
          </div>
      </div>

      <!--START THE SOCIAL MEDIA CONTENT-->
      <div class="footer-sm" style="background-color: #212121;">
        <div class="container">
          <div class="row py-4 text-center text-white">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
              connect with us on social media 
            </div>
            <div class="col-lg-7 col-md-6">
              <a href="https://wa.me/+2348137541749" target="_blank"> <i class="fab fa-whatsapp"></i> </a>
              <a href="#"> <i class="fab fa-facebook"></i> </a>
              <a href="#"> <i class="fab fa-twitter"></i> </a>
              <a href="#"> <i class="fab fa-github"></i> </a>
              <a href="#"> <i class="fab fa-linkedin"></i> </a>
              <a href="#"> <i class="fab fa-instagram"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <!-- START THE COPYRIGHT INFO -->
      <div class="footer-bottom pt-5 pb-5">
        <div class="container">
          <div class="row text-center text-white">
            <div class="col-12">
              <div class="footer-bottom__copyright">
                &copy; Copyright 2022 <a href="https://wa.me/+2348137541749" target="_blank" > An-Nur info-tech </a>. All Right Reserved. 
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- BACK TO TOP BUTTON -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
      <i class="fas fa-chevron-up"></i>
    </a>

    <script src="assets/js/bootstrap.min.bundle.js"></script>
    <!-- Animate on scroll js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>