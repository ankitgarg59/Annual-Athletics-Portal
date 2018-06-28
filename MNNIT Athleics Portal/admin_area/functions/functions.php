<?php

$con = mysqli_connect('localhost','root','','atheleticmeet');
function getsBlogs(){
	 global $con;
	 $get_count="select count(post_id) as no_of_post from news";
	  $run_count = mysqli_query($con,$get_count);
	  $get_row = mysqli_fetch_assoc($run_count);
     $get_no_of_post = $get_row['no_of_post'];

	 $get_blogs = "select * from news order by post_id desc";
	 $run_blogs = mysqli_query($con,$get_blogs);
	 
	 
	 while($row_blogs = mysqli_fetch_array($run_blogs)){
		 
		 $post_title = $row_blogs['post_title'];
		 $content = $row_blogs['content'];
		 $email = $row_blogs['admin_email'];
		 $name = $row_blogs['admin_name'];
		 
		 echo "
		            <div class='post' id='single_post'>
					  
					     <table align='center' width='800' border='4' border-color='black' bgcolor='white'>
 
						    <tr>
							    <td><b style='color:red;'>$post_title</b>  by <b id='author'>$name </b></td>
							</tr>
							 <tr>
							    <td colspan='2'>$content</td>
							</tr>
						 </table>
					  
					</div>";

	 }
	
}


function get_result($id,$j){
	global $con;
	$get_userinfo = "select * from user where user_id='$id'";
	              $run_userinfo = mysqli_query($con,$get_userinfo);
			  
			       $row_userinfo= mysqli_fetch_array($run_userinfo);
				  $name = $row_userinfo['name'];
		          $reg_no=$row_userinfo['reg_no'];
		              $email=$row_userinfo['email'];
		              $institute = $row_userinfo['institute'];
					  
					  return array($name,$reg_no,$email,$institute);
					  
	
}
?>
