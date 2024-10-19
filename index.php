<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>job_Application_Website</title>

  <meta name="description" content="">
  <meta name="keywords" content="">
<link href="/templates/protostar/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<link href="/media/plg_content_2clicksocialbuttons/2clicksocialbuttons.css" rel="stylesheet" />
<link href="/components/com_uniform/assets/css/modal.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        
        <h1 class="sitename">
    <img src="assets/img/logo/logo.PNG" alt="Logo" style="height:80px; width:auto; vertical-align: middle;">
    JOB SITE
</h1>


</a>

</a>


      </a>

      

      <nav id="navmenu" class="navmenu">
        <ul>
          
          <li><a href="#hero" class="active">Home</a></li>
          
          
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="job.php">job Search</a></li>
          <li class="dropdown"><a href="#"><span>Job Application</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
             
              <li class="dropdown">
                <a href="#"><span>Job Resources</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Job Listings</a>
                    <ul>
                      <li><a href="#">View All Jobs</a></li>
                      <li><a href="#">Filter by Category</a></li>
                      <li><a href="#">Filter by Location</a></li>
                      <li><a href="#">Filter by Experience Level</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Application Process</a>
                    <ul>
                      <li><a href="#">How to Apply</a></li>
                      <li><a href="#">Application Tips</a></li>
                      <li><a href="#">Resume Writing Resources</a></li>
                      <li><a href="#">Interview Preparation</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Company Information</a>
                    <ul>
                      
                      <li><a href="#">Company Culture</a></li>
                      <li><a href="#">Values and Mission</a></li>
                      <li><a href="#">Team and Leadership</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="#jobs">jobs</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- want to add the dynamic page where if user is logged in the login button doesn't show and user name and sgnout is the one that shows -->

      <?php if(isset($_SESSION['user_id'])): ?>
        <div class="welcome-message">
            <a class="btn-getstarted" href="src/process_logout.php">LOGOUT</a>
            <span class="welcome-text">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
        </div>
        <?php else: ?>
            <a class="btn-getstarted" href="public/login.php">LOGIN</a>
            
        <?php endif; ?>



      <!-- <a class="btn-getstarted" href="public/login.php">LOGIN</a> -->

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
      <img src="assets/assets/img/template/rcmrd/hero-carousel/hero-carousel-1.jpg" alt="Job Opportunities">
      <div class="carousel-container">
        <h2>Empowering Your Career Journey</h2>
        <p>Discover exciting job opportunities with us. Our commitment to professional development ensures you have the tools to succeed. Join a team that values innovation, diversity, and growth.</p>
        <a href="#featured-services" class="btn-get-started">Explore Opportunities</a>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="assets/assets/img/template/rcmrd/hero-carousel/hero-carousel-2.jpg" alt="Career Growth">
      <div class="carousel-container">
        <h2>Join Us in Shaping the Future</h2>
        <p>Your next career move is just a click away! At our company, we believe in nurturing talent and providing opportunities for growth. Whether you're starting your career or looking to advance, we have a place for you.</p>
        <a href="#featured-services" class="btn-get-started">Apply Now</a>
      </div>
    </div><!-- End Carousel Item -->
    
    <div class="carousel-item">
      <img src="assets/assets/img/template/rcmrd/hero-carousel/hero-carousel-3.jpg" alt="Join Our Team">
      <div class="carousel-container">
        <h2>Your Future Starts Here</h2>
        <p>Unlock your potential with us! We are looking for passionate individuals ready to make an impact. Join a dynamic team where your skills are valued and your career can thrive.</p>
        <a href="#job-listings" class="btn-get-started">View Job Openings</a>
      </div>
    </div><!-- End Carousel Item -->
    

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->
<!-- Stats Section -->
<section id="stats" class="stats section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-emoji-smile"></i>
          <span id="happyClients" class="purecounter">0</span>
          <p><strong>Happy Clients</strong> <span>clients served</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-journal-richtext"></i>
          <span id="projects" class="purecounter">0</span>
          <p><strong>Projects</strong> <span>completed successfully</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-headset"></i>
          <span id="supportHours" class="purecounter">0</span>
          <p><strong>Support Hours</strong> <span>provided to clients</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-people"></i>
          <span id="teamMembers" class="purecounter">0</span>
          <p><strong>Team Members</strong> <span>dedicated to excellence</span></p>
        </div>
      </div><!-- End Stats Item -->
    </div>
  </div>
