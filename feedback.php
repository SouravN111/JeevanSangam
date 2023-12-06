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
    <link rel="stylesheet" href="feedback_style.css" />
  </head>

  <body>
    <div id="nav">
      <img
        src="logo.png"
        alt=""
      />
      <a href="index.php" style="text-decoration: none;"><h4>HOME</h4></a>
      <a href="matchmaking.php" style="text-decoration: none;"><h4>MATCHMAKING</h4></a>
      <a href="membership.php" style="text-decoration: none;"><h4>MEMBERSHIP</h4></a>
      <a href="stories.php" style="text-decoration: none;"><h4>STORIES</h4></a>
      <a href="feedback.php" style="text-decoration: none;"><h4 style="color: #c11e5f;">FEEDBACK</h4></a>
      
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

    <div id="cursor"></div>
    <div id="cursor-blur"></div>

    
    
    
    <div id="main">
      <div id="page1">
        <div class="container">
          <div class="row">
              <h1>Feedback</h1>
          </div>
          <div class="row">
              <h4>We'd love to hear from you!</h4>
          </div>
          <div class="row input-container">
              <div class="col-xs-12">
              
                <div class="styled-input wide" style="margin-left: 2%">
                <form method="post" action="feedback_back.php">
                  <input type="text" name="name" required />
                  <label>Name</label> 
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                  <input type="text" name="email" required />
                  <label>Email</label> 
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                  <input type="text" id="phoneno" name="phoneno" style="margin-left: 70%; padding-left: 25%;"/>
                  <label style="margin-left: 70%;">Phone Number</label> 
                </div>
              </div>
              <div class="col-xs-12">
                <div class="styled-input wide" style="margin-left: 2%">
                  <textarea name="message" required></textarea>
                  <label>Message</label>
                </div>
              </div>
              <div class="col-xs-13">
                <input type="submit" value="Send Message" style="border-radius: 50px; margin: auto;" id="sub-btn">
              </form>
              </div>
          </div>
        </div>
        

        </div>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
