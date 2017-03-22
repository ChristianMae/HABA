<!DOCTYPE html>
<html>
<title>LENGTH CONVERSION</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
  .w3-row-padding img {margin-bottom: 12px}
  /* Set the width of the sidebar to 120px */
  .w3-sidebar {width: 120px;background: #222;}
  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
  #main {margin-left: 120px}
  /* Remove margins from "page content" on small screens */
  @media only screen and (max-width: 600px) {#main {margin-left: 0}}
  </style>
<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
   
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a> 
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
     <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span>HA-BA</h1>
    <p>Length Converter</p>
  </header>

<form style="text-align:left;" >
 To: <input name="change" type="text" id ="change" oninput ="lengthConverter(this.value)" onchange="lengthConverter(this.value)"/>
</form>

<form id="unitConversion" style="text-align:center; margin-top: -50px;">
<br>
    <select id="unit" name= "unit" onchange="lengthConverter(document.getElementById('change').value)">

      <option value="">Select unit from List...</option>

      <option value="feetToMeter">Feet to Meters</option>
      <option value="feetToInches">Feet to Inches</option>
      <option value="feetToCm">Feet to cm</option> 
      <option value="feetToYards">Feet to Yards</option>
      <option value="feetToKilometers">Feet to Kilometers</option>
      <option value="feetToMiles">Feet to Miles</option>

      <option value="meterToFeet">Meters to Feet</option>
      <option value="metersToInches">Meters to Inches</option>
        <option value="metersTocm">Meters to cm</option>
        <option value="metersToYards">Meters to Yards</option>
        <option value="metersToKilometers">Meters to Kilometers</option>
        <option value="metersToMiles">Meters to Miles</option>

        <option value="inchestoFeet">Inches to Feet</option>
        <option value="inchestoMeter">Inches to Meters</option>
        <option value="inchestocm">Inches to cm</option>
        <option value="inchestoYards">Inches to Yards</option>
        <option value="inchestoKilometers">Inches to Kilometers</option>
        <option value="inchestoMiles">Inches to Miles</option>

        <option value="cmToFeet">cm to Feet</option>
        <option value="cmToMeter">cm to Meters</option>
        <option value="cmToInches">cm <table></table>o Inches</option>
        <option value="cmToYards">cm to Yards</option>
        <option value="cmToKilometers">cm to Kilometers</option>
        <option value="cmToMiles">cm to Miles</option>

        <option value="yardsToFeet">Yards to Feet</option>
        <option value="yardsToMeter">Yards to Meters</option>
        <option value="yardsToInches">Yards to Inches</option>
        <option value="yardsTocm">Yards to cm</option>
        <option value="yardsToKilometers">Yards to Kilometers</option>
        <option value="yardsToMiles">Yards to Miles</option>

        <option value="kilometersToFeet">Kilometers to Feet</option>
        <option value="kilometersToMeters">Kilometers to Meters</option>
        <option value="kilometersToInches">Kilometers to Inches</option>
        <option value="kilometersTocm">Kilometers to cm</option>
        <option value="kilometersToYards">Kilometers to Yards</option>
        <option value="kilometersToMiles">Kilometers to Miles</option>

        <option value="milesToFeet">Miles to Feet</option>
        <option value="milesToMeters">Miles to Meters</option>
        <option value="milesToInches">Miles to Inches</option>
        <option value="milesTocm">Miles to cm</option>
        <option value="milesToYards">Miles to Yards</option>
        <option value="milesToKilometers">Miles to Kilometers</option>

    </select>
    <br>
    <br>
   
</form>
<form style="text-align: right; margin-top: -50px;" >
 From: <input name="unitConvert" type="text" id="unitConvert" align="right" readonly/>
</form>

</div>

<div class="parallax"></div>

<script>
var units = {
    'feetToMeter': 0.3048,   
    'feetToInches': 12,
    'feetToCm': 30.48,
    'feetToYards': 0.33333,
    'feetToKilometers': 0.0003048,
    'feetToMiles': 0.00018939,

    'meterToFeet': 3.2808,
    'metersToInches': 39.370,
    'metersTocm': 100,    
    'metersToYards': 1.0936,
    'metersToKilometers': 0.001,
    'metersToMiles': 0.00062137,

    'inchestoFeet': 0.083333,
    'inchestoMeter': 0.0254,
    'inchestocm': 2.54,
    'inchestoYards': 0.027778,
    'inchestoKilometers':0.0000254,
    'inchestoMiles': 0.000015783,

    'cmToFeet': 0.032808,  
    'cmToMeter': 0.01,
    'cmToInches': 0.39370,
    'cmToYards': 0.010936,
    'cmToKilometers': 0.00001,
    'cmToMiles': 0.0000062137,

    'yardsToFeet': 3,
    'yardsToMeter': 0.9144,
    'yardsToInches': 36, 
    'yardsTocm': 91.44,
    'yardsToKilometers': 0.000914,
    'yardsToMiles': 0.00056818,

    'kilometersToFeet': 3280.8,
    'kilometersToMeters': 1000,
    'kilometersToInches': 39370,   
    'kilometersTocm': 100000,   
    'kilometersToYards': 1093.6,
    'kilometersToMiles':0.62137,

    'milesToFeet': 5280,
    'milesToMeters': 1609.35,
    'milesToInches': 63360,
    'milesTocm': 160934.7088,
    'milesToYards': 1760,
    'milesToKilometers': 1.6093
    };
    function lengthConverter(valNum) {
        var unitSelect = document.getElementById('unit');
        var num = parseFloat(valNum);
        var multiplier = units[unitSelect.value];
        var result = num*multiplier;
        document.getElementById('unitConvert').value = result;
    };
</script>


  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p>
  HA-BA is a Length Converter Website made with regards to the completion of our Project in Cloud Computing as Software as a Service. This is to be deployed on an internet hosting service, like Microsoft Azure, Heroku and etc. One of the best option to use in deploying my site is Heroku. HA-BA is a unit converter specified only to conversion of length, to convert length from one unit to another: multiply by the correct number. This length converter Website only offers limited unit conversion as of now, like cm to feet, yard to miles, kilometer to meter, inch to yards and etc. 
  </p>

  <br>
  <p>STEP 1:  First Choose the units to be converted (you can see that in the drop down box in the middle)</p>

  <p>
      STEP2:  Input the value to be converted. Wait for a minute and the result will appear at the 
  </p>
  </div>
  <!-- End About Section -->
  </div>
  
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Davao City, Philippines</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 09759722522</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: Christianmae041997@gmail.com</p>
    </div>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-text-indigo"><a href="https://www.facebook.com/christianmae.mendez"></a></i>
    <i class="fa fa-twitter w3-hover-text-light-blue"><a href="https://twitter.com/Maayuung"></a></i>
    <p class="w3-medium">HA-BA © Copyright 2017 </a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
