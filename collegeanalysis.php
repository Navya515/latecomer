<?php
include("includes/header.php");
include("includes/menu.php");
include("includes/check_session.php");
include("api/config.php");
?>

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
            .main_counter_area .main_counter_content .single_counter1{
                background:  #00cccc;
                    color: #fff;
                    border-radius: 15px;
                    box-shadow: 9px 9px #999;
            }

 .main_counter_area .main_counter_content .single_counter1:hover {background-color: #009999}
            .main_counter_area .main_counter_content .single_counter2{
                background:  #ffd633;
                    color: #fff;
                    border-radius: 15px;
                    box-shadow: 9px 9px #999;
            }
            .main_counter_area .main_counter_content .single_counter2:hover {background-color: #ffcc00}
            .main_counter_area .main_counter_content .single_counter3{
                background:  #708090;
                    color: #fff;
                    border-radius: 15px;
                    box-shadow: 9px 9px #999;
            }
            .main_counter_area .main_counter_content .single_counter3:hover {background-color: #434d56}
            .main_counter_area .main_counter_content .single_counter4{
                background:  #ff9966;
                    color: #fff;
                    border-radius: 15px;
                    box-shadow: 9px 9px #999;
            }
            .main_counter_area .main_counter_content .single_counter4:hover {background-color: #ff7733}
            .main_counter_area .main_counter_content .single_counter5{
                background:  #7af442;
                    color: #fff;
                    border-radius: 15px;
                    box-shadow: 9px 9px #999;
            }
            .main_counter_area .main_counter_content .single_counter5:hover {background-color: #56f10e}
            .main_counter_area .main_counter_content .single_counter6{
                background:   #cc6699;
                    color: #fff;
                    border-radius: 15px;
                    box-shadow: 9px 9px #999;
            }
            .main_counter_area .main_counter_content .single_counter6:hover {background-color: #ac3973}
            .main_counter_area .main_counter_content .single_counter i{
                font-size:36px;
            }
</style>
        
     
     
      <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                          <p><center><h2 style="margin-left:100px;color:#000000;"><b>ANALYSIS</b></h2></center></p><br>
                          <center>
                            <div class="main_counter_content text-center white-text wow fadeInUp">
                                <div class="col-md-3" style="margin-left: 200px;">
                                    <div class="single_counter1 p-y-2 m-t-1">
                    <?php

                    $query_aec ="SELECT * from `attendence` where day(date)='".date('d')."' AND month(date)='".date('m')."' AND year(date)='".date('Y')."'";
                    $res_aec=mysqli_query($con, $query_aec);
                    $aecc=0;
                    $acetc=0;
                    $acoec=0;
                    $bbmc=0;
                    $bpharmc=0;
                    $polyc=0;
                
                    while($total_aec=mysqli_fetch_array($res_aec))
                     {
                        $query21="SELECT * from `students` where `student_code`='".$total_aec['rollno']."'";
                        $res21=mysqli_query($con, $query21);
                        $fetch=mysqli_fetch_array($res21);

                        if ($fetch['college']=='AEC') 
                        {
                            $aecc++;
                        }
                            else  if ($fetch['college']=='ACET')
                        {
                            $acetc++;
                        }
                             else if ($fetch['college']=='ACOE')
                        {
                            $acoec++;
                        }
                        else if ($fetch['college']=='BBM')
                        {
                            $bbmc++;
                        }
                        else if ($fetch['college']=='BPHARMACY') 
                        {
                            $bpharmc++;
                        }
                        else if ($fetch['college']=='POLYTECHNIC') 
                        {
                            $polyc++;
                        }


                    $total21=mysqli_num_rows($res21);
 
                 }
                 ?>
                       <p><h2>AEC</h2></p>
                       <h2><?php echo $aecc;?></h2>   

       </div>
 </div>                                                                 
                            <div class="col-md-3">
                               <div class="single_counter2 p-y-2 m-t-1">
                                        <p><h2>ACET</h2></p>
                                        <h2 class="statistic-counter"><?php echo $acetc;?></h2>
                                        
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_counter3 p-y-2 m-t-1">
                                    <p><h2>ACOE</h2></p>
                                    <h2 class="statistic-counter"><?php echo $acoec;?></h2>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-left: 200px;" >
                                <div class="single_counter4 p-y-2 m-t-1" >
                                     <p><h2>BBM</h2></p>
                                     <h2 class="statistic-counter"><?php echo $bbmc;?></h2>
                                        
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_counter5 p-y-2 m-t-1" >
                                     <p><h2>B.PHARMACY</h2></p>
                                        <h2 class="statistic-counter"><?php echo $bpharmc;?></h2>
                                        
                                </div>
                            </div>
                            <div class="col-md-3" >
                                <div class="single_counter6 p-y-2 m-t-1" >
                                     <p><h2>POLYTECHNIC</h2></p>
                                     <h2 class="statistic-counter"><?php echo $polyc;?></h2>
                                        
                                </div>
                            </div>
                        </div>
                    </center>
               </div>
          </div>
      </div>
 </div>
</section><!-- End of counter Section -->


                                   


                                

                               
        
        
         