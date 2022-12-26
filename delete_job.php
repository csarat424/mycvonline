<?php
include('conn/conn.php');

if (isset($_GET['id'])){
	$id=$_GET['id'];
		$customer_insert="DELETE FROM `jobs` where id='".$id."'";
		echo $customer_insert;
		$customer_insert_run=mysqli_query($conn,$customer_insert);
		if(mysqli_affected_rows($conn)==1){
			echo "<script>alert('Job Deleted')</script>";
			echo "<script>window.location.href='jobs.php'</script>";
		}
}
?>