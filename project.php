<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmos Engineering Solution</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    
    <!-- project_navbar -->
    <section id="header">
        <a href="#"><img src="images/Images/cosmos-logo.png" class="logo" alt=""></a>
    
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a class="active" href="project.html">Project</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <!-- <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li> -->
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
                <!-- <a href="cart.html"><i class="fa fa-shopping-bag"></i></a> -->
            <i id="bar" class="fa fa-outdent"></i>
        </div>
    </section>

    <!-- project_img -->
    <section class="img_about">
        <div class="img_text">
            <h1>Our Projects</h1>
            <p>Transforming ideas, Driving Efficiency, Unlockingn Growth</p>
        </div>
    </section>

    <!-- projects_case -->

    <div class="project_case">
        <div class="case1">

            <div class="case_study1">
                <div class="case_study_text">
                <p>Lorem ipsum dolor sit</p>
                </div>
                <button>Read Case Study</button>
            </div>
        </div>

        <div class="case2">
            <div class="case_study1">
                <div class="case_study_text">
                <p>Lorem ipsum dolor sit</p>
                </div>
                <button>Read Case Study</button>
            </div>
        </div>
    </div>

    <div class="project_case">
        <div class="case3">

            <div class="case_study1">
                <div class="case_study_text">
                <p>Lorem ipsum dolor sit</p>
                </div>
                <button>Read Case Study</button>
            </div>
        </div>

        <div class="case4">
            <div class="case_study1">
                <div class="case_study_text">
                <p>Lorem ipsum dolor sit</p>
                </div>
                <button>Read Case Study</button>
            </div>
        </div>
    </div>

    <div class="case5">
        <div class="case5_1">
            <div class="case_study_text">
            <p>Lorem ipsum dolor sit</p>
            </div>
            <button>Read Case Study</button>
        </div>
    </div>


    <div class="project_case">
        <div class="case1">

            <div class="case_study1">
                <div class="case_study_text">
                <p>Lorem ipsum dolor sit</p>
                </div>
                <button>Read Case Study</button>
            </div>
        </div>

        <div class="case2">
            <div class="case_study1">
                <div class="case_study_text">
                <p>Lorem ipsum dolor sit</p>
                </div>
                <button>Read Case Study</button>
            </div>
        </div>
    </div>

    <section class="pagination">
        <div class="page_0">

        </div>

        <div class="page_1">
            <p>01</p>
        </div>

        <div class="page_2">
            <p>02</p>
        </div>

        <div class="page_3">
           <p>03</p> 
        </div>

        <div class="page_4">
            <p>.........</p>
        </div>

        <div class="page_5">
            <p>08</p>
        </div>

        <div class="page_6">

        </div>
    </section>

    <!-- project_footer -->


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
        <form class="footer__form" id="newsletterForm" method="post" action="/cosmos2/consultation_project/includes/newsletter.php">
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


    <!-- <section class="footer_project">
        <div class="foot_1">
        <img src="Images/Images/logo.png" alt="">
        <p>PROVIDING COMFORT THROUGH TECHNOLOGY</p>
    
        <div class="contact">
            <h3>Contact Information</h3>
            <div class="contact_line">
    
            </div>
            <div class="contact_component">
            <div class="contact_phone">
                <i class="fa fa-mobile fa-2x"></i>
            </div>
            <p>+234 814 069 9847</p>
    
            
            </div>
    
            <div class="contact_component_1">
            <div class="contact_message">
                <i class="fa fa-envelope"></i>
            </div>
            <p>info@cosmosautomation.com.ng</p>
    
            
            </div>
    
            <div class="contact_component_1">
            <div class="contact_map">
                <i class="fa fa-map-marker"></i>
            </div>
            <p>2/5, Republic Estate, Independence Layout</p>
    
            
            </div>
    
            <div class="copyright">
            <p>Copyright &2022 Cosmos Automation. All rights reserved.</p>
            </div>
            
        </div>
        </div>
    
        <div class="foot_2">
        <div class="news">
            <h2>Subscribe To Our Newsletter.</h2>
            <p>Subscribe email and get recent news and updates</p>
            <input type="email" name="email" id="email" placeholder="Enter Your Email Address" class="tweet">
        </div>
        <div class="media">
            <div class="media_1">
            <p>Facebook</p>
            <i class="fa fa-facebook-official"></i>
            </div>
            <div class="media_2">
            <p>Twitter</p>
            <i class="fa fa-twitter"></i>
            </div>
            <div class="media_3">
            <p>Whatsapp</p>
            <i class="fa fa-whatsapp"></i>
            </div>
        </div>
        <div class="privacy">
            <div class="policy">
            <p>Privacy Policy</p>
            </div>
            <div class="policy">
            <p>Terms & Conditions</p>
            </div>
        </div>
        </div>
  </section> -->

  <script src="https://kit.fontawesome.com/7c091fed64.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>