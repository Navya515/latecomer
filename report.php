<?php
include("includes/header.php");
include("includes/menu.php");
include("includes/check_session.php");
?>
<script>
$(document).ready(function() {

    jQuery.fn.DataTable.Api.register( 'buttons.exportData()', function ( options ) {
            if ( this.context.length ) 
            {
                var jsonResult = $.ajax({
                    url: 'myServerSide.json?page=all',
                    data: {search: $(#search).val()},
                    success: function (result) {
                        //Do nothing
                    },
                    async: false
            });

                return {body: jsonResult.responseJSON.data, header: $('.example').map(function() { return this.innerHTML; }).get()};
            }
        } );

    $('.example').DataTable(
        {
            "dom": 'lBrtip',
            "pageLength": 5, 
            "buttons": ['csv','print', 'excelhtml5', 'pdf'],
            "processing": true,
            "serverSide": true,
            "ajax":
             {
                "url": "myServerSide.json",
                "type": 'GET',
                "data": {search: $(#search).val()} 
             }
        }
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
     <p>Date: <input type="date" id="datepicker" name="date"></p>
     <button class="btn btn-warning" name="submit">Submit</button>
        <!--table responsive div end-->
    </form>
 </center>
</div>

    <!--  data will write here -->
         <?php 
         if(isset($_POST['submit']))
         {
          ?>

<div class="tab-content" style="border: 1px solid #eee; background: #fff; padding: 10px;">
      <!--  data will write here -->
      <center><h2 class="text-center">Students List</h2></center>

      <!--table responsive div start-->
      <div class="table-responsive">
        <table class="table example table-striped table-bordered table-centered table-hover">
          <thead>    
            <!--<a href="#add" onclick="display_form()" class="btn btn-primary btn-md pull-right"><i class="glyphicon glyphicon-plus"></i> Start Mapping</a>-->
            <tr>
              <th>S.No</th>
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
      $date=$_POST['date'];
      $day1=explode("-",$date);
      $x=1;    
        $query3= "SELECT * FROM `attendence` WHERE day(date)='".$day1[2]."'  AND month(date)>='".$day1[1]."' AND  year(date)='".$day1[0]."'";
        $res5=mysqli_query($con, $query3);
                 while($row = mysqli_fetch_array($res5)) {
                    $query4="SELECT * from `students` where student_code='".$row['rollno']."'";
                    $res6=mysqli_query($con, $query4);
                    $fetch= mysqli_fetch_array($res6);

           ?> 
                    <tr class="data">
                        <td><?php echo $x;?></td>
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