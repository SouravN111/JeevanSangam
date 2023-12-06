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
    <link rel="stylesheet" href="stories_style.css" />
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
      <a href="stories.php" style="text-decoration: none;"><h4 style="color: #c11e5f">STORIES</h4></a>
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

    <div id="cursor"></div>
    <div id="cursor-blur"></div>

    <section class="carosurl">
        
    </section>















    
    <!-- <video
      autoplay
      loop
      muted
      src="Video.mp4"
    ></video> -->
    <div id="main">
      <div id="page1">

        <div class="row" style="margin-top: 7%;">
            <center><h2>-- Success stories --</h2></center>
        </div>

        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <img src="https://images.pexels.com/photos/16956639/pexels-photo-16956639/free-photo-of-couple-sitting-at-a-table-and-drinking-red-wine.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Los Angeles" width="1100" height="500" style="object-fit: cover;  border-radius: 10px;">
              <!-- <div class="overlay"></div> -->
              <div class="carousel-caption">
                <h3>Phil and linda</h3>
                <h4>"Love: a tender dance, whispers of hearts, an eternal embrace."</h4>
              </div>
            </div>

            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/3420036/pexels-photo-3420036.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Chicago" width="1100" height="500" style="object-fit: cover;  border-radius: 10px;" >
              <div class="carousel-caption">
                <h3>Jason and Velentina</h3>
                <h4>"Trust, kindness, and patience form love's resilient foundation."</h4>
              </div>
            </div>

            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/14093244/pexels-photo-14093244.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="New York" width="1100" height="500" style="object-fit: cover;  border-radius: 10px;">
              <div class="carousel-caption">
                <h3>Anna and Maxwell</h3>
                <h4>"Trust, communication, laughter-love's foundation for enduring relationships."</h4>
              </div>
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        
        </div>


        <div class="second-heading " >

            <div class="row">
                
                <div class="col-sm-8" style="margin:5% 0%;">
                    <center><h2>- More success stories -</h2></center>
                </div>
                
                
            </div>
            <div class="row">
              
                <div class="col-sm-3">
                  <div class="card-deck">

                    <!-- Card -->
                    <div class="card mb-4">
                  
                      <!--Card image-->
                      <div class="view overlay">
                        <img class="card-img-top" src="https://images.pexels.com/photos/3292701/pexels-photo-3292701.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                          alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                  
                      <!--Card content-->
                      <div class="card-body">
                  
                        <!--Title-->
                        
                        <!--Text-->
                        <p class="card-text">
                          "Two hearts united on this matrimonial platform. Sarah and David, a perfect match. Their journey began with a simple 'Hello.' From virtual chats to real-life sparks, their love blossomed. Today, they stand hand in hand, ready to embark on a lifelong adventure together. A testament to the magic of online connections turning into a beautiful reality."</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        
                  
                      </div>
                  
                    </div>
                </div>
            </div>
          

            <div class="col-sm-3">
              <div class="card-deck">

                <!-- Card -->
                <div class="card mb-4">
              
                  <!--Card image-->
                  <div class="view overlay">
                    <img class="card-img-top" src="https://images.pexels.com/photos/3352398/pexels-photo-3352398.jpeg"
                      alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
              
                  <!--Card content-->
                  <div class="card-body">
              
                    <!--Title-->
                    <!--Text-->
                    <p class="card-text">"Meet Raj and Priya, a JeevanSangam success story. Their journey began with a simple profile match, but soon blossomed into a beautiful love story. They discovered shared interests and values, leading to countless heartfelt conversations. Today, they stand hand in hand, grateful to JeevanSangam for bringing them together."
                    </p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              
                  </div>
              
                </div>
            </div>
        </div>

        <div class="col-sm-3">
          <div class="card-deck">

            <!-- Card -->
            <div class="card mb-4">
          
              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="https://images.pexels.com/photos/1707446/pexels-photo-1707446.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
          
              <!--Card content-->
              <div class="card-body">
          
                <!--Title-->
               
                <!--Text-->
                <p class="card-text">"Meet Aarti and Rahul, a match made on JeevanSangam. Both had almost given up on finding love. But fate had other plans. Their first chat turned into endless conversations, and soon they met. Sparks flew, and within months, they knew they were meant to be. Thanks to JeevanSangam,  proving that sometimes, love is just a click away"</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          
              </div>
          
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
