<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="brotherhood.css">
    <link rel="icon" href="./assets/pictures/logos/alpha.png">
    <link rel="stylesheet" href="./assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>UVa Lambdas</title>
  </head>
  <body>
      <?php include 'functions.php';?>

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
            <div class="page-title"><h2>Brotherhood</h2></div>
            <ul>
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="philosophy.php">Philantrophy</a>
            </ul>
          </div>
        </div>

        <div class="landing" style="background: url('./assets/pictures/brotherhood/brothers-mobile.png') no-repeat">
          <a href="./index.php"><img class="landing-logo" src="./assets/pictures/landing/logo.png"></a>
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
          <div class="title-box"><h2>Brotherhood</h2></div>
        </div>

        <div class="brothers" id="light-trapezoid">
          <div id="exec-board-info" class="info-container">
            <section class="info">
              <div class="header-box" id="header-rounded"><h1 class="header-dark">House Roster</h1></div>
              <!-- Desktop Click and Appear -->
              <div class="roster-classs">
                <ul>
                  <li class="class-name" id="charter" onclick="showClassMembers('class-member-names', 'charter', 'class-name', '1')">Charter</li>
                  <li class="class-name" id="alpha" onclick="showClassMembers('class-member-names', 'alpha', 'class-name', '12')">Alpha</li>
                  <li class="class-name" id="beta" onclick="showClassMembers('class-member-names', 'beta', 'class-name', '15')">Beta</li>
                  <li class="class-name" id="gamma" onclick="showClassMembers('class-member-names', 'gamma', 'class-name', '19')">Gamma</li>
                  <li class="class-name" id="delta" onclick="showClassMembers('class-member-names', 'delta', 'class-name', '27')">Delta</li>
                  <li class="class-name" id="epsilon" onclick="showClassMembers('class-member-names', 'epsilon', 'class-name', '31')">Epsilon</li>
                  <li class="class-name" id="zeta" onclick="showClassMembers('class-member-names', 'zeta', 'class-name', '35')">Zeta</li>
                  <li class="class-name" id="eta" onclick="showClassMembers('class-member-names', 'eta', 'class-name', '37')">Eta</li>
                  <li class="class-name" id="theta" onclick="showClassMembers('class-member-names', 'theta', 'class-name', '44')">Theta</li>
                  <li class="class-name" id="iota" onclick="showClassMembers('class-member-names', 'iota', 'class-name', '52')">Iota</li>
                </ul>
                <ul class="chairs-list2">
                  <li class="class-name" id="kappa" onclick="showClassMembers('class-member-names', 'kappa', 'class-name', '62')">Kappa</li>
                  <li class="class-name" id="mu" onclick="showClassMembers('class-member-names', 'mu', 'class-name', '65')">Mu</li>
                  <li class="class-name" id="nu" onclick="showClassMembers('class-member-names', 'nu', 'class-name', '69')">Nu</li>
                  <li class="class-name" id="xi" onclick="showClassMembers('class-member-names', 'xi', 'class-name', '76')">Xi</li>
                  <li class="class-name" id="omnicron" onclick="showClassMembers('class-member-names', 'omnicron', 'class-name', '85')">Omnicron</li>
                  <li class="class-name" id="pi" onclick="showClassMembers('class-member-names', 'pi', 'class-name', '91')">Pi</li>
                  <li class="class-name" id="rho" onclick="showClassMembers('class-member-names', 'rho', 'class-name', '97')">Rho</li>
                  <li class="class-name" id="sigma" onclick="showClassMembers('class-member-names', 'sigma', 'class-name', '107')">Sigma</li>
                </ul>
              </div>
              <div id="class-member-names">
              </div>
            </section>

            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          <!-- Mobile Carousel for classs -->
          </div>
          <div class="owl-carousel owl-theme">
            <?php 
              listClasses("Charter", $charter, 1);
              listClasses("Alpha", $alpha, 12);
              listClasses("Beta", $beta, 15);
              listClasses("Gamma", $gamma, 19);
              listClasses("Delta", $delta, 27);
              listClasses("Epsilon", $epsilon, 31);
              listClasses("Zeta", $zeta, 35);
              listClasses("Eta", $eta, 37);
              listClasses("Theta", $theta, 44);
              listClasses("Iota", $iota, 52);
              listClasses("Kappa", $kappa, 62);
              listClasses("Mu", $mu, 65);
              listClasses("Nu", $nu, 69);
              listClasses("Xi", $xi, 76);
              listClasses("Omnicron", $omnicron, 85);
              listClasses("Pi", $pi, 91);
              listClasses("Rho", $rho, 97);
              listClasses("Sigma", $sigma, 107);
            ?>
          </div>
          <div class="triangle-dark"></div>
        </div>


        <div class="exec-board" id="dark-trapezoid">
          <div id="exec-board-info" class="info-container">
            <section class="info">
              <div class="header-box" id="header-rounded"><h1 class="header-light">Executive Board</h1></div>
              <!-- Desktop Click and Appear -->
              <ul class="exec-positions">
                <li class="exec-member-name" id="president" onclick='changePic("exec-member-pic", "president", "exec-member-name", "./assets/pictures/brotherhood/ExecPhotos/dhaval.png"); changePicInfo("exec-pic-name", "exec-pic-line", "Dhaval Patel", "#104 Discount Cubscout")'>President</li>
                <li class="exec-member-name" id="vpe" onclick='changePic("exec-member-pic", "vpe", "exec-member-name", "./assets/pictures/brotherhood/ExecPhotos/jon.png"); changePicInfo("exec-pic-name", "exec-pic-line", "Jonathan Wen", "#101 Clogtimus Prime")'>Vice President External</li>
                <li class="exec-member-name" id="vpi" onclick='changePic("exec-member-pic", "vpi", "exec-member-name", "./assets/pictures/brotherhood/ExecPhotos/nick.png"); changePicInfo("exec-pic-name", "exec-pic-line", "Nicholas Landi", "#98 St.i-Patch")'>Vice President Internal</li>
                <li class="exec-member-name" id="vps" onclick='changePic("exec-member-pic", "vps", "exec-member-name", "./assets/pictures/brotherhood/ExecPhotos/gordon.png"); changePicInfo("exec-pic-name", "exec-pic-line", "Gordon Lee", "#109 Its Fing RAW")'>Vice President Service</li>
                <li class="exec-member-name" id="secretary" onclick='changePic("exec-member-pic", "secretary", "exec-member-name", "./assets/pictures/brotherhood/ExecPhotos/eric.png"); changePicInfo("exec-pic-name", "exec-pic-line", "Eric Guan", "#110 PeeNut GaLLery")'>Secretary</li>
                <li class="exec-member-name" id="treasurer" onclick='changePic("exec-member-pic", "treasurer", "exec-member-name", "./assets/pictures/brotherhood/ExecPhotos/jeffrey.png"); changePicInfo("exec-pic-name", "exec-pic-line", "Jeffrey Shi", "#107 MeAn GiRlZ")'>Treasurer</li>

              </ul>
            </section>
            <div id="exec-member-pic" style="background-image: url('./assets/pictures/brotherhood/ExecPhotos/dhaval.png')">
              <div class="exec-member-info">
                <ul>
                  <li id="exec-pic-name">Dhaval Patel</li>
                  <li id="exec-pic-line">#104 Discount Cub Scout</li>
                </ul>
              </div>
            </div>
            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          </div>
          <!-- Mobile Carousel for Exec Positions -->
          <div class="owl-carousel owl-theme">
              <?php 
                createCarouselItem("President", "Dhaval Patel", "#104 Discount Cub Scout", "./assets/pictures/brotherhood/ExecPhotos/dhaval.png");
                createCarouselItem("Vice President External", "Jonathan Wen", "#101 Clogtimus Prime", "./assets/pictures/brotherhood/ExecPhotos/jon.png");
                createCarouselItem("Vice President Internal", "Nicholas Landi", "#98 St.i-Patch", "./assets/pictures/brotherhood/ExecPhotos/nick.png");
                createCarouselItem("Vice President Service", "Gordon Lee", "#109 It's F'ing RAW", "./assets/pictures/brotherhood/ExecPhotos/gordon.png");
                createCarouselItem("Secretary", "Eric Guan", "#110 PeeNut GaLLery", "./assets/pictures/brotherhood/ExecPhotos/eric.png");
                createCarouselItem("Treasurer", "Jeffrey Shi", "#107 MeAn GiRlZ", "./assets/pictures/brotherhood/ExecPhotos/jeffrey.png");
              ?>
          </div>
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </div>



        <div class="chairs" id="light-trapezoid">
          <div id="chair-board-info" class="info-container">
            <section class="info">
              <div class="header-box" id="header-rounded"><h1 class="header-dark">Chair Positions</h1></div>
              <!-- Desktop Click and Appear -->
              <div class="chair-positions">
                <ul>
                  <li class="chair-member-name" id="alumni" onclick="changePic('chair-member-pic', 'alumni', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/andrew.png'); changePicInfo('chair-pic-name', 'chair-pic-line', 'Andrew Chen', '#96 Red Head Redemption', true)">Alumni</li>
                  <li class="chair-member-name" id="culture" onclick="changePic('chair-member-pic', 'culture', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/culture.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Andrew Chen,Eric Guan,', 'Gordon Lee', false)">Culture</li>
                  <li class="chair-member-name" id="professional" onclick="changePic('chair-member-pic', 'professional', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/dhaval.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Dhaval Patel', '#104 Discount Cub Scout', false)">Professional</li>
                  <li class="chair-member-name" id="mgc" onclick="changePic('chair-member-pic', 'mgc', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/jon.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Jonathan Wen', '#101 Clogtimus Prime')">MGC</li>
                  <li class="chair-member-name" id="recruitment" onclick="changePic('chair-member-pic', 'recruitment', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/recruitment.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Seth Miller, Chris Han, ', 'Simon Li')">Recruitment</li>
                  <li class="chair-member-name" id="scholarship" onclick="changePic('chair-member-pic', 'scholarship', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/bennett.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Bennett Gilliam', '#99 DoppelBänger')">Scholarship</li>
                  <li class="chair-member-name" id="design" onclick="changePic('chair-member-pic', 'design', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/minjea.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Min Jea Kim', '#106 Dark Zero Curvy')">Design</li>
              </ul>
              <ul>
              <li class="chair-member-name" id="historian" onclick="changePic('chair-member-pic', 'historian', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/minjea.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Min Jea Kim', '#106 Dark Zero Curvy')">Historian</li>
                  <li class="chair-member-name" id="social" onclick="changePic('chair-member-pic', 'social', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/social.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Seth Miller, Simon Li', '')">Social</li>
                  <li class="chair-member-name" id="external" onclick="changePic('chair-member-pic', 'external', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/external.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Andrew Chen, Seth Miller, ', 'Simon Li')">External</li>
                  <li class="chair-member-name" id="webmaster" onclick="changePic('chair-member-pic', 'webmaster', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/minjea.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Min Jea Kim', '#106 Dark Zero Curvy')">Webmaster</li>
                  <li class="chair-member-name" id="philantrophy" onclick="changePic('chair-member-pic', 'philantrophy', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/ericz.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Eric Zhang', '#105 Senpai Style')">Philantrophy</li>
                  <li class="chair-member-name" id="fundraising" onclick="changePic('chair-member-pic', 'fundraising', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/jon.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Jonathan Wen', '#101 Clogtimus Prime')">Fundraising</li>
                  <li class="chair-member-name" id="quartermaster" onclick="changePic('chair-member-pic', 'quartermaster', 'chair-member-name', './assets/pictures/brotherhood/ChairPhotos/minjea.png'); ; changePicInfo('chair-pic-name', 'chair-pic-line', 'Min Jea Kim', '#106 Dark Zero Curvy')">Quartermaster</li>
              </ul>
            </div>
            </section>
            <div id="chair-member-pic" style="background-image: url('./assets/pictures/brotherhood/ChairPhotos/andrew.png')">
              <div class="chair-member-info">
                <ul id="name-box">
                  <li id="chair-pic-name">Andrew Chen</li>
                  <li id="chair-pic-line">#96 Red Head Redemption</li>
                </ul>
              </div>
            </div>
            <div class="info-spacer">
              <div class="header-box"></div>
            </div>
          </div>
          <!-- Mobile Carousel for Chair Positions -->
          <div class="owl-carousel owl-theme">
            <?php 
                  createCarouselItem("Webmaster", "Min Jea Kim", "#106 Dark Zero Curvy", "./assets/pictures/brotherhood/ChairPhotos/minjea.png");
                  createCarouselItem("Alumni Chair", "Andrew Chen", "#96 Red Head Redemption", "./assets/pictures/brotherhood/ChairPhotos/andrew.png");
                  createCarouselItem("Culture Chair", "Andrew Chen/Eric Guan/", "Gordon Lee", "./assets/pictures/brotherhood/ChairPhotos/culture.png");
                  createCarouselItem("Professional", "Dhaval Patel", "#104 Discount Cub Scout", "./assets/pictures/brotherhood/ChairPhotos/dhaval.png");
                  createCarouselItem("Historian", "Min Jea Kim", "#106 Dark Zero Curvy", "./assets/pictures/brotherhood/ChairPhotos/minjea.png");
                  createCarouselItem("Scholarship", "Bennet Gilliam", "#99 DoppelBänger", "./assets/pictures/brotherhood/ChairPhotos/bennett.png");
                  createCarouselItem("Design Chair", "Min Jea Kim", "#106 Dark Zero Curvy", "./assets/pictures/brotherhood/ChairPhotos/minjea.png");
                  createCarouselItem("Social Media", "Seth Miller/Simon Li", "", "./assets/pictures/brotherhood/ChairPhotos/social.png");
                  createCarouselItem("External Relations", "Andrew Chen/Seth Miller/", "Simon Li", "./assets/pictures/brotherhood/ChairPhotos/external.png");
                  createCarouselItem("Philantrophy", "Eric Zhang", "#105 Senpai Style", "./assets/pictures/brotherhood/ChairPhotos/ericz.png");
                  createCarouselItem("Quarter Master", "Min Jea Kim", "#106 Dark Zero Curvy", "./assets/pictures/brotherhood/ChairPhotos/minjea.png");
                  createCarouselItem("Fundraising", "Jonathan Wen", "#101 Clogtimus Prime", "./assets/pictures/brotherhood/ChairPhotos/jon.png");
                  createCarouselItem("Recruitment", "Seth Miller/Chris Han/", "Simon Li", "./assets/pictures/brotherhood/ChairPhotos/recruitment.png");
           ?>
          </div>
          <div id="triangle-override" class="triangle-dark"></div>
        </div>
        <?php include 'footer.php';?>
      </div>
      
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="./assets/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="./assets/js/menu.js"></script>
      <script src="./assets/js/lightbox.js"></script>
      <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            responsive:{
                0:{
                    items: 1.,
                }
            }
        })
      </script>
      <script src="https://unpkg.com/scrollreveal@4"></script>
      <script>
        var slideFromLeft = {
            distance: '20%',
            duration: 700, 
            origin: 'left',
            opacity: 0.3
        };

        var slideFromRight = {
            distance: '20%',
            origin: 'right',
            duration: 700, 
            opacity: 0.3
        };
        ScrollReveal().reveal('#fade-left', slideFromLeft);
        ScrollReveal().reveal('#fade-right', slideFromRight);
      </script>
      
      <script>
        $( document ).ready(function() {
          // Have the First class load up
          showClassMembers('class-member-names', 'charter', 'class-name', 1);
        });
        </script>

  </body>
</html>