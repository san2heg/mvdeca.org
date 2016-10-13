<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		header("Location: signin.php");
	}
	else {
		echo "
			<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
			<html>
			<head>
				    <meta charset=\"utf-8\">
		    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
		    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		    <meta name=\"description\" content=\"\">
		    <meta name=\"author\" content=\"\">
		    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">
		    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
		    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,200,400,300,500,600,700,800' rel='stylesheet' type='text/css'>
		
		    <title>Monta Vista DECA</title>
		
		    <!-- Bootstrap core CSS -->
		    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
		
		    <!-- Custom styles for this template -->
		    <link href=\"css/style.css\" rel=\"stylesheet\">
		    <link href=\"css/sticky-footer.css\" rel=\"stylesheet\">
		    <link href=\"css/jquery.bxslider.css\" rel=\"stylesheet\">
		    <link href=\"css/push-menu.css\" rel=\"stylesheet\">
		    <link href=\"css/bootstrap-select.css\" rel=\"stylesheet\">
		    <link href=\"css/competitions.css\" rel=\"stylesheet\">
		    <link href=\"css/profile.css\" rel = \"stylesheet\">
		    <link href=\"css/signin.css\" rel = \"stylesheet\">
		    <!--<link href=\"dist/css/base.css\" rel=\"stylesheet\">-->	    <!-- expand/collapse function -->
		
		
			</head>
		
			<body onLoad=\"collapseAll()\" style=\"min-height: 1400px\">
		
		    <!-- NAVIGATION -->
		
		    <nav class=\"menu slide-menu-left\">
		      <ul>
		
		          <li><button class=\"nav-toggler close-menu\">&larr; Close</button></li>
		          <li><a href=\"#\">HUB</a></li>
		          <li><a href=\"#\">Calendar</a></li>
		          <li><a href=\"#\">Events</a></li>
		          <li><a href=\"#\">Resources</a></li>
		      </ul>
		    </nav><!-- /slide menu left -->
		
		    <!-- Fixed navbar -->
			";
			include 'navbar.php';
		echo "
		    <!-- END NAVIGATION -->
		    
		    <!--<div id = \"top-shadow\"></div>-->
		
		    <!--START CONTAINER (PAGE ELEMENTS)-->
		    <!--  Put everything inside #container div. 
		          Use section tag with corresponding id for each parallax picture.
		            Adjust data-speed for scrolling speed adjustment (smaller = faster)
		            Be sure each id is unique and there is a corresponding id in the css.
		          Use div tag with page_component class for creating page blocks for content.
		            Always put a div between two sections so the line between two consecutive parallax pictures cannot be seen.
		    -->
		
		    <div class = \"container\">
		      
		      <!-- id for each div will be different to account for different heights. Class will always, however, be page_component -->
		
		      <section id=\"header-slide\" style=\"  background: url(img/signin.jpg) 50% 0 repeat fixed; background-size: auto 750px;\" data-type=\"background\" data-speed=\"6\">
		        <h2 class = \"header-slide-text\"style = \"width: 420px\">MY PROFILE</h2>
		      </section>
		      <div id = 'destination1' class = 'subhead'>". $_SESSION['name'] ."&nbsp". $_SESSION['lastname'] ."'s Profile</div>
		      <hr/>
		      	";
		      	if ($_SESSION['verified'] === "\r\nUNVERIFIED") {
		      	echo"
			    <div style = 'margin: 0 auto; text-align:center; color:red; width: 400px;'>
			    	It looks like your account has not yet been verified. Please show an electronic or paper version of your registration receipt to an MVDECA officer to verify your account.<br><br>
			    </div>";
			    }
			    echo"
		      <div class = 'containingdiv' style = 'width: 600px; margin: 0 auto;'>
			      <div class = 'profile-section'>
			      	<div class = 'profile-subhead'>PERSONAL INFO</div>
			      	<table class = 'profile-table'>
			      		<tr>
			      			<td class = 'profiletb-row'>FIRST NAME</td>
			      			<td class = 'profiletb-row'>". $_SESSION['name'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>LAST NAME</td>
			      			<td class = 'profiletb-row'>". $_SESSION['lastname'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>STUDENT ID</td>
			      			<td class = 'profiletb-row'>". $_SESSION['studentid'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>CELLPHONE</td>
			      			<td class = 'profiletb-row'>". $_SESSION['cellphone'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>HOME PHONE</td>
			      			<td class = 'profiletb-row'>". $_SESSION['homephone'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>T-SHIRT SIZE</td>
			      			<td class = 'profiletb-row'>". $_SESSION['tshirtsize'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>CAN YOU TEXT?</td>
			      			<td class = 'profiletb-row'>". $_SESSION['cantext'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>ADDRESS</td>
			      			<td class = 'profiletb-row'>". $_SESSION['address'] .", ". $_SESSION['city'] ." ". $_SESSION['state'] ." ". $_SESSION['zip'] ."</td>
			      		</tr>
			      	</table>
			      </div>
			      <div class = 'profile-section'>
			      	<div class = 'profile-subhead'>PARENT INFO</div>
			      	<table class = 'profile-table'>
			      		<tr>
			      			<td class = 'profiletb-row'>PARENT'S FIRST NAME</td>
			      			<td class = 'profiletb-row'>". $_SESSION['parent_firstname'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>PARENT'S LAST NAME</td>
			      			<td class = 'profiletb-row'>". $_SESSION['parent_lastname'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>PARENT RELATION</td>
			      			<td class = 'profiletb-row'>". $_SESSION['parent_relation'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>PARENT'S EMAIL</td>
			      			<td class = 'profiletb-row'>". $_SESSION['parent_email'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>PARENT'S CELLPHONE</td>
			      			<td class = 'profiletb-row'>". $_SESSION['parent_cellphone'] ."</td>
			      		</tr>
			      		<tr>
			      			<td class = 'profiletb-row'>WANT UPDATES?</td>
			      			<td class = 'profiletb-row'>". $_SESSION['wantupdates'] ."</td>
			      		</tr>
			      	</table>
			      </div>
			    </div>
			    <div style = 'text-align: center;'>
			    	See something wrong? Please contact <a href='mailto:dot@mvdeca.org'>dot@mvdeca.org</a>.
			    </div>
		    </div>
		
		    <!-- FOOTER -->
		
		    <!-- FOOTER -->
		    ";
		    include 'footer.html';
		  echo "
		    <!-- Bootstrap core JavaScript
		    ================================================== -->
		    <!-- Placed at the end of the document so the pages load faster -->
		    <script src=\"js/classie.js\"></script>
		    <script src=\"js/nav.js\"></script>
		
		    <script type=\"text/javascript\">
		      var _gaq = _gaq || [];
		      _gaq.push(['_setAccount', 'UA-34160351-1']);
		      _gaq.push(['_trackPageview']);
		      (function() {
		        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		      })();
		    </script>
		    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
		    <script src=\"js/bootstrap.min.js\"></script>
		    <!--<script src = \"dist/js/scroll-shadow.js\" type=\"text/javascript\"></script>-->
		    <script src = \"js/scroll_parallax.js\" type=\"text/javascript\"></script>
		    <script src = \"js/smooth-scroll.js\" type=\"text/javascript\"></script>
		    <script src = \"js/parallax.js\" type=\"text/javascript\"></script>
		    <script src = \"js/tooltip.js\" type=\"text/javascript\"></script>
		    <script type=\"text/javascript\">
		      var scene = document.getElementById('scene');
		      var parallax = new Parallax(scene);
		    </script>
		    <script src=\"js/jquery.bxslider.js\"></script>
		    <script type=\"text/javascript\">
		      $(document).ready(function(){
		        $('.bxslider').bxSlider();
		      });
		    </script>
		    <script src = \"js/anchor-scroll.js\" type=\"text/javascript\"></script>
		    <script src=\"js/parallax.js\"></script>
		    <!--<script type = \"text/javascript\">
		    	
				$(window).load(function(){
				function fixDiv() {
				    var $div = $(\"#navwrap\");
				    if ($(window).scrollTop() > $div.data(\"top\")-80) { 
				        $('#navwrap').css({'position': 'fixed', 'top': '80px', 'width': '100%', 'margin-top': '0px'}); 
				    }
				    else {
				        $('#navwrap').css({'position': 'absolute', 'top': 'auto', 'width': '100%', 'margin-top': '510px'});
				    }
				}
				
				$(\"#navwrap\").data(\"top\", $(\"#navwrap\").offset().top); // set original position on load
				$(window).scroll(fixDiv);
				});
		
			</script>
			<script>
				$(window).resize(function() {
					$(\"#navwrap\").data(\"top\", $(\"#navwrap\").offset().top); // set original position on load
				});
			</script>-->
		    </body>
			</html>
		";
	}
?>