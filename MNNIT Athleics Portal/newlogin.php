<!DOCTYPE html>


 <?php
     session_start();
     include("functions/functions.php");
    include("includes/db.php");
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MNNIT Annual Athletics Meet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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
		    					<li><a href="newindex.php?racing">Racing</a></li>
				    			<li><a href="newindex.php?throwing">Throwing</a></li>
				    			<li><a href="newindex.php?jumping">Jumping</a></li> 
				    			<li class="divider"></li>
				    			<li class="dropdown-header"><b>INFORMAL EVENTS</b></li>
				    			<li class="divider"></li>
		    					<li><a href="newindex.php?informal_events">Informal Events</a></li>
		    				</br>
			    			</ul>
		    			</li>
		    			<li><a href="newindex.php?gallery">Gallery</a></li>
		    			<li><a href="newindex.php?contact">Contact Us</a></li>
		    			<li><a href="newindex.php?show_result">Show Results</a></li> 
		    		</ul>

                </div>
        
            </div>
        </nav>

<!--navbar ends here-->

</br></br></br></br>
  
  <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action=""  method="post" enctype="multipart/form-data" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="Your Registered Email"  required="required" />                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Your Password"  required="required" />
                                    </div>
                                    

                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                  <button type="submit" class="btn btn-success" name="login" id="submit" >Login  </button>
                                  <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account! 
                                    <a href="newsignup.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                    </div>
                                </div>
                            </div>    
                            
                    </form>     



                        </div>                     
                    </div>  
        </div>

<div class="clearfix"></div>

<footer class="well" style="margin:0px; padding:10px;margin-top:120px;background:#152648;">
         <p class="small" style="margin-bottom:0px;color:white;font-family: 'Roboto Condensed', sans-serif;" align="center">&copy; MNNIT Athletics, 2018 by www.mnnit.ac.in
         </p>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php

require ("require/validate.php");

if(isset($_POST['login']))

{
//$ip = getIP();

$email =  $_POST['email'];
$password = $_POST['password'];

$sel_user = "select * from user where email='$email' AND password='$password'";

$run_user = mysqli_query($connect,$sel_user);
   $check_user = mysqli_num_rows($run_user);


if($check_user==0)
{
    echo "<script>alert('email or password is incorrect, please try again! ')</script>";
    exit();
}

else{
    
    $_SESSION['email']=$email;
    echo "<script>alert('You logged in successfully, Thanks !')</script>";
    echo "<script>window.open('userhome.php','_self')</script>";
}
}

?>