<?php 
include("api/config.php");

 ?>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
.mrg_pad_0{
    margin: 0;
    padding: 0;
}
  .disp_none{
    display: none;
  }

  table td, th{
    text-align: center;
  }
  .form-control{
    min-width: 30px;
  }
</style>

<!-- Web form starts -->
<div id='main-content'>
      <br><br><br>

      <?php
      
// We'll be outputting an excel file
@header("Content-Type: application/xls");    
@header("Content-Disposition: attachment; filename=latecomer.xls");

      

                ?>
        <div class="col-md-12 table-responsive">
          <table class="table table-bordered table-striped table-hover">
             <thead>
                 <tr>
                     <th>S.No</th>
                     <th>Roll No</th>
                     <th>Name</th>
                     <th>Guardian name</th>
                     <th>Mobile</th>
                     <th>Gender</th>
                     <th>Year</th>
                     <th>College</th>
                    
                 </tr>
             </thead>
             <tbody>

              <?php
             $i=1;
             $query5= "SELECT * FROM `attendence` WHERE day(date)='".date('d')."' AND month(date)='".date('m')."' AND year(date)='".date('Y')."'";
              @$result5 = mysqli_query($con,$query5);
               while($row = mysqli_fetch_array($result5)) {

              

            $query6="SELECT * from `students` where student_code='".$row['rollno']."'";
            $result6=mysqli_query($con, $query6);
                    
            @$Count = mysqli_num_rows($result6);
                    if ($Count > 0) {
              
                 while (@$row1 = mysqli_fetch_array($result6)) {



                    ?> 
                    <tr class="data">
                        <td><?php echo $i;?></td>
                       <td  ><?php echo $row1['student_code'];?></td>
                        <td  ><?php echo $row1['student_name'];?></td>
                        <td  ><?php echo $row1['guardian_name'];?></td>
                        <td ><?php echo $row1['mobile'];?></td>
                        <td  ><?php echo $row1['gender'];?></td>
                        <td ><?php echo $row1['year'];?></td>
                        <td ><?php echo $row1['college'];?></td>

                       
                  
                       

                    </tr>
           <?php
            $i++;
            }
          }
          
            else{
                echo "<tr><td colspan='12'><h3 class='text-danger'>No data Found</h3></td></tr>";
             }
           }
           

?>

       </tbody>
          </table>
</div>
