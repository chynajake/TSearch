<?php
session_start();
$db=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db("tsearch",$db);
if (isset($_POST['nickName']) and $_POST['password']){
	$nick=$_POST['nickName'];
	$pass=$_POST['password'];
	$sql=mysql_query("SELECT * FROM users WHERE User='$nick'");
	$myrow=mysql_fetch_array($sql);
	if( $myrow['User']==$nick ){
		if($myrow['Password']==$pass){
			if($myrow['Roots']==1){
				echo "NICE";
				header("location:admin.php");
			}
			else{
				echo "NICE";
				header("location:mainSigned.php");
				$_SESSION['name']=$myrow['User'];
			}
		}else{
			echo "Your password is incorrect";
		}

	}else{
		echo "You do not have an account :D";
	}
}
?>