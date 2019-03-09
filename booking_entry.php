<?php
    include('include/header.php');
    include('../connection.php');
  ?>

      <div class="container"> 

         <?php if(@$_GET['update']) {?>
          <div class="alert alert-success alert-dismissible">
            <a href="booking_entry.php" class="close">&times;</a>
            <strong>Success!</strong> Update Successfull!
          </div>
          <?php }?>

      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>name</th>
            <th>email</th>
            <th>contact</th>
            <th>date</th>
            <th>action</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>

          <?php 

              $query = "SELECT * FROM booking_registration order by id desc";
              $sno = 1;
              $sql = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($sql))
              {

          ?>
          <tr>
            <td><?php echo $sno;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email_id'];?></td>
            <td><?php echo $row['contact_no'];?></td>
            <td><?php echo $row['date_time'];?></td>
            <td><a href="edit-booking_entry.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-info">Edit</button></a></td>
            <td><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <?php 
              
              $sno = $sno+1;
            }
          ?>
        </tbody>
      </table>
    </div>

<?php
    include('include/footer.php')
  ?>