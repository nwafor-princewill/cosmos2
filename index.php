<?php
session_start();  // Make sure to start the session at the beginning of each page
$consultationMessage = '';
if (isset($_SESSION['newsletter_message'])) {
  echo '<div class="newsletter-alert">' . htmlspecialchars($_SESSION['newsletter_message']) . '</div>';
  unset($_SESSION['newsletter_message']);  // Clear the message after displaying it
}

    
if (isset($_GET['consultation'])) {
  error_log("Consultation status: " . $_GET['consultation']);

    switch ($_GET['consultation']) {
        case 'success':
            $consultationMessage = '<div class="alert alert-success">Your consultation message has been successfully sent!</div>';
            break;
        case 'invalid_email':
            $consultationMessage = '<div class="alert alert-danger">Invalid email address. Please try again.</div>';
            break;
        case 'email_error':
            $consultationMessage = '<div class="alert alert-warning">Your message was saved, but we couldn\'t send an email. We\'ll contact you soon.</div>';
            break;
        case 'db_error':
        case 'prepare_error':
        case 'bind_error':
            $consultationMessage = '<div class="alert alert-danger">An error occurred. Please try again later.</div>';
            break;

            error_log("Consultation message: " . $consultationMessage);
    }
}

?>
<!-- Rest of your page content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmos Engineering Solutions</title>
    <meta name="description" content="Cosmos Automation provides innovative engineering solutions in renewable energy, solar installations and automatic doors to empower buisnesses and communities. Partner with us for a more efficient and sustainable future.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  
    <!-- <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet"> -->
</head>
<body>

  <section id="header">
    <a href="#"><img src="Images/Images/cosmos-logo.png" class="logo" alt=""></a>

    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="project.php">Project</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            
            <a href="#" id="close"><i class="fa fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
            
        <i id="bar" class="fa fa-outdent"></i>
    </div>
</section>

<!-- <section class="img">

  <div class="component">
    <h1>Engineering Solutions That Think Outside the Box</h1>
    <p>We create innovative solutions for challenges, big or small</p>
    <a href="#consultation_form"><button>Book a free consultation</button></a>
  </div>
</section> -->

<section class="img-slider">
  <div class="slide active">
    <div class="component">
      <h1>Engineering Solutions That Think Outside the Box</h1>
      <p>We create innovative solutions for challenges, big or small</p>
      <a href="#consultation_form"><button>Book a free consultation</button></a>
    </div>
  </div>
  <div class="slide">
    <div class="component">
      <h1>Transforming ideas into blueprints</h1>
      <p>Building innovative solutions piece by piece</p>
    </div>
  </div>
  <div class="slide">
    <div class="component">
      <h1>From component to creation</h1>
      <p>Bringing together complex systems with precision</p>
    </div>
  </div>
  <div class="slide">
    <div class="component">
      <h1>Ensuring Optimal Perfomance</h1>
      <p>every step of the way</p>
    </div>
  </div>
  <div class="navigation">
    <div class="btn active"></div>
    <div class="btn"></div>
    <div class="btn"></div>
    <div class="btn"></div>
  </div>
</section>

<section class="hero">
    <div class="hero-content">
      <div class="hero-title">
        <h4>WELCOME TO COSMOS AUTOMATION LIMITED</h4>
        <div class="rectangle"></div>
        <h1>Your Renewable Energy And Engineering Innovation Partner.</h1>
      </div>
      <div class="hero-description">
        <p>Through cutting-edge expertise in renewable energy, energy management, IoT, embedded systems, and mechatronics, we transform ideas into sustainable solutions that empower businesses and communities. We bridge the gap between imagination and reality, seamlessly integrating hardware, software, and data to create impactful results. Let us be your partner in creating a more sustainable and efficient tomorrow.</p>
      </div>
    </div>
</section>

