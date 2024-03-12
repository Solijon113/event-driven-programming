<!DOCTYPE html>
<html>
<head>
<title>Book Online | Seven Seas Waterpark Resort</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*body {font-family: Verdana, sans-serif;}
img {vertical-align: middle; height: 610px;}
</style>
</head>

<body class="w3-light-grey">
<div class="w3-bar w3-blue w3-hide-small">
  <a href="https://www.facebook.com/sevenseaswaterpark/" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/sevenseaswaterpark/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/endless54515394?lang=cs" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">HOME</a>
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#contact" class="w3-bar-item w3-button"> CONTACT</a>
    </div>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="./assets/img/ss7.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="./assets/img/ss3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="./assets/img/ss1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="./assets/img/sss.jpg" style="width:100%">
  <div class="text"></div>
</div>
</div>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<body>
<div class="w3-container w3-blue">
<h1>Cottage Type</h1>
</div>

<form action="./personaldetails.php">
<div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="./assets/img/beach_gazebo.jpg" style="width:100%">
      <div class="w3-container w3-white">
        <h3>BEACH GAZEBO</h3>
        <h6 class="w3-opacity">₱900</h6>
        <p class="w3-large"> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">BOOK NOW</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="./assets/img/privateer.jpg" style="width:100%">
      <div class="w3-container w3-white">
        <h3>PRIVATEER</h3>
        <h6 class="w3-opacity">₱700</h6>
        <p class="w3-large"> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> </p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">BOOK NOW</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="./assets/img/islander_hut.jpg" style="width:100%">
      <div class="w3-container w3-white">
        <h3>ISLANDER HUT</h3>
        <h6 class="w3-opacity">₱600</h6>
        <p class="w3-large"> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> </p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">BOOK NOW</button>
      </div>
    </div>
  </div>
  </form>


<div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h2>About Us</h2>
      <h4>Seas the adventure & make 
unforgettable memories!</h4>
      <h6>Seven Seas Waterpark is the first world-class
pirate-themed waterpark in the Philippines. Established in November 2017, the waterpark boasts of state-of-the-art facilities with over 12 thrilling slides, a 5,000 square meter dual wave pool, 400 meter long lazy river, and many more family friendly attractions and amenities.</h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <img src="./assets/img/ss9.jpg" style="width:100%;">
    </div>
  </div>
  
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Zone 1, Road, Opol, 9016 Misamis Oriental</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +63 917 677 7667 ·</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: sevenseas@waterparkresort.com</div>
  </div>
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h2 class="w3-center">CONTACT</h2>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Zone 1, Road, Opol, 9016 Misamis Oriental</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +63 917 677 7667 ·</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: sevenseas@waterparkresort.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>

  <footer class="w3-center w3-black w3-padding-64">
    <h5>Find Us On</h5>
    <body class="w3-light-grey">
<div class="w3-bar w3-black w3-hide-small">
    <div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com/sevenseaswaterpark/" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/sevenseaswaterpark/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/endless54515394?lang=cs" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  </div>
</div>
</body>
</html> 