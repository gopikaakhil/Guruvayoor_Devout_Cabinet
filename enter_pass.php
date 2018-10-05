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
?>
<html lang="en">
<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
 <link href="../../../company/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../company/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../company/css/animate.css">
	<link href="../../../company/css/prettyPhoto.css" rel="stylesheet">
	<link href="../../../company/css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<style>
	.footer
	{
		position:relative;
		top:px;
	}
	.enterwork
	{
		position:relative;
		top:200px;
		width:450px;
	}
	
.th, .td {
    text-align: center;
    padding: 8px;
	
}
.td{color:#ff0000;}
.tr
{ 
 background-color:#00cc99;
 }

.th {
    background-color:#428a78;
    color: white;
}
.tr:hover
{
	background-color:#d0fbed	;
	color:#ffffff;
}
.table {
	
    border-collapse: collapse;
    width: 40%;
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
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<?php
include("../workship/header.php");
if(isset($_POST['submit']))
{
$work_name=$_POST['work_name'];
$work_price=$_POST['work_price'];
$work_desc=$_POST['work_desc'];

//$reg_gen=$_POST['reg_gen'];
$sql="insert into pass (day_name,day_price,day_desc) values('$work_name','$work_price','$work_desc')";
$result=mysql_query($sql,$con);
}
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
							<a href="index.html"><h1><span>Guruvayoor</span></h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="../Contact.php">Home</a></li>
								<li role="presentation"><a href="about.html" >About Us</a></li>
								<li role="presentation"><a href="enter_workship.php">Workship</a></li>								
								<li role="presentation"><a href="#" class="active">PASS</a></li>
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
	<table><tr><td>
	<div class="enterwork">
	<center><h2>ADD NEW SPECIAL DAYS HERE</h2></center>
	
	<div class="sub-main-w3">
		<form validate="true" action="#" method="post">
		
			<div class="form-group">
				<label for="exampleInputText">Day</label>
				<input type="text" class="form-control" name="work_name" id="exampleInputText" placeholder="workship name" required pattern="[A-Za-z]+">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Advance Price</label>
				<input type="text" class="form-control" name="work_price" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="price"  required pattern="[0-9]{6}">
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Description</label>
				<input type="text" class="form-control" name="work_desc" id="exampleMobile1" placeholder="description" required>
			</div>
			
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
	
	
	</div></td>
	<td> 
	<div class="enterwork">
	<center><h2>ADD NEW SPECIAL DAYS HERE</h2></center>
	<div class="sub-main-w3">
<table class=".table">
<tr class="tr"><th class="th">ID</th><th class="th">DAY NAME</th><th class="th">STATUS</th><th class="th"></th></tr>
<?php
$sql1="select * from pass";
$result1=mysql_query($sql1,$con);
$rowcount1=mysql_num_rows($result1);

	if($rowcount1!=0)
{
	 while($row1=mysql_fetch_array($result1))
	{
		$id=$row1['pass_id'];
		$name=$row1['day_name'];
		$sts=$row1['stataus'];
		?>
	<tr class="tr">
    <td class="td"><?php echo $id  ?></td>
    <td class="td"><?php echo $name  ?></td>
	<td class="td"><?php echo $sts  ?></td>
	<td class="td"></td>
    
  </tr>
  <?php
	}
}
  ?>	

</table>
</div>
</div>
	</td>
	<td>
	<div class="enterwork">
	<center><h2>ADD NEW WORKSHIP HERE</h2></center>
	
	<div class="sub-main-w3">
		<form validate="true" action="#" method="post">
		<div class="form-group">
				<label for="exampleInputText">Day</label>
				<input type="text" class="form-control" name="work_name" id="exampleInputText" placeholder="workship name" required>
			</div>
		<div class="form-group">
				<label for="exampleInputText">Action</label>
				<select class="form-control" id="exampleInputText" name="work_type" id="exampleInputText"required>
				<option value="daily">Open</option>
				<option value="offering">Close</option>
				
				</select>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
	
	
	</div>
	
	
	</td>
	</tr></table>
	
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
	
	
	
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<?php
}
else
{
	header("location:../../../company/Login_v15/login.php");
}
?>
</body>
</html>