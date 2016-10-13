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
    <link href="css/about.css" rel = "stylesheet">
    
    <!--<link href="dist/css/base.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="'ll"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style = "min-height: 400px">

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
		<section id="header-slide-about" data-type="background" data-speed="6">
			<h2 class = "header-slide-text"  style = "width: 285px">ABOUT</h2>
		</section>
		
		<div style="padding:40px 20px;">
			<div style="padding-left:15px;">

				<h1 style="margin-top:-10px;">Who are we?</h1>
				<p> Monta Vista DECA is Monta Vista High School’s premier student-run business organization. Here at MVDECA, we focus on extending business concepts taught from the textbooks into the real-world. The Monta Vista DECA experience consists of three main ideas: Competitions, Culture, Community. We compete in marketing, hospitality, finance, and entrepreneurship-related competitions against other DECA members from around the world. Our members stand out, both inside and outside the classroom. In addition to competition, our members help build our culture--one of hard work, friendship, and success. Members also become a larger part of our community, whether it be volunteering at local events, or working at the City of Cupertino and various other small-businesses.  
				<br><br>
				Our members have been featured in the Wall Street Journal, received U.S. patents, and founded their own businesses. Our alumni also attended exceptional universities, including Harvard University, Stanford University, University of California-Berkeley, and University of Chicago. 
				<br><br>
				At the end of the day, no matter what you are interested in, DECA has something for you. Isn’t it time you joined?
				</p>

			</div>

		</div>
		
		<section id="header-slide-about2" data-type="background" data-speed="6" style = "height: 300px">
			<h2 class = "header-slide-text"  style = "width: 400px; top: 116px">OUR TEAM</h2>
		</section>
	  
		<div id="team" class="page_component" style="min-height: 2380px">
			<div class="container-fluid" style="padding-left: 100px; width: 100%">
			<div class="row">
				<div class="col-md-2 col-md-offset-3">
				<div class="row">
				<div id="ani" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/Ani.png" alt="More about Ani" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">President</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Ani Kunaparaju</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-2">
				<div class="row">
				<div id="megan" class="officer" title="Click to flip">
					<div class="officerFlip">
						<img src="img/pres/Megan.png" alt="More about Megan" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						
						<div class="officerPosition">
							<p style="color: blue;">Executive VP</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Megan Yelsangikar</p>
				</div>
				</div>
				</div>
			</div>
			<div class="clearfix visible-xs-block"></div>
			<div class="row">
				<div class="col-md-2 col-md-offset-1">
				<div class="row">
				<div id="eric" class="officer" title="Click to flip">
					<div class="officerFlip">
						<img src="img/pres/Eric.png" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">VP of Competitions</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Eric Xu</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-2">
				<div class="row">
				<div id="madie" class="officer" title="Click to flip">
					<div class="officerFlip">
						<img src="img/pres/madie.jpg" alt="More about Madie" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">VP of Marketing</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
						<p>Madeleine Liu</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-2">
				<div class="row">
				<div id="alekhya" class="officer" title="Click to flip">
					<div class="officerFlip">
						<img src="img/pres/Sanketh.png" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Exec. Director of Tech</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Sanketh Hegde</p>
				</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				<div class="row">
				<div id="megha" class="officer" title="Click to flip" style=>
					<div class="officerFlip">
						<img src="img/pres/Megha.jpg" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Exec. Director of Role-Play Events</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Megha Sheth</p>
				</div>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/Shaili.png" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Exec. Director of Written Events</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Shaili Patel</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-1">
				<div class="row">
				<div id="david" class="officer" title="Click to flip">
					<div class="officerFlip">
						<img src="img/pres/david.jpg" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Events</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>David Wu</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-2">
				<div class="row">
				<div id="sannie" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/hari.jpg" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Development</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Hari Kaushik</p>
				</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				<div class="row">
				<div id="megha" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/daniel.jpg" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Hospitality Specialist</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Daniel Lin</p>
				</div>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/dk.jpg" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Entrepreneurship</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Donghyun Kim</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-1">
				<div class="row">
				<div id="david" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/tejal.jpg" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Civic Consciousness</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Tejal Kolte</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-2">
				<div class="row">
				<div id="sannie" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/patrick.jpg" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Operations</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Patrick Yeung</p>
				</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				<div class="row">
				<div id="megha" class="officer" title="Click to flip" style=>
					<div class="officerFlip">
						<img src="img/pres/shannon.jpg" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Fashion and Marketing Specialist</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Shannon Yu</p>
				</div>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/sophie.jpg" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Operations Research</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Sophie Wen</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-1">
				<div class="row">
				<div id="david" class="officer" title="Click to flip" style=>
					<div class="officerFlip">
						<img src="img/pres/sai.jpg" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Corporate Relations</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Saiprasanna Ranganathan</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-2">
				<div class="row">
				<div id="david" class="officer" title="Click to flip" style=>
					<div class="officerFlip">
						<img src="img/pres/gen.png" alt="More about alekhya" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Secretary/Treasurer</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Alekhya Parvathaneni</p>
				</div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				<div class="row">
				<div id="megha" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/Rutvij.png" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Finance and Business Management Specialist</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Rutvij Bhise</p>
				</div>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/james.jpg" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Marketing Representation</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>James Lo</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-3">
				<div class="row">
				<div id="megha" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/schmidt.png" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Advisor</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Carl Schmidt</p>
				</div>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/meuller.png" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Advisor</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Jeff Meuller</p>
				</div>
				</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-2">
				<div class="row">
				<div id="megha" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/rachel.jpg" alt="More about Eric" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Principles</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Rachel Zhou</p>
				</div>
				</div>
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/gen.png" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Director of Professional Selling</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Michael Lin</p>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-md-offset-3">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/cler.png" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Advisor</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Stacey Cler</p>
				</div>
				</div>				
				</div>
				<div class="col-md-2">
				<div class="row">
				<div id="shaili" class="officer" title="Click to flip" style="">
					<div class="officerFlip">
						<img src="img/pres/howard.jpg" alt="More about Shaili" style="width: 180px; height: 180px" />
					</div>
					
					<div class="officerData">
						<div class="officerPosition">
							<p style="color: blue;">Advisor</p>
						</div>
					</div>
				</div>
				</div>
				<div class="row">
				<div class="officerName">
					<p>Dianne Howard</p>
				</div>
				</div>
				</div>
			</div>
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.flip.min.js"></script>
	
	<script type="text/javascript" src="js/flip.js"></script>
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
