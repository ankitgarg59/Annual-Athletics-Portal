 <!DOCTYPE>

 <?php
 session_start();
     include("functions/functions.php");
	 include("includes/db.php");
 ?>
<html>

    <head>
	     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.min.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
	     <title>
		     MNNIT Annual Athletics Meet
         </title>	
		
	<style>
         .well {
         	 color:white;
             background-color: #152645;
         }

    </style>

	</head>
	
	<body>
	    
	<div class="well">
		<div class="container">
			<div class="col-sm-12 text-secondary background-color:#152648">
			
				<h2 style="text-align:center">MNNIT Athletics Admin Panel</h2>
			</div>
		</div>
	</div>			


<div class="container">
		<br><hr>
		<div class="col-sm-2">			
			
				       <img src="images/admin.jpg" class="img-responsive"/>				
		    
		</div>

			<div class="col-sm-10 text-secondary">
				<ul class="nav nav-pills nav-justified">
				 
				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Racing Registartion and Results</a>
					    <ul class="dropdown-menu">
					      		<li><a href="index.php?event_100mRace">100 Metres Racing</a></li>
				    			<li><a href="index.php?event_200mRace">200 Metres Racing</a></li>
				    			<li><a href="index.php?event_400mRace">400 Metres Racing</a></li>
				    			<li><a href="index.php?event_800mRace">800 Metres Racing</a></li>
				    			<li><a href="index.php?event_1500mRace">1500 Metres Racing</a></li>
					    </ul>
				  </li>

				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Throwing Registartion and Result</a>
					    <ul class="dropdown-menu">
					      		<li><a href="index.php?event_shotput">Shotput Throw</a></li>
				    			<li><a href="index.php?event_discus">Discus Throw</a></li>
				    			<li><a href="index.php?event_hammer">Hammer Throw</a></li>
				    			<li><a href="index.php?event_javelin">Javelin Throw</a></li>
					    </ul>
				  </li>

				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jumping Registartion and Results</a>
					    <ul class="dropdown-menu">
					      		<li><a href="index.php?event_high">High Jump</a></li>
				    			<li><a href="index.php?event_long">Long Jump</a></li>
				    			<li><a href="index.php?event_triple">Triple Jump</a></li>
					    </ul>
				  </li>

				  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informal Event Registartion and Results</a>
					    <ul class="dropdown-menu">
					      		<li><a href="index.php?event_slowcycle">Slow Cycling Race</a></li>
				    			<li><a href="index.php?event_sack">Sack Race</a></li>
				    			<li><a href="index.php?event_brick">Brick Race</a></li>
				    			<li><a href="index.php?event_threeleg">Three Leg Race</a></li>
					    </ul>
				  </li>
				  

				</ul>
			</div>

		<br><br><hr>

</div>

	

	<div class="container">
		<div class="col-sm-2 text-secondary">
			
			<ul class="nav nav-stacked">
				<li><a href="index.php">Admin Home</a></li>
				<li><a href="index.php?view_post">View All Posts</a></li>
				<li><a href="index.php?view_user">View Users</a></li>
				<li><a href="index.php?add_post">Add Post</a></li>
				<li><a href="index.php?add_result">Add Results</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			
		</div>



	<div class="container">
		<div class="col-sm-10 text-secondary">
			
				  <?php
				    if(isset($_GET['add_post'])){
						include("add_post.php");
					}
					else if(isset($_GET['view_post'])){
						include("view_post.php");
					}
					else if(isset($_GET['view_user'])){
						include("view_user.php");
					}
					else if(isset($_GET['add_result'])){
						include("add_result.php");
					}
					else  if(isset($_GET['event_threeleg']))
				   {
					    include("event_threeleg.php");
				   }
				   else  if(isset($_GET['event_sack']))
				   {
					    include("event_sack.php");
				   }
				   else  if(isset($_GET['event_slowcycle']))
				   {
					    include("event_slowcycle.php");
				   }
				   else  if(isset($_GET['event_brick']))
				   {
					    include("event_brick.php");
				   }
				   else  if(isset($_GET['event_high']))
				   {
					    include("event_high.php");
				   }
				   else  if(isset($_GET['event_long']))
				   {
					    include("event_long.php");
				   }
				   else  if(isset($_GET['event_triple']))
				   {
					    include("event_triple.php");
				   }
				   else  if(isset($_GET['event_shotput']))
				   {
					    include("event_shotput.php");
				   }
				   else  if(isset($_GET['event_hammer']))
				   {
					    include("event_hammer.php");
				   }
				   else  if(isset($_GET['event_javelin']))
				   {
					    include("event_javelin.php");
				   }
				   else  if(isset($_GET['event_discus']))
				   {
					    include("event_discus.php");
				   }
				   else  if(isset($_GET['event_100mRace']))
				   {
					    include("event_100mRace.php");
				   }
				   else  if(isset($_GET['event_200mRace']))
				   {
					    include("event_200mRace.php");
				   }
				   else  if(isset($_GET['event_400mRace']))
				   {
					    include("event_400mRace.php");
				   }
				   else  if(isset($_GET['event_800mRace']))
				   {
					    include("event_800mRace.php");
				   }
				   else  if(isset($_GET['event_1500mRace']))
				   {
					    include("event_1500mRace.php");
				   }
				   else if(isset($_SESSION['admin_email']))
				   {
						$user = $_SESSION['admin_email'];
					 	$get_name = "select * from admin where admin_email='$user'";
					 	$run_name = mysqli_query($connect,$get_name);
					 	$row_name=mysqli_fetch_array($run_name);
					 	$user_name=$row_name['admin_name'];
					?>
					<br>

						<div class="col-sm-12 text-secondary">
						 	<div class="panel panel-default panel-info">
						  		<div class="panel-heading" align='center'><h4 >Posts by <b><?php echo " " .  $user_name ." "; ?></b></h4></div>
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
										   $get_post = "select * from news WHERE admin_email='$user'";
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

				<?php	}
					else
					{
						echo "<script>alert('Please login first!')</script>";
    					echo "<script>window.open('login.php')</script>";
					}
					
				?>
				  
 
			 </div>		
		</div>
</div>
 

<div class="clearfix"></div>

<footer class="well" style="margin:0px; padding:10px;margin-top:12px;background:#152648;">
         <p class="small" style="margin-bottom:0px;color:white;font-family: 'Roboto Condensed', sans-serif;" align="center">&copy; MNNIT Athletics, 2018 by www.mnnit.ac.in
         </p>
</footer>

<!-- Main Con
	tainer ends here-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<!-- Main Container ends here-->
		
	</body>
</html>