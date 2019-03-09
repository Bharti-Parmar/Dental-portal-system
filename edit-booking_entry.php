 <?php
    include('include/header.php');
    include('../connection.php');
 ?>

    <div class="container">
      <h2>Edit Page</h2>
      <?php

           $id=@$_GET['id'];
          $query="Select * from booking_registration where id='".$id."'";

          $sql=mysqli_query($conn,$query);
          $edit=mysqli_fetch_array($sql);
      ?>


      <form action="update-booking.php" method="POST" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?php echo $edit['0'];?>">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="name" class="form-control" id="name" value="<?php echo $edit['name'];?>" name="name">
        </div>
        <div class="form-group">
          <label for="cantact">Contact:</label>
          <input type="contact" class="form-control" id="contact" value="<?php echo $edit['contact_no'];?>" name="contact">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" value="<?php echo $edit['email_id'];?>" name="email">
        </div>
      <button type="submit" name="update" class="btn btn-primary">Update</button>

      </form>
    </div>

  <?php
      include('include/footer.php');
  ?>