<!DOCTYPE>

<?php
include("includes/db.php");

if(isset($_GET['edit_post'])){
	$get_id = $_GET['edit_post'];
	 $get_post = "select * from news where post_id='$get_id'";
	   $run_post = mysqli_query($connect,$get_post);
	   $i=0;
	   $row_post = mysqli_fetch_array($run_post);
	 	   $post_id = $row_post['post_id'];
		   $post_title=$row_post['post_title'];
		   $post_content=$row_post['content'];
		   $post_admin = $row_post['admin_email'];
}
?>
<html>
    <head>
	    <title>Update Post</title>
		<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
        <script>
            tinymce.init({selector:'textarea'});
         </script>
		
     </head>
     
	 <body bgcolor="skyblue">
	     <form action=""  method="post" enctype="multipart/form-data" >
                <table align="center" width="795" border="2" bgcolor="#187eae">
 
                    <tr align="center"> 
					   <td colspan="8"><h2>Edit & Update Post</h2></td>
					   
				     </tr>
					 
					 <tr>
					 
                                 <td  align="right" ><b>E-mail: </b></td>
                                <td><input type="text" id="admin_email" name="admin_email" size="50" value="<?php echo $post_admin; ?>"required/></td>
                     </tr>
					 
					 <!--<tr>
                        <td  align="right" ><b>Name: </b></td>
                         <td><input type="text" id="admin_name" name="admin_name" size="50" required/></td>
                    </tr>-->
							 
                    <tr>
 
                        <td align="right"><b>Post Title :</b></td>
                                
                        <td ><input type="text" id="posttitle" name="post_title" size="50" value="<?php echo $post_title; ?>"/></td>
 
                    </tr>


                            <tr>

                                <td align="right"><b>Content :</b></td>

                                <td><textarea id="content" name="content" cols="20" rows="10"><?php echo $post_content; ?></textarea></td>

                             </tr>
 
                             
                            <tr align="center">
                               
                                <td colspan="8"><input id="submit" type="submit" name = "update_post" value="Edit post">
                                 </td>

                             </tr>
 
                        </table>
 
                </form>
						
	 
	 </body>
</html>

<?php

if(isset($_POST["update_post"]))

{

$update_id=$get_id;
$post_title = $_POST['post_title'];

$content = $_POST['content'];

$email= $_POST['admin_email'];
//insert posts into database

$update_post = "update news set admin_email='$email' , post_title='$post_title', content='$content' where post_id='$update_id'";
$update_po = mysqli_query($connect,$update_post);

if($update_po)
{
//echo "1 record added";
//echo $content;
echo "<script>alert('post is edited')</script>";
echo "<script>window.open('index.php?view_post','_self')</script>";

//echo "<a href='blog_view.php'> view blog</a>";
}
}

?>
