<?php
     include('include/header1.php');
?>	

<!-- booking successfull -->
<?php 
     if(@$_GET["save"]) { ?>

	<div class="alert alert-success alert-dismissible">
   <a href="index.php" class="close">&times;</a>
 	 <strong>Success!</strong> Indicates a successful or positive action.
 	</div>
 <?php  } 
       ?>

<!-- comment successfull -->
<?php 
     if(@$_GET["comment"]) { ?>

      
	<div class=" alert alert-success alert-dismissible">
   <a href="index.php" class="close">&times;</a>
 	 <strong>Success!</strong> Your Comment Successfully Submitted.
 	</div>
 	 
 <?php  } 
       ?>
	
						

						<!-- carousel image -->
	<?php
     include('carousel.php');
?>	


				<!--- Feature -->
		<?php
     include('feature.php');
?>	

	

						<!--- About Us -->
		<?php
     include('about.php');
?>										
		


											

						<!--- Our service -->
	<?php
     include('our_service.php');
?>	
	
						


						<!-- pricing -->
<?php
     include('pricing.php');
?>	
	
	
	
											<!--- Our specialist -->
											
	<?php
     include('specialist.php');
?>	

 
	
						<!--- Booking -->
											
	
<?php
     include('booking.php');
?>	
	
	
	
	
											<!--- Why Choose Us -->
											
	<?php
     include('why_us.php');
?>	



	<!-- MAp
	
	<div class="col-md-12">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.4691731136677!2d78.16823131450556!3d26.21394079613253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976b771a042c3ab%3A0xef13ad0f47394b38!2sDigiMonk+-+Web+Development+%7C+Digital+Marketing+Institute+%26+Agency!5e0!3m2!1sen!2sin!4v1539682741454" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	-->








<?php include('include/footer1.php');?>
	
	
	
	
	
	
											
	