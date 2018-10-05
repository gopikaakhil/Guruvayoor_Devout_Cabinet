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
	<link href="../../company/css/style.css" rel="stylesheet"/>	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.footer
	{
		position:relative;
		top:200px;
	}
	.workship_list
	{
		padding-top:150px;
		
	}
	h2
	{color:#ff0000;}
table {
	
    border-collapse: collapse;
    width: 60%;
}

th, td {
    text-align: center;
    padding: 8px;
	
}
td{color:#ff0000;}
tr
{ 
 background-color:#00cc99;
 }

th {
    background-color:#428a78;
    color: white;
}
tr:hover
{
	background-color:#d0fbed;
	color:#ffffff;
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

.dropdown-content a:hover {background-color:#00cc99;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: ;}
</style>
<?php
$date=date('Y-m-d');
$sql="select * from daily_workship where work_type='daily'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
$nme=$_SESSION['u_name'];

?>
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
							<a href="index.html"><h1><span>GURUVAYOOR</h1></a>
						</div>
					</div>
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="about.php" >Home</a></li>
								<li role="presentation"><a href="#" class="active">Offerings</a></li>
								<li role="presentation"><a href="presadham.php">Prasadham</a></li>	
                                <li role="presentation"><a href="services.html">Locket</a></li>								
								<li role="presentation"><a href="notification.php">Notifications</a></li>
								<li role="presentation"><a href="gallery.php">Gallery</a></li>
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
	<center><div class="workship_list">
	<h2>Welcome <?php echo $nme; ?></h2>
	<h2>VAZHIPADUKAL</h2>
	<table>
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
  <?php
	if($rowcount!=0)
{
	 while($row=mysql_fetch_array($result))
	{
		$name=$row['work_name'];
		$price=$row['work_price'];
		?>
  <tr>
    <td><?php echo $name  ?></td>
    <td><?php echo $price  ?></td>
    <td><a href="booking.php"> <img src="book.gif" style="height:40px;"></a></td>
  </tr>
  <?php
	}
}
  ?>
</table>
	</div></center>
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