<!DOCTYPE html>
<?php
SESSION_start();
$con=@mysql_connect("localhost","root","") or die('unable to connect');
@mysql_select_db("devout",$con) or die('db not found');
$uid=$_SESSION['uid'];
$upass=$_SESSION['pass'];
$utype=$_SESSION['u_type'];
$sql1="select * from login where u_id='$uid' and u_pass='$upass'";
$result=mysql_query($sql1,$con);
$rowcount=mysql_num_rows($result);
if($rowcount==1 && $utype="user")
{
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="../../company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../company/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../company/css/animate.css">
	<link href="../../company/css/prettyPhoto.css" rel="stylesheet">
	<link href="../../company/css/style.css" rel="stylesheet" />		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<?php

$date=date('Y-m-d');
$sql="select * from notification where noti_to_date >'$date' ";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
$nme=$_SESSION['u_name'];

?>
<style>
.noti
{
	background-color:#12d393;
}
.dropbtn {
   
    color: white;
    <!--padding: 16px;-->
    font-size: 16px;
    border: none;
}

.dropdown {
  <!--  position: relative;
    display: inline-block;-->
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #00cc99;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: ;}
</style>
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>Guruvayoor</span> <br>
							
							</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="#" class="active">Home</a></li>
								
								<li role="presentation"><a href="workship.php">Workship</a></li>								
								<li role="presentation"><a href="pass.php">PASS</a></li>
								<li role="presentation"><a href="mariage.php">Mariage</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>
								<li role="presentation"><div class="dropdown"><a  class="dropbtn" href=""><img src="user.gif"></a>
								
								<div class="dropdown-content">
								<a href="profile.php">Profile</a>
								<a href="Logout.php">Logout</a>
								
								</div>
								</div></li>
														
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	
	<div class="aboutus">
		<div class="container">
			<h3>Our company information</h3>
			<hr>
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			<h2>Welcome <?php echo $nme; ?></h2>
				<img src="../images/guru.jpg" class="img-responsive">
				<h4>We Create, Design and Make it Real</h4>
				<p>Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauris euismod. 
				Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
				Phasellus id nulla risus, vel tincidunt turpis. Aliquam a nulla mi, placerat blandit eros. </p>
				<p>In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus,
				in pretium lectus sapien at est. 
				Integer pretium ipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>
			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="skill" >
					<div class="noti"><h2> <center> Notifications <img src="../../company/images/New_icon.gif"> </center> </h2></div>
					<p></p>
<!--<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(../images/thulasi.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                   <marquee behavior="scroll" direction="up" style="height:500px;"> <h2 class="animation animated-item-1">Welcome <span>Guruvayoor</span></h2>
                                    <p class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</p>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a></marquee>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img.gif" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>             
            </div>
        </div>
    </section> -->
	<marquee behavior="scroll" direction="up" style="height:500px;">
	<?php
	if($rowcount!=0)
{
	 while($row=mysql_fetch_array($result))
	{
		$noti_name=$row['noti_name'];
	?>
	 <h2 ><a href="#"><img src="small_new.gif"><?php echo $noti_name ;?></a> <br>
	 <?php
	}
}
	 ?>
	</marquee>
	
					<div class="progress-wrap">
		
					</div>

					
				</div>				
			</div>
		</div>
	</div>
	
	<div class="our-team">
		<div class="container">
			<h3>Our Team</h3>	
			<div class="text-center">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="images/services/1.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="images/services/2.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="images/services/3.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
												&copy; September 2018 by Gopika V Nair. All Rights Reserved.					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
		<?php
}
else
{
	header("location:../../company/Login_v15/login.php");
}
?>
  </body>
</html>