 
 <form action=""  method="post" enctype="multipart/form-data" >
            <div class="col-sm-12 text-secondary">
                <div class="panel panel-default panel-info">
                    <div class="panel-heading" align='center'><h4 >Add Results Here</h4></div>
                        <table class="table table-bordered table-responsive">

					  		<tr>
                                 <td  align="right" ><b>Event :  </b></td>
                                <!--<td style="border:gray 1px solid"><input type="text" id="branch" name="branch" size="50" required/></td>-->
								<td>
								    <select name="event" >
								        <option>Select Event</option>
										<option>100m Race </option>
										<option >200m Race</option>
										<option>400m Race</option>
										<option>800m Race</option>
										<option>1500m Race</option>
										<option>Discus Throw</option>
										<option>Hammer Throw</option>
										<option>Javelin Throw</option>
										<option>Shot put Throw</option>
										<option>Long Jump</option>
										<option>High Jump</option>
										<option>Triple Jump</option>
										<option>Sack Race</option>
										<option>Three Leg Race</option>
										<option>Slow Cycle Race</option>
										<option>Brick Race</option>
									</select>
								</td>				
                     		</tr>
		                    
		                  
					 
					 		<tr>
                                <td  align="right" ><b>1st Winner Boy:  </b></td>
                                <td ><input type="text" id="id1_b" name="id1_b"  placeholder="Please Enter ID" size="20"  required/></td>
	                     	</tr>
						    <tr>
                                 <td  align="right" ><b>2nd Winner Boy:  </b></td>
                                <td ><input type="text" id="id2_b" name="id2_b"  placeholder="Please Enter ID" size="20"  required/></td>
		                    </tr>
							<tr>
                                 <td  align="right" ><b>3rd Winner Boy:  </b></td>
                                <td ><input type="text" id="id3_b" name="id3_b"  placeholder="Please Enter ID" size="20"  required/></td>
		                    </tr>
							 					 
		                
							<tr>
                                 <td  align="right" ><b>1st Winner Girl:  </b></td>
                                <td ><input type="text" id="id1_g" name="id1_g"  placeholder="Please Enter ID" size="20"  required/></td>
                     		</tr>
					   		<tr>
                                 <td  align="right" ><b>2nd Winner Girl:  </b></td>
                                <td ><input type="text" id="id2_g" name="id2_g"  placeholder="Please Enter ID" size="20" required/></td>
                     		</tr>
					  		<tr>
                                 <td  align="right" ><b>3rd Winner Girl:  </b></td>
                                <td ><input type="text" id="id3_g" name="id3_g"  placeholder="Please Enter ID" size="20"  required/></td>
                     		</tr>								  
                            
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "add_result" value="Add Result">
                                 </td>

                             </tr>
 
                        </table>
                    </div>
                </div>
 
        </form>
						
<?php
include("includes/db.php");
if(isset($_POST['add_result']))
{
//$ip = getIP();

    $event =  $_POST['event'];
     $id1_b =  $_POST['id1_b'];
	 $id2_b =  $_POST['id2_b'];
	 $id3_b =  $_POST['id3_b'];
	 $id1_g =  $_POST['id1_g'];
	 $id2_g =  $_POST['id2_g'];
	 $id3_g =  $_POST['id3_g'];
	 

   $reg_event = "select * from event_result where event_name='$event'";
   $run_event = mysqli_query($connect,$reg_event);
   $row_event = mysqli_fetch_array($run_event);
    $event_name = $row_event['event_name'];
	
	
    
	$add_res="UPDATE `event_result` SET `winner1_id_b`='$id1_b',`winner2_id_b`='$id2_b',`winner3_id_b`='$id3_b',`winner1_id_g`='$id1_g',`winner2_id_g`='$id2_g',`winner3_id_g`='$id3_g' WHERE event_name='$event_name'";
     $run_add_res = mysqli_query($connect,$add_res);
	 
	 if($run_add_res)
	 {
		 echo "<script>alert('Result is added!!!')</script>";
	 }
 
}

?>			