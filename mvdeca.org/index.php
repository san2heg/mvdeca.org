<!--

               /$$      /$$ /$$    /$$ /$$$$$$$  /$$$$$$$$  /$$$$$$   /$$$$$$ 
              | $$$    /$$$| $$   | $$| $$__  $$| $$_____/ /$$__  $$ /$$__  $$
              | $$$$  /$$$$| $$   | $$| $$  \ $$| $$      | $$  \__/| $$  \ $$
              | $$ $$/$$ $$|  $$ / $$/| $$  | $$| $$$$$   | $$      | $$$$$$$$
              | $$  $$$| $$ \  $$ $$/ | $$  | $$| $$__/   | $$      | $$__  $$
              | $$\  $ | $$  \  $$$/  | $$  | $$| $$      | $$    $$| $$  | $$
              | $$ \/  | $$   \  $/   | $$$$$$$/| $$$$$$$$|  $$$$$$/| $$  | $$
              |__/     |__/    \_/    |_______/ |________/ \______/ |__/  |__/


                      ```..---::://///+++++///::-.`    `..-----..`                                   
               .////++++++++++++++++++++++++++++++/:-/+++++++++++//:-..``     `                     
                ./+++++++++++++++++++++++++++++++++++++++++++++/////+++++/////-                     
                 `:/+++++++++++++++++++++++++++++++++++++++++++/-....-------.`                      
                   ./+++++++++++++++++++++++++++++++++++++++++++/-                                  
                    `:/+++++++++++++++++++++++++++++++++++++++++++:`                                
                      ./+++++++++++++++++++++++++++++++++++++++++++/.                               
                       `:++++++++++++++++++++++++++++++++++++++++++++:.                             
                         -/+++++++++++++++++++++++++++++++++++++++++++/:.`                          
                          -/+++++++++++++++++++++++++++++++++++++++++++++/-.`                       
                           ./++++++++++++++++++++++++++++++++/   /+++///++++/::-..```               
                            ./+++++++++++++++++++++++++++++++/--.:+++-``.--:://///::.               
                             -+++++++++++++++++++++++++++++++++++++++`       `````                  
                              /+++++++++++++++++++++++++++++++++++++/                               
                              .++++++++++++++++++++++++++++++++++++++`                              
                               /+++++++++++/:-.-:/+++++++++++++++++++.                              
                               :+++++++++/-       `-/++++++++++++++++:                              
                               .++++++++/`           `-/+++++++++++++/`                             
                               .//+++++/`               .-/+++++++++++.                             
                                    ```                    `-:/++++/:-`                             
                                                                
-->                                                                                               
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
	  <link href="video-js.css" rel="stylesheet" type="text/css">
	  <!-- video.js must be in the <head> for older IEs to work. -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/push-menu.css" rel="stylesheet">
    <link href = "css/home.css" rel = "stylesheet">
    <!--<link href="dist/css/base.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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

		<!-- video -->
		<video muted autoplay poster="img/buffervid.png" id="bgvid" width="100%">

		<source src="img/homevid3.mp4" type="video/mp4">
		</video>
		
		<button class="btn mute-toggle-btn" onclick="muteUnMute()">MUTE TOGGLE</button>

      <!-- Image Slider -->
      
      
      <!--
      <div class = "slider-absolute-text">WE ARE</div>
      <ul class="bxslider">
        <li><h2 class = "sliding-text">MONTA VISTA DECA</h2><img class = "slider-img" src="img/shop.jpg" /></li>
        <li><h2 class = "sliding-text">COMPETITIONS</h2><img class = "slider-img" src="img/wood.jpg" /></li>
        <li><h2 class = "sliding-text">COMMUNITY</h2><img class = "slider-img" src="img/sunset.jpg" /></li>
        <li><h2 class = "sliding-text">CULTURE</h2><img class = "slider-img" src="img/subway.jpg" /></li>
      </ul>
      -->
      <!-- id for each div will be different to account for different heights. Class will always, however, be page_component -->
      <div class = "blue-line"></div>
		<div id = "navwrap" class = "home-centerbuttons">
			<a href = "#destination2" id = "btn-competitions" class = "home-buttons scroll"><img src="img/white_arrow_down.png"/></a>
		</div>  
      <section id="meet-mvdeca" data-type="background" data-speed="7">
      	<div id = "destination1" style = "padding-top: 120px;"><div class = "home-centertexttop">MEET MVDECA</div></div>
      	<div class = "specialwhite" style = "text-align:center; width: 630px; margin: 0 auto;">
	      	<p class = "home-centerp2">Monta Vista DECA is a co-curricular student organization committed to providing its members the opportunity to discover and experience business and leadership through its competitions, community, and culture. We connect our members to the real world with international competitions, industry tours, and networking opportunities. 
	
	<br><br>With over 600 members and 60+ competitions, we are Monta Vista's premier business organization. <span class = "important">Explore our three C's by clicking or scrolling below!</span></p>
      	</div>
      </section>
  
      <div class = "blue-line"></div>

      <section id="competitions" data-type="background" data-speed="10">
      	<div id = "destination2" style = "padding-top: 120px;"><div class = "home-centertextcomp">COMPETITIONS</div></div>
      	<div class = "pholder" style = "text-align:center; width: 630px; margin-left: 10%; margin-right: auto;">
	      	<p class = "home-centerp"  style = " text-align: left;">The MVDECA competitions program trains our members by perfecting their presentation and writing skills. Every year, we attend four conferences that allow members to gain honors and awards in both written plan events and roleplay events. These events provide valuable industry exposure to members that will prove to be priceless as they venture into the real business world further on in life. Members of DECA can utilize their skills in and out of the classroom; they stand out as more confident, innovative, and successful because of their experiences from DECA. Simply put, DECA teaches members how to market themselves, whether it be to teachers, colleges, or employers. </p>
      </section>
      
      <div class = "blue-line"></div>
      
      <section id="culture" data-type="background" data-speed="9">
      	<div id = "destination3" style = "padding-top: 120px;"><div class = "home-centertextcult" style = "width: 350px">CULTURE</div></div>
      	<div class = "pholder" style = "text-align:center; width: 630px; margin-right: 10%; margin-left: auto;">
      		<p class = "home-centerp" style = " text-align: right;">Monta Vista DECA has a place for everyone: from the huge variety of events to the sheer size of the organization, every student finds an event of interest and builds lasting friendships, which are crucial to a memorable high school experience. Although having such a large amount of members may sound intimidating and impersonal, DECA becomes a comfort zone where members have the freedom and the opportunity to grow and improve with one another. For members, MVDECA quickly becomes a diverse family of opportunity and success.</p>
      </section>

      <div class = "blue-line"></div>
      <section id="community" data-type="background" data-speed="55">
      	<div id = "destination4" style = "padding-top: 120px;"><div class = "home-centertextcomm"style = "width: 470px">COMMUNITY</div></div>
      	<div class = "pholder" style = "text-align:center; width: 630px; margin-left: 10%; margin-right: auto;">
      		<p class = "home-centerp"  style = " text-align: left;">DECA provides members with a chance to be a part of their community by offering a variety of internship and volunteering opportunities. 
         <br><br>
         Through the various volunteering opportunities, members are able to gain volunteer hours as well as give back to their community. Internships at companies like State Farm and Lending Tree allow students to apply their knowledge in a real-world environment and acquire additional knowledge and skills. </p>

      </section>

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
    <script> 
		var myVideo=document.getElementById("bgvid"); 
		
		function playPause()
		{ 
		    if (myVideo.paused) 
		    myVideo.play(); 
		else 
		 myVideo.pause(); 
		} 
		
		function muteUnMute()
		{ 
		    if( !myVideo.muted)
		 myVideo.muted='muted';
		else
		
		myVideo.muted=false;
		} 
		
		
	</script> 

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
