<?php
	include('../connection.php');

	if(isset($_POST['update']))
	{
      
        $id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$date=date('d/m/Y H:i:s');

		$query="UPDATE booking_registration SET name='".$name."',email_id='".$email."',contact_no='".$contact."',date_time='".$date."' WHERE id='".$id."'";

		mysqli_query($conn,$query);
		//var_dump($query);
		header('location:booking_entry.php?update=true');
	}
?>