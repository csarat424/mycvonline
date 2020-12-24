<?php
include('conn/conn.php');
if (isset($_POST['submit'])){
	$user_name=$_POST['usrname'];
	$password=$_POST['pwd'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$password.$user_name; //Username is the salt key
	$password=hash('sha1', $password);
	$sql_find="Select * from company where username='".$user_name."'";
	$sql_find_dup=mysqli_query($conn,$sql_find);
	if(mysqli_num_rows($sql_find_dup)>0){
		echo "<script>alert('Username Already Exists')</script>";
		echo "<script>window.location.href='company_signup.php'</script>";
	}else{
		$customer_insert="Insert into company (`username`, `password`, `name`, `email`) values ('".$user_name."','".$password."','".$name."','".$email."')";
		$customer_insert_run=mysqli_query($conn,$customer_insert);
		if(mysqli_affected_rows($conn)==1){
			echo "<script>alert('Company Registered. Please Login')</script>";
			echo "<script>window.location.href='company_login.php'</script>";
		}
	}
}
?>
