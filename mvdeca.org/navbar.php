<?php
session_start();
include('session-expire.php');
if ($_SESSION['signedin'] === "YES") {
	echo "<div id = 'header_nav' data-spy = 'affix' class='navbar navbar-default navbar-fixed-top' role='navigation' >
	      <h2 id = 'title' class='navbar-brand' style='font-size: 32px'><a href='index.php' class = 'title_link' >MONTA VISTA DECA</a></h2>
	      <div id = 'header_nav2' class='navbar-collapse collapse'>
	        <ul class='nav navbar-nav navbar-left'>
	            <li style = 'padding-right: 8px;'><a class = 'left-top leftmost' href='about.php'>ABOUT</a></li>
	            <li style = 'padding-right: 8px'><a class = 'left-top' href='competitions.php'>COMPETITIONS</a></li>
	            <li style = 'padding-right: 8px'><a class = 'left-top' href='community.php'>COMMUNITY</a></li>
	            <li style = 'padding-right: 8px'><a class = 'left-top' href='events.php'>EVENTS</a></li>
	            <li style = 'padding-right: 8px; visibility: hidden;'><a class = 'left-top hiddenbtn' href = 'profile.php' >". $_SESSION['name'] ."</a></li>
	            <li style = 'padding-right: 8px; visibility: hidden;'><a style = 'color: #000080' class = 'left-top hiddenbtn' href='logout.php'>SIGN OUT</a></li>
	            <!--<li style = 'padding-right: 0px'>
	              <div class='buttons'>
	                  <button class='nav-toggler toggle-slide-left'>Slide Menu Left</button>
	              </div><!-- /buttons 
	            </li>-->
	        </ul>
	        <ul class='nav navbar-nav navbar-right'>
	          <!--
	            <li style = 'padding-right: 8px'>
	              <input type='text' placeholder='Email' class='form-control'>
	            </li>
	            <li style = 'padding-right: 8px'> 
	              <input type='password' placeholder='Password' class='form-control'>
	            </li>
	          -->
	            <li style = 'padding-right: 0px'><a class = 'right-top' href='svcdc-confirmation.php' style = 'color: #5A7CC2; '>ATTEND SVCDC</a></li>
	            <li>
	              <img class = 'divider' src='img/vertical_divider.png'>
	            </li> 
	            <li>
			      <button style = 'margin-right: 10px;' class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu2' data-toggle='dropdown'>"
			        . $_SESSION['email'] ."
			        <span class='caret'></span>
			      </button>
			      <ul class='dropdown-menu' role='menu' aria-labelledby='dropdownMenu2' style = 'top:60px'>
			        <li role='presentation' class='dropdown-header'>Signed in as <span style = 'font-weight:600'>". $_SESSION['name'] ."&nbsp". $_SESSION['lastname'] ."<span style = 'font-weight:700; color:red;'>". $_SESSION['verified'] ."</span></span></li>
					<hr class = 'dropdown-divider' >
			        <li class = 'divider-div' role='presentation'><a style='color:rgb(0,82,155);'role='menuitem' tabindex='-1' href='svcdc-confirmation.php'>SIGN UP FOR SVCDC!</a></li>
					<hr class = 'dropdown-divider' >

			        <li class = 'divider-div' role='presentation'><a role='menuitem' tabindex='-1' href='profile.php'>Profile</a></li>
			        <li class = 'divider-div' role='presentation'><a role='menuitem' tabindex='-1' href='password-reset.php'>Change Password</a></li>
					<hr class = 'dropdown-divider' >
			        <li class = 'divider-div' role='presentation'><a target=\"_blank\" role='menuitem' tabindex='-1' href='competitionuniversity.php'>Competition University</a></li>
			        ";
			        if ($_SESSION['compu_user'] != "") {
			        echo"<li style = 'padding-left:20px;padding-right:20px;'class = 'divider-div' role='presentation'><span style='color:#939393;'>USER: <span style='color:black'>". $_SESSION['compu_user'] ."</span></span></li>
			        <li style = 'padding-left:20px;padding-right:20px;'class = 'divider-div' role='presentation'><span style='color:#939393;'>PASS: <span style='color:black'>". $_SESSION['compu_pass'] ."</span></span></li>";
			        }
			        else {
				        echo"<li style = 'padding-left:20px;padding-right:20px;'class = 'divider-div' role='presentation'><span style='color:red;'>Looks like you don't have a CompU account yet. Please talk to an officer.</span></li>";
			        }
			        echo"
			        <!--<li class = 'divider-div' role='presentation'><a role='menuitem' tabindex='-1' href='volunteering.php'>Volunteering</a></li>-->
					<hr style='margin-top:10px' class = 'dropdown-divider' >
			        <li class = 'divider-div' role='presentation'><a role='menuitem' tabindex='-1' href='logout.php'>SIGN OUT</a></li>
			        <!--
			        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Another action</a></li>
			        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Something else here</a></li>
			        <li role='presentation' class='divider'></li>
			        <li role='presentation' class='dropdown-header'>Dropdown header</li>
			        <li role='presentation'><a role='menuitem' tabindex='-1' href='#'>Separated link</a></li>
			        -->
			      </ul>
				</li>
	            <li><a href=''></a></li>
	            <li><a href=''></a></li>  
	        </ul>
	      </div>
	    </div>";
}
else {
	echo "<div id = 'header_nav' data-spy = 'affix' class='navbar navbar-default navbar-fixed-top' role='navigation' >
	      <h2 id = 'title' class='navbar-brand' style='font-size: 32px'><a href='index.php' class = 'title_link' >MONTA VISTA DECA</a></h2>
	      <div id = 'header_nav2' class='navbar-collapse collapse'>
	        <ul class='nav navbar-nav navbar-left'>
	            <li style = 'padding-right: 8px;'><a class = 'left-top leftmost' href='about.php'>ABOUT</a></li>
	            <li style = 'padding-right: 8px'><a class = 'left-top' href='competitions.php'>COMPETITIONS</a></li>
	            <li style = 'padding-right: 8px'><a class = 'left-top' href='community.php'>COMMUNITY</a></li>
	            <li style = 'padding-right: 8px'><a class = 'left-top' href='events.php'>EVENTS</a></li>
	            <li style = 'padding-right: 8px; visibility: hidden;'><a class = 'left-top hiddenbtn' href = 'signin.php' >SIGN IN</a></li>
	            <li style = 'padding-right: 8px; visibility: hidden;'><a style = 'color: #000080' class = 'left-top hiddenbtn' href='registration.php'>JOIN NOW!</a></li>
	            <!--<li style = 'padding-right: 0px'>
	              <div class='buttons'>
	                  <button class='nav-toggler toggle-slide-left'>Slide Menu Left</button>
	              </div><!-- /buttons 
	            </li>-->
	        </ul>
	        <ul class='nav navbar-nav navbar-right'>
	          <!--
	            <li style = 'padding-right: 8px'>
	              <input type='text' placeholder='Email' class='form-control'>
	            </li>
	            <li style = 'padding-right: 8px'> 
	              <input type='password' placeholder='Password' class='form-control'>
	            </li>
	          -->
	            <li style = 'padding-right: 0px'><a class = 'right-top' href='index.php#destination1'>WHAT IS DECA?</a></li>
	            <li style = 'padding-right: 0px'><a class = 'right-top' href='events.php#svcdc' style = 'color: #5A7CC2; '>SVCDC</a></li>
	            <li>
	              <img class = 'divider' src='img/vertical_divider.png'>
	            </li> 
	            <li style = 'padding-right: 8px'>
	              <button type='button' class='btn btn-default navbtn' data-toggle='tooltip' data-placement='bottom' title='COMING SOON' onclick='window.location=\"signin.php\"'>SIGN IN</button>
	            </li>
	            <li>
	              <button onclick='window.location=\"registration.php\"' type='button' class='btn btn-primary navbtn'>JOIN NOW!</button>
	            </li>
	            <li><a href=''></a></li>
	            <li><a href=''></a></li>  
	        </ul>
	      </div>
	    </div>";
}

?>