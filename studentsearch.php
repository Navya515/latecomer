<?php
include("includes/header.php");
include("includes/menu.php");
include("includes/check_session.php");
include("api/config.php");
?>

<script>
  $(document).ready(function() {
    $('.example').DataTable( {
     // dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
</script>
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="tab-content">
          <div id="finder" class="tab-pane fade in active">
            <div class="row dashboard-stats container"><br><br><br>
              <div class="col-md-4 col-sm-6 col-md-offset-7"  style="margin-left:450px;">
                <section class="panel panel-box">
                  <div class="panel-left panel-icon bg-lovender"><i class="fa fa-book fw fa-2x" style="margin-top: 12px;"></i></div>
                  <div class="panel-right panel-icon bg-reverse">
                    <p class="text-muted no-margin text"><span> </span></p>
                    <Strong>
                      <p class="size-h1">Late Comers list</p>
                    </Strong>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="row">
<center>
 <form method="post">
<p>Enter rollno: <input type="text" name="rollno"><br></p>
<p><span>From :  <input  id="datepicker" type="date" name="date1"  data-date-format="yyyy-mm-dd">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         To :   <input  id="datepicker" type="date" name="date2"  data-date-format="yyyy-mm-dd"></span></p>
                <button class="btn btn-warning" name="stud_submit">Submit</button>

        <!--table responsive div end-->
 </form>
 </center>
</div>
<!--  data will write here -->
         
         <?php 
         if(isset($_POST['stud_submit']))
         {
         ?>

<div class="tab-content" style="border: 1px solid #eee; background: #fff; padding: 10px;">
      <!--  data will write here -->
<center><h2 class="text-center">Students List</h2></center>
<!--table responsive div start-->
  <div class="table-responsive">
    <table class="table example table-striped table-bordered table-centered table-hover">
          <thead>    
             <tr>
              <th>S.No</th>
              <th>Date</th>
               <th>Student code</th>
              <th>Student name</th>
              <th>Guardian name</th>
              <th>Mobile</th>
              <th>Gender</th>
              <th>Year</th>
              <th>College</th>
              </tr>
          </thead>
          <tbody>
            <?php
               $date1=$_POST['date1'];
               $date2=$_POST['date2'];
               $x=1;    
               $rollno=$_POST['rollno'];
               $query18 ="SELECT * FROM `attendence` WHERE `rollno`='".$rollno."'  AND  date between '".$date1."' AND '".$date2."'";
               $res18=mysqli_query($con, $query18);
                while($row = mysqli_fetch_array($res18)) 
                {

                    $query17="SELECT * from `students` where student_code='".$row['rollno']."'";
                    $res17=mysqli_query($con, $query17);
                    $fetch= mysqli_fetch_array($res17);



                 ?> 
                    <tr class="data">
                        <td><?php echo $x;?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['rollno'];?></td>
                        <td><?php echo $fetch['student_name'];?></td>
                        <td><?php echo $fetch['guardian_name'];?></td>
                        <td><?php echo $fetch['mobile'];?></td>
                        <td><?php echo $fetch['gender'];?></td>
                        <td><?php echo $fetch['year'];?></td>
                        <td><?php echo $fetch['college'];?></td>
                    </tr>
           <?php
            $x++;
            }
            }
            ?>
         
          </tbody>
        </table>
      </div><!--table responsive div end-->
    </div>
  </div> <!-- /row -->
</div><br><br/> <!-- /.container -->
</section>
<?php
include("includes/footer.php");
?>

</section>
</body>
</html>