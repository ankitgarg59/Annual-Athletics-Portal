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
		     MNNIT Annual Athletics meet
         </title>	
		 
		 <link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
	<body>
	    
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar ">

	    	<div class="container">
	    		
	    		
	    		<div class="navbar-header"> <!--navbar header starts here-->
	    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    			</button>
	    				<a href="userhome.php" class="navbar-brand">MNNIT Athletics Portal</a> 
	    		</div> 
	    		<!--navbar header ends here-->

	    		<div class="collapse navbar-collapse" id="navbar-collapse">
		    		<ul class="nav navbar-nav">
		    			<li><a href="contact.php">Contact Us</a></li>
		    			<li><a href="faq.php">FAQs</a></li> 
		    		</ul>
		
				 
				 <div id="form">
				 
				     <span style="float:right;color:silver; font-size:18px; padding:5px; line-height:40px;">
				    <!--<a href = "login.php" style="color:yellow">LogIn |</a>-->
				    <!--<a href = "signup.php" style="color:yellow">SignUp</a>-->
					<?php
					if(isset($_SESSION['email'])){
						$user = $_SESSION['email'];
					 $get_name = "select * from user where email='$user'";
					 $run_name = mysqli_query($connect,$get_name);
					 $row_name=mysqli_fetch_array($run_name);
					 $user_name=$row_name['name'];
						echo "<b>Hi </b>" .  $user_name .  "<b>    |  </b>";
						echo ' ';
						echo ' ';
						echo "<a href='..\logout.php' style='color:silver'>Logout</a>";
						
					}
					
					?>

 					</div>

	  			</div>
	  	
	    	</div>
	    </nav>

<!--navbar ends here-->
	</br></br>

				 </div>
				 
			 </div>
		     <!-- Menubar ends here-->
			 
			 <!-- Content Wrapper starts here-->
			 <div class="content_wrapper">
			 
			    <div id="sidebar">
			         
					 <div id="sidebar_title">My Account</div>
					 
					 <ul id="cats">
					 <?php
					 $user = $_SESSION['email'];
					 $get_img = "select * from user where email='$user'";
					 $run_img = mysqli_query($connect,$get_img);
					 $row_img=mysqli_fetch_array($run_img);
					 $user_img=$row_img['image'];
					 $name = $row_img['name'];
					 echo "<p style='text-align:center; '><img src='user_images/$user_img' width='150' height='150'/></p>";
					 ?>
					    <li><a href="my_account.php?my_events">My Events</a></li>
						<li><a href="my_account.php?edit_account">Edit Account</a></li>
						<li><a href="my_account.php?change_password">Change Password</a></li>
						<li><a href="my_account.php?delete_account">Delete Account</a></li>
						<li><a href="newindex.php">Logout</a></li>
						
					 </ul>
					
			    </div>
			 
			    <div id="content_area">
			         
				  
			  <?php
			    if(!isset($_GET['my_events'])){
				    if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_password'])){
							if(!isset($_GET['delete_account'])){
						         echo "<h2 style='padding:20px; '>Welcome :  $name </h2>";
				  						
					        }
						
						}
					}
										
				}
				  
				  ?>
				  
				  <?php
				    if(isset($_GET['my_events'])){
						include("my_events.php");
					}
					
				    else if(isset($_GET['edit_account'])){
						include("edit_account.php");
					}
					
					else if(isset($_GET['change_password'])){
						include("change_password.php");
					}
					
					else if(isset($_GET['delete_account'])){
						include("delete_account.php");
					}
				   else{
					   include("my_events.php");
				   }
				  ?>
			    </div>
			 
			 </div>
			 <!-- Content Wrapper ends here-->
			 
			 
			 <div class="clearfix"></div>

<footer class="well" style="margin:0px; padding:10px;margin-top:12px;background:#152648;">
         <p class="small" style="margin-bottom:0px;color:white;font-family: 'Roboto Condensed', sans-serif;" align="center">&copy; MNNIT Athletics, 2018 by www.mnnit.ac.in
         </p>
</footer>

</span>
</div>
<!-- Main Con
	tainer ends here-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<!-- Main Container ends here-->
		
	</body>
</html>