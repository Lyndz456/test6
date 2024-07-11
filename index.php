<!DOCTYPE html><!--This displays the face of microsoft -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft</title><!--This is the name of the tab -->
    
    <?php include_once("templates/nav.php");?> <!-- to access similar content-->
    <?php require_once ("templates/nav.php")?> 

    <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/footernav.css">
  
</head>
<body>

  
   <!--Require once and include once are similar. The difference comes when yan error occurs in how you type them-->
    <!--In require once, when an error occure, it displays a critical error and refuses to display anything past that line . But in include once, it just displays an error and proceeds to display the content following-->


    <!--<a href="homepage.html">Home</a> <a href="index.html">About Us</a>   <a href="contacts.html">Contact Us</a> This shows the pages that one can visit while on this page and provides a way of accessing them-->


<!-- Slideshow container -->



<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  
  <div class="numbertext">1 / 3</div>
    <img src="images.images/microsoft.jpg" style="width:100% " >
    <div class="text">Innovation</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images.images/microsoft.jpeg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images.images/download.jpeg" style="width:100%">
    <div class="text">Founder</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
       
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

        <?php include_once ("templates/footer.php")?>

    </body> <!--Shows the end of the body tag-->
</html>