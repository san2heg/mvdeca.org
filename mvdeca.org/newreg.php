

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	<head>
		<title>MVDECA Registration - created by phpFormGenerator</title>
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
						fieldObj.setAttribute("class","mainFormError");
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
						fieldObj.setAttribute("class","mainFormError");
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
					fieldObj.setAttribute("class","mainFormError");
					fieldObj.setAttribute("className","mainFormError");
					fieldObj.focus();
					return false;
				}
			}
		//-->
		</SCRIPT>
		<!-- end validate -->




	</head>

	<body onLoad="collapseAll()">

	<div id="mainForm">




		<div id="formHeader">
				<h2 class="formInfo">MVDECA Registration</h2>
				<p class="formInfo"></p>
		</div>


		<BR/><!-- begin form -->
		<form method=post enctype=multipart/form-data action=processor.php onSubmit="return validatePage3();"><ul class=mainForm id="mainForm_1">

				<li class="mainForm" id="fieldBox_1">
					<label class="formFieldQuestion">FIRST NAME&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter First Name</span></a></label><input class=mainForm type=text name=field_1 id=field_1 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_2">
					<label class="formFieldQuestion">LAST NAME&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Last Name</span></a></label><input class=mainForm type=text name=field_2 id=field_2 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_3">
					<label class="formFieldQuestion">STUDENT ID&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Student ID</span></a></label><input class=mainForm type=text name=field_3 id=field_3 size='7' value=''></li>

				<li class="mainForm" id="fieldBox_4">
					<label class="formFieldQuestion">EMAIL ADDRESS&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Student Email Address</span></a></label><input class=mainForm type=email name=field_4 id=field_4 size=20 value="" style="background-image:url(imgs/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></li>

				<li class="mainForm" id="fieldBox_5">
					<label class="formFieldQuestion">PASSWORD&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Password</span></a></label><input class=mainForm type=password name=field_5 id=field_5 size='20' value=''></li>
		
		
		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage1()
			{
				retVal = true;
				if (validateField('field_1','fieldBox_1','text',1) == false)
 retVal=false;
if (validateField('field_2','fieldBox_2','text',1) == false)
 retVal=false;
if (validateField('field_3','fieldBox_3','text',1) == false)
 retVal=false;
if (validateField('field_4','fieldBox_4','email',1) == false)
 retVal=false;
if (validateField('field_5','fieldBox_5','password',1) == false)
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



		<!-- next page buttons --><li class="mainForm">
					<input type=button onclick="if (validatePage1()) { collapseElem('mainForm_1'); expandElem('mainForm_2');}" class="mainForm" value="Go to page 2"/>	
				</li>
		<!-- close the display stuff for this page -->
		</ul><ul class=mainForm id="mainForm_2">

				<li class="mainForm" id="fieldBox_6">
					<label class="formFieldQuestion">GENDER&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Gender</span></a></label><select class=mainForm name=field_6 id=field_6><option value=''></option><option value="Female">Female</option><option value="Male">Male</option></select></li>

				<li class="mainForm" id="fieldBox_7">
					<label class="formFieldQuestion">BIRTHDAY&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Birthday</span></a></label><input type=text  name=field_7 id=field_7 value=""><button type=reset class=calendarStyle id=fieldDateTrigger_7></button><SCRIPT type='text/javascript'>   Calendar.setup({
								inputField     :    "field_7",   
								ifFormat       :    "%m/%d/%Y",   
								showsTime      :    false,          
								button         :    "fieldDateTrigger_7",
								singleClick    :    true,           
								step           :    1                
								});</SCRIPT></li>

				<li class="mainForm" id="fieldBox_8">
					<label class="formFieldQuestion">GRADUATION YEAR&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Graduation Year</span></a></label><select class=mainForm name=field_8 id=field_8><option value=''></option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option></select></li>

				<li class="mainForm" id="fieldBox_9">
					<label class="formFieldQuestion">MEMBERSHIP STATUS&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Membership Status</span></a></label><select class=mainForm name=field_9 id=field_9><option value=''></option><option value="New">New</option><option value="Returning">Returning</option></select></li>

				<li class="mainForm" id="fieldBox_10">
					<label class="formFieldQuestion">STUDENT CELLPHONE&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Student Cellphone Number</span></a></label><input class=mainForm type=text name=field_10 id=field_10 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_11">
					<label class="formFieldQuestion">CAN YOU TEXT?&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Can You Text?</span></a></label><span><input class=mainForm type=checkbox name=field_11[] id=field_11_option_1 value="Yes" /><label class=formFieldOption for="field_11_option_1">Yes</label></span></li>

				<li class="mainForm" id="fieldBox_12">
					<label class="formFieldQuestion">T-SHIRT SIZE&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>T-Shirt Size</span></a></label><select class=mainForm name=field_12 id=field_12><option value=''></option><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select></li>
		
		
		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage2()
			{
				retVal = true;
				if (validateField('field_6','fieldBox_6','menu',1) == false)
 retVal=false;
if (validateDate('field_7','fieldBox_7','date',1,'','') == false)
 retVal=false;
if (validateField('field_8','fieldBox_8','menu',1) == false)
 retVal=false;
if (validateField('field_9','fieldBox_9','menu',1) == false)
 retVal=false;
if (validateField('field_10','fieldBox_10','text',1) == false)
 retVal=false;
if (validateField('field_11','fieldBox_11','checkbox',1) == false)
 retVal=false;
if (validateField('field_12','fieldBox_12','menu',1) == false)
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



		<!-- next page buttons --><li class="mainForm">
					<input type=button onclick="if (validatePage2()) { collapseElem('mainForm_2'); expandElem('mainForm_3');}" class="mainForm" value="Go to page 3"/>	
				</li>
		<!-- close the display stuff for this page -->
		</ul><ul class=mainForm id="mainForm_3">

				<li class="mainForm" id="fieldBox_13">
					<label class="formFieldQuestion">PARENT FIRST NAME&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Parent First Name</span></a></label><input class=mainForm type=text name=field_13 id=field_13 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_14">
					<label class="formFieldQuestion">PARENT LAST NAME&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Parent Last Name</span></a></label><input class=mainForm type=text name=field_14 id=field_14 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_15">
					<label class="formFieldQuestion">PARENT RELATION&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Parent Relation</span></a></label><select class=mainForm name=field_15 id=field_15><option value=''></option><option value="Mother">Mother</option><option value="Father">Father</option><option value="Guardian">Guardian</option></select></li>

				<li class="mainForm" id="fieldBox_16">
					<label class="formFieldQuestion">PARENT EMAIL ADDRESS&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Parent Email Address</span></a></label><input class=mainForm type=email name=field_16 id=field_16 size=20 value="" style="background-image:url(imgs/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;"></li>

				<li class="mainForm" id="fieldBox_17">
					<label class="formFieldQuestion">PARENT CELLPHONE NUMBER&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Parent Cellphone Number</span></a></label><input class=mainForm type=text name=field_17 id=field_17 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_18">
					<label class="formFieldQuestion">HOME PHONE&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Home Phone Number</span></a></label><input class=mainForm type=text name=field_18 id=field_18 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_19">
					<label class="formFieldQuestion">WANT PARENT UPDATES?&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Want Parent Updates?</span></a></label><span><input class=mainForm type=checkbox name=field_19[] id=field_19_option_1 value="Yes, I want parent updates." /><label class=formFieldOption for="field_19_option_1">Yes, I want parent updates.</label></span></li>

				<li class="mainForm" id="fieldBox_20">
					<label class="formFieldQuestion">HOME ADDRESS&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Home Address</span></a></label><input class=mainForm type=text name=field_20 id=field_20 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_21">
					<label class="formFieldQuestion">CITY&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter City</span></a></label><input class=mainForm type=text name=field_21 id=field_21 size='20' value=''></li>

				<li class="mainForm" id="fieldBox_22">
					<label class="formFieldQuestion">STATE&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter State</span></a></label><select class=mainForm name=field_22 id=field_22><option value=''> </option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></SELECT></li>

				<li class="mainForm" id="fieldBox_23">
					<label class="formFieldQuestion">ZIP CODE&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Enter Zip Code</span></a></label><input class=mainForm type=text name=field_23 id=field_23 size='20' value=''></li>
		
		
		<!-- end of this page -->

		<!-- page validation -->
		<SCRIPT type=text/javascript>
		<!--
			function validatePage3()
			{
				retVal = true;
				if (validateField('field_13','fieldBox_13','text',1) == false)
 retVal=false;
if (validateField('field_14','fieldBox_14','text',1) == false)
 retVal=false;
if (validateField('field_15','fieldBox_15','menu',1) == false)
 retVal=false;
if (validateField('field_16','fieldBox_16','email',1) == false)
 retVal=false;
if (validateField('field_17','fieldBox_17','text',1) == false)
 retVal=false;
if (validateField('field_18','fieldBox_18','text',1) == false)
 retVal=false;
if (validateField('field_19','fieldBox_19','checkbox',1) == false)
 retVal=false;
if (validateField('field_20','fieldBox_20','text',1) == false)
 retVal=false;
if (validateField('field_21','fieldBox_21','text',1) == false)
 retVal=false;
if (validateField('field_22','fieldBox_22','state',1) == false)
 retVal=false;
if (validateField('field_23','fieldBox_23','text',1) == false)
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



		<!-- next page buttons --><li class="mainForm">
					<input id="saveForm" class="mainForm" type="submit" value="Submit" />
				</li>

			</form>
			<!-- end of form -->
		<!-- close the display stuff for this page -->
		</ul></div><div id="footer"><p class="footer"><a class=footer href=http://phpformgen.sourceforge.net>Generated by phpFormGenerator</a></p></div>

	</body>
	</html>