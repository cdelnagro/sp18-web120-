<!DOCTYPE html>
<html>
<head>
<title>Christi's SCC WEB120 Portal</title>
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
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Christi's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <li><a class="selected" href="index.php">Bienvenue!</a></li><li><a href="big/index.php">Big</a></li><li><a href="aia.php">AIA</a></li><li><a href="flowchart.php">Flowchart</a></li><li><a href="fp/index.php">Final Project</a></li><li><a href="contact.php">Contact Christi</a></li>    

        <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
-->


      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>


<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Bienvenue!</h2><!-- END header.php include here! -->

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
	<img src="images/desktop.jpg" class="desktop" alt="Bastet and Isi on Desktop Screen!"/>

	<img src="images/phone.jpg" class="phone" alt="Isi on Phone Screen!" />
 
    <p>I moved to Seattle six years ago from rural Skagit County (Clearlake-Sedro Woolley area).</p>
    <p>I raised my family in that area as well as running a successful masonry construction business for twenty years.</p>
    <p>In 2007, I decided to go back to school to gain new skills. I found myself attracted to the legal field and have been a working paralegal ever since.</p>
    <p>In the summer of 2017, I started hearing ads about a coding boot camp in Seattle. I attended a one day class and after that one day session, I wanted to learn more so I enrolled 
    at Seattle Central College.</p>
	<p>I am now in my second quarter of a Web Development course at Seattle Central.</p> 
    <p>This is a brand new field of study for me and it's challenging. Part of the challenge comes from maintaining my full work schedule at the same time as continuing my studies. I find learning to become a web dev to be creative and fun!</p>    
    <p>I am now waiting for the Universe to reveal to me what new role I will play once I complete my course work.</p> 
    <p>No matter what, I know I possess a unique blend of skills that will easily 
    transfer over to this new field.</p>
</section>
	
	<!-- START RIGHT COL -->
<aside>
	<h2>Les Chats!</h2>
	<img src="images/tablet.jpg" class="tablet" alt="Bastet on Tablet Screen!" />
	
	<p>My hobbies include reading, visiting the many beautiful sites of Seattle, going to movies, visiting museums and of course, I love all the parks surrounded by water!</p>
	<p>What takes a lot of my free time when I am home, is my cats, Bastet and Isi-Asia. They are siblings but look nothing alike. They are very demanding little creatures. I totally love them, they are my fur babies!</p>
	<p>Bastet and Isi are indoor cats. Because of that, I have a strong desire to buy hefty dog harnesses, strap them in and take them outside for walks. Sadly, the beasts wormed their way out of the the last set of harnesses I purchased for them in the past.</p> 
	<p>I recently introduced Isi and Bastet to cat videos on YouTube. <em>They are so funny to watch!</em> Les Chats look a the videos very intently following all the movements of the other cats trying to interact with the cats in the video which are elusive and can never be found!</p> 
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
