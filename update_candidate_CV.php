<?php
include('conn/conn.php');
session_start();
if($_SESSION['role']!="Candidate"){

echo "<script>window.location.href='index.php'</script>";
session_destroy();
}
if (isset($_POST['submit'])){
	$skills=$_POST['skills'];
	$work_exp=$_POST['work_exp'];
	$education=$_POST['education'];
	$id=$_SESSION['id'];
	$query="SELECT * from cv where cand_id ='".$id."'";
	$query_exec=mysqli_query($conn,$query);
	if(mysqli_num_rows($query_exec)==1){
		$customer_insert="Update cv set skills='".$name."', Work_exp='".$email."', Education='".$education."'  where cand_id='".$id."'";
		$customer_insert_run=mysqli_query($conn,$customer_insert);
		if(mysqli_affected_rows($conn)==1){
			echo "<script>alert('CV Updated')</script>";
			echo "<script>window.location.href='candidate_cv.php'</script>";
		}
	}else{
		$customer_insert="Insert into cv (`cand_id`,`skills`,`Work_exp`,`Education`) values('".$id."','".$skills."','".$work_exp."','".$education."')";
		$customer_insert_run=mysqli_query($conn,$customer_insert);
		if(mysqli_affected_rows($conn)==1){
			echo "<script>alert('CV Updated')</script>";
			echo "<script>window.location.href='candidate_cv.php'</script>";
		}
	}
		
}else{
	echo "<script>window.location.href='candidate_cv.php'</script>";
}
?>