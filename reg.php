<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>	
		<title>Register-login-form Website Template | Home :: w3layouts</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' ' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link href="../css/prettyPhoto.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet" />		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
<?php
include("../web/header.php");
if(isset($_POST['submit']))
{
$reg_id=$_POST['email'];
$reg_name=$_POST['u_name'];
$reg_hname=$_POST['hname'];
$reg_mob=$_POST['mobile'];
$reg_age=$_POST['age'];
$reg_country=$_POST['country'];
$reg_state=$_POST['state'];
$reg_city=$_POST['city'];
$reg_pin=$_POST['pin'];
$reg_post=$_POST['post'];
//$reg_gen=$_POST['reg_gen'];
//$reg_mob=$_POST['reg_mob'];
$reg_pass=$_POST['pswd'];
$reg_cpass=$_POST['cpswd'];
//$img_p=$_POST['photo'];
if(strlen($reg_mob)>11)
{
	$message = 'Not a Valid Mobile Number!!!!.';
echo "<SCRIPT>
 alert('$message');
</SCRIPT>";
}
else if(strlen($reg_mob)<10)
{
	$message = 'Not a Valid Mobile Number!!!!.';
echo "<SCRIPT>
 alert('$message');
</SCRIPT>";
}
else{
if($reg_pass==$reg_cpass)
{
	$pass=$reg_cpass;
$sql="insert into u_details (u_id,reg_name,reg_adds,mobile,age,country,state,city,pin,post) values('$reg_id','$reg_name','$reg_hname','$reg_mob','$reg_age','$reg_country','$reg_state','$reg_city','$reg_pin','$reg_post')";
            $result=mysql_query($sql,$con);
            $sql1="insert into login(u_id,u_name,u_pass,u_status,u_type) values('$reg_id','$reg_name','$pass',1,0)";
            $result1=mysql_query($sql1,$con);
            $rowcount=mysql_num_rows($result);
             $rowcount1=mysql_num_rows($result1);
			 if($rowcount==1 && $rowcount1==1)
               {
	              echo ("successfully registerd");
                   header("location:../Login_v15/login.php");
                 }
                else
                {
	                   echo ("not registerd");
                        header("location:../index.php");
               }
		
		



}
else
{

$message = 'Password Mismatch.';
echo "<SCRIPT>
 alert('$message');
</SCRIPT>";
}
}
}
function validate_mobile($mobile)
{
  return eregi("/^[0-9]*$/", $mobile);
}
?>
<style>
.Regisration
{
	margin-top:5%;
	width:100%;
}
.wrap
{
	margin-top:8%;
}
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
							<a href="index.html"><h1><span>Com</span>pany</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="../index.php">Home</a></li>
								<li role="presentation"><a href="about.html" class="active">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>			
			<div class="agileits-main">
		<div class="wrap">
		<form action="#" method="post">
			<ul>
				<li class="text">name  :  </li>
				<li><input name="u_name"   type="text"  required pattern="[A-Za-z]+"></li>
			</ul>		
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="email" required></li>
			</ul>
			
			<ul>
				<li class="text">mobile no  :  </li>
				<li><input name="mobile"  type="text" required pattern="[7-9]{1}[0-9]{9}"></li>
			</ul>
			<ul>
				<li class="text">Age  :  </li>
				<li><input name="age" type="text" required  pattern="[0-9]{2}"></li>
			</ul>
			<ul>
				<li class="text">House Name  :  </li>
				<li><input name="hname" type="text" required pattern="[A-Za-z]+"></li>
			</ul>
			<ul>
				<li class="text">Post Office  :  </li>
				<li><input name="post" type="text" required pattern="[A-Za-z]+"></li>
			</ul>
			<ul>
				<li class="text">country  :  </li>
				<li><input name="country" type="text" required pattern="[A-Za-z]+"></li>
			</ul>
			<ul>
				<li class="text">state  :  </li>
				<li><input name="state" type="text" required pattern="[A-Za-z]+"></li>
			</ul>
			<ul>
				<li class="text">city  :  </li>
				<li><input name="city" type="text" required pattern="[A-Za-z]+"></li>
			</ul>
			<ul>
				<li class="text">zip/pin code  :  </li>
				<li><input name="pin" type="text" required pattern="[0-9]{6}"></li>
			</ul>
			<ul>
				<li class="text">Password  :  </li>
				<li><input name="pswd" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Confirm password  :  </li>
				<li><input name="cpswd" type="text" required></li>
			</ul>
			
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="submit" name="submit">
				<input type="reset" value="reset">
			</div>
			</form>
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
												&copy; September 2018 by Gopika V Nair. All Rights Reserved.
					</div>
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
	</body>
</html>


