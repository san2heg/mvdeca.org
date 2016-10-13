<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		echo "
			<!DOCTYPE html>
			<html lang=\"en\">
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
			    <link href=\"css/events.css\" rel=\"stylesheet\">
			    <!--<link href=\"dist/css/base.css\" rel=\"stylesheet\">-->
			
			    <!-- Just for debugging purposes. Don't actually copy this line! -->
			    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
			
			    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			    <!--[if lt IE 9]>
			      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
			      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
			    <![endif]-->
			  </head>
			
			  <body style = \"min-height: 200px\">
			
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
			
			      <section id=\"header-slide-event\" data-type=\"background\" data-speed=\"10\">
			        <h2 class = \"header-slide-text-events\">EVENTS</h2>
			      </section>
			      
			      <div id = \"destination1\" class = \"subhead\">DECA TAKES YOU PLACES</div>
			      <hr id = \"tracktemp\"/>      
			      <div id = \"intro\" class = \"page_component\" style = \"height: 87px;\">
					        		<p class = \"introp\">  Monta Vista DECA offers the “DECA experience”, the experience built on our three main aspects: competition, community, and culture. All three aspects culminate during our Monta Vista DECA events, whether it be conferences, tours, or volunteer opportunities. Monta Vista DECA events embody our chapter and provide us with an identity. As a member, you are invited to all events--so, sign up for one today!</p>
			      </div>
			      <hr/>
			      <div id = \"intro\" class = \"page_component\" style = \"height: 3750px; margin: 0 auto; width: 1050px;\">
			        <!-- Always begin each block with the two lines that follow: -->
			        <div id = \"sidebar-events\">
			        	<ul class = \"nav nav-pills nav-stacked\">
			        		<li><h2 style = \"font-size: 16px; padding-right:14px\">CONFERENCES</h2></li>
			        		<hr style = \" margin-right:14px\"/>
				        	<li><a id = \"nav1\" class = \"scroll conf\"  href = \"#svlace\">SVLACE</a></li>
				        	<li><a id = \"nav2\" class = \"scroll conf\"  href = \"#svcdc\">SVCDC</a></li>
				        	<li><a id = \"nav3\" class = \"scroll conf\"  href = \"#states\">STATES</a></li>
				        	<li><a id = \"nav4\" class = \"scroll conf\"  href = \"#icdc\">ICDC</a></li>
			        		<li><h2 style = \"font-size: 16px; padding-right:14px\">TOURS</h2></li>
			        		<hr style = \" margin-right:14px\"/>
				        	<li><a id = \"nav5\" class = \"scroll pill\"  href = \"#ea\">EA GAMES</a></li>
				        	<li><a id = \"nav6\" class = \"scroll pill\"  href = \"#fed\">FEDERAL RESERVE</a></li>
				        	<li><a id = \"nav7\" class = \"scroll pill\"  href = \"#fidm\">FIDM</a></li>
			        	</ul>
			        </div>
			  
			        <div id = \"main\">
			 <section id=\"docs-content\" class=\"\" style=\"color: #000000;\">
					        	<div id=\"svlace\" style=\"padding-bottom:270px\" data-target=\"series\"> 
									<h2 class = \"headings\"> LEADERSHIP AND COMPETITIVE EXCELLENCE CONFERENCE</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the Silicon Valley Leadership and Competitive Excellence Conference, students receive hands-on training on becoming a leader. With inspiring speeches from world-renowned guest speakers and intensive training sessions, Silicon Valley LACE proves to be the training ground for amazing business leaders and DECA competitors.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/svldc.jpg\" style=\"width:200px; margin-left:70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">Nov. 14-16, 2014</h2>
							          <h2 class = \"loc\">San Jose Airport Doubletree</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href = 'signin.php'>SIGN IN TO ATTEND</a>

							      </div>
					        	</div>
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"svcdc\" style=\"padding-bottom:270px\" data-target=\"tdm\"> 
					        		<h2 class = \"headings\">SILICON VALLEY CDC</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the Silicon Valley Career Development Conference, students get their first taste of competitions. Monta Vista DECA members compete with students from all over the Silicon Valley-Bay Area, learning what it means to become a true business professional. This competition proves to be a testing ground for the upcoming California Career Development Conference.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/svcdc.jpg\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">January 2-4, 2015</h2>
							          <h2 class = \"loc\">San Jose Marriott</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%'href = 'signin.php'>SIGN IN TO ATTEND</a>

							      </div>
					        	</div>
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"states\" style=\"padding-bottom:270px\" data-target=\"series\"> 
					        		<h2 class = \"headings\">CALIFORNIA CDC</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the States CDC, students compete to qualify for the international conference. While competing at this conference, students will earn recognition against the best competitors from all over the state. Students in each event will compete for four possible qualifying spots for the international conference in Orlando.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/states.jpg\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">Feb. 26-March 1, 2015</h2>
							          <h2 class = \"loc\">Santa Clara Marriot</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href = 'signin.php'>SIGN IN TO ATTEND</a>

							      </div>
					        	</div>
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"icdc\" style=\"padding-bottom:270px\" data-target=\"series\"> 
					        		<h2 class = \"headings\">INTERNATIONAL CDC</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the States CDC, students compete to qualify for the international conference. While competing at this conference, students will earn recognition against the best competitors from all over the state. Students in each event will compete for four possible qualifying spots for the international conference in Orlando.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/roshan.jpg\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">April 25-28, 2015</h2>
							          <h2 class = \"loc\">Orlando, Florida</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href = 'signin.php'>SIGN IN TO ATTEND</a>
							      </div>
					        	</div>
								<hr style = \"border-color: #D0D0D0  ;\">
					        	<div id=\"ea\" style=\"padding-bottom:270px\" data-target=\"series\"> 
					        		<h2 class = \"headings\">EA GAMES</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">TOUR</div>
					        		<p>Monta Vista DECA’s EA Tour allows students to see how Silicon Valley business operate. In this tour, students tour through the Electronic Arts campus, and learn about the process EA uses to create its flagship video games. Students all receive the opportunity to connect with business leaders at Electronic Arts and learn more about the gaming industry. At the end, students receive the opportunity to purchase games with employee discounts at the EA Store!</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/ea.png\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">February __, 2015</h2>
							          <h2 class = \"loc\">LOCATION UNKNOWN</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href = 'signin.php'>SIGN IN TO ATTEND</a>
							      </div>
					        	</div>
								<hr style = \"border-color: #D0D0D0  ;\">
					        	<div id=\"fed\" style=\"padding-bottom:275px\" data-target=\"tdm\"> 
					        		<h2 class = \"headings\"> FEDERAL RESERVE</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">TOUR</div>
					        		<p>Monta Vista DECA’s Federal Reserve Tour allows students to visit the Federal Reserve Bank of San Francisco, a division of the Department of Treasury. Students visit the Federal Reserve to see the process that the government uses to create and destroy our federal currency. At the end, the Federal Reserve also holds a short lecture to teach students about the basics of currency and the strategies the government uses to fight counterfeit currency.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/fed_res.jpg\" style=\"width:200px; margin-left:70px\">
							      </div>
							      <div class = \"details-box\"  style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">October __, 2014</h2>
							          <h2 class = \"loc\">San Francisco</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href = 'signin.php'>SIGN IN TO ATTEND</a>
							      </div>
								</div>						
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"fidm\" style=\"padding-bottom:270px\" data-target=\"or\"> 
					        		<h2 class = \"headings\">FIDM</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">TOUR</div>
					        		<p>Monta Vista DECA’s FIDM Tour allows students to learn about Fashion and Merchandising in a professional environment. Students also receive the opportunity to gain insight regarding the fashion design industry. The FIDM Institute is located in San Francisco, and full details regarding this tour can be obtained by contacting us directly at tours@mvdeca.org.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/fidm.jpg\" style=\"width:200px; margin-left:70px;\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">December __, 2014</h2>
							          <h2 class = \"loc\">San Francisco</h2>
							          
							          <a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href = 'signin.php'>SIGN IN TO ATTEND</a>
							      </div>
					        	</div>
					        </section>
			        </div>
			     
			    </div>
				
			    <!-- FOOTER -->
			    ";
			    include 'footer.html';
			    echo"
			
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
			    <script>
			
			    // Pretty simple huh?
			    var scene = document.getElementById('scene');
			    var parallax = new Parallax(scene);
			
			    </script>
			    <script src = \"js/bootstrap-select.js\" type=\"text/javascript\"></script>
			    <script type=\"text/javascript\"> $('.selectpicker').selectpicker();</script>
			    <script src = \"js/stickyMojo.js\" type=\"text/javascript\"></script>
				<script>
				  $(document).ready(function(){
				    $('#sidebar-events').stickyMojo({footerID: '#footer', contentID: '#main'});
				  });
				</script>
			    <script type = \"text/javascript\">
					$(window).load(function(){
					function fixDiv() {
					    var $div = $(\"#svlace\");
					    var $div2 = $(\"#svcdc\");
					    var $div3 = $(\"#states\");
					    var $div4 = $(\"#icdc\");
					    var $div5 = $(\"#ea\");
					    var $div6 = $(\"#fed\");
					    var $div7 = $(\"#fidm\");
					    if ($(window).scrollTop() >= $div.data(\"top\")-80 && $(window).scrollTop() < $div2.data(\"top\")-80) { 
					        $('#nav1').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav1').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div2.data(\"top\")-80 && $(window).scrollTop() < $div3.data(\"top\")-80) { 
					        $('#nav2').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav2').css({'background-color': 'transparent'});
					    }
					   
					    if ($(window).scrollTop() >= $div3.data(\"top\")-80 && $(window).scrollTop() < $div4.data(\"top\")-80) { 
					        $('#nav3').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav3').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div4.data(\"top\")-80 && $(window).scrollTop() < $div5.data(\"top\")-80) { 
					        $('#nav4').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav4').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div5.data(\"top\")-80 && $(window).scrollTop() < $div6.data(\"top\")-80) { 
					        $('#nav5').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav5').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div6.data(\"top\")-80 && $(window).scrollTop() < $div7.data(\"top\")-80) { 
					        $('#nav6').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav6').css({'background-color': 'transparent'});
					    }
					   
					    if ($(window).scrollTop() >= $div7.data(\"top\")-80) { 
					        $('#nav7').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav7').css({'background-color': 'transparent'});
					    }
					}
					$(\"#svlace\").data(\"top\", $(\"#svlace\").offset().top); // set original position on load
					$(\"#svcdc\").data(\"top\", $(\"#svcdc\").offset().top); // set original position on load
					$(\"#states\").data(\"top\", $(\"#states\").offset().top); // set original position on load
					$(\"#icdc\").data(\"top\", $(\"#icdc\").offset().top); // set original position on load
					$(\"#ea\").data(\"top\", $(\"#ea\").offset().top); // set original position on load
					$(\"#fed\").data(\"top\", $(\"#fed\").offset().top); // set original position on load
					$(\"#fidm\").data(\"top\", $(\"#fidm\").offset().top); // set original position on load
					$(window).scroll(fixDiv);
					});
			
				</script>
			  </body>
			</html>
		";

	}

	else{
		echo "
			<!DOCTYPE html>
			<html lang=\"en\">
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
			    <link href=\"css/events.css\" rel=\"stylesheet\">
			    <!--<link href=\"dist/css/base.css\" rel=\"stylesheet\">-->
			
			    <!-- Just for debugging purposes. Don't actually copy this line! -->
			    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
			
			    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			    <!--[if lt IE 9]>
			      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
			      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
			    <![endif]-->
			  </head>
			
			  <body style = \"min-height: 200px\">
			
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
			
			      <section id=\"header-slide-event\" data-type=\"background\" data-speed=\"10\">
			        <h2 class = \"header-slide-text-events\">EVENTS</h2>
			      </section>
			      
			      <div id = \"destination1\" class = \"subhead\">DECA TAKES YOU PLACES</div>
			      <hr id = \"tracktemp\"/>      
			      <div id = \"intro\" class = \"page_component\" style = \"height: 87px;\">
					        		<p class = \"introp\">  Monta Vista DECA offers the “DECA experience”, the experience built on our three main aspects: competition, community, and culture. All three aspects culminate during our Monta Vista DECA events, whether it be conferences, tours, or volunteer opportunities. Monta Vista DECA events embody our chapter and provide us with an identity. As a member, you are invited to all events--so, sign up for one today!</p>
			      </div>
			      <hr/>
			      <div id = \"intro\" class = \"page_component\" style = \"height: 3750px; margin: 0 auto; width: 1050px;\">
			        <!-- Always begin each block with the two lines that follow: -->
			        <div id = \"sidebar-events\">
			        	<ul class = \"nav nav-pills nav-stacked\">
			        		<li><h2 style = \"font-size: 16px; padding-right:14px\">CONFERENCES</h2></li>
			        		<hr style = \" margin-right:14px\"/>
				        	<li><a id = \"nav1\" class = \"scroll conf\"  href = \"#svlace\">SVLACE</a></li>
				        	<li><a id = \"nav2\" class = \"scroll conf\"  href = \"#svcdc\">SVCDC</a></li>
				        	<li><a id = \"nav3\" class = \"scroll conf\"  href = \"#states\">STATES</a></li>
				        	<li><a id = \"nav4\" class = \"scroll conf\"  href = \"#icdc\">ICDC</a></li>
			        		<li><h2 style = \"font-size: 16px; padding-right:14px\">TOURS</h2></li>
			        		<hr style = \" margin-right:14px\"/>
				        	<li><a id = \"nav5\" class = \"scroll pill\"  href = \"#ea\">EA GAMES</a></li>
				        	<li><a id = \"nav6\" class = \"scroll pill\"  href = \"#fed\">FEDERAL RESERVE</a></li>
				        	<li><a id = \"nav7\" class = \"scroll pill\"  href = \"#fidm\">FIDM</a></li>
			        	</ul>
			        </div>
			  
			        <div id = \"main\">
			 <section id=\"docs-content\" class=\"\" style=\"color: #000000;\">
					        	<div id=\"svlace\" style=\"padding-bottom:270px\" data-target=\"series\"> 
									<h2 class = \"headings\"> LEADERSHIP AND COMPETITIVE EXCELLENCE CONFERENCE</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the Silicon Valley Leadership and Competitive Excellence Conference, students receive hands-on training on becoming a leader. With inspiring speeches from world-renowned guest speakers and intensive training sessions, Silicon Valley LACE proves to be the training ground for amazing business leaders and DECA competitors.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/svldc.jpg\" style=\"width:200px; margin-left:70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">Nov. 14-16, 2014</h2>
							          <h2 class = \"loc\">San Jose Airport Doubletree</h2>
							          <!---->
							          
									  <button type=\"button\" class=\"btn btn-default\" style='top: 40px !important; width: 93%' disabled>EVENT NO LONGER OPEN</button>
							      </div>
					        	</div>
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"svcdc\" style=\"padding-bottom:270px\" data-target=\"tdm\"> 
					        		<h2 class = \"headings\">SILICON VALLEY CDC</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the Silicon Valley Career Development Conference, students get their first taste of competitions. Monta Vista DECA members compete with students from all over the Silicon Valley-Bay Area, learning what it means to become a true business professional. This competition proves to be a testing ground for the upcoming California Career Development Conference.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/svcdc.jpg\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">January 2-4, 2015</h2>
							          <h2 class = \"loc\">San Jose Marriott</h2>
									  <button type=\"button\" class=\"btn btn-default\" style='top: 40px !important; width: 93%' disabled>EVENT NO LONGER OPEN</button>
							      </div>
					        	</div>
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"states\" style=\"padding-bottom:270px\" data-target=\"series\"> 
					        		<h2 class = \"headings\">CALIFORNIA CDC</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the States CDC, students compete to qualify for the international conference. While competing at this conference, students will earn recognition against the best competitors from all over the state. Students in each event will compete for four possible qualifying spots for the international conference in Orlando.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/states.jpg\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">Feb. 26-March 1, 2015</h2>
							          <h2 class = \"loc\">Santa Clara Marriot</h2>
							          
							          ";
							          if ($_SESSION['states'] == 0) {
								          echo"<a type=\"button\" class=\"btn btn-success\" style='top: 40px !important; width: 93%' href='states-confirmation.php'>ATTEND NOW</a>";
							          }
									  else if ($_SESSION['states'] != 0) {
								          echo"<a type=\"button\" class=\"btn btn-primary\" style='top: 40px !important; width: 93%' href='states.pdf'>REGISTERED (VIEW STATES PACKET)</a>";		  
									  }
							          echo "
							          
							      </div>
					        	</div>
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"icdc\" style=\"padding-bottom:270px\" data-target=\"series\"> 
					        		<h2 class = \"headings\">INTERNATIONAL CDC</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">CONFERENCE</div>
					        		<p>At the States CDC, students compete to qualify for the international conference. While competing at this conference, students will earn recognition against the best competitors from all over the state. Students in each event will compete for four possible qualifying spots for the international conference in Orlando.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/roshan.jpg\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">April 25-28, 2015</h2>
							          <h2 class = \"loc\">Orlando, Florida</h2>
							          
									  <button type=\"button\" class=\"btn btn-danger\" style='top: 40px !important; width: 93%' disabled>ATTENDANCE NOT OPEN</button>
							      </div>
					        	</div>
								<hr style = \"border-color: #D0D0D0  ;\">
					        	<div id=\"ea\" style=\"padding-bottom:270px\" data-target=\"series\"> 
					        		<h2 class = \"headings\">EA GAMES</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">TOUR</div>
					        		<p>Monta Vista DECA’s EA Tour allows students to see how Silicon Valley business operate. In this tour, students tour through the Electronic Arts campus, and learn about the process EA uses to create its flagship video games. Students all receive the opportunity to connect with business leaders at Electronic Arts and learn more about the gaming industry. At the end, students receive the opportunity to purchase games with employee discounts at the EA Store!</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/ea.png\" style=\"width:200px; margin-left: 70px\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">February __, 2015</h2>
							          <h2 class = \"loc\">LOCATION UNKNOWN</h2>
							          
									  <button type=\"button\" class=\"btn btn-danger\" style='top: 40px !important; width: 93%' disabled>ATTENDANCE NOT OPEN</button>
							      </div>
					        	</div>
								<hr style = \"border-color: #D0D0D0  ;\">
					        	<div id=\"fed\" style=\"padding-bottom:275px\" data-target=\"tdm\"> 
					        		<h2 class = \"headings\"> FEDERAL RESERVE</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">TOUR</div>
					        		<p>Monta Vista DECA’s Federal Reserve Tour allows students to visit the Federal Reserve Bank of San Francisco, a division of the Department of Treasury. Students visit the Federal Reserve to see the process that the government uses to create and destroy our federal currency. At the end, the Federal Reserve also holds a short lecture to teach students about the basics of currency and the strategies the government uses to fight counterfeit currency.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/fed_res.jpg\" style=\"width:200px; margin-left:70px\">
							      </div>
							      <div class = \"details-box\"  style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">October __, 2014</h2>
							          <h2 class = \"loc\">San Francisco</h2>
							          
									  <button type=\"button\" class=\"btn btn-danger\" style='top: 40px !important; width: 93%' disabled>ATTENDANCE NOT OPEN</button>
							      </div>
								</div>						
								<hr style=\"border-color:#D0D0D0;\">
					        	<div id=\"fidm\" style=\"padding-bottom:270px\" data-target=\"or\"> 
					        		<h2 class = \"headings\">FIDM</h2><div style = \"margin-bottom: 19px;\" class=\"badge\">TOUR</div>
					        		<p>Monta Vista DECA’s FIDM Tour allows students to learn about Fashion and Merchandising in a professional environment. Students also receive the opportunity to gain insight regarding the fashion design industry. The FIDM Institute is located in San Francisco, and full details regarding this tour can be obtained by contacting us directly at tours@mvdeca.org.</p>
							      <div style=\"width: 50%; float:left\">
							        <img src = \"img/fidm.jpg\" style=\"width:200px; margin-left:70px;\">
							      </div>
							      <div class = \"details-box\" style=\"width: 50%; float:right\">
							          <h2 class = \"dates\">December __, 2014</h2>
							          <h2 class = \"loc\">San Francisco</h2>
							          
									  <button type=\"button\" class=\"btn btn-danger\" style='top: 40px !important; width: 93%' disabled>ATTENDANCE NOT OPEN</button>
							      </div>
					        	</div>
					        </section>
			        </div>
			     
			    </div>
			
			    <!-- FOOTER -->
			    ";
			    
			    include 'footer.html';
			    
			    echo"
			http://open.spotify.com/track/4lbdubTAn1l8XZc4803AJf
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
			    <script>
			
			    // Pretty simple huh?
			    var scene = document.getElementById('scene');
			    var parallax = new Parallax(scene);
			
			    </script>
			    <script src = \"js/bootstrap-select.js\" type=\"text/javascript\"></script>
			    <script type=\"text/javascript\"> $('.selectpicker').selectpicker();</script>
			    <script src = \"js/stickyMojo.js\" type=\"text/javascript\"></script>
				<script>
				  $(document).ready(function(){
				    $('#sidebar-events').stickyMojo({footerID: '#footer', contentID: '#main'});
				  });
				</script>
			    <script type = \"text/javascript\">
					$(window).load(function(){
					function fixDiv() {
					    var $div = $(\"#svlace\");
					    var $div2 = $(\"#svcdc\");
					    var $div3 = $(\"#states\");
					    var $div4 = $(\"#icdc\");
					    var $div5 = $(\"#ea\");
					    var $div6 = $(\"#fed\");
					    var $div7 = $(\"#fidm\");
					    if ($(window).scrollTop() >= $div.data(\"top\")-80 && $(window).scrollTop() < $div2.data(\"top\")-80) { 
					        $('#nav1').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav1').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div2.data(\"top\")-80 && $(window).scrollTop() < $div3.data(\"top\")-80) { 
					        $('#nav2').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav2').css({'background-color': 'transparent'});
					    }
					   
					    if ($(window).scrollTop() >= $div3.data(\"top\")-80 && $(window).scrollTop() < $div4.data(\"top\")-80) { 
					        $('#nav3').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav3').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div4.data(\"top\")-80 && $(window).scrollTop() < $div5.data(\"top\")-80) { 
					        $('#nav4').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav4').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div5.data(\"top\")-80 && $(window).scrollTop() < $div6.data(\"top\")-80) { 
					        $('#nav5').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav5').css({'background-color': 'transparent'});
					    }
					    
					    if ($(window).scrollTop() >= $div6.data(\"top\")-80 && $(window).scrollTop() < $div7.data(\"top\")-80) { 
					        $('#nav6').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav6').css({'background-color': 'transparent'});
					    }
					   
					    if ($(window).scrollTop() >= $div7.data(\"top\")-80) { 
					        $('#nav7').css({'background-color': '#f0f0f0'}); 
					    }
					    else {
					        $('#nav7').css({'background-color': 'transparent'});
					    }
					}
					$(\"#svlace\").data(\"top\", $(\"#svlace\").offset().top); // set original position on load
					$(\"#svcdc\").data(\"top\", $(\"#svcdc\").offset().top); // set original position on load
					$(\"#states\").data(\"top\", $(\"#states\").offset().top); // set original position on load
					$(\"#icdc\").data(\"top\", $(\"#icdc\").offset().top); // set original position on load
					$(\"#ea\").data(\"top\", $(\"#ea\").offset().top); // set original position on load
					$(\"#fed\").data(\"top\", $(\"#fed\").offset().top); // set original position on load
					$(\"#fidm\").data(\"top\", $(\"#fidm\").offset().top); // set original position on load
					$(window).scroll(fixDiv);
					});
			
				</script>
			  </body>
			</html>
		";
	}
?>
