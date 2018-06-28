<!DOCTYPE>

<?php
include("includes/db.php");
?>
<html>
    <head>
	    <title>Adding New Post</title>
		<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
        <script>
            tinymce.init({selector:'textarea'});
         </script>
		
     </head>
     
	 <body>

        <form action=""  method="post" enctype="multipart/form-data" >
            <div class="col-sm-12 text-secondary">
                <div class="panel panel-default panel-info">
                    <div class="panel-heading" align='center'><h4 >Add New Post Here</h4></div>
                        <table class="table table-bordered">
                                        
                            <tr>
                                <td align="right"><b>Post Title</b></td>                                
                                <td ><input type="text" id="posttitle" name="post_title" size="50" required/></td>
                            </tr>
                    
                            <tr>
                               <td align="right"><b>Content</b></td>
                               <td><textarea id="content" name="content" cols="20" rows="10"></textarea></td>
                            </tr>
                            
                            <tr align="center">
                                <td colspan="8"><input id="submit" type="submit" name = "add_post" value="Post">
                                </td>
                            </tr>
     
                        </table>
                </div>
            </div>
        
        </form>
			
	 
    </body>

</html>

<?php

if(isset($_POST["add_post"]))
{

$post_title = $_POST['post_title'];
$content = $_POST['content'];
if(isset($_SESSION['admin_email'])){
						
					$admin = $_SESSION['admin_email'];
					 $get_admin = "select * from admin where admin_email='$admin'";
					 $run_admin= mysqli_query($connect,$get_admin);
					 $row_admin=mysqli_fetch_array($run_admin);
					 $admin_name=$row_admin['admin_name'];
					 $admin_email=$row_admin['admin_email'];

//insert posts into database
$insert_post = "INSERT into news (`post_title`,`content`,`admin_email`,`admin_name`) values('$post_title','$content','$admin_email','$admin_name')";
$add_po = mysqli_query($connect,$insert_post);

if($add_po)
{
//echo "1 record added";
//echo $content;
echo "<script>alert('post is added')</script>";
echo "<script>window.open('index.php?add_post','_self')</script>";

//echo "<a href='blog_view.php'> view blog</a>";
}
}
}

?>
