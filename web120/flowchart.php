<!DOCTYPE html>
<html>
<head>
<title>Flowchart</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-spinner"></i>Flowchart</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <li><a href="index.php">Welcome</a></li><li><a href="big/index.php">Big</a></li><li><a href="aia.php">AIA</a></li><li><a class="selected" href="flowchart.php">Flowchart</a></li><li><a href="fp/index.php">Final Project</a></li><li><a href="contact.php">Contact Christi</a></li>    
      <!--
        <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
-->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"> Flowchart and Wireframe Document</h2>
 
 <li> <a href="https://docs.google.com/document/d/e/2PACX-1vROUxjDKHoZ1siYvvhROTYAS0CF0J5u1nONNmihQ08zzzhnSl_M6_EJdbW0i_o5wG0adOpSzuV1pX5Y/pub">Christi's Wireframe and Workflow</a></li>
</section>
<!-- END LEFT COL -->>

<!-- START RIGHT COL -->
<aside>
 <h3>Desktop and Mobile Wireframes</h3>
 <ol>
     <li><a href= "https://www.lucidchart.com/pages/examples/wireframe" target="_blank">Lucidchart</a></li>
     <li><a href= "https://mashable.com/2013/04/02/wireframing-tools-mobile/#ktF3JluruPq9" target="_blank">Mashable: Twenty Excellent Wireframing Tools for Mobile</a></li>
</ol>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2017 -  <?=date ('Y')?>  <a href="contactme.php">Christi Del Nagro</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
