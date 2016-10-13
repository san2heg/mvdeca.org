<?php
	session_start();
	include('session-expire.php');
	if ($_SESSION['signedin'] != "YES") {
		header("Location: signin.php");
	}
	else if ($_SESSION['lace'] != 0) {
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
				echo"<body onLoad=\"collapseAll()\" style=\"min-height: 2450px\">";
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
		
		    <div class = \"container\" style = \"height: 2400px\">
		      
		      <!-- id for each div will be different to account for different heights. Class will always, however, be page_component -->
		
			      <section id=\"header-slide-event\" data-type=\"background\" data-speed=\"10\">
			        <h2 class = \"header-slide-text-events\">EVENTS</h2>
			      </section>
		      <div id = 'destination1' class = 'subhead'>SVLACE CONFIRMATION</div>
		      <hr/>
		      ";
		      
		      //if ($_SESSION['verified'] == "") {
			    echo"
			  <div style='text-align:center; font-size: 15px; color:red'>Please read over the information below, fill out the registration fields, and confirm that you are attending SVLACE.</div>
			  <br>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>NAME:</span> Silicon Valley Leadership and Excellence Conference</div>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>DATES:</span> Friday, November 14 - Sunday, November 16</div>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>PLACE:</span> San Jose Airport Doubletree</div>
			  <div style='width: 550px; margin: 0 auto; text-align:left; font-size: 20px;'><span style='font-weight: 700'>PRICE:</span> $245 (housing inclusive)</div><br>
			  <hr>
			  
			<form method=post action=lace-process.php onSubmit=\"return validateUser();\">
						  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>HEALTH INFORMATION</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Please fill out the following health information accurately.<br>This information is to be used only in case of an emergency.</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>Meal Preference <span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><select style='width:100%'name='meal_pref' id='meal_pref'>
  <option value=\"no\">- Select Meal Preference -</option>
  <option value=\"V\">Vegetarian</option>
  <option value=\"VE\">Vegan</option>
  <option value=\"NONE\">No Preference</option>
</select></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>Medical Group Name <span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;' value = \"\" type = \"text\" name = \"med_group\" id=\"med_group\" placeholder=\"Medical Group Name\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>Policy Number <span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"policynum\" id=\"policynum\" placeholder=\"Policy Number\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>Medical Group Address <span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"med_address\" id=\"med_address\" placeholder=\"Medical Group Address\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>Emergency Contact Name <span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"emerg_name\" id=\"emerg_name\" placeholder=\"Emergency Contact Name\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>Emergency Contact Number <span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"emerg_number\" id=\"emerg_number\" placeholder=\"Emergency Contact Number\"></td>
			  			</tr>
			  
			  		</table>
			  	</div>
			  </div>
			  <br>
			  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>CLASSES</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Please tell us what your 3rd, 4th, and 5th period classes are.</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>3rd Period Class<span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"third_class\" id=\"third_class\" placeholder=\"3rd Period Class\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>4th Period Class<span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"fourth_class\" id=\"fourth_class\" placeholder=\"4th Period Class\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px' class = 'signin-table'>5th Period Class<span style='color:red'>*</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"fifth_class\" id=\"fifth_class\" placeholder=\"5th Period Class\"></td>
			  			</tr>
			  		</table>
			  	</div>
			  </div>
			  <br>
			  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>COMPETITIONS FOR THE FUTURE</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Below is a short form for which competitions you are currently interested in. There are <em>NO</em> competitive events at LACE. This is only for statistical information that we may use to help you succeed in the future. These are <em>NOT</em> your final competitions or teams for any future conferences.</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>What Roleplay Event are you interested in doing? <br><span style='color:red'>(Not final choice)</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><select style='width:100%'name='interest_roleplay' id='interest_roleplay'>
  <option value=\"Undecided\">- Undecided -</option>
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
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>Roleplay Teammate #1<br><span style='color:red'>(Not final choice)</span><br><span style='color:gray'>*Optional</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"role_partner\" id=\"role_partner\" placeholder=\"Roleplay Partner (if applicable)\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>What Written Event are you interested in doing? <br><span style='color:red'>(Not final choice)</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><select style='width:100%'name='interest_written' id='interest_written'>
  <option value=\"Undecided\">- Undecided -</option>
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
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>Written Teammate #1<br><span style='color:red'>(Not final choice)</span><br><span style='color:gray'>*Optional</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"writ_partner1\" id=\"writ_partner1\" placeholder=\"Written Partner #1 (if applicable)\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px; padding-top:10px;' class = 'signin-table'>Written Teammate #2<br><span style='color:red'>(Not final choice)</span><br><span style='color:gray'>*Optional</span></td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"writ_partner2\" id=\"writ_partner2\" placeholder=\"Written Partner #2 (if applicable)\"></td>
			  			</tr>
			  		</table>
			  	</div>
			  </div>
			  <br>
			  <div style='text-align:center; width: 600px; margin: 0 auto; font-size: 25px;'>ROOMING</div>
			  <div style='text-align:center; width: 600px; margin: 0 auto;'>Below is <em>tentative</em> rooming registration. There are no guarantees for your final room. If you do not wish to fill out rooming at this time, leave the following section blank.<br>Your roommates must be of the same gender.</div>
			  <br>
			  <div class = \"signin-box\" style = 'width: 600px'>
			  	<div>
			  		<table>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Roommate #1</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"lace_roomate1\" id=\"lace_roomate1\" placeholder=\"First and Last Name\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Roommate #2</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"lace_roomate2\" id=\"lace_roomate2\" placeholder=\"First and Last Name\"></td>
			  			</tr>
			  			<tr class = 'signin-row'>
			  				<td style = 'padding-left: 20px;' class = 'signin-table'>Roommate #3</td>
			  				<td style = 'padding-right: 20px' class = 'signin-table'><input style='width: 300px;'value = \"\" type = \"text\" name = \"lace_roomate3\" id=\"lace_roomate3\" placeholder=\"First and Last Name\"></td>
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
if (validateField('meal_pref','med_group','policynum','med_address','emerg_name','emerg_number') == false)
 retVal=false;
				if(retVal == false)
				{
					alert('It looks like you left a registration field blank. Please try again.');
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
				if (fieldObj.value == 'no' || fieldObj2.value == '' || fieldObj3.value == '' || fieldObj4.value == '' || fieldObj5.value == '' || fieldObj6.value == '') {
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