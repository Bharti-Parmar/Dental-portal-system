<?php
	include('../connection.php');

	if(isset($_POST['update']))
	{
      
        $id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comments=$_POST['comments'];
		$date=date('d/m/Y H:i:s');

		$query="UPDATE comments SET name='".$name."',email_id='".$email."',comments='".$comments."',date_time='".$date."' WHERE id='".$id."'";

		mysqli_query($conn,$query);
		//var_dump($query);
		header('location:comment.php?update=true');
	}
?>