<!-- <section class="hero">
  <div class="hero1">
    <h4>WELCOME TO COSMOS AUTOMATION LIMITED</h4>
    <div class="rectangle">

    </div>
    <h1>Your Renewable Energy And Engineering Innovation Partner.</h1>
  </div>
  <div class="hero2">
    <p>Through cutting-edge expertise in renewable energy, energy management, IoT, embedded systems, and mechatronics, we transform ideas into sustainable solutions that empower businesses and communities. We bridge the gap between imagination and reality, seamlessly integrating hardware, software, and data to create impactful results. Let us be your partner in creating a more sustainable and efficient tomorrow.</p>
  </div>
</section> -->

<section class="help">
  <h1>Here's How We Help Improve Your Buisness Efficiency</h1>
</section>

<section class="card">
  <div class="card1">

    <div class="circle">
      <i class="fa fa-star"></i>
    </div>
    <h3>Stuck in the past?</h3>
      <p>Reliant on inefficient, outdated systems? We design modern solutions like RFID technology to streamline operations and boost revenue.</p>
    
  </div>
  <div class="card2">

    <div class="circle">
      <!-- <i class="fa fa-star" aria-hidden=""></i> -->
      <i class="fa fa-star"></i>
    </div>
    <h3>Lost in the Maze of Automation?</h3>
    <p>Overwhelmed by complex automation needs? We translate your vision into user-friendly systems, simplifying operations and maximizing efficiency.</p>
  </div>
  <div class="card3">

    <div class="circle">
      <i class="fa fa-star"></i>
    </div>
    <h3>Drowning in Energy Costs?</h3>
    <P>Ready to take control of your energy consumption? We design and install solar solutions with smart management systems to reduce costs and empower sustainable living.</P>
  </div>
</section>



<section class="services">
  <h1>Our Services</h1>

  <div class="service-grid">
    <div class="service-item energy-management">
      <div class="service-icon">
        <i class="fa-solid fa-car-battery"></i>
      </div>
      <h3>Energy Management</h3>
    </div>

    <div class="service-item renewable-energy">
      <div class="service-icon">
        <i class="fa-solid fa-solar-panel"></i>
      </div>
      <h3>Renewable Energy</h3>
      <a href="service.html" class="btn">Discover More</a>
    </div>

    <div class="service-subgrid">
      <div class="service-item embedded-systems">
        <div class="service-icon">
          <i class="fa-solid fa-microchip"></i>
        </div>
        <h3>Embedded Systems</h3>
      </div>

      <div class="service-item internet-of-things">
        <div class="service-icon">
          <i class="fa-solid fa-cloud-arrow-up"></i>
        </div>
        <h3>Internet of Things</h3>
      </div>
    </div>
  </div>
</section>

<section class="install">
  <h4>RECENT PROJECTS</h4>
  <div class="line">
  
  </div>
  <h1>Latest Installations</h1>
  <div class="install_">
    <div class="install_1">
      <img src="Images/Images/RFID.jpg" alt="">
      <div class="install_12">
        <p>RFID controller designed to replace coin acceptor</p>
        <h3 class="twenty"> <strong>20</strong> <span>CONTROLLERS</span></h3>
        <div class="ellipse">
          <!-- <i class="fa fa-arrow-right"><a href="project.html"></a></i> -->
          <a href="project.php"><i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
    <div class="install_2">
    <img src="Images/Images/pmd1.jpg" alt="">
      <div class="install_12">
        <p>Power Distribution Monitoring System for Memfys Hospital</p>
        <h3 class="twenty"> <strong>20</strong> <span>CT & MRI Power Monitors</span></h3>
        <div class="ellipse1">
          <a href="project.php"><i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      
    </div>
  </div>

  
</section>
<div class="carousel">
  <div class="carousel_1">

  </div>
  <div class="carousel_2">
    
  </div>
</div>

