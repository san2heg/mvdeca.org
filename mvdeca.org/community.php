<!DOCTYPE html>
<html lang="en">
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
    <!--<link href="dist/css/base.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style = "min-height: 2100px">

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

      <section id="header-slide-comm" data-type="background" data-speed="6">
        <h2 class = "header-slide-text">COMMUNITY</h2>
      </section>

      <div id = "destination1" class = "subhead">OUR CONNECTION</div>
      <hr/>
      <div id = "community1" class = "page_component">
        <!-- Always begin each block with the two lines that follow: -->
		<div style="width: 50%; float:left">
	        <img class = "commimg" src = "img/meeting.jpg" style = "width: 489px; margin-bottom: 30px; margin-right: 120px; margin-top: 15px;"/>
	      </div>
	      <div style="width: 50%; float:right">
	        <p style="padding-top:16px; padding-left: 50px; color:#000000; line-height: 25px;">
Monta Vista DECA connects very closely to the greater community. You will often find us volunteering at city events or festivals, providing marketing-related support for city projects, and connecting with local elementary schools. Whenever our community holds an event, we always enjoy going out and helping with the festivities. As our community works on new projects, we often provide summer interns to raise public awareness. Even though we are high school students, our members often return to local elementary and middle schools to help the teachers with day-to-day tasks. We believe in a “grounded” culture and look forward to becoming a larger part of our community every day. We cherish our community and are willing to do anything to support it. If you are planning an event or need any form of assistance, don’t hesitate to drop us a line at community@mvdeca.org. 
	        </p>
	      </div>
      </div>
      
      
      <section id="header-slide2" data-type="background" data-speed="6">
        <h2 class = "header-slide-text2">OUR FRIENDS</h2>
      </section>
      
      <div id = "destination1" class = "subhead" style = "padding-top: 0px; padding-bottom: 10px"></div>
	  <hr style = "margin-bottom: 40px;"/>

      <div id = "community2" class = "page_component">
	  	<img class = "logoimg" src="img/logo.png" style = "float:left; margin-top: 12px;" width="125px">
      	<div class = "friendslist" style = "margin-left: 170px;">
      		<h2>STATE FARM (EVA MARTIN-LONG)</h2>
      		<p>One of our many friends is the lovely Eva Martin-Long at State Farm. We have collaborated on many works and hope to continue to do so in the future. Her many achievements include: State Farm Experience since 1987, Rotary Club of Cupertino, Monta Vista High School Interact Advisor, and being in the Los Gatos and Cupertino Chamber of Commerce. For more information on Eva visit: http://www.evamartinlong.com</p>
      	</div>
	  	<hr style = "margin-top: 40px; margin-bottom: 40px;"/>
	  	<img class = "logoimg" src="img/scoc.jpeg" style = "float:right; margin-top: 40px;" width="150px">
      	<div class = "friendslist2" style = "margin-right: 190px">
      		<h2>SARATOGA CHAMBER OF COMMERCE</h2>
      		<p>The Chamber serves the business community directly through a wide variety of programs and services, including networking, educating members regarding legislative issues, business development, promotion, marketing, sponsorship, and advertising assistance. We are actively involved in supporting our members and diligently working to create a thriving economic environment.
(extracted from: http://www.saratogachamber.org/)</p>
      	</div>
	  	<hr style = "margin-top: 40px; margin-bottom: 40px;"/>
	  	<img class = "logoimg" src="img/cupe.png" style = "float:left; margin-top: 46px; margin-left: 30px;" width="90px">
      	<div class = "friendslist" style = "margin-left: 170px">
      		<h2>CUPERTINO CHAMBER OF COMMERCE</h2>
      		<p>The Cupertino Chamber of Commerce is a non-profit business organization with members that employ more than 10,000 people. The chamber collaborates with government, education, and private industry to assist and strengthen local businesses, to be an advocate for business, and affect the high quality of life for which Cupertino is known. The Cupertino Chamber of Commerce provides leadership and direction for community action. The officers, directors, staff, and a dedicated corps of volunteers direct activities to achieve the Chamber's goals.      (extracted from: http://www.cupertino-chamber.org/)</p>
      	</div>
      </div>
    </div>


    <!-- FOOTER -->
    <?php>
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
    <script>

    // Pretty simple huh?
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);

    </script>
    <script src = "js/bootstrap-select.js" type="text/javascript"></script>
    <script type="text/javascript"> $('.selectpicker').selectpicker();</script>
    <script src = "js/stickyMojo.js" type="text/javascript"></script>
	<script>
	  $(document).ready(function(){
	    $('#sidebar').stickyMojo({footerID: '#footer', contentID: '#main'});
	  });
	</script>
    <script type = "text/javascript">
		$(window).load(function(){
		function fixDiv() {
		    var $div = $("#navwrap");
		    if ($(window).scrollTop() > $div.data("top")-80) { 
		        $('#navwrap').css({'position': 'fixed', 'top': '80px', 'border-bottom': '3px solid #000000','width':'715px'}); 
		        $('#p1').css({'margin-top':'110px'}); 
		    }
		    else {
		        $('#navwrap').css({'position': 'static', 'background-color':'#ffffff', 'border-bottom': 'none'});
		        $('#p1').css({'margin-top':'0px'}); 
		    }
		    var $div = $("#navwrap2");
		    if ($(window).scrollTop() > $div.data("top")-200) { 
		        $('#navwrap2').css({'position': 'fixed', 'top': '80px', 'border-bottom': '3px solid #000000','width':'715px'}); 
		    }
		    else {
		        $('#navwrap2').css({'position': 'static', 'background-color':'#ffffff', 'border-bottom': 'none'});
		    }
		}
		
		$("#navwrap").data("top", $("#navwrap").offset().top); // set original position on load
		$("#navwrap2").data("top", $("#navwrap2").offset().top); // set original position on load
		$(window).scroll(fixDiv);
		});

	</script>
  </body>
</html>
