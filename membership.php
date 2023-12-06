<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JeevanSangam</title>
  <link rel="shortcut icon" href="https://sidcupfamilygolf.com/wp-content/themes/puttosaurus/favicons/favicon-32x32.png"
    type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="membership_style.css" />
</head>

<body>
  <div id="nav">
    <img src="logo.png" alt="" />
    <a href="index.php" style="text-decoration: none;"><h4>HOME</h4></a>
    <a href="matchmaking.php" style="text-decoration: none;"><h4>MATCHMAKING</h4></a>
      <a href="membership.php" style="text-decoration: none;"><h4 style="color: #c11e5f">MEMBERSHIP</h4></a>
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


  
  <div id="main">
    <div id="page1">
      <h3>--Our membership plans--</h3>

      <div class="wrap">

        <div class="box">
          <div class="box-top">
            <!-- <img class="box-image" src="https://images.unsplash.com/photo-1622219809260-ce065fc5277f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMwNjYxOQ&ixlib=rb-1.2.1&q=85" alt="Girl Eating Pizza"> -->
            <div class="title-flex">
              <!-- <h3 class="box-title">SILVER</h3> -->
              <h3>SILVER</h3>
              <div class="price">$29/mo.</div>
              
              <!-- <p class="user-follow-info">17 Projects</p> -->
            </div>
            <p class="description">- Up to 7 matches<br>
              - counselling 1 hr/week<br>
              - Astro-Compatibility (2 Accounts)</p>
          </div>
          <a href="payment.php" style="text-decoration: none"><div class="button">SUBSCRIBE</div></a>
        </div>


        <div class="box">
          <div class="box-top">
            <!-- <img class="box-image" src="https://images.unsplash.com/photo-1488161628813-04466f872be2?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxNTMwNQ&ixlib=rb-1.2.1&q=85" alt="Girl Eating Pizza"> -->
            <div class="title-flex">
              <h3>GOLD</h3>
              <div class="price">$39/mo.</div>
              <!-- <p class="user-follow-info">33 Projects</p> -->
            </div>
            <p class="description">-Up to 10 matches<br>
            -counselling 2 hr/week<br>
            -Astro-Compatibility (5 Accounts)</p>
          </div>
          <a href="payment.php" style="text-decoration: none"><div class="button">SUBSCRIBE</div></a>
        </div>


        <div class="box">
          <div class="box-top">
            <!-- <img class="box-image" src="https://images.unsplash.com/photo-1456885284447-7dd4bb8720bf?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyMzMxNTQzNA&ixlib=rb-1.2.1&q=85" alt="Girl Eating Pizza"> -->
            <div class="title-flex">
              <h3>PLATINUM</h3>
              <div class="price">$59/mo.</div>
              <!-- <p class="user-follow-info">26 Projects</p> -->
            </div>
            <p class="description">-Up to 15 matches<br>
              -counselling 4 hr/week<br>
              -Astro-Compatibility (10 Accounts)</p>
          </div>
          <a href="payment.php" style="text-decoration: none"><div class="button">SUBSCRIBE</div></a>
        </div>




    </div>
  </div>
  
  <div id="footer">
    <img src="https://eiwgew27fhz.exactdn.com/wp-content/themes/puttosaurus/img/dots-footer.svg" alt="" />
    <div id="f1">
      <img src="logo.png" alt="" />
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js"
    integrity="sha512-qF6akR/fsZAB4Co1QDDnUXWnaQseLGXoniuSuSlPQK6+aWhlMZcHzkasCSlnWoe+TJuudlka1/IQ01Dnhgq95g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/ScrollTrigger.min.js"
    integrity="sha512-IHDCHrefnBT3vOCsvdkMvJF/MCPz/nBauQLzJkupa4Gn4tYg5a6VGyzIrjo6QAUy3We5HFOZUlkUpP0dkgE60A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>