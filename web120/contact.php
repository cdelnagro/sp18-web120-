<!DOCTYPE html>
<html>
<head>
<title>Christi's WEB120 Contact Page</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/contactform.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-pencil-square-o"></i>Christi's Contact Page</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <li><a href="index.php">Welcome</a></li><li><a href="big/index.php">Big</a></li><li><a href="aia.php">AIA</a></li><li><a href="flowchart.php">Flowchart</a></li><li><a href="fp/index.php">Final Project</a></li><li><a class="selected" href="contact.php">Contact   Christi</a></li>  
    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
</nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Contact Christi</h2>

<?php include 'includes/simple.php';?>
<p class="clear-recaptcha"></p>
     
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h2>Get Help From Christi!</h2>
    
 <ul>
   <h3><li>Hours of availability: 9 am to 5 pm Monday thru Friday </li></h3> 
     
   <h3><li>I can help you with the following: New and Redesigned basic websites, WordPress, PHP</li></h3>
     
</ul>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2017 -  <?=date ('Y')?> <a href="contactme.php">Christi Del Nagro</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

<!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 

<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</div>
<!-- END WRAPPER -->

</body>
</html>
