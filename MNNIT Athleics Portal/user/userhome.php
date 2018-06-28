 <!DOCTYPE html>

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
<!--navbar starts here-->

	    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar ">

	    	<div class="conatiner">
	    		
	    		
	    		<div class="navbar-header"> <!--navbar header starts here-->
	    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    			</button>
	    				<a href="newindex.php" class="navbar-brand">MNNIT Athletics Portal</a> 
	    		</div> 
	    		<!--navbar header ends here-->

	    		<div class="collapse navbar-collapse" id="navbar-collapse">
		    		<ul class="nav navbar-nav">

		    			<li class="nav-item dropdown">
	        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Events<span class="caret"></span>  </a>
			    		
			    			<ul class="dropdown-menu">
		    					<li class="dropdown-header"><b>FORMAL EVENTS</b></li>
		    					<li class="divider"></li>
		    					<li><a href="index.php?racing">Racing</a></li>
				    			<li><a href="index.php?throwing">Throwing</a></li>
				    			<li><a href="index.php?jumping">Jumping</a></li> 
				    			<li class="divider"></li>
				    			<li class="dropdown-header"><b>INFORMAL EVENTS</b></li>
				    			<li class="divider"></li>
		    					<li><a href="index.php?informal_events">Slow Cycing Race</a></li>
				    			<li><a href="index.php?informal_events">Sack Race</a></li>
				    			<li><a href="index.php?informal_events">Brick Race</a></li> 
				    			<li><a href="index.php?informal_events">Three Leg Race</a></li> 
			    			</ul>
		    			</li>

		    			<li><a href="index.php?register">Event Registration</a></li>
		    			<li><a href="index.php?contact">Contact Us</a></li>
		    			<li><a href="index.php?show_result">Show Results</a></li> 
		    		</ul>

		    		<div id="form">
				 
				     <span style="float:right; font-size:16px; padding:5px; line-height:40px; color:silver">
				    <!--<a href = "login.php" style="color:yellow">LogIn |</a>-->
				    <!--<a href = "signup.php" style="color:yellow">SignUp</a>-->
					<?php
					if(isset($_SESSION['email'])){
						
						$user = $_SESSION['email'];
					 $get_name = "select * from user where email='$user'";
					 $run_name = mysqli_query($connect,$get_name);
					 $row_name=mysqli_fetch_array($run_name);
					 $user_name=$row_name['name'];
						echo "<a href='user\my_account.php' style='color:silver'>My Account</a>";

						//echo "<a href='logout.php' style='color:yellow'>Logout</a>";
						
					}
					else{
					if(isset($_GET['register']) ||  isset($_GET['signup']))
				        {
						}
						else{
						echo "<a href = 'newsignup.php' style='color:gray'>SignUp     |  </a>";
					    echo "<a href='newlogin.php' style='color:gray'> Log In</a>";	
						}
					}
					?>
				 </div>

	  			</div>
	  	
	    	</div>
	    </nav>

<!--navbar ends here-->
	 
	</br></br>


	<div class="jumbotron">
		<div class="container">
		    <div class="row">
		    	<div class="col-xs-12">
		    		<div class="media-body">
				       <img src="images/mnnit.png" class="img-responsive"/>
				
		         </div>
		     </div>
		 </div>
		</div>
	</div>


<div class="container">
	<div class="col-xs-12">
 	<div class="panel panel-default">
  		<div class="panel-heading" align='center'><h4 >News Feed</h4></div>
  			
  	</br>
		
 <?php
					 
	getsBlogs();	
		   
?>

		</br>

		<div class="panel-footer" align='center'><h5>End of News Feed</h5</div>
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
		
	</body>

</html>