</section>

    </div>
  </div>
</section>

<script>
  // Example of fetching data from an API
  async function fetchStats() {
    try {
      const response = await fetch('/api/stats'); // Replace with your API endpoint
      const data = await response.json();

      document.getElementById('happyClients').textContent = data.happyClients;
      document.getElementById('projects').textContent = data.projects;
      document.getElementById('supportHours').textContent = data.supportHours;
      document.getElementById('teamMembers').textContent = data.teamMembers;

      // Initialize PureCounter if needed
      new PureCounter();
    } catch (error) {
      console.error('Error fetching stats:', error);
    }
  }

  // Call the function on page load
  document.addEventListener('DOMContentLoaded', fetchStats);
</script>

   
    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p>Connecting talent with opportunity, we offer comprehensive support for job seekers and employers.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-briefcase"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Job Listings</h3>
          </a>
          <p>Access a wide range of job opportunities tailored to your skills and experience.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-person-check"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Personalized Support</h3>
          </a>
          <p>Receive tailored guidance from our team to enhance your job application process.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Resume Building</h3>
          </a>
          <p>Get assistance in crafting a professional resume that stands out to employers.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-chat-left-text"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Interview Preparation</h3>
          </a>
          <p>Participate in mock interviews and receive feedback to boost your confidence.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-people"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Employer Partnerships</h3>
          </a>
          <p>We collaborate with top employers to bring you exclusive job opportunities.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-clipboard-data"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Career Resources</h3>
          </a>
          <p>Access a wealth of resources, including guides and articles on career development.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->
<!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Why Choose Us</h2>
    <p>Your gateway to a rewarding career in Geographic Information Systems.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <span>01</span>
          <h4><a href="" class="stretched-link">Expert Guidance</a></h4>
          <p>Our team of GIS professionals offers personalized support to help you navigate your career path.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <span>02</span>
          <h4><a href="" class="stretched-link">Diverse Opportunities</a></h4>
          <p>We connect you with a wide range of job openings in various sectors, from environmental to urban planning.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item">
          <span>03</span>
          <h4><a href="" class="stretched-link">Innovative Projects</a></h4>
          <p>Join projects that utilize cutting-edge GIS technologies, making a real impact in your community.</p>
        </div>
      </div><!-- Card Item -->

    </div>

  </div>

</section><!-- /Why Us Section -->

    

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Our Success Stories</h2>
  <p>Explore how we connect talent with opportunities in the Geographic Information Systems field.</p>
</div><!-- End Section Title -->


      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
<!-- Faq Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Your questions answered about applying for jobs and our services.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-8">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>How do I apply for a job?</h3>
            <div class="faq-content">
              <p>You can apply for jobs directly through our job listings. Simply click on the position you're interested in and follow the application instructions provided.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What documents do I need to submit?</h3>
            <div class="faq-content">
              <p>Typically, you'll need a resume and a cover letter. Some positions may require additional documentation, which will be specified in the job listing.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>How will I know if my application was received?</h3>
            <div class="faq-content">
              <p>After submitting your application, you will receive a confirmation email. If you don't receive this email, please check your spam folder.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What is the interview process like?</h3>
            <div class="faq-content">
              <p>The interview process varies by position but typically includes a phone screening followed by one or more in-person or virtual interviews.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Can I apply for multiple positions?</h3>
            <div class="faq-content">
              <p>Yes, you can apply for multiple positions that match your skills and interests. Just ensure you tailor your application for each role.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div>

    </div>

  </div>

