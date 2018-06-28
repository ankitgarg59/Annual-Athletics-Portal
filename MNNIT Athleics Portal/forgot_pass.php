 <!DOCTYPE>

 <?php
     session_start();
	 include("functions/functions.php");
    include("includes/db.php");
 ?>
<html>

    <head>
	     <title>
		     MNNIT Annual Athletics Meet
         </title>	
		 
		 <link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
	
	<body>
	    
		<!-- Main Container starts here-->
		<div class="main_wrapper">
		
	         <!-- Header starts here-->	
		     <div class="header_wrapper">
			       <img id="logo" src="images/logo.png" />
				   <img id="banner" src="images/ad_banner.jpg" />
			</div>
			    <!-- Header ends here-->
				
			 <!-- Menubar starts here-->
			 <div class="menubar">
			     
				 
				 <ul id="menu">
				 
				    <li><a href="index.php">Home</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					
				 </ul>
				 
				 <div id="form">
				 
				    <!--<form method="get" action="results.php"  enctype="multipart/form-data">
					     
						 <input type="text" name="user_query"  placeholder="search for  a product" />
						 <input type="submit" name="search" value="search" />
						 
					</form>-->
					<a href = "index.php" style="color:yellow">Go to Home</a>
				 </div>
				 
			 </div>
		     <!-- Menubar ends here-->
			 
			 <!-- Content Wrapper starts here-->
			 <div class="content_wrapper">
			 
			    <div id="sidebar">
			         
					 <div id="sidebar_title">Formal Events</div>
					 
					 <ul id="cats">
					 
					    <li><a href="#">Racing</a></li>
						<li><a href="#">Throwing</a></li>
						<li><a href="#">Jumping</a></li>
						
						
					 </ul>
					 
					
					 
					 <ul id="sidebar_title">
					 
					    <li><a href="#">Informal Events</a></li>
						
						
					 </ul>
			    </div>
			 
			    <div id="content_area">
			         
				  <div id="post_box">
					 <form action=""  method="post" enctype="multipart/form-data" >
                <table align="center" width="800" border="2">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>Change Your Password</h2></td>
				     </tr>
					  <tr>
                                 <td  align="right" ><b>E-mail :  </b></td>
                                <td ><input type="text" id="email" name="email" size="50" placeholder="Enter email" required/></td>
                     </tr>
					 <tr>
                                 <td  align="right" ><b>New Password:  </b></td>
                                <td ><input type="text" id="new_pass" name="new_pass" size="50" placeholder="Enter new password" required/></td>
                     </tr>
					 <tr>
                                 <td  align="right" ><b>Confirm Password :  </b></td>
                                <td ><input type="password" id="new_pass_again" name="new_pass_again" size="50" placeholder="Enter password again" required/></td>
                     </tr>
					                                               
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "change_pass" value="Change Password">
                                 </td>

                             </tr>
 
                        </table>
 
                </form>
						
				</div>
			    </div>
			 
			 </div>
			 <!-- Content Wrapper ends here-->
			 
			 
			 <div id="footer">
			    <h2 style="text-align:center; padding-top:30px" >&copy; 2018 by www.mnnit.ac.in</h2>
			 </div>
			 
		</div>
		<!-- Main Container ends here-->
		
	</body>
</html>


<?php

if(isset($_POST['change_pass']))

{
//$ip = getIP();

$user =  $_POST['email'];
$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];
	
	$sel_pass = "select * from user where email='$user'";
     
	 $run_pass = mysqli_query($connect,$sel_pass);
	 
	 $check_pass=mysqli_num_rows($run_pass);
	 
	 if($check_pass==0){
		echo "<script>alert('Your email is wrong!')</script>";
       exit();
	   //echo "<script>window.open('login.php','_self')</script>";
	}
	
	if($new_pass!=$new_pass_again){
		echo "<script>alert('New password do not match!')</script>";
	 exit();
	}
	
	else{
		$update_pass ="update user set password='$new_pass' where email='$user'";
		$run_pass=mysqli_query($connect,$update_pass);
		
		
		if($run_pass){
			$_SESSION['email']=$user;
			echo "<script>alert('Your password has updated successfully and you are logged in!!!')</script>";
			
		   echo "<script>window.open('user/my_account.php','_self')</script>";
		}
	}
	
}

?>