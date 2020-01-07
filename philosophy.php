<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="philosophy.css">
    <link rel="icon" href="./assets/pictures/logos/alpha.png">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>UVa Lambdas</title>
  </head>
  <body>

      <div class="container">
        <button onclick="showDiv()" class="hamburger-menu"></button>
        <div id="mobile-menu">
          <button onclick="closeDiv()" class="hamburger-menu" id="close-menu"></button>
          <ul>
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="philosophy.php">Philantrophy</a>
              <a href="brotherhood.php">Brotherhood</a>
          </ul>
        </div>

        <div class="desktop-menu">
          <div class="menu-container">
            <div class="page-title"><h2>Philantrophy</h2></div>
            <ul>
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="brotherhood.php">Brotherhood</a>
            </ul>
          </div>
        </div>

        <section id="phil-page" class="landing">
          <a href="./index.php"><img class="landing-logo" src="./assets/pictures/landing/logo.png"></a>
          <div class="title-box"><h2>Philantrophy</h2></div>
          <div class="triangle-light" style="transform: scaleX(-1)"></div>
        </section>

        <section class="phil-intro">
            <div class="phil-infos">
              <h4>Helping the Community</h4>
              <p>Men grounded on the principles of wisdom, honor, and courage.  Members of the first and only internationally recognized Asian-interest fraternity.</p>
            </div>
          <div class="triangle-dark"></div>
        </section>

        <section class="organizations" >
          <div class="orgs-container">

            <div class="bethematch" id="event-odd">
              <div class="event-title"><img class="bethematch-logo" src="./assets/pictures/philosophy/bethematch.svg"><h4>Be The Match</h4></div>
              <div><p>In 1996, Lambda Phi Epsilon’s national philanthropy, Be The Match, was founded and has been working closely with the fraternity on a national scale ever since. The Alpha Tau chapter of Lambda Phi Epsilon hosts bone marrow drives and a large university wide philanthropy event every year. </p></div>
            </div>

            <div class="twitch" id="event-even">
              <div class="event-title"><img class="twitch-logo" src="./assets/pictures/philosophy/twitch.svg"></div>
              <div><p>A streaming event on Twitch where brothers collect donations while performing several activities such as eating fire noodles, dancing, and the cinnamon challenge. All proceeds go to BeTheMatch. </p></div>
            </div>

            <div class="challah" id="event-odd">
              <div class="event-title"><img class="challah-logo" src="./assets/pictures/philosophy/challah.svg"><h4>Challah for Hunger</h4></div>
              <div><p>A national, non-profit organization that bakes and sells challah to raise money for humanitarian aid. The Alpha Tau chapter works closely with Challah, participating in events on a consistent basis.</p></div>
            </div>

            <div class="tomtober" id="event-even">
              <div class="event-title"><img class="tomtober-logo" src="./assets/pictures/philosophy/tomtober.svg"></div>
              <div><p>A day-long celebration of Charlottesville’s creativity, innovation, and community where Brothers would help with free concerts, games, a craft beer garden, food trucks as well as Tech and Community Mixers.</p></div>
            </div>

          </div>
        </section>

        <div class="gap-fill">
          <div class="triangle-dark"></div> 
        </div>

        <?php include 'footer.php';?>
      </div>

      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="https://unpkg.com/scrollreveal@4"></script>
      <script type="text/javascript" src="./assets/js/menu.js"></script>
      <script>
        var FadeIn = {
            duration: 1000, 
            opacity: 0.1
        };

        ScrollReveal().reveal('#event-odd', FadeIn);
        ScrollReveal().reveal('#event-even', FadeIn);
      </script>
  </body>
</html>