<?php
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Main Page</title>
      
        <link rel="shortcut icon" type="image/png" href="img/Icon-4-phone-book.png"/>
        <link href="css/royal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="bodyborder">    
            
        <div style="width: 1000px; margin: auto;"><?php include "view/Header.php";?></a></div>
        
        <div class="maindiv">  
            <div style="width: 150px;"><?php include "view/Left-menu.php";?></a></div>
            <div class="rightmenu" style="width: 850px; ">
		

<div class="parallel" style="width:500px;float:right;margin-top:50px;">
<div class="slideshow-container" >

<div class="mySlides fade">
<div class="numbertext">1 / 4</div>
  <img src="img/clg1.png" style="width:100%">
  
</div>

<div class="mySlides fade">
<div class="numbertext">2 / 4</div>
  <img src="img/clg2.png" style="width:100%">
  
</div>

<div class="mySlides fade">
<div class="numbertext">3 / 4</div>
  <img src="img/clg3.png" style="width:100%">
  
</div>

<div class="mySlides fade">
<div class="numbertext">4 / 4</div>
  <img src="img/clg4.png" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>	
</div>
</div>
</div>	
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
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {	
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
		

		
   
        
        <div style="width: 1000px; margin: auto; margin-top:none;"> <?php include "view/Footer.php";?></div>
        
        </div>
        
    </body>
</html>