<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JeevanSangam</title>
    <link
      rel="shortcut icon"
      href="https://sidcupfamilygolf.com/wp-content/themes/puttosaurus/favicons/favicon-32x32.png"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div id="nav">
      <img
        src="logo.png"
        alt=""
      />
      <a href="index.php" style="text-decoration: none;"><h4 style="color: #c11e5f;">HOME</h4></a>
      <a href="matchmaking.php" style="text-decoration: none;"><h4>MATCHMAKING</h4></a>
      <a href="membership.php" style="text-decoration: none;"><h4>MEMBERSHIP</h4></a>
      <a href="stories.php" style="text-decoration: none;"><h4>STORIES</h4></a>
      <a href="feedback.php" style="text-decoration: none;"><h4>FEEDBACK</h4></a>
      <?php
          if(isset($_COOKIE["login"])){
      ?>
      <a href="myprofile.php" style="text-decoration: none;"><h4>MY PROFILE</h4></a>
      <?php
      }
      ?>

      
      <div id="reg-log">
      <?php
          if(!isset($_COOKIE["login"])){
      ?>
        <a href="login.php" style="text-decoration: none;"><h4>LOGIN</h4></a>
        <a href="register.php" style="text-decoration: none;"><h4>REGISTER</h4></a>

        <?php
      }
      else{
      ?>
        <a href="logout.php" style="text-decoration: none;"><h4>LOGOUT</h4></a>
      <?php
      }
      ?>
      </div>
      
    </div>
    

    <div id="cursor" style="background-color: #c11e5f"></div>
    <div id="cursor-blur"></div>

    <video
      autoplay
      loop
      muted
      src="Video.mp4"
    ></video>
    <div id="main">
      <div id="page1">
        <h1>Find your desired partner</h1>
        <h2>WELCOME TO JEEVANSANGAM</h2>
        <p>
        Discover your perfect match with our personalized profiles, advanced compatibility algorithms, and a safe, trusted community. Find love, find your forever today. Your journey to lifelong happiness begins here.        </p>
        <!-- <div id="arrow">
          <i class="ri-arrow-down-line"></i>
        </div> -->
      </div>
      <div id="page2">
        <div id="scroller">
          <div id="scroller-in">
            <h4>ASTROLOGY</h4>
            <h4>CONSULTATION</h4>
            <h4>COUNSELLING</h4>
            <h4>PROFILES</h4>
          </div>
          <div id="scroller-in">
            <h4>ASTROLOGY</h4>
            <h4>CONSULTATION</h4>
            <h4>COUNSELLING</h4>
            <h4>PROFILES</h4>
          </div>
        </div>
        <div id="about-us">
          <img id="logo"
            src="https://i.pinimg.com/736x/be/bc/69/bebc69e2391648401678cb015997f4f3.jpg"
            alt=""
          />
          <div id="about-us-in">
            <h3>ABOUT US</h3>
            <p>
              We are a pioneer in online matchmaking and offers lakhs of mobile-verified profiles based on interests, education, profession, location, and more. Here, you can register for free and get a profile created, get a compatible match recommendation, receive notifications, and view advanced filters of your preference.
            </p>
          </div>
          <img
            src="https://i.pinimg.com/474x/92/d8/bd/92d8bd184f8159aa3585b9d536e11e53--stuff-and-things-random-things.jpg"
            alt=""
          />
        </div>
        <div id="cards-container">
          <div class="card" id="card1">
            <div class="overlay">
              <h4>Matchmaking</h4>
              <p>
              "Find your perfect match with our dedicated matchmaking service on JEEVANSANGAM. We're here to help you discover love and lifelong happiness. Join us today!"
              </p>
            </div>
          </div>
          <div class="card" id="card2">
            <div class="overlay">
              <h4>Astrology</h4>
              <p>
              "Find Love Through the Stars! Get personalized astrology insights to discover your perfect match on our matrimonial website."
              </p>
            </div>
          </div>
          <div class="card" id="card3">
            <div class="overlay">
              <h4>Counselling</h4>
              <p>
                  Find love and lasting happiness with expert guidance. Personalized, confidential support for your journey.
              </p>
            </div>
          </div>
        </div>
        <div id="green-div">
          <img
            src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-side.svg"
            alt=""
          />
          <h4>
            SIGN UP FOR MATCHMAKING AND SPECIAL OFFERS STRAIGHT TO YOUR INBOX
          </h4>
          <img
            src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-side.svg"
            alt=""
          />
        </div>
      </div>
      <div id="page3">
        <p>
        Start your journey towards lasting love today. It has profiles from various locations, communities, professions, etc. It offers a convenient way of connecting people with its best-in-class matchmaking algorithm.
        </p>
        <img
          id="colon1"
          src="https://dradrianklein.files.wordpress.com/2022/06/inverted-commas_1-2.png"
          alt=""
        />
        <img
          id="colon2"
          src="https://bpb-eu-c1.wpmucdn.com/sites-wordpress.em-lyon.com/dist/e/5/files/2020/05/kisspng-quotation-marks-in-english-comma-clip-art-quote-mark-5b165ee84422e2.4880693715281927442791-480x480.png"
          alt=""
        />
      </div>
      <div id="page4">
        <h1>WHAT ARE YOU WAITING FOR?</h1>
        
      </div>
      <div id="footer">
        <img
          src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-footer.svg"
          alt=""
        />
        <div id="f1">
          <img
            src="logo.png"
            alt=""
          />
        </div>
        <div id="f2">
          <h4>Terms of use</h4>
          <h4>Privacy policy</h4>
          <h4>Report misuse</h4>
        </div>
        <div id="f3">
          <h4>Jeevan blog</h4>
          <h4>About us</h4>
          <h4>Contact us</h4>
        </div>
        <div id="f4">
          <h4>
            A13, JAY AMBE NAGAR <br />
            THALTEJ <br />
            SG HIGHWAY <br />
            350089 <br />
            TEL: 0208 309 0181 <br />
            GET DIRECTIONS <br />
          </h4>
        </div>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js"
      integrity="sha512-qF6akR/fsZAB4Co1QDDnUXWnaQseLGXoniuSuSlPQK6+aWhlMZcHzkasCSlnWoe+TJuudlka1/IQ01Dnhgq95g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js"
      integrity="sha512-IHDCHrefnBT3vOCsvdkMvJF/MCPz/nBauQLzJkupa4Gn4tYg5a6VGyzIrjo6QAUy3We5HFOZUlkUpP0dkgE60A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
