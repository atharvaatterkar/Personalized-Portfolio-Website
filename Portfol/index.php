<?php
require('include/db.php');
$query="SELECT * from Home , section_control,social_media,about,personal_info,contact,site_background,seo ";
$run = mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    

    <title><?=$user_data['title']?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/PBL.css" rel="stylesheet">


</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="images/cap.png" class="navbar-brand-image img-fluid" alt="">
                    <span class="navbar-brand-text">
                    <?=$user_data['title']?>
                            <small>Profile</small>
                        </span>
                </a>

                

                

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                    <?php
if($user_data['home_section']){
?>
<li><a class="nav-link click-scroll" href="#section_1">Home</a></li>
<?php
}
if($user_data['about_section']){
    ?>
              <li><a class="nav-link click-scroll" href="#section_2">About</a></li>
              <?php
    }
    if($user_data['resume_section']){
    ?>
              <li><a class="nav-link click-scroll" href="#section_3">Resume</a></li>
              <?php
    }
    if($user_data['portfolio_section']){
    ?>
              <li><a class="nav-link click-scroll" href="#section_4">Portfolio</a></li>
              <?php
    }
    if($user_data['contact_section']){
    ?>
              <li><a class="nav-link click-scroll" href="#section_5">Contact</a></li>
              <?php
    }
?>
                    </ul>

                    
                </div>
            </div>
        </nav>

        


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="section-overlay"></div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#735DA5" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <h2 class="text-white"><?=$user_data['title']?></h2>

                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span>I am</span>
                            <span class="cd-words-wrapper">
                                    <b class="is-visible">Inspiring Minds, Shaping Futures</b>
                                    <b>Transforming Tomorrow's Leaders</b>
                                    <b>Molding Bright Minds</b>
                                    <b>Educating for Excellence</b>
                                    <b>Igniting Passion for Learning</b>
                                </span>
                        </h1>

                        <div class="custom-btn-group">
                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">About Me</a>

                            <a href="#section_3" class="link smoothscroll">Resume</a>
                        </div>
                    </div>



                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-lg-5 mb-4">About Me</h2>
                    </div>

                    <div class="col-lg-8 col-12 me-auto mb-4 mb-lg-0">
                    <h3><?=$user_data['about_title']?></h3>
          <p class="fst-italic">
            <?=$user_data['about_subtitle']?>
          </p>
          <?php
$query7 = "SELECT * FROM personal_info";
$run7 = mysqli_query($db, $query7);

$count = 0; // Initialize counter

while ($personal_info = mysqli_fetch_array($run7)) {
    // Check if the count is divisible by 4
    if ($count % 4 == 0 && $count != 0) {
        // Close previous column if not the first one
        echo '</div><div class="col-lg-6">';
    }

    // Start a new column for the first item or every 4th item
    if ($count % 4 == 0) {
        echo '<div class="col-lg-6">';
    }

    // Output the list item
    ?>
    <ul>
        <li><i class="bi bi-chevron-right"></i> <strong><?=$personal_info['label']?>:</strong> <?=$personal_info['value']?></li>
    </ul>
    <?php

    // Increment the counter
    $count++;
}

// Close the last column if needed
if ($count % 4 != 0) {
    echo '</div>';
}
?>
                    
                    </div>
       </div>
          <p>
            <?=$user_data['about_desc']?>
          </p>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
                            <div class="person-block">
                                <div class="person-block-image-wrap">
                                    <img src="images/profile_pic.jpeg" class="person-block-image img-fluid" alt="">
                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="https://www.linkedin.com/in/anuradha-yenkikar/" class="social-icon-link bi-linkedin"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-twitter"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="https://www.instagram.com/anuradhayenkikar/" class="social-icon-link bi-instagram"></a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link bi-facebook"></a>
                                        </li>
                                    </ul>
                                </div>

                      
                            </div>
                        </div>

                    </div>
                </div>
            </section>  



        <section class="section-bg-image">
            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="section-bg-image-block">
                            <h2 class="mb-lg-3">Gallary</h2>
                            <div class="image-container">
                              <img src="./images/image1.jpeg" alt="Image 1" class="rounded-image">
                            

                              <img src="./images/image2.jpeg" alt="Image 2" class="rounded-image">
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>

            <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
        </section>


        <section class="membership-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                        <h2><span>Resume</span></h2>
                    </div>



                    <div class="col-lg-14 col-12 mx-auto">

                    <div class="container">

<div class="section-title">
  <h2>Resume</h2>
  <p>Check My Resume</p>
</div>

