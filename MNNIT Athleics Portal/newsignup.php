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
    <title>MNNIT Annual Athletic Meet</title>

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

</br></br>
  
        <div id="signupbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title" align="center">Create New Account</div>

                        </div>  
                        <div class="panel-body" >
                         <form id="post_box" class="form-horizontal" role="form" action=""  method="post" enctype="multipart/form-data" >
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="name" name="name" size="50" placeholder="Your Name" required="required" />
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="reg_no" class="col-md-3 control-label">Registration No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="reg_no" name="reg_no" size="50" placeholder="Your Registration Number" required="required" />
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="institute" class="col-md-3 control-label">Institute</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="institute" name="institute" size="50" placeholder="Name Of Your Institute" required="required" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="course" class="col-md-3 control-label">Course</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="course" name="course" required="required" />
                                                <option>Select Your Course</option>
                                                <option>B.Tech./B.E.</option>
                                                <option>MBA</option>
                                                <option>MCA</option>
                                                <option>M.Tech.</option>
                                                <option>B.Sc./M.Sc.</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="branch" class="col-md-3 control-label">Branch</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="branch" name="branch" required="required" />
                                                <option>Select Your Branch</option>
                                                <option>Computer Science & Engineering</option>
                                                <option>Information Technology</option>
                                                <option>Electrical Engineering</option>
                                                <option>Electronics & communication Engineering</option>
                                                <option>Mechanical Engineering</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                </div>
                    
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" id="institute" size="50"placeholder="Your Email Address" required="required" />
                                    </div>
                                </div>
                                    
                                
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password" size="50" placeholder="Your Password" required="required" />
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="contact" class="col-md-3 control-label">Contact</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="contact" name="contact" size="50" placeholder="Your Contact Number">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="gender" class="col-md-3 control-label">Gender</label>
                                        <div class="col-md-9">
                                            <label class="radio-inline">
                                                  <input type="radio" name = "gender" id = "male" value = "Male" checked = "checked" required="required" />Male
                                            </label>
                                            <label class="radio-inline">
                                                  <input type="radio" name = "gender" id = "female" value = "Female">Female
                                            </label>
                                        
                                        </div>
                                </div>

                               <div class="form-group">
                                    <label for="image" class="col-md-3 control-label">Upload Photo</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" id="image" name="image" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9 controls">

                                        <button id="submit" type="submit" class="btn btn-success" name="register"><i class="icon-hand-right"></i> &nbsp Create Account</button> 
                                    </div>
                                </div>

                              <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Already have an account! 
                                    <a id="signinlink" href="newlogin.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In Here </a>
                                    </div>
                                </div>
                            </div>    
                            
                                
                            </form>
                         </div>
                    </div>

                
         </div> 
    </div>

<div class="clearfix"></div>

<footer class="well" style="margin:0px; padding:10px;margin-top:12px;background:#152648;">
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

if(isset($_POST['register']))
{
//$ip = getIP();

$name =  $_POST['name'];
$reg_no =  $_POST['reg_no'];
$institute =  $_POST['institute'];
$course =  $_POST['course'];
$branch =  $_POST['branch'];
$email =  $_POST['email'];
$password = $_POST['password'];
$contact =  $_POST['contact'];
$gender =$_POST['gender'];
$image =  $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];


$get_email="select * from user where email='$email'";
$run_email = mysqli_query($connect,$get_email);
 $check_email=mysqli_num_rows($run_email);
if($check_email != 0)
{
    echo "<script>alert('This email is already registered.Please use another email!!!')</script>";
}
else
{
move_uploaded_file($image_tmp,"user/user_images/$image");
//insert posts into database
$insert_user = "INSERT into user(`name`,`reg_no`,`institute`,`course`,`branch`,`email`,`password`,`contact`,`gender`,`image`) values('$name','$reg_no','$institute','$course','$branch','$email','$password','$contact','$gender','$image')";
$add_user = mysqli_query($connect,$insert_user);

if($add_user)
{
//echo "1 record added";
//echo $content;
echo "<script>alert('Account  has been created successfully!!!')</script>";
echo "<script>window.open('newlogin.php','_self')</script>";

//echo "<a href='blog_view.php'> view blog</a>";
}
}
}

?>