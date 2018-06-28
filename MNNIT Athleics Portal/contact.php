<div class="container">
  <div class="col-md-12 text-secondary">

      <hr>
      <p><b style='text-align:center;font-size:18px;'>For Any Information : Contact Here</b></p>
    <hr></br>
  </div>
</div> 

<?php
       include("includes/db.php");
   
       $get_admin = "select * from admin";
       $run_admin = mysqli_query($connect,$get_admin);
       $i=0;
?>


<div class="col-md-12 text-secondary">
     <div class="panel panel-default panel-info">
        <div class="panel-heading" align='center'><h4 >Admins</h4></div>
            <table class="table table-bordered">
              <thead align="center">
                <tr>
                  <th>S.No</th>
                  <th>Admin Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                </tr>
              </thead>


     <?php
          while( $row_admin=mysqli_fetch_array($run_admin)){
           
           $id = $row_admin['admin_id'];
           $name = $row_admin['admin_name'];
           $email = $row_admin['admin_email'];
           $contact = $row_admin['contact'];
                $i++;
      ?>

            <tr align="left">
                <td><?php echo $i?></td>
                 <td><?php echo $name;?></td>
                 <td><?php echo $email;?></td>
                 <td><?php echo $contact;?></td>
            </tr>

       <?php } ?>


    </table>
  </div>     
</div>
