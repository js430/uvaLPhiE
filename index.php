<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="./assets/pictures/logos/alpha.png">
    <link rel="stylesheet" type="text/css" href="./assets/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/lightbox.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>UVa Lambdas</title>
    <style type="text/css">
      /* Styling for before pics so they could be dynamically changed with WordPress */
      #light-trapezoid.brotherhood:before {
          background: url("./assets/pictures/landing/broterhood.png") 0 0 repeat;
      }
      #light-trapezoid.whoweare:before {
        background: url("./assets/pictures/landing/peterhugs.png") 0 0 repeat;
      }
      #dark-trapezoid.whatwedo:before {
        background: url("./assets/pictures/landing/ben_adr.png") 0 0 repeat;
      }
  </style>
  </head>
  <body>
      <div class="container">
        <button onclick="showDiv()" class="hamburger-menu"></button>
        <div id="mobile-menu">
          <button onclick="closeDiv()" class="hamburger-menu"  id="close-menu"></button>
          <ul>
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="philosophy.php">Philantrophy</a>
              <a href="brotherhood.php">Brotherhood</a>
          </ul>
        </div>
        <div class="desktop-menu">
          <div class="menu-container">
            <ul>
              <a href="about.php">About</a>
              <a href="philosophy.php">Philantrophy</a>
              <a href="brotherhood.php">Brotherhood</a>
            </ul>
          </div>
        </div>

        <div class="landing" style="background: url('./assets/pictures/landing/landing_mobile.png')">
         <a href="./index.php"><img class="landing-logo" src="./assets/pictures/landing/logo.png"></a>
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </div>

        <div class="whoweare" id="light-trapezoid">
          <div class="info-container">
            <section class="info">
              <div class="header-box" id="header-rounded"><h1 class="header-dark">Who We Are</h1></div>
              <p>Men grounded on the principles of wisdom, honor, and courage.  Members of the first and only internationally recognized Asian-interest fraternity.</p>
            </section>
            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-left" class="section-pic" src="./assets/pictures/landing/peterhugs.png">
          <img class="shadow" src="./assets/pictures/landing/peterhugs.png">
          <div class="triangle-dark"></div>
        </div>

        <div class="whatwedo" id="dark-trapezoid">
          <div class="info-container">
            <section class="info" style="float: right">
              <div class="header-box"  id="header-rounded"><h1 class="header-light">What We Do</h1></div>
              <p>We host a variety of events throughout the school year, ranging from social mixers to philanthropy events in partnership with Be The Match, our national philanthropy.</p>
            </section>
            <div class="info-spacer" style="float: left">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-right" class="section-pic" src="./assets/pictures/landing/ben_adr.png">
          <img class="shadow" src="./assets/pictures/landing/ben_adr.png">
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </div>

        <div class="brotherhood" id="light-trapezoid">
          <div class="info-container">
            <section class="info">
              <div class="header-box"  id="header-rounded"><h1 class="header-dark">Brotherhood</h1></div>
              <p>We are a tight knit family, dedicated to each other and our mutual quest for self improvement.</p>
            </section>
            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-left" class="section-pic" src="./assets/pictures/landing/broterhood.png">
          <img class="shadow" src="./assets/pictures/landing/broterhood.png">
          <div class="triangle-dark"></div>
        </div>

        <div class="carousel-container">
          <div class="triangle-footer"></div>
          <div class="multiple-items">
            <a style="background: url('./assets/pictures/landing/carousel/pic1.png'); background-size: cover" href="./assets/pictures/landing/carousel/pic1.png" data-lightbox="image-1" data-title='Our new VPI and Spring ‘18 bro Nicholas “st. i-Patch” Landi spent a few weeks getting his tan on in Barcelona and Marrakech! We look forward to the stories of your wild adventures bro ☀️'></a>
            <a style="background: url('./assets/pictures/landing/carousel/pic2.png'); background-size: cover" href="./assets/pictures/landing/carousel/pic2.png" data-lightbox="image-1" data-title='Happy Thanksgiving from Alpha Tau! We’d like take this occasion to say thank you to our own Executive Board!'></a>
            <a style="background: url('./assets/pictures/landing/carousel/pic3.jpg'); background-size: cover" href="./assets/pictures/landing/carousel/pic3.jpg" data-lightbox="image-1" data-title='BROTHER OF THE MONTH 💙
We are excited to say that our November Brother of the Month is our very own VP Finance #107 Jeffrey “MeAn GiRlZ” Shi! Throughout the month of November, he has worked very hard in organizing some great fundraisers from the Pocky and Boba fundraiser to our Donuts and Coffee fundraiser (which is going on right now!)!'></a>
            <a style="background: url('./assets/pictures/landing/carousel/pic4.png'); background-size: cover" href="./assets/pictures/landing/carousel/pic4.png" data-lightbox="image-1" data-title='Our Neo Eric "PeeNut GaLLery" Guan spent a few weeks traveling to Banff and Yoho National park in Alberta, Canada. Hope you had some quality time to spend with family, and we can’t wait to hear the stories you have to tell!'></a>
            <a style="background: url('./assets/pictures/landing/carousel/pic5.png'); background-size: cover" href="./assets/pictures/landing/carousel/pic5.png" data-lightbox="image-1" data-title='Our Spring 17 bro Chris “unplaNNed parenthOOd” Han has been interning at Facebook in the San Francisco Bay Area this summer. He had some time to check out Los Angeles and stopped by the LA County Museum of Art on his trip. We all can’t wait to catch up with you when you’re back on the East Coast bro!'></a>
          </div>
          <div class="triangle-dark"></div> 
        </div>  

        <div class="gap-fill">
          <div class="triangle-dark"></div> 
        </div>

        <?php include 'footer.php';?>
      </div>

      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="./assets/js/slick.js"></script>
      <script type="text/javascript" src="./assets/js/menu.js"></script>
      <script src="./assets/js/lightbox.js"></script>
      <script src="https://unpkg.com/scrollreveal@4"></script>
      <script type="text/javascript">
        // Javascript for Carousel
        $(document).ready(function(){
          $('.multiple-items').slick(
        )});
      </script>
      <script>
        var slideFromLeft = {
            duration: 1000, 
            origin: 'left',
            opacity: 0.3
        };

        var slideFromRight = {
            origin: 'right',
            duration: 1000, 
            opacity: 0.3
        };
        ScrollReveal().reveal('#fade-left', slideFromLeft);
        ScrollReveal().reveal('#fade-right', slideFromRight);
      </script>
  </body>
</html>