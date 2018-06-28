
<div class="col-md-12 text-secondary">
 	<br><div class="panel panel-default panel-info">
  		<div class="panel-heading" align='center'><h4 >All Posts</h4></div>
		  	<table class="table table-bordered">
		  		<thead align="center">
		  			<tr>
		  				<th>S.No</th>
						<th>Admin</th>
						<th>Title</th>
				        <th>Content</th>
		  			</tr>
		  		</thead>

		  		<?php
			       include("includes/db.php");
				   $get_post = "select * from news";
				   $run_post = mysqli_query($connect,$get_post);
				   
				   $i=0;
				   while($row_post = mysqli_fetch_array($run_post)){
					   $post_id = $row_post['post_id'];
					   $post_title=$row_post['post_title'];
					   $post_content=$row_post['content'];
					   $post_admin = $row_post['admin_email'];
					   $i++;
					   	   
			   ?>
			   <tr align="left">
			        <td><b><?php echo $i?>.</b></td>
					<td><?php echo $post_admin;?></td>
					<td><?php echo $post_title;?></td>
					<td><?php echo $post_content;?></td>					  
			   </tr>
			   
	   <?php } ?>
			
					  
		</table>
	</div>
</div>
