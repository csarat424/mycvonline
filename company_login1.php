<?php
include('conn/conn.php');
session_start();
if (isset($_POST['submit'])){
	$user_name=$_POST['usrname'];
	$password=$_POST['pwd'];
	$password=$password.$user_name; //Username is the salt key
	$password=hash('sha1', $password);
	$sql_find="Select * from company where username='".$user_name."' and password='".$password."'";
	$sql_find_dup=mysqli_query($conn,$sql_find);
	if(mysqli_num_rows($sql_find_dup)>0){
		$sql_vals=mysqli_fetch_array($sql_find_dup);
		$_SESSION['role']='Company';
		$_SESSION['name']=$sql_vals['name'];
		$_SESSION['id']=$sql_vals['id'];
		echo "<script>window.location.href='index.php'</script>";

	}else{
			echo "<script>alert('Incorrect Username or Password. Please check username or password before login. ')</script>";
			echo "<script>window.location.href='candidate_login.php'</script>";
	}
}
?>
