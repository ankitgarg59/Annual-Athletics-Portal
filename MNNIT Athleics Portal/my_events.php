<?php
       	 include("includes/db.php");
	     $user = $_SESSION['email'];
			$get_user = "select * from user where email='$user'";
			$run_user = mysqli_query($connect,$get_user);
			 
            $row_user=mysqli_fetch_array($run_user);
			 
			$id = $row_user['user_id'];
		$get_event = "select event_name from registered_participant where user_id='$id'";
	    $run_event= mysqli_query($connect,$get_event);
?>


<div class="container">
	<div class="col-sm-9 text-right">
		<hr>
			<p><b style='text-align:center;font-size:18px;'>Your Registered Events</b></p>
		<hr>
	</br>
	 	<div class="panel panel-default panel-info">
	  		<div class="panel-heading" align='center'><h4 >Your Events</h4></div>
	  			<div class="panel-body text-center">
	  				<h4>Your User ID for Annual Athletic Meet : <b><?php echo " $id"; ?> </b></h4>
	  			</div>	
	  	
			  	<table class="table table-bordered">

					 <?php
						    
						   $i=0;
						   while($row_event = mysqli_fetch_array($run_event)){
							   $event = $row_event['event_name'];
							    $i++;
							  	   
					 ?>
					
					<tr align="center">
					    <td><?php echo $i?></td>
						<td><?php echo $event;?></td>					 				  
					</tr>
					   
				    <?php } 
				   
				    ?>

				</table>

			<div class="panel-footer" align='center'><h5><b>Register for more events if you are interested...</b></h5></div>
			
		</div>

	</br>
				<footer class="well" style="margin:0px; padding:10px;margin-bottom:0px;background:#152648;">
		         <p class="medium" style="margin-bottom:0px;color:white;font-family: 'Roboto Condensed', sans-serif;" align="center">Kindly Bring Your ID at the time of Event
		         </p>
				</footer>
	</div>
</div>