<!-- project -->
<section class="project">
  <h3>TURN YOUR VISION INTO REALITY : OUR PATNERSHIP JOURNEY</h3>
  <div class="rectangle_1">

  </div>
  <h1>Here's How We Collaborate To Bring Your Project To Life</h1>

  <div class="projects">
    <div class="project_1">
      <div class="title">
        <h2>Book a <br> consultation</h2>
        <div class="one">
          <h3>1</h3>
        </div>
      </div>
      <p>We'll discuss your unique challenges, goals, and budget, and explore how  Cosmos Automation can help you achieve sustainable success.</p>
      <!-- <h3 class="one">1</h3> -->
      <div class="calendar">
        <i class="fa fa-calendar fa-3x"></i>
      </div>
    </div>
    <div class="project_2">
      <div class="title">
        <h2>Receive Tailored <br> Propoal</h2>
        <div class="one">
          <h3>2</h3>
        </div>
      </div>
      <p>After our consultation, we'll craft a customized proposal outlining our recommended solution, timeline, and cost..</p>
      <div class="calculator">
        <i class="fa fa-calculator fa-3x"></i>
      </div>
    </div>

    <div class="project_3">
      <div class="title">
        <h2>Hire Us for Your <br> Buisness</h2>
        <div class="one">
          <h3>3</h3>
        </div>
      </div>
      <p>We'll work closely with you every step of the way, from implementation to ongoing support, ensuring your success and exceeding your expectations</p>
      <div class="document">
        <i class="fa fa-file fa-3x"></i>
      </div>
    </div>

  </div>
  <!-- <button class="book">Book a Consultation Now!</button> -->
  <a href="#consultation_form"><button>Book a free consultation</button></a>


</section>

<!-- testimonial -->

<section class="testimonial">
  <div class="testimonial-area">

    <div class="testimonial-container ">
      <div class="sec-title">
        <h2>Our Testimonial</h2>
        <p>What client say about us ?</p>
        <div class="test_rectangle">

        </div>
      </div>
      <div class="testimonial-content owl-carousel">
        <div class="single-testimonial">
          <p>Cosmos Automation has been a true partner in our journey towards a more sustainable future. Their solutions have not only helped us reduce our environmental impact but have also improved our bottom line. Their expertise and dedication are unparalleled, and we're confident in their ability to continue delivering exceptional results.</p>
          <div class="client-info">
            <div class="client-pic">
              <a href="#">
              <img src="Images/Images/wp47715771_05_06.jpg" alt="">
              </a>
            </div>
            <div class="client-details">
              <h6>Ronal Row</h6>
              <span>Designer, LLC Team</span>
            </div>
          </div>
        </div>

        <div class="single-testimonial">
          <p>Cosmos Automation has been a game-changer for our business. Their expertise in IoT and energy management has allowed us to optimize our buisness operations, and improve sustainability. The team is knowledgeable and dedicated, and they go above and beyond to deliver results.</p>
          <div class="client-info">
            <div class="client-pic">
              <a href="#">
              <img src="Images/Images/wp47715771_05_06.jpg" alt="Client testimonial for automatic doors installation">
              </a>
            </div>
            <div class="client-details">
              <h6>Ronal Row</h6>
              <span>Designer, LLC Team</span>
            </div>
          </div>
        </div>
    
        <div class="single-testimonial">
          <p>Cosmos Automation has been a fantastic partner in our renewable energy projects. Their deep understanding of embedded systems and mechatronics has enabled us to develop cutting-edge solutions that meet our specific needs. We've seen significant reductions in our carbon footprint and energy costs thanks to their expertise.</p>
          <div class="client-info">
            <div class="client-pic">
              <a href="#">
                <img src="Images/Images/logo_BAT_C5UH57.png" alt="">
              </a>
            </div>
            <div class="client-details">
              <h6>Ronal Row</h6>
              <span>Designer, LLC Team</span>
            </div>
          </div>
        </div>
    
      
        <div class="single-testimonial">
          <p>We were struggling to find a company that could help us modernize our operations. Cosmos Automation provided exactly what we needed. Their team is highly skilled and knowledgeable, and they have a passion for delivering innovative solutions. We've already seen a positive impact on our business, and we're excited to continue working with them</p>
          <div class="client-info">
            <div class="client-pic">
              <a href="#">
                <img src="Images/Images/NEW-LOGO-300.png" alt="Client testimonial for integrated energy management and solar installation">
              </a>
            </div>
            <div class="client-details">
              <h6>Ronal Row</h6>
              <span>Designer, LLC Team</span>
            </div>
          </div>
        </div>
    
    
      
        <div class="single-testimonial">
          <p>Cosmos Automation's commitment to excellence is unmatched. They have a unique ability to bridge the gap between technology and business, delivering solutions that are both practical and innovative. We've been impressed with their ability to understand our specific needs and tailor their services accordingly.</p>
          <div class="client-info">
            <div class="client-pic">
              <a href="#">
              <img src="Images/Images/Mobil TM Logo.png" alt="Client testimonial for automatic doors and renewable energy solutions">
              </a>
            </div>
            <div class="client-details">
              <h6>Ronal Row</h6>
              <span>Designer, LLC Team</span>
            </div>
          </div>
        </div>

      </div>
  

      
  
    </div>
  </div>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script> -->
