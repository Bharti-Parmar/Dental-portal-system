<?php
  
    include('connection.php');

  if(isset($_POST['comment']))
  {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$comments=$_POST['comments'];
  	$date=date('d/m/Y H:i:s');

  	$query1 = "INSERT INTO comments(name,email_id,comments,date_time)VALUES('".$name."','".$email."','".$comments."','".$date."')";


  	  mysqli_query($conn,$query1);

       //var_dump($query);

  	header('location:index.php?comment=true');

  }


?>