<!DOCTYPE html>
<html lang="en">
<head>
<title>Book Online | Barbershop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <a href="#sample" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HAIRCUT</a>
    <!-- <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#sample" class="w3-bar-item w3-button">HAIRCUT</a>
        <a href="#contact" class="w3-bar-item w3-button">CONTACT</a>
        <a href="#about" class="w3-bar-item w3-button">ABOUT US</a>
      </div>
    </div> -->
  </div>
</div>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="./assets/img/barbershop4.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3><strong>YOUR ELEVATED GROOMING EXPERIENCE.</strong></h3>
      <p><b>This isn’t just any Men’s Grooming or Barbershop. We’re classy, upbeat, fun and provide amazing service that will make you feel like you are a guest in our home.</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./assets/img/barbershop5.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>YOUR ELEVATED GROOMING EXPERIENCE.</h3>
      <p><b>This isn’t just any Men’s Grooming or Barbershop. We’re classy, upbeat, fun and provide amazing service that will make you feel like you are a guest in our home.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./assets/img/barbershop3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>YOUR ELEVATED GROOMING EXPERIENCE.</h3>
      <p><b>This isn’t just any Men’s Grooming or Barbershop. We’re classy, upbeat, fun and provide amazing service that will make you feel like you are a guest in our home.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./assets/img/barbershop2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>YOUR ELEVATED GROOMING EXPERIENCE.</h3>
      <p><b>This isn’t just any Men’s Grooming or Barbershop. We’re classy, upbeat, fun and provide amazing service that will make you feel like you are a guest in our home.</b></p>    
    </div>
  </div>


  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="about">
    <h2 class="w3-wide">CUSTOMER SERVICE DONE RIGHT</h2>
    <p class="w3-opacity"><i>About Us</i></p>
    <p class="w3-justify">Henley’s Gentlemen’s Grooming. As comfortable as your favorite shirt. More country club than night club. As warm and inviting as a neat glass of whiskey. A bit of the past, present and future all wrapped up into one amazing experience. As the old English proverb states, necessity is the mother of invention. We didn’t like much of what we saw in the men’s hair care arena, so we decided to build our own place so we could do things the way we thought they should be done.
At Henley’s our aim is to give our clients the absolute highest possible quality of service without the pretentiousness. Pampering with a masculine flare. It’s true that we did not invent the Gentlemen’s Grooming industry. Though once you’ve experienced our brand of service, you may swear that we did.
Give us One Hour of Your Time and Come Relax with Us.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <img src="./assets/img/z.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:65%">
      </div>
      <div class="w3-third">
        <img src="./assets/img/b.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:50%">
      </div>
      <div class="w3-third">
        <img src="./assets/img/c.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>


  <div class="w3-black" id="sample">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center" style="color:gold">SAMPLE HAIRCUT</h2>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="./assets/img/1.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Fade Buzz Cut</b></p>
            <p class="w3-opacity">A closely cropped buzz cut gradually transitions into a softer, blended fade, creating a seamless and effortlessly stylish look.</p>
            <p>₱320</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">BOOK NOW</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="./assets/img/5.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>High Fade</b></p>
            <p class="w3-opacity">A high fade sharply tapers the hair on the sides and back, accentuating the length and volume on top for a bold and contemporary style.</p>
            <p>₱450</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">BOOK NOW</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="./assets/img/6.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Low Taper Fade</b></p>
            <p class="w3-opacity">A low taper fade gently decreases the length of hair around the neckline resulting in a subtle yet polished look with a gradual transition.</p>
            <p>₱370</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">BOOK NOW</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Personal Details</h2>
      </header>
      <div class="w3-container">
        <p><label> Name :</label></p>
        <input class="w3-input w3-border" required type="text" placeholder="Enter name..">
        <p><label> Contact :</label></p>
        <input class="w3-input w3-border" required type="text" placeholder="+63..">
        <p><label> Email :</label></p>
        <input class="w3-input w3-border" required type="text" placeholder="Enter email..">
        <div class="col-md-6 mt-2">
        <p><label>Date to use : </label></p>
            <input class="w3-input w3-border" type="datetime-local">
          </div>
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">Submit <i class="fa fa-check"></i></button>
        <!-- <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p> -->
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Have any questions? Get in touch, we are ready help.</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="./assets/img/barbershop6.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-black w3-xlarge">
  <h5 style="color:gold">Find Us On</h5>
  <i class="fa fa-facebook-official w3-hover-opacity" style="color:gold"></i>
  <i class="fa fa-instagram w3-hover-opacity" style="color:gold"></i>
  <i class="fa fa-twitter w3-hover-opacity" style="color:gold"></i>
  <i class="fa fa-youtube w3-hover-opacity" style="color:gold"></i>
</footer>

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

</body>
</html>