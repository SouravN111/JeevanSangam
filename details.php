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
    <link rel="stylesheet" href="details_style.css" />
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
      <a href="feedback.php" style="text-decoration: none;"><h4>FEEDBACK</h4></a>
      
      <a href="myprofile.php" style="text-decoration: none;"><h4 style="color: #c11e5f;">MY PROFILE</h4></a>



      <div id="reg-log">
<a href="logout.php" style="text-decoration: none;"><h4>LOGOUT</h4></a>

</div>
    </div>



    <div id="cursor"></div>
    <div id="cursor-blur"></div>

    









    
    <!-- <video
      autoplay
      loop
      muted
      src="Video.mp4"
    ></video> -->
    <div id="main">
      <div id="page1">

        <div class="container">
          
          <form action="details_back.php" method="post" id="form">
            

             <h2>Personal info</h2>
              <label>First name </label>
              <input type="text" name="fname" id="" placeholder=""><br>
              <label>Middle name </label>
              <input type="text" name="mname" id="" placeholder=""><br>
              <label>Last name </label>
              <input type="text" name="lname" id="" placeholder=""><br>
              <label>Age </label>
              <input type="number" name="age" id="" placeholder=""><br>
              <label>Gender </label>
              <select name="gender" id="">
                <option value="select" style="color: black;">Select gender</option>
                <option value="male" style="color: black;">Male</option>
                <option value="female" style="color: black;">Female</option>
              </select><br>
              <label>Date of birth </label>
              <input type="date" name="dob" id=""><br>
              <label>Education </label>
              <input type="text" name="education" id=""><br>
              <label>Religion </label>
              <input type="text" name="religion" id=""><br>
              <label>Mother tounge </label>
              <input type="text" name="mothertounge" id=""><br>
              <label>Caste </label>
              <input type="text" name="caste" id="" placeholder=""><br>
              <label>Address </label>
              <textarea name="address" id="" placeholder="Enter permanent address" cols="30" rows="3"></textarea><br><br><br><br>
              <label>City </label>
              <input type="text" name="city" id=""><br>
              <label>State </label>
              <input type="text" name="state" id=""><br>
              <label>Country </label>
              <input type="text" name="country" id=""><br>
              <label>Profile picture </label>
              <input type="file" name="profileimage" id="" style="color: rgb(255, 255, 255);">
            


            <h2>General info</h2>
              <label>Height </label>
              <input type="number" name="height" id=""><br>
              <label>Weight </label>
              <input type="number" name="weight" id=""><br>
              <label>Body type </label>
              <input type="text" name="bodytype" id=""><br>
              <label>Complexion </label>
              <input type="text" name="complexion" id=""><br>
              <label>Blood group </label>
              <input type="text" name="bloodgroup" id=""><br>
              <label>Eating </label>
              <select name="eating" id="">
                <option value="select" style="color: black;">Select type</option>
                <option value="veg" style="color: black;">Vegatarian</option>
                <option value="nonveg" style="color: black;">Non-vegetarian</option>
              </select><br>
              <label>Smoke </label>
              <select name="smoke" id="">
                <option value="select" style="color: black;">Select</option>
                <option value="yes" style="color: black;">Yes</option>
                <option value="no" style="color: black;">No</option>
              </select><br>
              <label>Drink </label>
              <select name="drink" id="">
                <option value="select" style="color: black;">Select</option>
                <option value="yes" style="color: black;">Yes</option>
                <option value="no" style="color: black;">No</option>
              </select>
              


            <h2>Professional info</h2>
              <label>Occupation category </label>
              <select name="otype" id="">
                <option value="select" style="color: black;">Select type</option>
                <option value="business" style="color: black;">Business</option>
                <option value="employment" style="color: black;">Employment</option>
                <option value="selfemployes" style="color: black;">Self-emplpoyed</option>
              </select><br>
              <label>Occupation </label>
              <input type="text" name="occupation" id=""><br>
              <label>Income </label>
              <input type="number" name="income" id=""><br>
              <label>Office address </label>
              <textarea name="officeaddress" id="" cols="30" rows="3"></textarea><br><br><br><br>

              
            <h2>Family info</h2>
              <label>Family type </label>
              <input type="text" name="familytype" id=""><br>
              <label>Grandfather name </label>
              <input type="text" name="gfname" id=""><br>
              <label>Grandmother name </label>
              <input type="text" name="gmname" id=""><br>
              <label>Father name </label>
              <input type="text" name="fathername" id=""><br>
              <label>Mother name </label>
              <input type="text" name="mothername" id=""><br>
              <label>Father occupation </label>
              <input type="text" name="foccupation" id=""><br>
              <label>Siblings </label>
              <input type="number" name="siblings" id=""><br>
              <label>No. of members </label>
              <input type="number" name="members" id=""><br>

              <input type="submit" value="Submit and register">


              


          </form>

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
