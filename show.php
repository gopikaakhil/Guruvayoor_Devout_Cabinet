<?php
include("../company/header.php");
SESSION_start();
$u_id=$_POST['u_id'];
$u_pass=$_POST['u_pass'];
$sql="select * from login where u_id='$u_id'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount!=0)
{
	 while($row=mysql_fetch_array($result))
	{
		$dbu_id=$row['u_id'];
		$dbu_pass=$row['u_pass'];
		$dbu_type=$row['u_type'];
		$dbu_nme=$row['u_name'];
		$dbu_sts=$row['u_status'];
		$dbu_online=$row['u_online'];
		$_SESSION['uid']=$dbu_id;
		$_SESSION['pass']=$dbu_pass;
		if($dbu_id==$u_id&&$dbu_pass==$u_pass&&$dbu_sts==1)
		{
			if($dbu_type==1)
			{
				$sql1="update login set u_online=1 where u_id='$dbu_id'";
				$result1=mysql_query($sql1,$con);
				$sql2="select u_online from login where u_id='$dbu_id'";
				$result2=mysql_query($sql2,$con);
				$row2=mysql_fetch_array($result2);
				$_SESSION['u_name']=$dbu_nme;
				$_SESSION['u_type']="admin";
				
			header("location:../company/admin/contact.php");
			}
			else
			{
				$_SESSION['u_name']=$dbu_nme;
				$_SESSION['u_type']="user";
                 header("location:../company/user/about.php");
			}		
		}
		else
		{
			header("location:../company/Login_v15/login.php?error='wrong password!'");
			
		}
	}
	
}
else
{
	header("location:../company/index.php?error=wrong User!");
	                 //header("location:../company/user/about.php");
}
?>