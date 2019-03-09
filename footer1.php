<div class="container-fluid" id="contact" style="margin-top:40px;background-color:black;">
		
		<div class="row">
			
			<div class="col-md-4 col-xs-12"><br>
				<img src="image\a.png" height="50px" width="50px" style="margin-left:70px"><br><br>
				<h4 style="color:white;margin-left:60px;">
				 <p>Contact Info</p> 
				</h4>
				<br>
				<p style="color:skyblue;font-size:17px;margin-left:60px;"> <span class="glyphicon glyphicon-phone"> &nbsp; </span> +91-9893081296</p>
				<p style="color:skyblue;font-size:17px;margin-left:60px;"> <span class="glyphicon glyphicon-phone"> &nbsp; </span>+91-9977264551</p>
				<p style="color:skyblue;font-size:17px;margin-left:60px;"> <span class="glyphicon glyphicon-envelope"> &nbsp; </span>Rajkumar.parmar1557@gmail.com</p>
				<p style="color:skyblue;font-size:17px;margin-left:60px;"> <span class="glyphicon glyphicon-home"> &nbsp; </span> H.N-117 Vinay Nagar Sec.2, SP Ashram</p>
				<p style="color:skyblue;margin-left:60px;font-size:17px;"> Gwalior, Madhya Pradesh</p>
				<p style="color:skyblue;margin-left:60px;font-size:17px;"> 474012 </p>
			</div>
			
			<div class="col-md-4 col-xs-12"><br><br><br><br>
				<h4 style="color:white;margin-left:60px;"> Latest News</h4><br>
				<p style="color:skyblue;margin-left:60px;">- If you need a crown or lorem on implant you will pay it.</p><br>
				<p style="color:skyblue;margin-left:60px;">- Everyone should see a general dentist for routine oral health examinations, twice yearly cleaning and treatment.</p><br>
				<p style="color:skyblue;margin-left:60px;">- Patient who visit a general dentist in can exact professional oral heath care, as well as education and advertisement about self care.</p>
			</div>
			
			<div class="col-md-4 col-xs-12"><br><br><br>
				<a href="#about"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> About Us </h4></a>
				<a href="#service"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Services </h4></a>
				<a href="#why_us"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Why Us </h4></a>
				<a href="#specialist"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Specialists </h4></a>
				<a href="#work"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Our Works </h4></a>
				<a href="#booking"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Booking </h4></a>
				<a data-toggle="modal" data-target="#myModal1">
				<h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Careers </h4>
				</a>
				 <!-- Modal -->	
				<div class="modal fade" id="myModal1" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content" style="background-color: skyblue;">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title" style="font-weight: bold">Career</h4>
				        </div>
				        <div class="modal-body">
				        	<h4 style="color:#006080;">Learn about the dental procedure we offer in <a href="#service" style="color:orange">our services </a> : </h4>
				        	<ul>
				        		<li>Crown & Bridges</li>
				        		<li>Dental Implants</li>
				        		<li>Dental Cleaning & Consultation </li>
				        		<li>Composite Filling</li>
				        		<li>Amalgam Filling</li>
				        		<li>Dental Sealents</li>
				        		<li>Tooth Extraction</li>
				        		<li>Root Canals</li>
				        		<li>Denture</li>
				        		<li>Partial Denture</li>
				        		<li>Braces</li>
				        	</ul>
						</div>
				        <div class="modal-footer">
				      	 	<p>You can check in our <a id="one"> Services </a> what you can choose to make our future in dentistry.</p> 
				        </div>
				      </div>
				    </div>
				</div>
			 	<a data-toggle="modal" data-target="#myModal2"><h4 style="color:skyblue;font-size:17px;float:right;margin-right:200px;"> Privacy </h4></a>
				 <!-- Modal -->	
				<div class="modal fade" id="myModal2" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Privacy</h4>
				        </div>
				        <div class="modal-body">
				        	
						</div>
				        <div class="modal-footer">
				      	 	
				        </div>
				      </div>
				    </div>
				</div>
			</div>
		
		</div>
		<br><br>

			<center>
				<div class="container-fluid">
					<img src="image\fbb.png" height="50px" width="50" >
					<img src="image\linked.png" height="50px" width="50" >
					<img src="image\insta.png" height="50px" width="50" >
					<img src="image\twit.png" height="50px" width="50" >
				</div>
			</center>
			<br><br>
	</div>

	

<script>
$(document).ready(function(){
 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {


    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("uper");
        }
    });
  });
})
</script>

<script type="text/javascript">
	$(document).ready(function()
		{
			$('#one').click(function(){
				$('#two').slidetoggle();
			});
		});
</script>
	</body>
</html>