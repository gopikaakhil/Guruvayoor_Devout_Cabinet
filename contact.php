<!DOCTYPE html>
<?php
SESSION_start();
$con=@mysql_connect("localhost","root","") or die('unable to connect');
@mysql_select_db("devout",$con) or die('db not found');
$uid=$_SESSION['uid'];
$upass=$_SESSION['pass'];
$utype=$_SESSION['u_type'];
$sql="select * from login where u_id='$uid' and u_pass='$upass'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount==1 && $utype="admin")
{
 $nme=$_SESSION['u_name'];

?>

<html lang="en">
<head>

	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 <link href="../../company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../company/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../company/css/animate.css">
	<link href="../../company/css/prettyPhoto.css" rel="stylesheet">
	<link href="../../company/css/style.css" rel="stylesheet" />
	<?php

if(isset($_POST['submit']))
{
$noti_name=$_POST['noti_name'];
$noti_from_date=$_POST['noti_from_date'];
$noti_to_date=$_POST['noti_to_date'];
//$reg_gen=$_POST['reg_gen'];
$sql="insert into notification (noti_name,noti_from_date,noti_to_date) values('$noti_name','$noti_from_date','$noti_to_date')";
$result=mysql_query($sql,$con);
}
	?>
	<style>
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
							<a href="index.html"><h1><span>Guruvayoor</span></h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="#" class="active">Home</a></li>
								
								<li role="presentation"><a href="../admin/workship/enter_workship.php">Workship</a></li>								
								<li role="presentation"><a href="enter_pass.php">PASS</a></li>
								<li role="presentation"><a href="mariage.php">Mariage</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>		
								<li role="presentation"><div class="dropdown"><a  class="dropbtn" href=""><img src="user.gif"></a>
								
								<div class="dropdown-content">
								<a href="#">Profile</a>
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
	<div class="container-contact100">
	<h2>Welcome <?php echo $nme; ?></h2>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				
				

				<label class="label-input100" for="email">Name of notification*</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input  class="input100" type="text" name="noti_name" >
					<span class="focus-input100"></span>
				</div>
<?php
$d=date('Y-m-d');
?>
				<label class="label-input100" for="phone">From date</label>
				<div class="wrap-input100">
					<input  class="input100" type="date" name="noti_from_date" min="<?php echo $d; ?>" max="2018-12-31">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">To date</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<input  class="input100" type="date" name="noti_to_date" min="<?php echo $d; ?>" >
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
				<input  class="contact100-form-btn" type="submit" name="submit" value="SEND NOTFCATION" >
					
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/guru.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							SEND NOTIFACTON
						</span>

						<span class="txt2">
							<h2><?php $date = date('m/d/Y h:i:s a', time());?></h2>
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							<b>+1 800 1236879</b>
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							<b>contact@example.com</b>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
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
							&copy; September 2018 by Gopika V Nair. All Rights Reserved.</div>
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
    <script src="../../company/js/bootstrap.min.js"></script>
	<script src="../../company/js/jquery.prettyPhoto.js"></script>
    <script src="../../company/js/jquery.isotope.min.js"></script>  
	<script src="../../company/js/wow.min.js"></script>
	<script src="../../company/js/functions.js"></script>
	<?php
}
else
{
	header("location:../../company/Login_v15/login.php");
}
?>
	</body>
	</html>