<div class="row">
  <div class="col-lg-6">

    <h3 class="resume-title">Education</h3>
    <?php
$query5="SELECT * FROM resume";
$run5=mysqli_query($db,$query5);
while($resume = mysqli_fetch_array($run5)){
if($resume['type']=="Education"){
  ?>
    <div class="resume-item">
      <h4><?=$resume['title']?></h4>
      <h5><?=$resume['time']?></h5>
      <p><em><?=$resume['org']?></em></p>
      <p><?=$resume['about_exp']?></p>
    </div>
<?php
}
}
?>
  </div>
  <div class="col-lg-6">
    <h3 class="resume-title">Professional Experience</h3>
<?php
$query5="SELECT * FROM resume";
$run5=mysqli_query($db,$query5);
while($resume = mysqli_fetch_array($run5)){
if($resume['type']=="Professional Experience"){
  ?>
    <div class="resume-item">
      <h4><?=$resume['title']?></h4>
      <h5><?=$resume['time']?></h5>
      <p><em><?=$resume['org']?></em></p>
      <p><?=$resume['about_exp']?></p>
    </div>
<?php
}
}
?>
    
  </div>
</div>

</div>
                </div>

            </div>
            </div>
        </section>


        <section class="portfolio-section section-bg section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-lg-3">My Works</h2>
                    </div>

                    <div class="row custom-block mb-3">
                    <div class="container-prasad">

<div class="section-title">
  <h2>Projects</h2>
  <p>My Works</p>
</div>

<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    
  </div>
</div>

<div class="row portfolio-container">
<?php   
$query6 = "SELECT * FROM projects";
$run6 = mysqli_query($db,$query6);    
while($portfolio = mysqli_fetch_array($run6)){

?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <img src="images/<?=$portfolio['project_pic']?>" class="img-fluid" alt="">
      <div class="portfolio-info">
        <h4><?=$portfolio['project_name']?></h4>
        <p><?=$portfolio['project_desc']?></p>
        <div class="portfolio-links">
          <a href="images/<?=$portfolio['project_pic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
          
        </div>
      </div>
    </div>
  </div>
<?php
    }
?>
  
 

</div>

</div>

                        

                        
                    </div>


                    <div class="row custom-block custom-block-bg">
                    <div class="skills container">

<div class="section-title">
  <h2>Skills</h2>
</div>

<div class="row skills-content">


  <div class="col-lg-12">
  <?php
$query2="SELECT * FROM skills";
$run2=mysqli_query($db,$query2);
while($skill = mysqli_fetch_array($run2)){
  ?>
    <div class="progress">
      <span class="skill"><?=$skill['skill_name']?><i class="val"><?=$skill['skill_level']?>%</i></span>
      <div class="progress-bar-wrap">
        <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skill['skill_level']?>" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <?php
}
    ?>

  </div>

</div>

</div>

                        

                        
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12">
                        <form action="#" method="post" class="custom-form contact-form" role="form">
                            <h2 class="mb-4 pb-2">Contact Me</h2>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">

                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">

                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>

                                        <label for="floatingTextarea">Message</label>
                                    </div>

                                    <button type="submit" class="form-control">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    
                    <div class="col-lg-6 col-12">
                        <div class="contact-info mt-5">
                            <div class="contact-info-item">
                                <div class="contact-info-body">
                                    <strong>Pune, India</strong>

                                    <p class="mt-2 mb-1">
                                        <a href="tel: 010-020-0340" class="contact-link">
                                                (+91) 
                                                9028071300
                                            </a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="mailto:info@company.com" class="contact-link">
                                                anuradhayenkikar@viit.ac.in
                                            </a>
                                    </p>
                                </div>

                                <div class="contact-info-footer">
                                    <a href="#">Connect</a>
                                </div>
                            </div>

                            <img src="images/directions.jpg" class="img-fluid" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/cap.png" class="navbar-brand-image img-fluid" alt="">
                        <span class="navbar-brand-text">
                             <?=$user_data['title']?>
                                <small>Profile</small>
                            </span>
                    </a>
                </div>

                <div class="col-lg-3 col-12">
                   
                </div>

                <div class="col-lg-2 col-12 ms-auto">
                    <ul class="social-icon mt-lg-5 mt-3 mb-4">
 
                   
                        <li class="social-icon-item">
                            <a href="https://www.linkedin.com/in/anuradha-yenkikar/" class="social-icon-link bi-linkedin"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.instagram.com/anuradhayenkikar/" class="social-icon-link bi-instagram"></a>
                        </li>
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>
                    </ul>
                   
                </div>

      

    
                   

                

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D3C5E5" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>