<!-- 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script type="text/javascript">
        $(document).ready(function(){
          $('.testimonial-content').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
        });
  </script> -->


</section>

<!-- consultation -->

<section class="consultation" id="consultation_form">
  <div class="consult_1">
    <h3>BOOK A CONSULTATION</h3>
    <div class="consult_line">

    </div>
    <h1>Do You Have A Vision For A More Sustainable, Efficient Future For Your Business?</h1>
    <p>At Cosmos Automation, we're passionate about turning innovative ideas into impactful solutions. We believe collaboration is key, and that's why we offer free consultations to understand your unique needs and goals.</p>
  </div>

  <div class="consult_2">
  
    
        <!-- Add the consultation message here -->
        




   
    <div class="consult_form">
      <form action="/consultation_project/includes/process_consultation.php" method="post">
        <input type="text" placeholder="Name" name="name">
        <input type="email" id="mail" placeholder="Email Address" name="email" >
        <input type="text" id="number" placeholder="phone No" name="phone">
        <input type="text" name="message" id="message" placeholder="Message" name="message">


        <button type="submit" name="submit">Send Message</button>

      </form>

    </div>

  </div>
</section>

      <?php 
        if (!empty($consultationMessage)) {
            echo $consultationMessage;
            error_log("Outputting consultation message: " . $consultationMessage);
        } else {
            error_log("Consultation message is empty");
        }
      ?>

<!-- blog -->



<section class="blog">
  <h3>BLOG & UPDATES</h5>
  <div class="blog_line">

  </div>
  <h1>Recent News</h1>

  <div class="updates">

    <div class="update_1">
        <div class="update_date">
          <p>December 12, 2023</p>
        </div>
        <div class="process_1">
          <p class="process_11">DESIGN PROCESS</p>
          <h2 class="process_12">Solar Energy's Exceptional Synergies</h2>
          <div class="admin-info">
            <div class="admin-details">
              <div class="admin1"></div>
              <p class="admin_p">By Thomas Walhae</p>
            </div>
            <p class="admin_comment">14 Comments</p>
          </div>
        </div>
      </div>

      <div class="update_1">
        <div class="update_date">
          <p>December 12, 2023</p>
        </div>
        <div class="process_1">
          <p class="process_11">DESIGN PROCESS</p>
          <h2 class="process_12">Solar Energy's Exceptional Synergies</h2>
          <div class="admin-info">
            <div class="admin-details">
              <div class="admin1"></div>
              <p class="admin_p">By Thomas Walhae</p>
            </div>
            <p class="admin_comment">14 Comments</p>
          </div>
        </div>
      </div>

      <div class="update_1">
        <div class="update_date">
          <p>December 12, 2023</p>
        </div>
        <div class="process_1">
          <p class="process_11">DESIGN PROCESS</p>
          <h2 class="process_12">Solar Energy's Exceptional Synergies</h2>
          <div class="admin-info">
            <div class="admin-details">
              <div class="admin1"></div>
              <p class="admin_p">By Thomas Walhae</p>
            </div>
            <p class="admin_comment">14 Comments</p>
          </div>
        </div>
      </div>
      
      <div class="update_1">
        <div class="update_date">
          <p>December 12, 2023</p>
        </div>
        <div class="process_1">
          <p class="process_11">DESIGN PROCESS</p>
          <h2 class="process_12">Solar Energy's Exceptional Synergies</h2>
          <div class="admin-info">
            <div class="admin-details">
              <div class="admin1"></div>
              <p class="admin_p">By Thomas Walhae</p>
            </div>
            <p class="admin_comment">14 Comments</p>
          </div>
        </div>
      </div>

  </div>

  

  <button class="book">Visit Our Blog</button>
  
