<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>UVa Lambdas About</title>
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
            <div class="page-title"><h2>About</h2></div>
            <ul>
              <a href="index.php">Home</a>
              <a href="philosophy.php">Philantrophy</a>
              <a href="brotherhood.php">Brotherhood</a>
            </ul>
          </div>
        </div>

        <div class="landing" style="background: url('./assets/pictures/about/about-mobile.jpg') no-repeat;">
          <div class="title-box"><h2>About</h2></div>
          <a href="./index.php"><img class="landing-logo" src="./assets/pictures/landing/logo.png"></a>
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </div>

        <div class="mission">
          <div class="info-container">
            <section class="info">
              <div class="header-box"><h1 class="header-dark">The Mission</h1></div>
              <p>To guide men on a lifelong discovery of authenticity and personal growth</p>
            </section>
            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-left" class="section-pic" src="./assets/pictures/about/mission2.svg">
          <div class="triangle-dark"></div>
        </div>

        <div class="vision">
          <div class="info-container">
            <section class="info" style="float: right">
              <div class="header-box"><h1 class="header-light">Our Vision</h1></div>
              <p>A world where Lambda men live authentic, fulfilling lives and contribute through the pursuit of their noble purpose</p>
            </section>
            <div class="info-spacer" style="float: left">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-right" class="section-pic"src="./assets/pictures/about/telescope.svg">
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </div>

        <div class="values">
          <div class="info-container">
            <section class="info">
              <div class="header-box"><h1 class="header-dark">Values</h1></div>
              <p>

              The Alpha Tau Chapter of Lambda Phi Epsilon is colloquially known as the gentleman’s chapter and strives to live up to that name.
              All brothers strive for academic achievement and to create a sense of identity for Asian American men on campus
              </p>
            </section>
            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-left" class="section-pic" src="./assets/pictures/about/values.svg">
          <div class="triangle-dark"></div>
        </div>

        <div id="history" class="vision">
          <div class="info-container">
            <section class="info" style="float: right">
              <div class="header-box"><h1 class="header-light">History</h1></div>
              <p>Nineteen men, led by Mr. Craig Ishigo sought an establishment that transcended the limitations faced by traditional Asian-interest organizations on campus and drew its membership equally from the different segments of the Asian American community with hopes to bridge the gaps of Asian American communities</p>             </section>
            <div class="info-spacer" style="float: left">
              <div class="header-box"></div>
            </div>
          </div>
          <img id="fade-left" class="section-pic" src="./assets/pictures/about/history.svg">
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </div>

        <?php include 'footer.php';?>
      </div>
   
      <script src="https://unpkg.com/scrollreveal@4"></script>
      <script type="text/javascript" src="./assets/js/menu.js"></script>
      <script>
        var slideFromLeft = {
            duration: 900, 
            opacity: 0.2
        };

        var slideFromRight = {
            duration: 900, 
            opacity: 0.2
        };
        ScrollReveal().reveal('#fade-left', slideFromLeft);
        ScrollReveal().reveal('#fade-right', slideFromRight);
      </script>
  </body>
</html>