</section><!-- /Faq Section -->
  </main>
  <div class="footery" style="background-color: #003366; color: white; padding: 20px; font-family: Arial, sans-serif;">
    <div class="footcont" style="max-width: 1200px; margin: auto;">
        <div class="moduletable">
            <h3 style="text-align: center; margin-bottom: 20px;">Get In Touch For More Information, Registration, or Further Questions</h3>
            <div class="custom">
                <div class="row" style="display: flex; justify-content: space-around;">
                    <div class="col-xs-6 col-sm-3 loc1" style="text-align: center; margin-bottom: 15px;">
                        <p>Roysambu, Kasarani <br />Nairobi, Kenya</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 tel" style="text-align: center; margin-bottom: 15px;">
                        <p>+254 020 2680748 / 2680722 <br /> +254 723 786161 / +254 735 981098</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 mailer" style="text-align: center; margin-bottom: 15px;">
                        <p>P.O. Box 632-00618 Nairobi, Kenya</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 mailer1" style="text-align: center; margin-bottom: 15px;">
                        <p>rcmrd@rcmrd.org</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="socially rcmrd home" style="text-align: center; margin-bottom: 20px;">
        <div class="moduletable">
            <div class="custom">
                <p style="display: flex; justify-content: center;">
                    <a href="https://twitter.com/rcmrd_" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/twitter.png" alt="Twitter" style="width: 40px; height: 40px;" /></a>
                    <a href="https://www.facebook.com/RCMRD-811856365503079/" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/fb.png" alt="Facebook" style="width: 40px; height: 40px;" /></a>
                    <a href="https://www.flickr.com/photos/128418604@N04/" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/flicker.png" alt="Flickr" style="width: 40px; height: 40px;" /></a>
                    <a href="https://www.instagram.com/rcmrdcommunity/" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/insta.png" alt="Instagram" style="width: 40px; height: 40px;" /></a>
                    <a href="https://www.youtube.com/channel/UCBsaCz6wecwG53I1S-lwtyA" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/yt.png" alt="YouTube" style="width: 40px; height: 40px;" /></a>
                    <a href="https://www.linkedin.com/company/regional-centre-for-mapping-of-resources-for-development-rcmrd-/" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/linked.png" alt="LinkedIn" style="width: 40px; height: 40px;" /></a>
                    <a href="https://twitter.com/TheRCTI_RCMRD" target="_blank" style="margin: 0 10px;"><img src="/images/MAJOR-EVENTS/twitter.png" alt="RCTI Twitter" style="width: 40px; height: 40px;" /></a>
                </p>
            </div>
        </div>
    </div>

    <div class="feedform rcmrd home" style="max-width: 600px; margin: auto; text-align: center;">
        <div class="moduletable">
            <h3 style="margin-bottom: 20px;">Send Us an Email - Sign Up to Get the Latest Updates.</h3>
            <div class="jsn-uniform jsn-master" data-form-name="b238bc8aadf83cf2f0490a3c6f90bc3c" id="jsn_form_1">
                <form action="https://rcmrd.org/index.php?option=com_uniform&amp;view=form&amp;task=form.save&amp;form_id=1" method="post" class="form-validate default" enctype="multipart/form-data" autocomplete="off">
                    
                  <span class="hide jsn-language" style="display:none;" data-value='{"JSN_UNIFORM_CHARACTERS":"Characters","JSN_UNIFORM_WORDS":"Words","JSN_UNIFORM_CONFIRM_FIELD_PASSWORD_MIN_MAX_CHARACTER":"The password must contain minimum %mi% and maximum %mx% character(s)","JSN_UNIFORM_CONFIRM_FIELD_EMAIL_CONFIRM":"Both email addresses must be the same.","JSN_UNIFORM_CONFIRM_FIELD_MIN_NUMBER":"The number cannot be less than","JSN_UNIFORM_CONFIRM_FIELD_MAX_NUMBER":"The number cannot be greater than","JSN_UNIFORM_DATE_HOUR_TEXT":"Hour","JSN_UNIFORM_DATE_MINUTE_TEXT":"Minute","JSN_UNIFORM_DATE_CLOSE_TEXT":"Close","JSN_UNIFORM_DATE_PREV_TEXT":"Prev","JSN_UNIFORM_DATE_NEXT_TEXT":"Next","JSN_UNIFORM_DATE_CURRENT_TEXT":"Today","JSN_UNIFORM_DATE_MONTH_JANUARY":"January","JSN_UNIFORM_DATE_MONTH_FEBRUARY":"February","JSN_UNIFORM_DATE_MONTH_MARCH":"March","JSN_UNIFORM_DATE_MONTH_APRIL":"April","JSN_UNIFORM_DATE_MONTH_MAY":"May","JSN_UNIFORM_DATE_MONTH_JUNE":"June","JSN_UNIFORM_DATE_MONTH_JULY":"July","JSN_UNIFORM_DATE_MONTH_AUGUST":"August","JSN_UNIFORM_DATE_MONTH_SEPTEMBER":"September","JSN_UNIFORM_DATE_MONTH_OCTOBER":"October","JSN_UNIFORM_DATE_MONTH_NOVEMBER":"November","JSN_UNIFORM_DATE_MONTH_DECEMBER":"December","JSN_UNIFORM_DATE_MONTH_JANUARY_SHORT":"Jan","JSN_UNIFORM_DATE_MONTH_FEBRUARY_SHORT":"Feb","JSN_UNIFORM_DATE_MONTH_MARCH_SHORT":"Mar","JSN_UNIFORM_DATE_MONTH_APRIL_SHORT":"Apr","JSN_UNIFORM_DATE_MONTH_MAY_SHORT":"May","JSN_UNIFORM_DATE_MONTH_JUNE_SHORT":"Jun","JSN_UNIFORM_DATE_MONTH_JULY_SHORT":"Jul","JSN_UNIFORM_DATE_MONTH_AUGUST_SHORT":"Aug","JSN_UNIFORM_DATE_MONTH_SEPTEMBER_SHORT":"Sep","JSN_UNIFORM_DATE_MONTH_OCTOBER_SHORT":"Oct","JSN_UNIFORM_DATE_MONTH_NOVEMBER_SHORT":"Nov","JSN_UNIFORM_DATE_MONTH_DECEMBER_SHORT":"Dec","JSN_UNIFORM_DATE_DAY_SUNDAY":"Sunday","JSN_UNIFORM_DATE_DAY_MONDAY":"Monday","JSN_UNIFORM_DATE_DAY_TUESDAY":"Tuesday","JSN_UNIFORM_DATE_DAY_WEDNESDAY":"Wednesday","JSN_UNIFORM_DATE_DAY_THURSDAY":"Thursday","JSN_UNIFORM_DATE_DAY_FRIDAY":"Friday","JSN_UNIFORM_DATE_DAY_SATURDAY":"Saturday","JSN_UNIFORM_DATE_DAY_SUNDAY_SHORT":"Sun","JSN_UNIFORM_DATE_DAY_MONDAY_SHORT":"Mon","JSN_UNIFORM_DATE_DAY_TUESDAY_SHORT":"Tue","JSN_UNIFORM_DATE_DAY_WEDNESDAY_SHORT":"Wed","JSN_UNIFORM_DATE_DAY_THURSDAY_SHORT":"Thu","JSN_UNIFORM_DATE_DAY_FRIDAY_SHORT":"Fri","JSN_UNIFORM_DATE_DAY_SATURDAY_SHORT":"Sat","JSN_UNIFORM_DATE_DAY_SUNDAY_MIN":"Su","JSN_UNIFORM_DATE_DAY_MONDAY_MIN":"Mo","JSN_UNIFORM_DATE_DAY_TUESDAY_MIN":"Tu","JSN_UNIFORM_DATE_DAY_WEDNESDAY_MIN":"We","JSN_UNIFORM_DATE_DAY_THURSDAY_MIN":"Th","JSN_UNIFORM_DATE_DAY_FRIDAY_MIN":"Fr","JSN_UNIFORM_DATE_DAY_SATURDAY_MIN":"Sa","JSN_UNIFORM_DATE_DAY_WEEK_HEADER":"Wk","JSN_UNIFORM_CONFIRM_FIELD_MAX_LENGTH":"The information cannot contain more than","JSN_UNIFORM_CONFIRM_FIELD_MIN_LENGTH":"The information cannot contain less than","JSN_UNIFORM_CAPTCHA_PUBLICKEY":"JSN_UNIFORM_CAPTCHA_PUBLICKEY","JSN_UNIFORM_BUTTON_BACK":"Back","JSN_UNIFORM_BUTTON_NEXT":"Next","JSN_UNIFORM_BUTTON_RESET":"Reset","JSN_UNIFORM_BUTTON_SUBMIT":"Submit","JSN_UNIFORM_CONFIRM_FIELD_CANNOT_EMPTY":"This field can not be empty, please enter required information.","JSN_UNIFORM_CONFIRM_FIELD_INVALID":"The information is invalid, please correct.","JSN_UNIFORM_WORDS_LEFT":"word(s) left","JSN_UNIFORM_CHARACTERS_LEFT":"character(s) left","JSN_UNIFORM_VALIDATION_FAILS":"Please correct the data of this field. An example of valid data is: %s","JSN_UNIFORM_EQUAL_TO_OR_GREATER_THAN_TODAY_ALERT":"Please select a date that is equal to or greater than today","JSN_UNIFORM_MAX_LENGTH_ALERT":"The length of inputted value is greater than the maximum length of %d characters allowed for this field.","JSN_UNIFORM_WRONG_NUMBER_SLIDER_VALUE":"Value must be a multiple of %s."}'></span><span class="hide jsn-base-url" style="display:none;" data-value="https://rcmrd.org"></span><div id="page-loading" class="jsn-bgloading"><i class="jsn-icon32 jsn-icon-loading"></i></div><div class="jsn-row-container jsn-style-light vertical"><div class="message-uniform"> </div><div data-value="1" class="jsn-form-content hide"><div class='jsn-row-container row-fluid jsn-uf-row-container'><div class="jsn-container-left span12"><div class="control-group  single_line_text_22850242710_22_2 " data-id="1-jsn-uf-form-field">
                  <div class="message-uniform"></div>
                    <div class="jsn-form-content">
                        <div class="jsn-row-container" style="display: flex; flex-direction: column; align-items: center;">
                            <div class="control-group" style="display: flex; align-items: center; margin-bottom: 15px; width: 100%;">
                                <label class="control-label" style="margin-right: 10px; width: 30%;">Full Name <span class="required">*</span></label>
                                <input class="jsn-input-xlarge-fluid" name="1" type="text" placeholder="Full Name" required style="padding: 15px; flex-grow: 1; font-size: 16px;" />
                            </div>
                            <div class="control-group" style="display: flex; align-items: center; margin-bottom: 15px; width: 100%;">
                                <label class="control-label" style="margin-right: 10px; width: 30%;">Email Address <span class="required">:</span></label>
                                <input class="email email-required jsn-input-xlarge-fluid" name="2" type="email" placeholder="Email Address*" required style="padding: 15px; flex-grow: 1; font-size: 16px;" />
                            </div>
                            <div class="control-group" style="display: flex; align-items: center; margin-bottom: 15px; width: 100%;">
                                <label class="control-label" style="margin-right: 10px; width: 30%;">Phone Number</label>
                                <input class="jsn-input-xlarge-fluid" name="18" type="text" placeholder="Phone Number" style="padding: 15px; flex-grow: 1; font-size: 16px;" />
                            </div>
                            <div class="control-group" style="display: flex; align-items: center; margin-bottom: 15px; width: 100%;">
                                <label class="control-label" style="margin-right: 10px; width: 30%;">Message <span class="required">:</span></label>
                                <textarea rows="3" class="jsn-input-xlarge-fluid" name="5" placeholder="Message*" required style="padding: 15px; flex-grow: 1; font-size: 16px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="control-group" style="text-align: center; margin-bottom: 10px;">
                        <div class="controls">
                            <img class="jsn-captcha-image" src="data:image/png;base64,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"
                            
                            alt="Captcha" style="margin-bottom: 10px; width: 100px; height: auto;" />
                            <!-- Assuming the CAPTCHA is base64 encoded -->
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary" style="background-color: #0056b3; color: white; padding: 15px 30px; border: none; cursor: pointer; font-size: 16px;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script>
    const toggleButton = document.querySelector('.mobile-nav-toggle');
    const navMenu = document.getElementById('navmenu');

    toggleButton.addEventListener('click', () => {
        navMenu.classList.toggle('active'); // Toggle the active class
    });
</script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>