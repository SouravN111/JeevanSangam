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
    <link rel="stylesheet" href="matchmaking_style.css" />
  </head>

  <body>
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

        <div class="container">
          
          <form action="search_result.php" method="post" id="form">
            <h2>Select your preferences</h2>

             
              <label>Search for </label>
              <select name="searchfor" id="">
                <option value="groom">Groom</option>
                <option value="bride">Bride</option>
              </select><br>
              <label>Age </label>
              <select name="age" id="select-age-max">
                <option value="axage">max age</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
                <option value="61">61</option>
                <option value="62">62</option>
                <option value="63">63</option>
                <option value="64">64</option>
                <option value="65">65</option>
                <option value="66">66</option>
                <option value="67">67</option>
                <option value="68">68</option>
                <option value="69">69</option>
                <option value="70">70</option>
              </select>
              <select name="age" id="select-age-min">
                <option value="minage">min age</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
                <option value="61">61</option>
                <option value="62">62</option>
                <option value="63">63</option>
                <option value="64">64</option>
                <option value="65">65</option>
                <option value="66">66</option>
                <option value="67">67</option>
                <option value="68">68</option>
                <option value="69">69</option>
                <option value="70">70</option>
              </select><br>

              <label>Height </label>
              <select name="height" id="select-height-max">
                <option value="maxheight">max height</option>
                <option value="4.5">4.5 ft</option>
                <option value="4.6">4.6 ft</option>
                <option value="4.7">4.7 ft</option>
                <option value="4.8">4.8 ft</option>
                <option value="4.9">4.9 ft</option>
                <option value="5.0">5.0 ft</option>
                <option value="5.1">5.1 ft</option>
                <option value="5.2">5.2 ft</option>
                <option value="5.3">5.3 ft</option>
                <option value="5.4">5.4 ft</option>
                <option value="5.5">5.5 ft</option>
                <option value="5.6">5.6 ft</option>
                <option value="5.7">5.7 ft</option>
                <option value="5.8">5.8 ft</option>
                <option value="5.9">5.9 ft</option>
                <option value="6.0">6.0 ft</option>
                <option value="6.1">6.1 ft</option>
                <option value="6.2">6.2 ft</option>
                <option value="6.3">6.3 ft</option>
                <option value="6.4">6.4 ft</option>
                <option value="6.5">6.5 ft</option>
                <option value="6.6">6.6 ft</option>
                <option value="6.7">6.7 ft</option>
                <option value="6.8">6.8 ft</option>
                <option value="6.9">6.9 ft</option>
                <option value="7.0">7.0 ft</option>
            </select>
            <select name="height" id="select-height-min">
              <option value="minheight">min height</option>
              <option value="4.0">4.0 ft</option>
              <option value="4.1">4.1 ft</option>
              <option value="4.2">4.2 ft</option>
              <option value="4.3">4.3 ft</option>
              <option value="4.4">4.4 ft</option>
              <option value="4.5">4.5 ft</option>
              <option value="4.6">4.6 ft</option>
              <option value="4.7">4.7 ft</option>
              <option value="4.8">4.8 ft</option>
              <option value="4.9">4.9 ft</option>
              <option value="5.0">5.0 ft</option>
              <option value="5.1">5.1 ft</option>
              <option value="5.2">5.2 ft</option>
              <option value="5.3">5.3 ft</option>
              <option value="5.4">5.4 ft</option>
              <option value="5.5">5.5 ft</option>
              <option value="5.6">5.6 ft</option>
              <option value="5.7">5.7 ft</option>
              <option value="5.8">5.8 ft</option>
              <option value="5.9">5.9 ft</option>
              <option value="6.0">6.0 ft</option>
              <option value="6.1">6.1 ft</option>
              <option value="6.2">6.2 ft</option>
              <option value="6.3">6.3 ft</option>
              <option value="6.4">6.4 ft</option>
              <option value="6.5">6.5 ft</option>
              <option value="6.6">6.6 ft</option>
              <option value="6.7">6.7 ft</option>
              <option value="6.8">6.8 ft</option>
              <option value="6.9">6.9 ft</option>
              <option value="7.0">7.0 ft</option>
          </select><br>

              <label>Religion </label>
              <select name="religion" id="">
                <option value="anyreligion">Any religion</option>
                <option value="hindu">Hindu</option>
                <option value="muslim">Muslim</option>
                <option value="sikh">Sikh</option>
                <option value="christian">Christian</option>
                <option value="parsi">Parsi</option>
                <option value="buddhist">Buddhist</option>
                <option value="jain">Jain</option>
                <option value="jewish">Jewish</option>
              </select><br>

              <label>Mother tounge </label>
              <select name="mothertounge" id="">
                <option value="anylanguage">Any language</option>
                <option value="hindi">Hindi</option>
                <option value="haryanvi">Haryanvi</option>
                <option value="himachali">Himachali</option>
                <option value="punjabi">Punjabi</option>
                <option value="kashmiri">Kashmiri</option>
                <option value="sindhi">Sindhi</option>
                <option value="english">English</option>
                <option value="urdu">Urdu</option>
                <option value="marathi">Marathi</option>
                <option value="gujarati">Gujarati</option>
                <option value="kutchi">Kutchi</option>
                <option value="konkani">Konkani</option>
                <option value="tamil">Tamil</option>
                <option value="telugu">Telugu</option>
                <option value="kannada">Kannada</option>
                <option value="malyalam">Malyalam</option>
                <option value="tulu">tulu</option>
                <option value="bengali">Bengali</option>
                <option value="oriya">Oriya</option>
                <option value="assamese">Assamese</option>
                <option value="sikkim/nepali">Sikkim/Nepali</option>
              </select><br>
              
              <label>State </label>
              <select name="state" id="state">
                  <option value="Anystate">Any state</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                </select><br>

                <label>Profession </label>
                <select name="profession">
                  <option value="anyprofession">Any profession</option>
                  <option value="accountant">Accountant</option>
                  <option value="actor">Actor</option>
                  <option value="architect">Architect</option>
                  <option value="artist">Artist</option>
                  <option value="astronomer">Astronomer</option>
                  <option value="biologist">Biologist</option>
                  <option value="chef">Chef</option>
                  <option value="chemist">Chemist</option>
                  <option value="civil-engineer">Civil Engineer</option>
                  <option value="data-scientist">Data Scientist</option>
                  <option value="developer">Developer</option>
                  <option value="doctor">Doctor</option>
                  <option value="electrician">Electrician</option>
                  <option value="entrepreneur">Entrepreneur</option>
                  <option value="fashion-designer">Fashion Designer</option>
                  <option value="firefighter">Firefighter</option>
                  <option value="flight-attendant">Flight Attendant</option>
                  <option value="gardener">Gardener</option>
                  <option value="graphic-designer">Graphic Designer</option>
                  <option value="journalist">Journalist</option>
                  <option value="lawyer">Lawyer</option>
                  <option value="marine-biologist">Marine Biologist</option>
                  <option value="mechanic">Mechanic</option>
                  <option value="musician">Musician</option>
                  <option value="nurse">Nurse</option>
                  <option value="paramedic">Paramedic</option>
                  <option value="pharmacist">Pharmacist</option>
                  <option value="phlebotomist">Phlebotomist</option>
                  <option value="physical-therapist">Physical Therapist</option>
                  <option value="physicist">Physicist</option>
                  <option value="pilot">Pilot</option>
                  <option value="police-officer">Police Officer</option>
                  <option value="psychologist">Psychologist</option>
                  <option value="scientist">Scientist</option>
                  <option value="software-engineer">Software Engineer</option>
                  <option value="social-worker">Social Worker</option>
                  <option value="teacher">Teacher</option>
                  <option value="veterinarian">Veterinarian</option>
                  <option value="veterinary-technician">Veterinary Technician</option>
                  <option value="web-designer">Web Designer</option>
                  <option value="writer">Writer</option>
              </select><br>

                <label>Income</label>
                  <select name="income" id="">
                    <option value="minincome">min income</option>
                    <option value="50k">More than 50,000</option>
                    <option value="100k">More than 1,00,000</option>
                    <option value="200k">More than 2,00,000</option>
                    <option value="500k">More than 5,00,000</option>
                    <option value="1m">More than 10,00,000</option>
                    <option value="2.5m">More than 25,00,000</option>
                  </select><br>

                
              

              <input type="submit" value="SEARCH">


              


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
