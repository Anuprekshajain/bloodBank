<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Blood Bank</title>
  <head>
<link rel="stylesheet" text="text/css" href="assets/css/main.css">
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="page-header">
  <h1>Online Blood Bank</h1></div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#about">About us</a></li>
      <li><a href="../resources/donors/search.php">Search Donor</a></li>
      <li><a href="../resources/donors/donate.php">Register as donor</a></li>
      <li><a href="#tips">Blood donation tips</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">


      <?php
session_start();
require "../resources/config/connect.php";
// Check if user is logged in using the session variable
if(isset($_SESSION['logged_in'])){
  if($_SESSION['logged_in']==1){?>
       <li><a href="../resources/donors/myprofile.php" ><span class="glyphicon glyphicon-user"></span> Edit profile</a>
      </li>
      <li><a href="../resources/user_registration/logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li></span><?php
    }
  }
error_reporting(0);
  if($_SESSION['logged_in']==false){
    ?>
      <li><a href="../resources/user_registration/index.php" ><span class="glyphicon glyphicon-user"></span> Sign Up</a>
      </li>
      <li><a href="../resources/user_registration/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
   <?php

}
    ?>
    </ul>
  </div>
</nav>
  <div class="container-fluid">
    <div class="slideshow-container">

<div class="mySlides fade">
  <img src="assets/img/b4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="assets/img/b3.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="assets/img/b15.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="assets/img/b8.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="assets/img/b9.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

  <div id="about"><div class="page-header">
  <h1>About us</h1></div>
  <div class="row">
  <div class="col-sm-8">
    <div class="card">
  <p>'Blood Bank' is a small initiative to bridge the gap between blood donors and receipients . Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.<br>

Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p></div></div>
<div class="col-sm-4">
<img class="img-responsive" style="padding-right: 5px;" src="assets/img/b1.jpg" alt="blood bank" width=420px height=500px>
</div>
</div>
</div>
<div id="tips">
<div class="page-header">
  <h1>Blood donation tips</h1></div>
   <button class="accordion">Breaking the myths</button>
<div class="panel">
  <p>Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:<br>
<ul>
<li>You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.</li>
<li>A few questions will be asked to determine your health status (general questions on health, donation history <li>etc). Usually you will be asked to fill out a short form.
<li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.</li>
<li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.</li>
<li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.</li>
<li>Blood will be separated into components within eight hours of donation
The blood will then be taken to the laboratory for testing.</li>
<li>Once found safe, it will be kept in special storage and released when required.</li>
<li>The blood is now ready to be taken to the hospital, to save lives.</li></ul></p>
</div>
 <button class="accordion">Blood Groups</button>
<div class="panel">
<p>Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.<br>
<br>
Most humans are in the ABO blood group. The ABO group has four categories namely
1) A group 2) B group 3) O group and 4) AB group
In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.<br>
<br>
Thus blood group of any human being will mainly fall in any one of the following groups.
A positive or A negative<br>
B positive or B negative<br>
O positive or O negative<br>
AB positive or AB negative.</p></div>
 <button class="accordion">Universal donors and recipients</button>
<div class="panel">
<p>The most common blood type is O, followed by type A.<br>
<br>
Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.<br>
<br>
However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</p>
</div>
 <button class="accordion">DO donate blood, only if you satisfy all of the following conditions</button>
<div class="panel">
<p><ul><li>You are between age group of 18-60 years.</li>
<li>Your weight is 45 kgs or more.</li>
<li>Your hemoglobin is 12.5 gm% minimum.</li>
<li>Your last blood donation was 3 or more months earlier.</li>
<li>You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</li></ul></p>
</div>
 <button class="accordion">DO NOT donate blood, if you have any of the following conditions</button>
<div class="panel">
<p><ul><li>Cold / fever in the past 1 week.</li>
<li>Under treatment with antibiotics or any other medication.</li>
<li>Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc.</li>
<li>Major surgery in the last 6 months.</li>
<li>Vaccination in the last 24 hours.</li>
<li>Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year.</li>
<li>Had fainting attacks during last donation.</li>
<li>Have regularly received treatment with blood products.</li>
<li>Shared a needle to inject drugs/ have history of drug addiction.</li>
<li>Had sexual relations with different partners or with a high risk individual.</li>
<li>Been tested positive for antibodies to HIV.</li></ul></p>
</div>
 <button class="accordion">A healthy donor</button>
<div class="panel">
<p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.<br>
1. Low fat foods<br>
2. Iron rich foods
</p>
</div>
<button class="accordion">Blood bank</button>
<div class="panel">
<p>A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice.
</p>
</div>
<button class="accordion">About blood donation</button>
<div class="panel">
<p>Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood.
</p>
</div>
<button class="accordion">World blood donor day</button>
<div class="panel">
<p>The day is celebrated to raise awareness globally about the need for regular and voluntary blood donation.
</p>
</div>
</div>
</div>
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
// Get the modal

</script>
  </body>
  </html>
