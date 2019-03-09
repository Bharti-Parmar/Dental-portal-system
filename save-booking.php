<?php
  
    include('connection.php');

  if(isset($_POST['save']))
  {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$contact=$_POST['contact'];
  	$date=date('d/m/Y H:i:s');

  	$query = "INSERT INTO booking_registration(name,email_id,contact_no,date_time)VALUES('".$name."','".$email."','".$contact."','".$date."')";


  	  mysqli_query($conn,$query);

       //var_dump($query);

  	header('location:index.php?save=true');

  }


?>