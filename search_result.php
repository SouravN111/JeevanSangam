<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search_result_style.css">
</head>
<body style="background-color: #000000; font-family: montserrat;">
<?php
    if(isset($_COOKIE["login"])){
    ?>
<div id="nav">
      <img
        src="logo.png"
        alt=""
      />
      <a href="index.php" style="text-decoration: none;"><h4>HOME</h4></a>
      <a href="matchmaking.php" style="text-decoration: none;"><h4 style="color: #c11e5f">MATCHMAKING</h4></a>
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

<div class="container d-flex align-items-center">
             
             <div class="card">

              <div class="upper">

                <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
                
              </div>

              <div class="user text-center">

                <div class="profile">

                  <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">
                  
                </div>

              </div>


              <div class="mt-5 text-center">

                <h4 class="mb-0">Ayesha Beniwal</h4>
                <span class="text-muted d-block mb-2">Gurgaon</span>

                <button class="btn" style="background-color: #c11e5f; color: #fff">View Profile</button>


                <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                  <div class="stats">
                    <h6 class="mb-0">Religion</h6>
                    <span>Hindu</span>

                  </div>


                  <div class="stats">
                    <h6 class="mb-0">Cast</h6>
                    <span>Jaat</span>

                  </div>


                  <div class="stats">
                    <h6 class="mb-0">Occupation</h6>
                    <span>Int.Designer</span>

                  </div>
                  
                </div>
                
              </div>
               
             </div>



             <div class="card">

              <div class="upper">

                <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
                
              </div>

              <div class="user text-center">

                <div class="profile">

                  <img src="https://www.iwmbuzz.com/wp-content/uploads/2022/10/kaashvi-hiranandani-aka-kaashvi-plays-casual-crop-top-styles-to-steal-5-736x920.jpg" class="rounded-circle" width="80">
                  
                </div>

              </div>


              <div class="mt-5 text-center">

                <h4 class="mb-0">kaashvi Hiranandani</h4>
                <span class="text-muted d-block mb-2">Mumbai</span>

                <button class="btn" style="background-color: #c11e5f; color: #fff">View Profile</button>



                <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                  <div class="stats">
                    <h6 class="mb-0">Religion</h6>
                    <span>Hindu</span>

                  </div>


                  <div class="stats">
                    <h6 class="mb-0">Caste</h6>
                    <span>Sindhi</span>

                  </div>


                  <div class="stats">
                    <h6 class="mb-0">Occupation</h6>
                    <span>youtuber</span>

                  </div>
                  
                </div>
                
              </div>
               
             </div>

           </div>
           <?php
    }
	else{
		header("location:login.php");
	}
    ?>
</body>
</html>














    
      
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
