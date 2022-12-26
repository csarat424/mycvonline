<?php
include('conn/conn.php');
session_start();
if($_SESSION['role']!="Company"){

echo "<script>window.location.href='index.php'</script>";
session_destroy();
}
if (isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$id=$_SESSION['id'];
		$customer_insert="Update company set name='".$name."', email='".$email."' where id='".$id."'";
		$customer_insert_run=mysqli_query($conn,$customer_insert);
		if(mysqli_affected_rows($conn)==1){
			echo "<script>alert('Profile Updated')</script>";
			echo "<script>window.location.href='company_profile.php'</script>";
		}
}else{
	echo "<script>window.location.href='company_profile.php'</script>";
}
?>