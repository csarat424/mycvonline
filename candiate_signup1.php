<?php
include('conn/conn.php');
if (isset($_POST['submit'])){
	$user_name=$_POST['usrname'];
	$password=$_POST['pwd'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$password=$password.$user_name; //Username is the salt key
	$password=hash('sha1', $password);
	$sql_find="Select * from candidate where username='".$user_name."'";
	$sql_find_dup=mysqli_query($conn,$sql_find);
	if(mysqli_num_rows($sql_find_dup)>0){
		echo "<script>alert('Username Already Exists')</script>";
		echo "<script>window.location.href='candidate_signup.php'</script>";
	}else{
		$customer_insert="Insert into candidate (`username`, `password`, `name`, `email`,`phno`) values ('".$user_name."','".$password."','".$name."','".$email."','".$phno."')";
		$customer_insert_run=mysqli_query($conn,$customer_insert);
		if(mysqli_affected_rows($conn)==1){
			echo "<script>alert('Candidate Registered. Please Login')</script>";
			echo "<script>window.location.href='candidate_login.php'</script>";
		}
	}
}
?>
