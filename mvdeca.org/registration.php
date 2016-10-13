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
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"><link href="style.css" rel="stylesheet" type="text/css">
		<!-- calendar stuff -->
		      <link rel="stylesheet" type="text/css" href="calendar/calendar-blue2.css" />
		      <script type="text/javascript" src="calendar/calendar.js"></script>
		      <script type="text/javascript" src="calendar/calendar-en.js"></script>
		      <script type="text/javascript" src="calendar/calendar-setup.js"></script>
		<!-- END calendar stuff -->

	    <!-- expand/collapse function -->
	    <SCRIPT type=text/javascript>
		<!--
		function collapseElem(obj)
		{
			var el = document.getElementById(obj);
			el.style.display = 'none';
		}


		function expandElem(obj)
		{
			var el = document.getElementById(obj);
			el.style.display = '';
		}


		//-->
		</SCRIPT>
		<!-- expand/collapse function -->


		<!-- expand/collapse function -->
		    <SCRIPT type=text/javascript>
			<!--

			// collapse all elements, except the first one
			function collapseAll()
			{
				var numFormPages = 3;

				for(i=2; i <= numFormPages; i++)
				{
					currPageId = ('mainForm_' + i);
					collapseElem(currPageId);
				}
			}


			//-->
			</SCRIPT>
		<!-- expand/collapse function -->


		 <!-- validate -->
		<SCRIPT type=text/javascript>
		<!--
			function validateField(fieldId, fieldBoxId, fieldType, required)
			{
				fieldBox = document.getElementById(fieldBoxId);
				fieldObj = document.getElementById(fieldId);

				if(fieldType == 'text'  ||  fieldType == 'textarea'  ||  fieldType == 'password'  ||  fieldType == 'file'  ||  fieldType == 'phone'  || fieldType == 'website')
				{	
					if(required == 1 && fieldObj.value == '')
					{
						fieldObj.setAttribute("class","mainFormError registration-field");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;					
					}

				}


				else if(fieldType == 'menu'  || fieldType == 'country'  || fieldType == 'state')
				{	
					if(required == 1 && fieldObj.selectedIndex == 0)
					{				
						fieldObj.setAttribute("class","mainFormError");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;					
					}

				}


				else if(fieldType == 'email')
				{	
					if((required == 1 && fieldObj.value=='')  ||  (fieldObj.value!=''  && !validate_email(fieldObj.value)))
					{				
						fieldObj.setAttribute("class","mainFormError registration-field");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;					
					}

				}
			

				else if(fieldType == 'zip')
				{	
					if((required == 1 && fieldObj.value=='')  ||  (fieldObj.value!=''  && !validate_zip(fieldObj.value)))
					{				
						fieldObj.setAttribute("class","mainFormError registration-field");
						fieldObj.setAttribute("className","mainFormError");
						fieldObj.focus();
						return false;					
					}

				}


			}

			function validate_email(emailStr)
			{		
				apos=emailStr.indexOf("@");
				dotpos=emailStr.lastIndexOf(".");

				if (apos<1||dotpos-apos<2) 
				{
					return false;
				}
				else
				{
					return true;
				}
			}
			
			function validate_zip(zipStr) {
				if (zipStr.length == 5) {
					return true;
				}
				else {
					return false;
				}
			}


			function validateDate(fieldId, fieldBoxId, fieldType, required,  minDateStr, maxDateStr)
			{
				retValue = true;

				fieldBox = document.getElementById(fieldBoxId);
				fieldObj = document.getElementById(fieldId);	
				dateStr = fieldObj.value;


				if(required == 0  && dateStr == '')
				{
					return true;
				}


				if(dateStr.charAt(2) != '/'  || dateStr.charAt(5) != '/' || dateStr.length != 10)
				{
					retValue = false;
				}	

				else	// format's okay; check max, min
				{
					currDays = parseInt(dateStr.substr(0,2),10) + parseInt(dateStr.substr(3,2),10)*30  + parseInt(dateStr.substr(6,4),10)*365;
					//alert(currDays);

					if(maxDateStr != '')
					{
						maxDays = parseInt(maxDateStr.substr(0,2),10) + parseInt(maxDateStr.substr(3,2),10)*30  + parseInt(maxDateStr.substr(6,4),10)*365;
						//alert(maxDays);
						if(currDays > maxDays)
							retValue = false;
					}

					if(minDateStr != '')
					{
						minDays = parseInt(minDateStr.substr(0,2),10) + parseInt(minDateStr.substr(3,2),10)*30  + parseInt(minDateStr.substr(6,4),10)*365;
						//alert(minDays);
						if(currDays < minDays)
							retValue = false;
					}
				}

				if(retValue == false)
				{
					fieldObj.setAttribute("class","mainFormError registration-field");
					fieldObj.setAttribute("className","mainFormError");
					fieldObj.focus();
					return false;
				}
			}
		//-->
		</SCRIPT>
		<!-- end validate -->

    <title>Monta Vista DECA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/push-menu.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <!--<link href="dist/css/base.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  	<body onLoad="collapseAll()" style = "min-height: 200px;">

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
	<!--fixednavbar-->
	<?php
	include 'navbar.php';
	?>
    <!-- END NAVIGATION -->
	<div class = "container">
		
      <section id="header-slide" style="  background: url(img/registration_header.jpg) 50% 0 repeat fixed; background-size: auto 750px;" data-type="background" data-speed="6">
        <h2 class = "header-slide-text"style = "width: 500px">REGISTRATION</h2>
      </section>
	  <form method=post enctype=multipart/form-data action=processor.php onSubmit="return validatePage3();"><ul class=mainForm id="mainForm_1">
      <div id = "destination1" class = "subhead">STEP 1: CREATE AN ACCOUNT</div>
      <hr/>
	  	<div id = "intro" class = "page_component" style = "height: 520px">
		        <div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						<li class="mainForm" id="fieldBox_1">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">FIRST NAME</label></td>
			                  <td>
								  <input type=text class="mainForm registration-field" style = "width:325px" placeholder = "Enter First Name" type=text name=firstname id=firstname size='20' value=''>
			                  </td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_2">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">LAST NAME</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter Last Name" name=lastname id=lastname size='20' value=''></td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_3">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">STUDENT ID</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter Student ID" maxlength="7" name=studentid id=studentid size='7' value=''></td>
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
				<div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						<li class="mainForm" id="fieldBox_4">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">EMAIL ADDRESS</label></td>
			                  <td>
								  <input type=email class="mainForm registration-field" style = "width:325px" placeholder="Enter Student Email" name=email id=email size=20 value="" style="background-image:url(imgs/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;">			                
							  </td>
			                </tr>
						</li>
						  <li class="mainForm" id="fieldBox_5">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">PASSWORD</label></td>
			                  <td><input type=password class="mainForm registration-field" style = "width:325px" placeholder="Enter Password" name=password id=password size='20' value=''></td>
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
<li class="mainForm">
					<input type=button onclick="if (validatePage1()) { collapseElem('mainForm_1'); expandElem('mainForm_2');}" class="mainForm btn btn-primary" value="NEXT PAGE"/>	
				</li>
		</div>
		
		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage1()
			{
				retVal = true;
				if (validateField('firstname','fieldBox_1','text',1) == false)
 retVal=false;
if (validateField('lastname','fieldBox_2','text',1) == false)
 retVal=false;
if (validateField('studentid','fieldBox_3','text',1) == false)
 retVal=false;
if (validateField('email','fieldBox_4','email',1) == false)
 retVal=false;
if (validateField('password','fieldBox_5','password',1) == false)
 retVal=false;

				if(retVal == false)
				{
					alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
					return false;
				}
				return retVal;
			}
		//-->
		</SCRIPT>

		<!-- end page validaton -->



		<!-- next page buttons -->
		<!-- close the display stuff for this page -->
		<!-- next page -->
	</ul><ul class=mainForm id="mainForm_2">
      <div id = "destination1" class = "subhead">STEP 2: STUDENT INFORMATION</div>
      <hr/>
	  	<div id = "intro" class = "page_component" style = "height: 630px">
		        <div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						  <li class="mainForm" id="fieldBox_6">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">GENDER</label></td>
			                  <td>
								  <select class=mainForm name=gender id=gender><option value=''></option><option value="Female">Female</option><option value="Male">Male</option></select>
			                  </td>
			                </tr>
						</li>
						  <li class="mainForm" id="fieldBox_7">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">BIRTHDAY</label></td>
			                  <td><input type=text  class = "mainForm registration-field" style = "width: 325px" name=birthday id=birthday value="" placeholder="MM/DD/YYYY"></td>
			                </tr>
						</li>
						  <li class="mainForm" id="fieldBox_8">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">GRADUATION YEAR</label></td>
			                  <td><select class=mainForm name=gradyear id=gradyear><option value=''></option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option></select></td>
			                </tr>
						</li>
						  <li class="mainForm" id="fieldBox_9">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">MEMBERSHIP STATUS</label></td>
			                  <td><select class=mainForm name=status id=status><option value=''></option><option value="New">New</option><option value="Returning">Returning</option></select></td>
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
				<div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						  <li class="mainForm" id="fieldBox_10">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">STUDENT CELLPHONE</label></td>
			                  <td>
								 <input type=text class="mainForm registration-field" style = "width:325px" placeholder="(###) - ### - ####" name=cellphone id=cellphone size='20' value=''>     
							  </td>
			                </tr>
						</li>
						  <li class="mainForm" id="fieldBox_11">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">CAN YOU TEXT?</label></td>
			                  <td><span><input class=mainForm type=checkbox name=cantext[] id=field_11_option_1 value="Yes" /><span class = "p-text-register">Yes, I can text.</span></span></td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_12">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">T-SHIRT SIZE</label></td>
			                  <td><select class=mainForm name=tshirtsize id=tshirtsize><option value=''></option><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select>			                
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
<li class="mainForm">
					<input type=button onclick="if (validatePage2()) { collapseElem('mainForm_2'); expandElem('mainForm_3');}" class="mainForm btn btn-primary" value="NEXT PAGE"/>	
				</li>
		</div>
		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage2()
			{
				retVal = true;
				if (validateField('gender','fieldBox_6','menu',1) == false)
 retVal=false;
if (validateDate('birthday','fieldBox_7','date',1,'','') == false)
 retVal=false;
if (validateField('gradyear','fieldBox_8','menu',1) == false)
 retVal=false;
if (validateField('status','fieldBox_9','menu',1) == false)
 retVal=false;
if (validateField('cellphone','fieldBox_10','text',1) == false)
 retVal=false;
if (validateField('cantext','fieldBox_11','checkbox',1) == false)
 retVal=false;
if (validateField('tshirtsize','fieldBox_12','menu',1) == false)
 retVal=false;

				if(retVal == false)
				{
					alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
					return false;
				}
				return retVal;
			}
		//-->
		</SCRIPT>

		<!-- end page validaton -->



		<!-- next page buttons -->
		<!-- close the display stuff for this page -->
		</ul><ul class=mainForm id="mainForm_3">
      <div id = "destination1" class = "subhead">STEP 3: PARENT INFORMATION</div>
      <hr/>
	  	<div id = "intro" class = "page_component" style = "height: 840px;">
		        <div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						  <li class="mainForm" id="fieldBox_13">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">PARENT FIRST NAME</label></td>
			                  <td>
								  <input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter Parent's First Name" name=parent_firstname id=parent_firstname size='20' value=''>
			                  </td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_14">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">PARENT LAST NAME</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter Parent's Last Name" name=parent_lastname id=parent_lastname size='20' value=''></td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_15">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">PARENT RELATION</label></td>
			                  <td><select class=mainForm name=parent_relation id=parent_relation><option value=''></option><option value="Mother">Mother</option><option value="Father">Father</option><option value="Guardian">Guardian</option></select></td>
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
				<div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						  <li class="mainForm" id="fieldBox_16">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">PARENT EMAIL ADDRESS</label></td>
			                  <td>
								 <input type=email class="mainForm registration-field" style = "width:325px" placeholder="Enter Parent's Email" name=parent_email id=parent_email size=20 value="" style="background-image:url(imgs/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;">     
							  </td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_17">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">PARENT CELLPHONE NUMBER</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="(###) - ### - ####" name=parent_cellphone id=parent_cellphone size='20' value=''></td>			                
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_18">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">HOME PHONE</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="(###) - ### - ####" name=homephone id=homephone size='20' value=''></td>		                
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_19">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">WANT PARENT UPDATES?</label></td>
			                  <td><span><input class=mainForm type=checkbox name=wantupdates[] id=field_19_option_1 value="Yes, I want parent updates." /><span class = "p-text-register">Yes, I want parent updates.</span></span></td>		                
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
				<div class = "container-subset">
		          <div class="registration panel panel-default">
		            <table class = "table">
		              <tbody>
						  <li class="mainForm" id="fieldBox_20">
			                <tr>
			                  <td class = "left-register" style = "width: 50%; padding-top: 11px;"><label class="formFieldQuestion">HOME ADDRESS</label></td>
			                  <td>
								  <input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter Home Address" name=address id=address size='40' value=''>
							  </td>
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_21">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">CITY</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter City" name=city id=city size='20' value=''></td>			                
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_22">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">STATE</label></td>
			                  <td><select class=mainForm name=state id=state><option value=''> </option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></SELECT></td>		                
			                </tr>
						</li>
						<li class="mainForm" id="fieldBox_23">
			                <tr>
			                  <td class = "left-register" style = "padding-top: 11px;"><label class="formFieldQuestion">ZIP CODE</label></td>
			                  <td><input type=text class="mainForm registration-field" style = "width:325px" placeholder="Enter Zip Code" name=zip id=zip size='20' value=''></td>		                
			                </tr>
						</li>
		              </tbody>
		            </table>
		          </div>
		        </div>
				<li class="mainForm">
					<input id="saveForm" class="mainForm btn btn-success" type="submit" value="SUBMIT" />
				</li>	
		</div>

		</ul>
		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage3()
			{
				retVal = true;
				if (validateField('parent_firstname','fieldBox_13','text',1) == false)
 retVal=false;
if (validateField('parent_lastname','fieldBox_14','text',1) == false)
 retVal=false;
if (validateField('parent_relation','fieldBox_15','menu',1) == false)
 retVal=false;
if (validateField('parent_email','fieldBox_16','email',1) == false)
 retVal=false;
if (validateField('parent_cellphone','fieldBox_17','text',1) == false)
 retVal=false;
if (validateField('homephone','fieldBox_18','text',1) == false)
 retVal=false;
if (validateField('wantupdates','fieldBox_19','checkbox',1) == false)
 retVal=false;
if (validateField('address','fieldBox_20','text',1) == false)
 retVal=false;
if (validateField('city','fieldBox_21','text',1) == false)
 retVal=false;
if (validateField('state','fieldBox_22','state',1) == false)
 retVal=false;
if (validateField('zip','fieldBox_23','zip',1) == false)
 retVal=false;

				if(retVal == false)
				{
					alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
					return false;
				}
				return retVal;
			}
		//-->
		</SCRIPT>

		<!-- end page validaton -->



		<!-- next page buttons -->

			</form>
			<!-- end of form -->
		<!-- close the display stuff for this page -->
		</ul>
    <!-- FOOTER -->
    <?php>
    include 'footer.html';
    ?>
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
	<script src="js/jquery.rsv-2.5.1.js"></script>

	</body></html>
