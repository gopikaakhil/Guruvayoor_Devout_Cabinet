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
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="style1.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
	
<?php


$nme=$_SESSION['u_name'];
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
//$reg_pass=$_POST['pswd'];
//$reg_cpass=$_POST['cpswd'];
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
else
{
	$sql2="update u_details set u_id='$reg_id' ,reg_name='$reg_name', reg_adds='$reg_hname' , mobile='$reg_mob',age='$reg_age',country='$reg_country',state='$reg_state',city='$reg_city',post='$reg_post',pin='$reg_pin' where u_id='$uid'";
            $result2=mysql_query($sql2,$con);
            $rowcount2=mysql_num_rows($result2);		
}
}

?>
<style>
.footer
{
	position:relative;
	top:100px;
}
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
.agileits-main
{
	margin-top:100px;
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
	<?php 
	$sql3="select * from u_details where u_id='$uid'";
$result4=mysql_query($sql3,$con);
$rowcount4=mysql_num_rows($result4);
if($rowcount4!=0)
{
	 while($row4=mysql_fetch_array($result4))
	{
		$u_id=$row4['u_id'];
		$name=$row4['reg_name'];
		$hname=$row4['reg_adds'];
		$post=$row4['post'];
		$mobile=$row4['mobile'];
		$age=$row4['age'];
		$country=$row4['country'];
		$state=$row4['state'];
		$city=$row4['city'];
		$pin=$row4['pin'];
	?>
	<div class="agileits-main">
		<div class="wrap">
		<form action="#" method="post">
			<ul>
				<li class="text">name  :  </li>
				<li><input name="u_name" type="text" value="<?php echo $name;?>" required></li>
			</ul>		
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="email" value="<?php echo $u_id;?>"required></li>
			</ul>
			
			<ul>
				<li class="text">mobile no  :  </li>
				<li><input name="mobile" type="text" value="<?php echo $mobile;?>" required></li>
			</ul>
			<ul>
				<li class="text">Age  :  </li>
				<li><input name="age" type="text" value="<?php echo $age;?>" required></li>
			</ul>
			<ul>
				<li class="text">House Name  :  </li>
				<li><input name="hname" type="text" value="<?php echo $hname;?>" required></li>
			</ul>
			<ul>
				<li class="text">Post Office  :  </li>
				<li><input name="post" type="text" value="<?php echo $post;?>" required></li>
			</ul>
			<ul>
				<li class="text">country  :  </li>
				<li><input name="country" type="text" value="<?php echo $country;?>" required></li>
			</ul>
			<ul>
				<li class="text">state  :  </li>
				<li><input name="state" type="text" value="<?php echo $state;?>" required></li>
			</ul>
			<ul>
				<li class="text">city  :  </li>
				<li><input name="city" type="text" value="<?php echo $city;?>" required></li>
			</ul>
			<ul>
				<li class="text">zip/pin code  :  </li>
                <li><input name="pin" type="text" value="<?php echo $pin; }}?>" required></li>
			</ul>
			
			
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="Edit" name="submit">
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