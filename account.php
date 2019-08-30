<?php
  
  session_start();
  if(isset($_SESSION['aid'])){
    echo "";
  }
  else{
    header('location:log.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>your account</title>

	<link href="slide/css/style.css" rel="stylesheet">
    <link href="slide/css/responsive.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="rg.css"> -->
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="slide/css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="slide/css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="slide/css/color/light-red.css" title="light-red"> -->
    <link rel="stylesheet" type="text/css" href="slide/css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="slide/css/color/light-blue.css" title="light-blue">
  <!--   <link rel="stylesheet" type="text/css" href="slide/css/color/yellow.css" title="yellow"> -->
    <link rel="stylesheet" type="text/css" href="slide/css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="slide/css/my1.css">
    



	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->


</head>
<body>

	<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="page1copy.php">Home</a></li>
         <li><a href="account.php">Account</a></li>
        <li><a href="statusTicket.php">Ticket Status</a></li>
        <li><a href="statusHire.php">Hired Status</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="u_logout.php">Logout</a></li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Buy a Ticket or Hire a bus</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<img src="t.png">
		<h3>Easy To Buy Ticket</h3>
	</div>
	

<!-- form add for data base ,, every thing is quiet and clean,, all jquery and complexity has been romoved -->

	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Buy Ticker From Home</h2>
		
		<div class="sear">
			<form action="bus.php">
				<a class="btn btn-primary btn-lg btn-block" href="bus.php" role="button">Search Bus</a>
				<!-- <button type="submit" class="btn btn-primary btn-lg">Search Buses</button> -->
			</form>

		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--- /banner ---->
		
<!--- /banner ---->

<div class="jumbotron jumbotron-fluid " style="background-color: green">
  <div class="container">
    <h1>Latest Feature <span class="badge badge-secondary">New</span></h1>
    
  </div>
</div>

<div class="jumbotron">

	<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<img src="bicon.png">
		<h3>New Feature</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Hired a Bus eith your own choice</h2>
		
		<div class="ban-bottom">
			
			<!---/End-date-piker---->
		</div>
		<div class="sear">
			<form action="bus.html">
				<a <button type="button" class="btn btn-primary btn-lg btn-block" href="Hire_Available_bus.php">Hired Request</button></a>
				<!-- <button class="btn btn-primary btn-lg">Search Buses</button> -->
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

	
</div>




<!--- routes ---->
<div class="routes" style="background-color:#514f82 ">
	<div class="container">
		<div class="col-md-4 routes-left ">
			<div class="rou-left">
				<a href="#"><i class="fa fa-bus"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>More than</h3>
				<p>50 Distric</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>700</h3>
				<p>BUS OPERATORS</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left ">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>600k</h3>
				<p>TICKETS SOLD</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>





<!--- /routes ---->

<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="#">Hanif Enterprise</a></li>
					<li><a href="#">Green Line Paribahan</a></li>
					<li><a href="#">Royal Coach</a></li>
					<li><a href="#">Shyamoli Paribahan</a></li>
					<li><a href="#">Tisha Group</a></li>
					<li><a href="#">Shohagh Paribahan</a></li>
					<li><a href="#">Soudia Coach Service</a></li>
					<li><a href="#">Diganta Express</a></li>
					<li><a href="#">Ena Transport (Pvt) Ltd</a></li>
					<li><a href="#">Year-71</a></li>
					<li><a href="#">Star Line Special Ltd.</a></li>
					<li><a href="#">Akota Transport</a></li>
					<li><a href="#">Protinidhi Paribahan</a></li>
					<li><a href="#">Royal Protinidhi</a></li>
					<li><a href="#">Gram-Bangla</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>





		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					<li><a href="#">Chittagong to Dinajpur</a></li>
					<li><a href="#">Chittagong to Rajshahi</a></li>
					<li><a href="#">Chittagong to Khulna</a></li>
					<li><a href="#">Chittagong to Dhaka</a></li>
					<li><a href="#">Chittagong to Kumilla</a></li>
					<li><a href="#">Chittagong to Shyle</a></li>
					<li><a href="#">Chittagong to Mymonsingh</a></li>
					<li><a href="#">Chittagong to Rangamati</a></li>
					<li><a href="#">Chittagong to Sherpur<</a>/li>
					<li><a href="#">Chittagong to Moulvibazar</a></li>
					<li><a href="#">Chittagong to Noagaon</a></li>
					<li><a href="#">Chittagong to Feni</a></li>
					<li><a href="#">Chittagong to Bogra</a></li>
					<li><a href="#">Chittagong to Cox's Bazar</a></li>
					<li><a href="#">Chittagong to Jessore</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">Thanks for using our service</p>
                    </div>
                </div>
            </div>



            
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="">Lite Coder</a>Future</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="slide/js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="slide/asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="slide/js/jquery.easing.1.3.js"></script>
    <script src="slide/js/classie.js"></script>
    <script src="slide/js/count-to.js"></script>
    <script src="slide/js/jquery.appear.js"></script>
    <script src="slide/js/cbpAnimatedHeader.js"></script>
    <script src="slide/js/owl.carousel.min.js"></script>
  <script src="slide/js/jquery.fitvids.js"></script>
  <script src="slide/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="slide/js/jqBootstrapValidation.js"></script>
    <script src="slide/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="slide/js/script.js"></script>

</body>
</html>