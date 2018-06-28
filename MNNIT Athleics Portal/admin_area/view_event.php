<table width="795" align="center" bgcolor="pink">

   <tr align="center">
        <td colspan='6'><h2 style="text-align:center;color:blue">Registered participants for all events</h2></td>
		
		 
   </tr>
 <?php
       include("includes/db.php");
	   $get_event = "select * from event_result";
	   $run_event = mysqli_query($connect,$get_event);
	   
	   $i=0;
	   while($row_event = mysqli_fetch_array($run_event)){
		   $event = $row_event['event_name'];
		 ?>
		    <tr align="center">
        <td colspan='6'><h2 style="text-align:center;"><?php echo $event;?> Boys Event</h2></td>
   
            </tr>
		   <tr align="center" bgcolor="skyblue">
   <th>S.No.</th>
   <th>Name</th>
   <th>Reg.No.</th>
        <th>Email</th>
		<th>Institute</th>
		
			
   </tr>
		   <?php 
		   
		      $get_user = "select user_id from registered_participant where event_name='$event' and gender='Male'";
	         $run_user = mysqli_query($connect,$get_user);
			 $j=0;
			 while($row_user = mysqli_fetch_array($run_user)){
				 $j++;
				 $user = $row_user['user_id'];
				 
				  $get_userinfo = "select * from user where user_id='$user'";
	              $run_userinfo = mysqli_query($connect,$get_userinfo);
				  
				  $k=0;
				   while($row_userinfo= mysqli_fetch_array($run_userinfo)){
				  $user_name = $row_userinfo['name'];
		          $reg_no=$row_userinfo['reg_no'];
		              $email=$row_userinfo['email'];
		              $institute = $row_userinfo['institute'];
					   $k++;
					  ?>
					  <tr align="center">
                            <td><?php echo $j?></td>
		                   <td><?php echo $user_name;?></td>
		                  <td><?php echo $reg_no;?></td>
		                   <td><?php echo $email;?></td>
		                  <td><?php echo $institute;?></td>
		                 
		  
                       </tr>
					   <tr>
					    
					   </tr>
					  <?php
					  
					
					 
				   }
				   
				   
			 }
		 
   ?>
      <tr align="center">
        <td colspan='6'><h2 style="text-align:center;"><?php echo $event;?> Girls Event</h2></td>
   
            </tr>
		   <tr align="center" bgcolor="skyblue">
   <th>S.No.</th>
   <th>Name</th>
   <th>Reg.No.</th>
        <th>Email</th>
		<th>Institute</th>
		
			
   </tr>
		   <?php 
   
   $get_user = "select user_id from registered_participant where event_name='$event' and gender='Female'";
	         $run_user = mysqli_query($connect,$get_user);
			 $j=0;
			 while($row_user = mysqli_fetch_array($run_user)){
				 $j++;
				 $user = $row_user['user_id'];
				 
				  $get_userinfo = "select * from user where user_id='$user'";
	              $run_userinfo = mysqli_query($connect,$get_userinfo);
				  
				  $k=0;
				   while($row_userinfo= mysqli_fetch_array($run_userinfo)){
				  $user_name = $row_userinfo['name'];
		          $reg_no=$row_userinfo['reg_no'];
		              $email=$row_userinfo['email'];
		              $institute = $row_userinfo['institute'];
					   $k++;
					  ?>
					  <tr align="center">
                            <td><?php echo $j?></td>
		                   <td><?php echo $user_name;?></td>
		                  <td><?php echo $reg_no;?></td>
		                   <td><?php echo $email;?></td>
		                  <td><?php echo $institute;?></td>
		                 
		  
                       </tr>
					  <?php
					  
					
					 
				   }
				   
			 }
		   $i++;
		   
	   }
   ?>
   </table>
