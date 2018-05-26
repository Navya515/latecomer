<?php
include("includes/header.php");
include("includes/menu.php");
include("includes/check_session.php");
include("api/config.php");
/*if ($_GET['encode']=="") {
$id=base64_encode($_GET['id']);
echo "<script>location.href='index.php?encode=encoded&id=$id'</script>";
}*/
  

//session_start();

?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <!-- Add this css in head tag -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
       <style>
        body{
                font-size:18px;
                font-weight: 400;
            }
.p-y-2 {
    padding-top: 28px;
    padding-bottom: 28px;
}
.p-y-3 {
    padding-top: 45px;
    padding-bottom: 45px;
}
.m-b-1 {
    margin-bottom: 18px;
}
.m-t-1 {
    margin-top: 18px;
}


            /*==========================================================
                           counter section style
            ============================================================*/

            .main_counter_area{
                background: url(https://images.pexels.com/photos/196288/pexels-photo-196288.jpeg?w=940&h=650&auto=compress&cs=tinysrgb) no-repeat top center;
                background-size: cover;
                overflow: hidden;
            }
            .main_counter_area .main_counter_content .single_counter{
                background:  #c54c55;
                    color: #fff;
            }
            .main_counter_area .main_counter_content .single_counter i{
                font-size:36px;
            }
</style>
        
     <!-- Here is the section -->
     
      <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                          <p><center><h2 style="margin-left:100px;"><b>ANALYSIS</b></h2></center></p><br>
                          <center>
                            <div class="main_counter_content text-center white-text wow fadeInUp">
                                <div class="col-md-3" style="margin-left: 200px;">
                                    <div class="single_counter p-y-2 m-t-1">
                    <?php


                    $query_aec="SELECT * from `students` where `college`='AEC'";
                    $res_aec=mysqli_query($con, $query_aec);
                    $total_aec=mysqli_num_rows($res_aec);



                    
                    
                          
                    ?>
                                                                         


                                                      <p><h2>AEC</h2></p>
                                        <h2><?php echo $total_aec;?></h2>
                    

                                        
              
                                    </div>


                                </div>

                                <div class="col-md-3" ">
                                  
                                    <div class="single_counter p-y-2 m-t-1">

                                      <?php


                    $query_acet="SELECT * from `students` where college='ACET'";
                    $res_acet=mysqli_query($con, $query_acet);
                    $total_acet=mysqli_num_rows($res_acet);

                    ?>
                                        <p><h2>ACET</h2></p>
                                        <h2 class="statistic-counter"><?php echo $total_acet;?></h2>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">

                                      <?php


                    $query_acoe="SELECT * from `students` where college='ACOE'";
                    $res_acoe=mysqli_query($con, $query_acoe);
                    $total_acoe=mysqli_num_rows($res_acoe);

                    ?>
                                      <p><h2>ACOE</h2></p>

                                        <h2 class="statistic-counter"><?php echo $total_acoe;?></h2>
                                        
                                    </div>
                                </div>
                              
                            </div>


                             
                          </center>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of counter Section -->


<!-- Add this script before </body> 


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        
        
        -->

        
        
         