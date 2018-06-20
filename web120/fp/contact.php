<!DOCTYPE html>
<html lang=en>
    <head>
    <title>Contact Our Healers</title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <link rel="stylesheet" href="css/nav.css" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/contactform.css" />
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   		<script src="js/script.js"></script>
    </head>
<body>
<!-- START WRAPPER -->
<div class="wrapper">
    
<header>
      <h1><a href="index.php"><i class="logo fa fa-heart"></i>Contact Our Healers</a></h1>
      <div class="wrapper">
<nav>
<ul class="topnav" id="myTopnav">
	<li><a class="selected" href="index.php">Home</a></li><li><a href="aboutus.php">About Us</a></li><li><a href="testimonials.php">Testimonials</a></li><li><a href="video.php">Video</a></li><li><a href="contact.php">Contact Our Healers</a></li>	
	<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>      
</ul>
</nav>

<!-- START LEFT COL -->
    <section>
     <h2 class="pageID">Prospective Client Form</h2>
     <!-- END header.php include here! -->
    	<!-- START HTML FORM -->
	<form action="index.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			How Did You Hear About Us?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="In Office Treatment" tabindex="40" /> In Office Treatment <br />
			<input type="checkbox" name="Interested_In[]" value="Home Treatment" /> Home Treatment <br />
			<input type="checkbox" name="Interested_In[]" value="Long Distance Treatment" /> Long Distance Treatment<br />
			<input type="checkbox" name="Interested_In[]" value="Referrals" /> Referrals<br />
			<input type="checkbox" name="Interested_In[]" value="Free Catnip Toy" /> Free Cat Toy<br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>

    <p></p>
    </section>
    <!-- END LEFT COL -->
    
    <!-- START Right Column -->
<aside>
<h5>Disclaimer</h5>

    <p><em>Reiki for Felines provides this site as a service to the public.</em></p>
    
    <p><em>Although the Reiki for Felines Web site may include links providing direct access to other Internet resources, including Web sites, Reiki for Felines is not responsible for the accuracy or content of information contained in these sites.</em></p>
    
    <p><em>Links from Reiki for Felines to third-party sites do not constitute an endorsement by Reiki for Felines of the parties or their products and services. The appearance on the Web site of advertisements and product or service information does not constitute an endorsement by Reiki for Felines, and Reiki for Felines has not investigated the claims made by any advertiser. Product information is based solely on material received from suppliers.</em></p>
    
</aside>
   <!-- END Right Column -->

    
    <!-- START Footer -->
    <footer>
      <p><small>&copy; 2017 - 2018 by <a href="contactme.php"> Christi Del Nagro</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/
      
      -validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
    <!-- END Footer --> 
    
</div>
<!-- END WRAPPER -->



