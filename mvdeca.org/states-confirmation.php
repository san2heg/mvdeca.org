<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		header("Location: signin.php");
	}
	else if ($_SESSION['states'] != 0) {
		header("Location: events.php");
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
			";
			//if ($_SESSION['verified']=="\r\nUNVERIFIED") {
				//echo"<body onLoad=\"collapseAll()\" style=\"min-height: 800px\">";
			//}
			//else {
				echo"<body onLoad=\"collapseAll()\" style=\"min-height: 200px\">";
			//}
		echo"
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
		
		    <div class = \"container\" style = \"height: 1800px\">
		      
		      <!-- id for each div will be different to account for different heights. Class will always, however, be page_component -->
		
			      <section id=\"header-slide-event\" data-type=\"background\" data-speed=\"10\">
			        <h2 class = \"header-slide-text-events\">EVENTS</h2>
			      </section>
		      <div id = 'destination1' class = 'subhead'>California CDC CONFIRMATION</div>
		      <hr/>
		      ";
		      
		      //if ($_SESSION['verified'] == "") {
			    echo"
			  <div style='text-align:center; font-size: 15px; color:red'>Please read over the information below, fill out the registration fields, and confirm that you are attending California CDC.</div>
			  <br>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>NAME:</span> California Career Development Conference</div>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>DATES:</span> Thursday, February 26 - Sunday, March 1</div>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>PLACE:</span> Santa Clara Marriott</div>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>PRICE:</span> $325 (housing inclusive)</div><br>
			  <hr>
			  
			<form method=post action=states-process.php onSubmit=\"return validateUser();\">
			  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>COMPETITIONS</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Please pick your appropriate roleplay and written event</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px; font-weight:700;' class = 'signin-table'>Roleplay Event</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><select style='width:100%'name='roleplay' id='roleplay'>
  <option value=\"Undecided\">- Pick One -</option>
  <option value=\"NONE\">NONE</option>
  <option value=\"PBM\">PBM</option>
  <option value=\"PFN\">PFN</option>
  <option value=\"PHT\">PHT</option>
  <option value=\"PMK\">PMK</option>
  <option value=\"BLTDM\">BLTDM</option>
  <option value=\"BTDM\">BTDM</option>
  <option value=\"FTDM\">FTDM</option>
  <option value=\"HTDM\">HTDM</option>
  <option value=\"MTDM\">MTDM</option>
  <option value=\"STDM\">STDM</option>
  <option value=\"TTDM\">TTDM</option>
  <option value=\"ACT\">ACT</option>
  <option value=\"AAM\">AAM</option>
  <option value=\"ASM\">ASM</option>
  <option value=\"BFS\">BFS</option>
  <option value=\"BSM\">BSM</option>
  <option value=\"FMS\">FMS</option>
  <option value=\"HLM\">HLM</option>
  <option value=\"HRM\">HRM</option>
  <option value=\"MMS\">MMS</option>
  <option value=\"QSRM\">QSRM</option>
  <option value=\"RFSM\">RFSM</option>
  <option value=\"RMS\">RMS</option>
  <option value=\"SEM\">SEM</option>
</select></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>Roleplay Teammate #1<br></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"role_partner\" id=\"role_partner\" placeholder=\"Roleplay Partner (if applicable)\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px; font-weight:700;' class = 'signin-table'>Written Event</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><select style='width:100%'name='written' id='written'>
  <option value=\"Undecided\">- Pick One -</option>
  <option value=\"NONE\">NONE</option>
  <option value=\"BOR\">BOR</option>
  <option value=\"BMOR\">BMOR</option>
  <option value=\"FOR\">FOR</option>
  <option value=\"HTOR\">HTOR</option>
  <option value=\"SEOR\">SEOR</option>
  <option value=\"ENI\">ENI</option>
  <option value=\"ENPI\">ENPI</option>
  <option value=\"ENPF\">ENPF</option>
  <option value=\"ENW\">ENW</option>
  <option value=\"ENGB\">ENGB</option>
  <option value=\"IBP\">IBP</option>
  <option value=\"ADC\">ADC</option>
  <option value=\"FMP\">FMP</option>
  <option value=\"SEPP\">SEPP</option>
  <option value=\"FCE\">FCE</option>
  <option value=\"HTPS\">HTPS</option>
  <option value=\"PSE\">PSE</option>
</select></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>Written Teammate #1<br></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"writ_partner1\" id=\"writ_partner1\" placeholder=\"Written Partner #1 (if applicable)\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>Written Teammate #2<br></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"writ_partner2\" id=\"writ_partner2\" placeholder=\"Written Partner #2 (if applicable)\"></td>
			  			</tr>
			  		</table>
			  	</div>
			  </div>
			  <br>
			  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>ROOMING</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Below is <em>tentative</em> rooming registration. There are no guarantees for your final room.<br>Your roommates must be of the same gender.</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Roommate #1</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"states_room1\" id=\"states_room1\" placeholder=\"First and Last Name\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Roommate #2</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"states_room2\" id=\"states_room2\" placeholder=\"First and Last Name\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Roommate #3</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"states_room3\" id=\"states_room3\" placeholder=\"First and Last Name\"></td>
			  			</tr>
			  		</table>
			  	</div>
			  </div>
			  <br>
			  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>COMMUNICATIONS</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Please provide us with the following cellular information for in-conference communication.</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Cell Phone Number</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"cellphone\" id=\"cellphone\" placeholder=\"(###) ### ####\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Cell Phone Carrier</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'>
<select style='width:100%'name='cell_carrier' id='cell_carrier'>
  <option value=\"blank\">- Pick A Carrier -</option>
  <option value=\"None\">None</option>
  <option value=\"AT&T\">AT&T</option>
  <option value=\"Verizon\">Verizon</option>
  <option value=\"T-Mobile\">T-Mobile</option>
  <option value=\"Sprint\">Sprint</option>
  <option value=\"Virgin Mobile\">Virgin Mobile</option>
  <option value=\"Tracfone\">Tracfone</option>
  <option value=\"Metro PCS\">Metro PCS</option>
  <option value=\"Cricket\">Cricket</option>
  <option value=\"Nextel\">Nextel</option>
  <option value=\"Alltel\">Alltel</option>
  <option value=\"Ptel\">Ptel</option>
  <option value=\"Suncom\">Suncom</option>
  <option value=\"Qwest\">Qwest</option>
  <option value=\"U.S. Cellular\">U.S. Cellular</option>
  <option value=\"Boost\">Boost</option>
</select>
			  				</td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Text Updates at SVCDC?</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'>
<select style='width:100%'name='states_updates' id='states_updates'>
  <option value=\"blank\">- Text Updates? -</option>
  <option value=1>Yes</option>
  <option value=0>No</option>
</select>
			  				</td>
			  			</tr>
			  		</table>
			  	</div>
			  </div>
			  <br>
			  <hr>
			  <div style='width: 550px; margin: 0 auto; text-align:center; font-size: 16px;'>After clicking the confirm button below, you will be redirected to a registration packet. <span style='font-weight:400'>Please print and fill out the packet and turn it in to P4 or an MVDECA officer.</span></div>
			  <div style='text-align:center'><input type=submit class='btn btn-success' value=\"CONFIRM\"/></div>
			 </form>
		    </div>
			<SCRIPT type=text/javascript>
		<!--
			function validateUser()
			{
				retVal = true;
if (validateField('roleplay','written', 'role_partner', 'cellphone', 'cell_carrier', 'states_updates') == false)
 retVal=false;
				if(retVal == false)
				{
					alert('It looks like you have not signed up for a competition or have left a field blank. Please try again. NOTE: Remember to include a partner if you choose to do a TDM event.');
					return false;
				}
				return retVal;
			}
		//-->
		</SCRIPT>
		<SCRIPT>
			function validateField(fieldId,fieldId2,fieldId3,fieldId4,fieldId5,fieldId6) {
				fieldObj = document.getElementById(fieldId);
				fieldObj2 = document.getElementById(fieldId2);
				fieldObj3 = document.getElementById(fieldId3);
				fieldObj4 = document.getElementById(fieldId4);
				fieldObj5 = document.getElementById(fieldId5);
				fieldObj6 = document.getElementById(fieldId6);
				if (fieldObj.value == 'Undecided' || fieldObj2.value == 'Undecided' || fieldObj4.value == '' || fieldObj5.value == 'blank' || fieldObj6.value == 'blank') {
					return false;
				}
				else {
					return true;
				}
			}
		</SCRIPT>
			      ";
		      //}
		      //else {
			      echo"

			      <!--<div style = 'color: red; text-align:center; width: 400px; margin: 0 auto;'><img src = 'img/warning.png'/><br><br>It looks like your account has not yet been verified. Please show an electronic or paper version of your registration receipt to an MVDECA officer to verify your account. <span style='font-weight: 500'>You will not be able to register for SVLACE until your account gets verified.</span><a href='events.php' class='btn btn-default'>BACK TO EVENTS</a></div>-->";
		      //}

		echo"
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