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
    <!--<link href="dist/css/base.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style = "min-height: 200px">

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

      <section id="header-slide-comps" data-type="background" data-speed="10">
        <h2 class = "header-slide-text-comps">COMPETITIONS</h2>
      </section>

      <div id = "destination1" class = "subhead" style = "padding-top: 0px; padding-bottom: 10px"></div>
      <hr/>
      
      <div id = "intro" class = "page_component" style = "height: 7150px; margin: 0 auto; width: 1050px;">
        <!-- Always begin each block with the two lines that follow: -->
        <div id = "sidebar">
        	<ul class = "nav nav-pills nav-stacked">
	        	<li><a id = "nav1" class = "scroll active pill" href = "#overview">OVERVIEW</a></li>
        		<li><h2 style = "font-size: 16px; padding-right:14px">ROLEPLAY EVENTS</h2></li>
        		<hr style = " margin-right:14px"/>
	        	<li><a id = "nav2" class = "scroll pill"  href = "#principles">PRINCIPLES</a></li>
	        	<li><a id = "nav3" class = "scroll pill"  href = "#tdm">TEAM DECISION MAKING</a></li>
	        	<li><a id = "nav4" class = "scroll pill"  href = "#series">SERIES</a></li>
        		<li><h2 style = "font-size: 16px; padding-right:14px">WRITTEN EVENTS</h2></li>
        		<hr style = " margin-right:14px"/>
	        	<li><a id = "nav5" class = "scroll pill"  href = "#or">OPERATIONS RESEARCH</a></li>
	        	<li><a id = "nav6" class = "scroll pill"  href = "#entre">ENTREPRENEURSHIP</a></li>
	        	<li><a id = "nav7" class = "scroll pill"  href = "#marketing">MARKETING REP</a></li>
	        	<li><a id = "nav8" class = "scroll pill"  href = "#online">ONLINE EVENTS</a></li>
        	</ul>
        </div>
        <div id = "main">
 <section id="docs-content" class="" style="color: #000000;">

		        	<div id="overview" style="padding-bottom:60px" data-target="principles"> 
		        		<h2 class = "headings"> Overview</h2>
		        		<p id = "#p1">  The MVDECA competitions program trains our members, perfecting their writing skills and presentation abilities. The four conferences throughout the year allow members to gain an abundance of competitive experience in both written plan events and roleplay events. Members of DECA carry their skills with them outside of just the DECA and school environment - they stand out as more confident, innovative, successful individuals because of the training they receive in DECA. Most importantly, the events members train for in DECA provide them with valuable exposure that will prove to be priceless as they go out into the real world. </p>
		        	</div>
					<hr style="border-color:#D0D0D0;">
		        	<div id="principles" style="padding-bottom:60px" data-target="principles"> 
		        		<h2 class = "headings"> Principles</h2>
		        		<p> The Principles of Business Administration events are individual events for first-year members only. All four Principles events focus on the foundations of business while introducing concepts from DECA’s four main career clusters: finance, hospitality, marketing, and business management. Principles events form the basis of all of DECA’s other competitive events.</p>

		        		<div class="row">
							<div class="twelve columns">
								<h4 class="lead">Principles Events</h4>
								<div class = "panel panel-default">
								<table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Principles <br>of Business Management &amp; Administration</td>
											<td><ul class="circle">
													<li>most general Principles event</li>
													<li>focuses on operational and legal aspects of business</li>
													<li>covers human resources, law, economics, and global trade</li>
												</ul>
											</td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Principles of <br>Finance</td>
											<td><ul class="circle">
													<li>introductory level finance event</li>
													<li>covers accounting, banking services, corporate finance, insurance, securities, and investments</li>
													<li>focuses on demonstrating knowledge rather than making decisions</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Principles of<br> Hospitality</td>
											<td><ul class="circle">
													<li>introductory level hospitality event</li>
													<li>covers restaurants, hotels, travel, and tourism</li>
													<li>focuses on demonstrating knowledge rather than making decisions</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Principles of Marketing</td>
											<td><ul class="circle">
													<li>introductory level marketing event</li>
													<li>covers marketing communications, marketing management, marketing research, merchandising, and selling</li>
													<li>focuses on demonstrating knowledge rather than making decisions</li>
												</ul></td>
											<td><br><span id="principles_end"> 1 Individual</span></td>
										</tr>
									</tbody>
								</table>
								</div>
							</div>
						</div>
		        	</div>
					<hr style = "border-color: #D0D0D0  ;">
		        	<div id="tdm" style="padding-bottom:60px" data-target="tdm"> 
		        		<h2 class = "headings"> TDM </h2>
		        		<p> Team Decisions Making events are team roleplay events in which competitors take separate tests (scores are averaged) and do a roleplay together. Teams receive a 30-minute preparation period to not only discuss certain topics included in the roleplay, but also to provide a solution to the given problem in the roleplay. The seven TDM events are centered around DECA’s four main clusters: finance, hospitality, marketing, and business management.</p>
		        		<div class="row">
							<div class="twelve columns">
				               <h4 class="lead">Team Decision Making Events</h4>
								<div class = "panel panel-default"><table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Business Law and Ethics</td>
											<td><ul class="circle">
													<li>focuses on application and analysis of ethics</li>
													<li>covers law, including contracts, product liability, employment, and business ownership</li>
												</ul>
											</td>
											<td><br>Team of 2</td>
										</tr>
										<tr>
											<td>Buying and Merchandising</td>
											<td><ul class="circle">
													<li>focuses on distribution channels, or how the product gets to the customer</li>
													<li>covers forecasting, planning, buying, displaying, selling, and customer service</li>
													<li>situations are generally business management with a focus on inventory</li>
												</ul></td>
											<td><br>Team of 2</td>
										</tr>
										<tr>
											<td>Financial Services</td>
											<td><ul class="circle">
													<li>a finance umbrella event</li>
													<li>focuses on applications of finance in the business world</li>
													<li>situations include financial decision making, financial services marketing, and accounting</li>
												</ul></td>
											<td><br>Team of 2</td>
										</tr>
										<tr>
											<td>Hospitality Services</td>
											<td><ul class="circle">
													<li>covers hospitality and marketing</li>
													<li>focuses on application of concepts in a hotel or food and beverage environment</li>
													<li>situations include customer service, pricing, and marketing </li>
												</ul></td>
											<td><br>Team of 2</td>
										</tr>
										<tr>
											<td>Marketing Communications</td>
											<td><ul class="circle">
													<li>a marketing umbrella event</li>
													<li>focuses on connecting a customer to a business</li>
													<li>situations generally require competitors to create a marketing plan for a business</li>
												</ul></td>
											<td><br>Team of 2</td>
										</tr>
										<tr>
											<td>Sports and Entertainment Marketing</td>
											<td><ul class="circle">
													<li>covers marketing and management</li>
													<li>focuses on application of marketing concepts in a sports and entertainment environment</li>
													<li>situations generally require the creation of a marketing plan for a sporting location </li>
												</ul></td>
											<td><br>Team of 2</td>
										</tr>
										<tr>
											<td>Travel and Tourism</td>
											<td><ul class="circle">
													<li>covers hospitality, marketing, and management </li>
													<li>focuses on application of concepts in a travel and tourism environment</li>
													<li>situations include customer service, pricing, and marketing </li>
												</ul></td>
											<td><br><span id="tdm_end">Team of 2</span></td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
		        	</div>
					<hr style="border-color:#D0D0D0;">
		        	<div id="series" style="padding-bottom:60px" data-target="series"> 
		        		<h2 class = "headings"> Individual Series </h2>
		        		<p>Individual Series events are individual role-play events in which competitors receive a 10-minutes of preparation period to discuss the given topics in the roleplay and provide a solution to the given problem. The 13 Individual Series events cover a wide range of topics centered around DECA’s four main clusters: finance, hospitality, marketing, and business management. Individual Series are not recommended for first year members. </p>
		        		<div class="row">
							<div class="twelve columns">
				               <h4 class="lead">Series Events</h4>
								<div class = "panel panel-default"><table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Accounting Applications</td>
											<td><ul class="circle">
													<li>very technical event</li>
													<li>focuses on financial analysis and decision-making</li>
													<li>focuses on financial analysis and decision-making</li>
												</ul>
											</td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Apparel and Accessories Marketing</td>
											<td><ul class="circle">
													<li>covers business activities within the clothing industry</li>
													<li>focuses on application of marketing and management</li>
													<li>situations include retail, wholesale, and manufacturing</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Automotive Services Marketing</td>
											<td><ul class="circle">
													<li>covers business activities within the automotive services industry</li>
													<li>focuses on application of marketing and management</li>
													<li>situations include auto dealers, service stations, and auto-parts stores</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Business Finance</td>
											<td><ul class="circle">
													<li>combines business management and finance</li>
													<li>focuses on applications of finance in the business world</li>
													<li>situations include financial decision making, financial services marketing, and economics</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Food Marketing</td>
											<td><ul class="circle">
													<li>combines marketing and management</li>
													<li>focuses on human resources management within a food business</li>
													<li>situations generally involve human resources, but can also involve marketing and sales</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Hotel and Lodging Management</td>
											<td><ul class="circle">
													<li>covers hospitality, marketing, and management</li>
													<li>focuses on application of concepts in a hotel environment</li>
													<li>situations include human resources, employee conflict, and government regulation </li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Human Resources Management</td>
											<td><ul class="circle">
													<li>covers business management and law</li>
													<li>focuses on employee and communication issues in a company</li>
													<li>situations include customer service, pricing, and marketing </li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Marketing Management</td>
											<td><ul class="circle">
													<li>covers marketing and management</li>
													<li>focuses on application of concepts in a non-retail environment</li>
													<li>situations vary greatly, so general business knowledge is crucial</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Quick Serve Restaurant Management</td>
											<td><ul class="circle">
													<li>covers marketing, management, and hospitality</li>
													<li>focuses on application of concepts in a fast food environment</li>
													<li>situations generally involve the creation of a marketing plan</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Restaurant and Food Service Management</td>
											<td><ul class="circle">
													<li>covers marketing, management, and hospitality</li>
													<li>focuses on application of concepts in a restaurant environment</li>
													<li>situations generally involve the creation of a marketing plan</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Retail Merchandising</td>
											<td><ul class="circle">
													<li>covers marketing and management</li>
													<li>focuses on application of concepts in a retail environment</li>
													<li>situations require specific knowledge of retailing procedures and marketing</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Sports and Entertainment Marketing</td>
											<td><ul class="circle">
													<li>combines marketing and management</li>
													<li>focuses on application of concepts in a sports environment</li>
													<li>situations generally require the creation of a marketing plan for a sporting location</li>
												</ul></td>
											<td><br><span id="series_end">1 Individual</span></td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
		        	</div>
					<hr style="border-color:#D0D0D0;">
		        	<div id="or" style="padding-bottom:60px" data-target="or"> 
		        		<h2 class = "headings"> Operations Research</h2>
		        		<p> Operations Research events consist of a written business plan and a presentation. Operations Research events are focused around selecting a company and creating a business plan to modify the way the company presents itself. Participants will take the role of hired consultants of a single-unit or independent operation and will conduct research about the company. Operations Research events allow participants to gain experience interacting and building relations with real businesses. </p>
		        		<div class="row">
							<div class="twelve columns">
				               <h4 class="lead">Operations Research Events</h4>
								<div class = "panel panel-default"><table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Business Services</td>
											<td><ul class="circle">
													<li>centers around researching and creating a plan to rebrand a business</li>
													<li>potential businesses include human resources, information technology, services, and any miscellaneous businesses </li>
												</ul>
											</td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Buying and Merchandising</td>
											<td><ul class="circle">
													<li>centers around researching and creating a plan to rebrand a business</li>
													<li>potential businesses include retail and wholesale businesses for consumer goods</li>
												</ul></td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Finance</td>
											<td><ul class="circle">
													<li>centers around researching and creating a plan to rebrand a business</li>
													<li>potential businesses include banks, credit unions, accounting firms, investment firms, and any other financial services businesses</li>
												</ul></td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Hospitality and Tourism</td>
											<td><ul class="circle">
													<li>centers around researching and creating a plan to rebrand a business</li>
													<li>potential businesses include hotels, eateries, travel, and tourism businesses</li>
												</ul></td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Sports and Entertainment</td>
											<td><ul class="circle">
													<li>centers around researching and creating a plan to rebrand a business</li>
													<li>potential businesses include any sports or entertainment related businesses</li>
												</ul></td>
											<td><br>Team of<br> <span id="or_end">1 to 3</span></td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
		        	</div>
					<hr style="border-color:#D0D0D0;">
		        	<div id="entre" style="padding-bottom:60px" data-target="tdm"> 
		        		<h2 class = "headings"> Entrepreneurship </h2>
		        		<p>Entrepreneurship events consist of a written business plan and a presentation. In entrepreneurship events, participants will take the role of current business owner or entrepreneur, and will transform a business idea into a realistic, functional business. Entrepreneurship events incorporate a wide variety of business concepts, from finance to marketing. </p>
		        		<div class="row">
							<div class="twelve columns">
				               <h4 class="lead">Entrepreneurship Events</h4>
								<div class = "panel panel-default"><table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Entrepreneurship Innovation Plan</td>
											<td><ul class="circle">
													<li>competitors propose a product/service and research feasibility</li>
													<li>general entrepreneurship event</li>
													<li>focused on idea generation and market research</li>
												</ul>
											</td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Entrepreneurship Participating-Independent</td>
											<td><ul class="circle">
													<li>competitors propose a product/service and create a plan to implement it</li>
													<li>general entrepreneurship event</li>
													<li>focused on market research, operations, marketing, and financial projections</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Entrepreneurship Participating-Franchising</td>
											<td><ul class="circle">
													<li>competitors propose a new location of an existing franchise</li>
													<li>subset of ENPI</li>
												</ul></td>
											<td><br>1 Individual</td>
										</tr>
										<tr>
											<td>Entrepreneurship Written</td>
											<td><ul class="circle">
													<li>competitors propose a product/service and create a plan to implement it</li>
													<li>general entrepreneurship event</li>
													<li>focused on market research, operations, marketing, and financial projections</li>
												</ul></td>
											<td><br><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Entrepreneurship-Growing Your Business</td>
											<td><ul class="circle">
													<li>must own your own business to compete in this event</li>
													<li>centers around creating a plan to expand your own business</li>
													<li>focuses on expansion through marketing, franchising, and licensing</li>
												</ul></td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>International Business Plan</td>
											<td><ul class="circle">
													<li>plan focuses on implementing a product/service idea in a foreign country</li>
													<li>plan focuses on implementing a product/service idea in a foreign country</li>
												</ul></td>
											<td><br>Team of<br> <span id="entre_end">1 to 3</span></td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
		        	</div>
					<hr style="border-color:#D0D0D0;">
		        	<div id="marketing" style="padding-bottom:60px" data-target="series"> 
		        		<h2 class = "headings"> Marketing Rep </h2>
		        		<p> Marketing Representative events consist of a written business plan, a presentation, and a written test. Like Team Decision-Making Events, the test will be taken individually, but the presentation and the plan will be submitted as a team. A Marketing Representative event is focused on creating a promotional campaign for a certain business. Participants will take the role of external marketing consultants, and like Operations Research events, will gain experience interacting with real businesses. </p>
		        		<div class="row">
							<div class="twelve columns">
				               <h4 class="lead">Marketing Representative Events</h4>
								<div class = "panel panel-default"><table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Advertising Campaign</td>
											<td><ul class="circle">
													<li>general marketing representative event for any business</li>
													<li>competitors create a short, non-seasonal advertising campaign</li>
												</ul>
											</td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Fashion Merchandising Promotion Plan</td>
											<td><ul class="circle">
													<li>focuses on fashion-related businesses</li>
													<li>competitors create a short, seasonal promotional plan</li>
												</ul></td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Sports and Entertainment Promotion Plan</td>
											<td><ul class="circle">
													<li>focuses on sports or entertainment-related businesses</li>
													<li>competitors create a short, seasonal promotional plan</li>
												</ul></td>
											<td><br>Team of<br> <span id="marketing_end">1 to 3</span></td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
		        	</div>
					<hr style="border-color:#D0D0D0;">
		        	<div id="online" style="padding-bottom:60px" data-target="or"> 
		        		<h2 class = "headings"> Online Events</h2>
		        		<p> The two online events are Stock Market Game and Virtual Business Challenge. The Stock Market Game (SMG) is a game that simulates the real stock market. Students are given an amount of money and will create and manage a virtual investment portfolio of stocks and funds. The Virtual Business Challenge (VBC) is an event in which participants use highly visual simulation software to manage a business. The VBC event tests competitors’ ability to manage a real-time business. </p>
		        		<div class="row">
							<div class="twelve columns">
				               <h4 class="lead">Online Events</h4>
								<div class = "panel panel-default"><table class = "table table-striped table-bordered">
									<thead>
										<tr>
											<th>Event Name </th>
											<th>Event Description</th>
											<th>Participants</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Stock Market Game</td>
											<td><ul class="circle">
													<li>competitors compete in an online stock market simulation</li>
													<li>focuses on financial decision-making and money management</li>
												</ul>
											</td>
											<td><br>Team of<br> 1 to 3</td>
										</tr>
										<tr>
											<td>Virtual Business Challenges-Personal Finance, Restaurant, Retailing and Sports</td>
											<td><ul class="circle">
													<li>competitors play an online game simulating managing a real business</li>
													<li>competitors choose to focus on either retail, sports, restaurant, or personal finance</li>
												</ul>
											</td>
											<td><br>Team of<br> <span id="online_end">1 to 3</span></td>
										</tr>
									</tbody>
								</table></div>
							</div>
						</div>
		        	</div>

		        </section>
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
		    var $div = $("#overview");
		    var $div2 = $("#principles");
		    var $div3 = $("#tdm");
		    var $div4 = $("#series");
		    var $div5 = $("#or");
		    var $div6 = $("#entre");
		    var $div7 = $("#marketing")
		    var $div8 = $("#online")
		    if ($(window).scrollTop() >= $div.data("top")-80 && $(window).scrollTop() < $div2.data("top")-80) { 
		        $('#nav1').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav1').css({'background-color': 'transparent'});
		    }
		    
		    if ($(window).scrollTop() >= $div2.data("top")-80 && $(window).scrollTop() < $div3.data("top")-80) { 
		        $('#nav2').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav2').css({'background-color': 'transparent'});
		    }
		   
		    if ($(window).scrollTop() >= $div3.data("top")-80 && $(window).scrollTop() < $div4.data("top")-80) { 
		        $('#nav3').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav3').css({'background-color': 'transparent'});
		    }
		    
		    if ($(window).scrollTop() >= $div4.data("top")-80 && $(window).scrollTop() < $div5.data("top")-80) { 
		        $('#nav4').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav4').css({'background-color': 'transparent'});
		    }
		    
		    if ($(window).scrollTop() >= $div5.data("top")-80 && $(window).scrollTop() < $div6.data("top")-80) { 
		        $('#nav5').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav5').css({'background-color': 'transparent'});
		    }
		    
		    if ($(window).scrollTop() >= $div6.data("top")-80 && $(window).scrollTop() < $div7.data("top")-80) { 
		        $('#nav6').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav6').css({'background-color': 'transparent'});
		    }
		   
		    if ($(window).scrollTop() >= $div7.data("top")-80 && $(window).scrollTop() < $div8.data("top")-80) { 
		        $('#nav7').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav7').css({'background-color': 'transparent'});
		    }
		    
		    if ($(window).scrollTop() >= $div8.data("top")-80) { 
		        $('#nav8').css({'background-color': '#f0f0f0'}); 
		    }
		    else {
		        $('#nav8').css({'background-color': 'transparent'});
		    }
		}
		$("#principles").data("top", $("#principles").offset().top); // set original position on load
		$("#overview").data("top", $("#overview").offset().top); // set original position on load
		$("#tdm").data("top", $("#tdm").offset().top); // set original position on load
		$("#series").data("top", $("#series").offset().top); // set original position on load
		$("#or").data("top", $("#or").offset().top); // set original position on load
		$("#entre").data("top", $("#entre").offset().top); // set original position on load
		$("#marketing").data("top", $("#marketing").offset().top); // set original position on load
		$("#online").data("top", $("#online").offset().top); // set original position on load
		$(window).scroll(fixDiv);
		});

	</script>
  </body>
</html>
