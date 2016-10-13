	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	<head>
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,200,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,200,400,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <title>Monta Vista DECA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/push-menu.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <link href="css/competitions.css" rel="stylesheet">
    <link href="css/community.css" rel = "stylesheet">
    <link href="css/signin.css" rel = "stylesheet">
    <!--<link href="dist/css/base.css" rel="stylesheet">-->	    <!-- expand/collapse function -->


	</head>

	<body onLoad="collapseAll()" style="min-height: 840px">

    <!-- NAVIGATION -->

    <nav class="menu slide-menu-left">
      <ul>

          <li><button class="nav-toggler close-menu">&larr; Close</button></li>
          <li><a href="#">HUB</a></li>
          <li><a href="#">Calendar</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Resources</a></li>
      </ul>
    </nav><!-- /slide menu left -->

    <!-- Fixed navbar -->
	<?php
	include 'navbar.php';
	?>
    <!-- END NAVIGATION -->
    
    <!--<div id = "top-shadow"></div>-->

    <!--START CONTAINER (PAGE ELEMENTS)-->
    <!--  Put everything inside #container div. 
          Use section tag with corresponding id for each parallax picture.
            Adjust data-speed for scrolling speed adjustment (smaller = faster)
            Be sure each id is unique and there is a corresponding id in the css.
          Use div tag with page_component class for creating page blocks for content.
            Always put a div between two sections so the line between two consecutive parallax pictures cannot be seen.
    -->

    <div class = "container">
      
      <!-- id for each div will be different to account for different heights. Class will always, however, be page_component -->

      <section id="header-slide" style="  background: url(img/signin.jpg) 50% 0 repeat fixed; background-size: auto 750px;" data-type="background" data-speed="6">
        <h2 class = "header-slide-text"style = "width: 730px">FORGOT PASSWORD?</h2>
      </section>

	<form method=post action=forgot-process.php onSubmit="return validateUser();">
      <div id = "destination1" class = "subhead" style = "padding-top: 0px; padding-bottom: 10px"></div>
      <hr/>
      <div style='text-align:center'>
      	Please enter your email below to reset your password.<br><br>
      </div>
	  <div class = "signin-box" style = 'width: 350px'>
	  	<div>
	  		<table>
	  			<tr class = 'signin-row'>
	  				<td style = 'padding-left: 20px' class = 'signin-table'>EMAIL</td>
	  				<td style = 'padding-right: 20px' class = 'signin-table'><input value = "" type = "text" name = "reset-email" id="reset-email" placeholder="Email"></td>
	  			</tr>
	  		</table>
	  	</div>
	  		  		<br>
	  	<hr class = "signin-divider">
	  	<div style = "text-align: center">
		  	<input type=submit class=" btn btn-primary" value="SUBMIT"/>	
	  		<br><br>
	  	</div>
	  </div>
	</form>
<SCRIPT type=text/javascript>
		<!--
			function validateUser()
			{
				retVal = true;
if (validateField('reset-email','text') == false)
 retVal=false;
				if(retVal == false)
				{
					alert('It looks like you left a field blank. Please try again.');
					return false;
				}
				return retVal;
			}
		//-->
		</SCRIPT>
		<SCRIPT>
			function validateField(fieldId,fieldType) {
				fieldObj = document.getElementById(fieldId);
				if (fieldType == 'text') {
					if (fieldObj.value == '') {
						return false;
					}
					else {
						return true;
					}
				}
			}
		</SCRIPT>

    </div>

    <!-- FOOTER -->

    <!-- FOOTER -->
    <?php
    include 'footer.html';
    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/classie.js"></script>
    <script src="js/nav.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34160351-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src = "dist/js/scroll-shadow.js" type="text/javascript"></script>-->
    <script src = "js/scroll_parallax.js" type="text/javascript"></script>
    <script src = "js/smooth-scroll.js" type="text/javascript"></script>
    <script src = "js/parallax.js" type="text/javascript"></script>
    <script src = "js/tooltip.js" type="text/javascript"></script>
    <script type="text/javascript">
      var scene = document.getElementById('scene');
      var parallax = new Parallax(scene);
    </script>
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.bxslider').bxSlider();
      });
    </script>
    <script src = "js/anchor-scroll.js" type="text/javascript"></script>
    <script src="js/parallax.js"></script>
    <!--<script type = "text/javascript">
    	
		$(window).load(function(){
		function fixDiv() {
		    var $div = $("#navwrap");
		    if ($(window).scrollTop() > $div.data("top")-80) { 
		        $('#navwrap').css({'position': 'fixed', 'top': '80px', 'width': '100%', 'margin-top': '0px'}); 
		    }
		    else {
		        $('#navwrap').css({'position': 'absolute', 'top': 'auto', 'width': '100%', 'margin-top': '510px'});
		    }
		}
		
		$("#navwrap").data("top", $("#navwrap").offset().top); // set original position on load
		$(window).scroll(fixDiv);
		});

	</script>
	<script>
		$(window).resize(function() {
			$("#navwrap").data("top", $("#navwrap").offset().top); // set original position on load
		});
	</script>-->
    </body>
	</html>