</section>

<!-- client -->

<section class="client">
  <h1>Our Clients</h1>

  <div class="clients">
    <div class="client_1">
      <img src="Images/Images/Mobil TM Logo.png" alt="">
    </div>
    <div class="client_1">
      <img src="Images/Images/logo_BAT_C5UH57.png" alt="">
    </div>
    <div class="client_1">
      <img src="Images/Images/cropped-logo-removebg-preview.png" alt="">
    </div>
    <div class="client_1">
      <img src="Images/Images/SMG-Final-Logo-white.png" alt="">
    </div>
    <div class="client_1">
      <img src="Images/Images/NEW-LOGO-300.png" alt="">
    </div>
  </div>
</section>

<!-- footer -->


<footer class="footer">
  <div class="footer__container">
    <div class="footer__main">
      <div class="footer__brand">
        <img src="Images/Images/cosmos-logo.png" alt="Cosmos Automation Logo" class="footer__logo">
        <p class="footer__tagline">PROVIDING COMFORT THROUGH TECHNOLOGY</p>
      </div>
      <div class="footer__contact">
        <h3 class="footer__heading">Contact Information</h3>
        <ul class="footer__contact-list">
          <li><i class="fa fa-mobile"></i> +234 814 069 9847</li>
          <li><i class="fa fa-envelope"></i> info@cosmosautomation.com.ng</li>
          <li><i class="fa fa-map-marker"></i> 2/5, Republic Estate, Independence Layout, Enugu.</li>
        </ul>
      </div>
      <div class="footer__newsletter">
        <h3 class="footer__heading">Subscribe To Our Newsletter</h3>
        <p>Subscribe email and get recent news and updates</p>
        <form class="footer__form" id="newsletterForm" action="/consultation_project/includes/newsletter.php" method="post">
            <input type="email" name="email" placeholder="Enter Your Email Address..." class="footer__input" required>
            <input type="hidden" name="current_page" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <button type="submit" class="footer__submit"><i class="fa fa-paper-plane"></i></button>
        </form>

      </div>
    </div>
    <div class="footer__social">
      <a href="#" class="footer__social-link"><i class="fa fa-facebook-f"></i> Facebook</a>
      <a href="#" class="footer__social-link"><i class="fa fa-twitter"></i> Twitter</a>
      <a href="#" class="footer__social-link"><i class="fa fa-whatsapp"></i> WhatsApp</a>
    </div>
    <div class="footer__bottom">
      <p>&copy; 2022 Cosmos Automation. All rights reserved.</p>
      <div class="footer__links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
      </div>
    </div>
  </div>
</footer>

    <a href="https://wa.me/+2349032650856" class="float"      target="_blank" title="Chat with us on WhatsApp">
      <i class="fa fa-whatsapp my-float"></i>
    </a>

     <!-- <script src="script.js"></script> -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
     <script type="text/javascript">
           $(document).ready(function(){
             $('.testimonial-content').owlCarousel({
           loop:true,
           nav:false,
           dots:true,
           margin:50,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:2
               }
           }
       })
           });
     </script>

<script src="https://kit.fontawesome.com/7c091fed64.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>