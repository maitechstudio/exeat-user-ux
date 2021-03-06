<?php 
require 'sidemenu.php';
require 'connect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>CALEB UNIVERSITY E-EXEAT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- date picker css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<!-- //date picker css -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--clock init-->
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/af.js" integrity="sha256-mOVoUjhzNIsy1Z1L/DfHXmS56utsyzSUnizhNp/8IE4=" crossorigin="anonymous"></script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						
					<!-- //header-ends -->
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="#">Home</a></li>
															<li class="active"> Book an Exeat</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
										<!--/tabs-->
										 <div class="tab-main">
											 <!--/tabs-inner-->
												<div class="tab-inner">
												      <div id="tabs" class="tabs">
													            <h2 class="inner-tittle">Book Exeat</h2>
															<div class="graph">
																					<nav>
																						<ul>
																							<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span style="color: #228B22;">Long Exeat</span></a></li>
																							<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span style="color: #ff8000;">Short Exeat</span></a></li>
																							<li><a href="#section-3" class="icon-food"><i class="fa fa-ambulance"></i> <span style="color: #990000;">Emergency Exeat</span></a></li>
																						</ul>
																					</nav>
																					<div class="content tab">
																						<section id="section-1">
																							<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">Long Exeat</h3>
																					<div class="grid-1">
																							<div class="form-body">
																									<div class="row">
	 	
	 	<!--date of depature form-->
	 	<div class="col-sm-6 form-group">																								
    	<label>Date of Depature</label>
    	<input type="date" name="date_of_publication" required></br>
		</div>
		<!--end of date of depature form-->
 		<!--date of arrival form-->
        <div class="col-sm-6 form-group">
        	<label>Date of Arrival</label>
           <input type="date" name="date_of_publication" required></br>
        </div>
        <!--end of date of arrival form-->
        <!--telephone number to contact-->
         <div class="col-sm-12 form-group">
    	<label for="telNo">Enter a telephone number to contact for  confirmation(080-757-45914): </label>
    	<input id="telNo" name="telNo" type="tel" required
           pattern="[0-9]{3}[0-9]{3}[0-9]{5}"></br>
    	<span class="validity"></span>
  		</div>
  		<!--end of telephone number to contact-->
  		<!--reason for exeat-->
      	<div class="col-sm-12 form-group">
      	<label for="textarea">Reason for Exeat</label>
      	<textarea class="form-control" id="comments" name="comments" placeholder="Explanation" rows="5"></textarea><br>
      	<div class="row">
        	<div class="col-sm-12 form-group">
          	<button class="btn btn-default pull-right" type="submit">SUBMIT</button>
        	</div>
      	</div>
      	</div>
      	<!--end of telephone number to contact-->
																						</section>
																						<section id="section-2">
																							<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">Short Exeat</h3>
																				<div class="grid-1">
																				<div class="form-body">
																					<div class="row">
		<!--date of depature form-->
	 	<div class="col-sm-6 form-group">																								
    	<label>Date of Depature</label>
    	<input type="date" name="date_of_publication" required></br>
		</div>
		<!--end of date of depature form-->
 		<!--date of arrival form-->
        <div class="col-sm-6 form-group">
        	<label>Date of Arrival</label>
           <input type="date" name="date_of_publication" required></br>
        </div>
        <!--end of date of arrival form-->
        <!--telephone number to contact-->
         <div class="col-sm-12 form-group">
    	<label for="telNo">Enter a telephone number to contact for  confirmation(080-757-45914): </label>
    	<input id="telNo" name="telNo" type="tel" required
           pattern="[0-9]{3}[0-9]{3}[0-9]{5}"></br>
    	<span class="validity"></span>
  		</div>
  		<!--end of telephone number to contact-->
  		<!--reason for exeat-->
      	<div class="col-sm-12 form-group">
      	<label for="textarea">Reason for Exeat</label>
      	<textarea class="form-control" id="comments" name="comments" placeholder="Explanation" rows="5"></textarea><br>
      	<div class="row">
        	<div class="col-sm-12 form-group">
          	<button class="btn btn-default pull-right" type="submit">SUBMIT</button>
        	</div>
      	</div>
      	</div>
      	<!--end of reason for exeat-->
																							</div>

																					</div>
																				</div>
																			</div>
																		</div>
																						</section>
																						<section id="section-3">
																						<h3 class="inner-tittle two">Emergency Exeat</h3>
																						<div class="grid-1">
																						<div class="form-body">
																						<div class="row">
		<!--date of depature form-->
	 	<div class="col-sm-6 form-group">																								
    	<label>Date of Depature</label>
    	<input type="date" name="date_of_publication" required></br>
		</div>
		<!--end of date of depature form-->
 		<!--date of arrival form-->
        <div class="col-sm-6 form-group">
        	<label>Date of Arrival</label>
           <input type="date" name="date_of_publication" required></br>
        </div>
        <!--end of date of arrival form-->
        <!--telephone number to contact-->
         <div class="col-sm-12 form-group">
    	<label for="telNo">Enter a telephone number to contact for  confirmation(080-757-45914): </label>
    	<input id="telNo" name="telNo" type="tel" required
           pattern="[0-9]{3}[0-9]{3}[0-9]{5}"></br>
    	<span class="validity"></span>
  		</div>
  		<!--end of telephone number to contact-->
		<!--DOCUMENT for Validation-->																		
  		<div class="col-sm-12 form-group">	
    	<label for="telNo">Please Upload A Valid letter or Proof for reason stated below:</label>
  		<input type="file" name="file" required/><br><br>
  		</div>
  		<!--end of DOCUMENT for Validation-->
  		<!--Reason for exeat-->
      	<div class="col-sm-12 form-group">
      	<label for="textarea">Reason for Exeat</label>
      	<textarea class="form-control" id="comments" name="comments" placeholder="Explanation" rows="5"></textarea><br>
      	<div class="row">
        	<div class="col-sm-12 form-group">
          	<button class="btn btn-default pull-right" type="submit">SUBMIT</button>
        	</div>
      	</div>
      	</div>
      	<!--end of telephone number to contact-->
      																					</div>
																					</div>
																				</div>
																			</div>
																		</div>
																						</section>
																					</div><!-- /content -->
																				</div>
																				<!-- /tabs -->
																				
																			</div>
																			<script src="js/cbpFWTabs.js"></script>
																			<script>
																				new CBPFWTabs( document.getElementById( 'tabs' ) );
																			</script>
																	 
								<!--//outer-wp-->
									 <!--footer section start-->
										<footer>
										   <p>&copy; 2018 Caleb University . All Rights Reserved | Design by <a href="https://www.maitechstudio.net/" target="_blank">MAITECH STUDIO.</a></p>
										</footer>
									<!--footer section end-->
								</div>

				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>EXEAT</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="images/admin.jpg"></a>
									  <a href="index.html"><span class=" name-caret">Agbesanwa Ifetola</span></a>
									 <p>Computer Science 200lvl</p>
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
							<div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tabs &amp; Panels</span> <span class="fa fa-angle-right" style="float: left"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.html"> Tabs &amp; Panels</a></li>
											<li id="menu-academico-boletim" ><a href="widget.html">Widgets</a></li>
											<li id="menu-academico-avaliacoes" ><a href="calender.html">Calender</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="forms.html">Forms</a></li>
												<li id="menu-academico-boletim" ><a href="validation.html">Validation Forms</a></li>
												<li id="menu-academico-boletim" ><a href="table.html">Tables</a></li>
												<li id="menu-academico-boletim" ><a href="buttons.html">Buttons</a></li>
											  </ul>
										 </li>
									<li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
									<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="login.html">Login</a></li>
										    <li id="menu-academico-boletim" ><a href="register.html">Register</a></li>
											<li id="menu-academico-boletim" ><a href="404.html">404</a></li>
											<li id="menu-academico-boletim" ><a href="sign.html">Sign up</a></li>
											<li id="menu-academico-boletim" ><a href="profile.html">Profile</a></li>
										  </ul>
									 </li>
									 <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
											<li><a href="editor.html"><span class="lnr lnr-highlight"></span> Editors Page</a></li>
									
									  </ul>
									</li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="grids.html">Grids</a></li>
											<li id="menu-academico-boletim" ><a href="media.html">Media Objects</a></li>

										  </ul>
									 </li>
									<li><a href="chart.html"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="map.html"><i class="lnr lnr-map"></i> Maps</a></li>
										<li><a href="graph.html"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
									</ul>
									</li>
									<li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
									    <ul id="menu-comunicacao-sub" >
										<li id="menu-mensagens" style="width:120px" ><a href="project.html">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
										  <ul id="menu-mensagens-sub" >
											<li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.html">Ribbons</a></li>
											<li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.html">Blank</a></li>
										  </ul>
										</li>
										<li id="menu-arquivos" ><a href="500.html">500</a></li>
									  </ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
						
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>