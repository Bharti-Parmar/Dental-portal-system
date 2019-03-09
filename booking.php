										
	<div class="container-fluid" id="booking" style=" padding:60px;background-color:#a5d9f3;">
		<div class="div1" style="background-color:#e9f5fc;padding:20px;">
			<div class="div2" style="padding:30px;">
						<center>
							<img src="image\a.png" height="50px;" width="50px">
							<h2 style="text-align:center;margin-top:40px; color:#006080"> Booking Your Seat </h2>
							<p style="font-weight:bold;font-size: 20px;"><i>Dentistry For People Who Love To Smile</i></p>
							<a  data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-lg mdbtn slideanim" style="margin-top:50px; margin-bottom: 50px;background-color:#006080; color:white"> Book Now </button></a>
						</center>
			</div>
		</div>
	 <!-- Modal -->	
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-md">
	      <div class="modal-content">
	        <div class="modal-header" style="background-color:#006080">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title" style="color:white;font-weight: bold;text-align: center;font-style: italic">Book Your Appointment Now</h4>
	        </div>
	        <form method="POST" action="save-booking.php">
	        <div class="modal-body">
	        <label for="name"></label>
				<input type="text" class="form-control input-lg" placeholder="Enter Your Name" name="name"  required><br />
			
				<label for="contact"></label>
				<input type="text"  class="form-control input-lg" placeholder="Enter Your Contact" name="contact"  required><br />
				
				<label for="email"></label>
				<input type="text"  class="form-control input-lg" placeholder="Enter Your Email" name="email"  required><br />
			 </div>
	        <div class="modal-footer" style="background-color:black;">
	    		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
				<button type="submit" name="save" class="btn btn-success">Submit</button>
	        </div>

	        </form>
	      </div>
	    </div>
	  </div>
  </div>
	