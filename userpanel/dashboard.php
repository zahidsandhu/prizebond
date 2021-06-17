<?php include('layouts/header.php');?>
<?php 
if (isset($_GET["post"])) {
  //header("location:userpanel.php?post=".$_GET["post"]);
}
 ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
 
 <!-- PRIZEBOND POST row start -->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> 
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php if(isset($today_total_post1)){echo $today_total_post1;}else{ echo "0";} ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Yesterday Post</span>
                          <h4>
                              
                              <?php
                           
                            $select1=mysqli_query($con,"SELECT *from posting WHERE DATE(created_at) = DATE(NOW() - INTERVAL 1 DAY) && uid='".$_SESSION['uid']."' && (page='homepage' || page='suggestion' || page='formula' || page='finalgame' || page='tenakra' || page='oneakra' || page='open')");
                            
                            echo $select1->num_rows;
                            
                             ?>
                              
                          </h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">weekely post</span>
                          <h4>
                            
                            <?php 
                            $select1=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&&(page='homepage' || page='suggestion' || page='formula' || page='finalgame' || page='tenakra' || page='oneakra' || page='open')");
                            
                            echo $select1->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">monthely Post</span>
                          <h4>
                            <?php 
                            $select4=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' &&(page='homepage' || page='suggestion' || page='formula' || page='finalgame' || page='tenakra' || page='oneakra' || page='open')");
                            
                            echo $select4->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--prizebond page start-->
         
            <!--home page start-->
            <?php if(isset($_GET['home'])){ ?> 
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">Home Page</span>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $get_hp_p1= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='homepage' ");
                          echo $get_hp_p1->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $select_homepage=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='homepage'");
                            
                            echo $select_homepage->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $select_home_month=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='homepage'");
                            
                            echo $select_home_month->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('Y');
                          $home_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='homepage' && uid='".$_SESSION['uid']."' ");
                          echo $home_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--home page end-->
            <?php }?>
            
            <!--suggestion page start-->
            <?php if(isset($_GET['sug'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">Suggestion Page</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $todaysuggestion_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='suggestion' ");
                          echo $todaysuggestion_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $suggestion_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='suggestion'");
                            
                            echo $suggestion_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $suggestion_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='suggestion'");
                            
                            echo $suggestion_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $suggestion_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='suggestion' && uid='".$_SESSION['uid']."' ");
                          echo $suggestion_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
            <!--suggestion page end-->
            
            <!--formula page start-->
            <?php if(isset($_GET['for'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">Formula Page</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_formula_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='formula' ");
                          echo $today_formula_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $formula_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='formula'");
                            
                            echo $formula_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $formula_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='formula'");
                            
                            echo $formula_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $formula_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='formula' && uid='".$_SESSION['uid']."' ");
                          echo $formula_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--formula page end-->
            
            <!--finalgame page start-->
             <?php if(isset($_GET['fin'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">Finalgame Page</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_finalgame_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='finalgame' ");
                          echo $today_finalgame_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $finalgame_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='finalgame'");
                            
                            echo $finalgame_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $finalgame_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='finalgame'");
                            
                            echo $finalgame_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $finalgame_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='finalgame' && uid='".$_SESSION['uid']."' ");
                          echo $finalgame_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--finalgame page end-->
            
             <!--tenakra page start-->
              <?php if(isset($_GET['ten'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">Ten Akra Challange</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_tenakra_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='tenakra' ");
                          echo $today_tenakra_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $tenakra_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='tenakra'");
                            
                            echo $tenakra_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $tenakra_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='tenakra'");
                            
                            echo $tenakra_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $tenakra_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='tenakra' && uid='".$_SESSION['uid']."' ");
                          echo $tenakra_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--tenakra page end-->
            
            <!--oneakra page start-->
             <?php if(isset($_GET['one'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">One Akra Challange</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_oneakra_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='oneakra' ");
                          echo $today_oneakra_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $oneakra_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='oneakra'");
                            
                            echo $oneakra_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $oneakra_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='oneakra'");
                            
                            echo $oneakra_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $oneakra_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='oneakra' && uid='".$_SESSION['uid']."' ");
                          echo $oneakra_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--oneakra page end-->
            
            <!--open page start-->
             <?php if(isset($_GET['open'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND POST</h5> <span class="ml-auto">Open Challange</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_open_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='open' ");
                          echo $today_open_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $open_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='open'");
                            
                            echo $open_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $open_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='open'");
                            
                            echo $open_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $open_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='open' && uid='".$_SESSION['uid']."' ");
                          echo $open_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--open page end-->
            
            <!--prizebond page end-->
            <!-- PRIZEBOND POST row end -->

             <!-- PRIZEBOND PAPERS row start -->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND PAPERS</h5> 
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php if(isset($today_total_post2)){echo $today_total_post2;}else{echo 0;} ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                         <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Yesterday Post</span>
                          <h4>
                              <?php 
                            $select2=mysqli_query($con,"SELECT * from posting where DATE(created_at) = DATE(NOW() - INTERVAL 1 DAY) && uid='".$_SESSION['uid']."'&&(page='guesspaper' || page='photostate' || page='winning')");
                            
                            echo $select2->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">weekely post</span>
                          <h4>
                            
                            <?php 
                            $select2=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&&(page='guesspaper' || page='photostate' || page='winning')");
                            
                            echo $select2->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">monthely Post</span>
                          <h4>
                            <?php 
                            $select5=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' &&(page='guesspaper' || page='photostate' || page='winning')");
                            
                            echo $select5->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--PRIZEBOND PAPERS page start-->
            
             <!--Guesspaper page start-->
              <?php if(isset($_GET['guse'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND PAPERS</h5> <span class="ml-auto">Guess paper</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_guesspaper_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='guesspaper' ");
                          echo $today_guesspaper_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $guesspaper_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='guesspaper'");
                            
                            echo $guesspaper_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $guesspaper_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='guesspaper'");
                            
                            echo $guesspaper_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $guesspaper_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='guesspaper' && uid='".$_SESSION['uid']."' ");
                          echo $guesspaper_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--guesspaper page end-->
            
             <!--photostate page start-->
              <?php if(isset($_GET['photo'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND PAPERS</h5> <span class="ml-auto">Photo State Paper</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_photostate_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='photostate' ");
                          echo $today_photostate_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $photostate_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='photostate'");
                            
                            echo $photostate_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $photostate_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='photostate'");
                            
                            echo $photostate_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $photostate_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='photostate' && uid='".$_SESSION['uid']."' ");
                          echo $photostate_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--photostate page end-->
            
            <!--winning page start-->
             <?php if(isset($_GET['win'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">PRIZEBOND PAPERS</h5> <span class="ml-auto">Winning Paper</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_winning_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='winning' ");
                          echo $today_winning_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $winning_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='winning'");
                            
                            echo $winning_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $winning_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='winning'");
                            
                            echo $winning_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $winning_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='winning' && uid='".$_SESSION['uid']."' ");
                          echo $winning_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--winning page end-->
            
             <!--PRIZEBOND PAPERS page end-->
             
            <!-- PRIZEBOND PAPERS row end -->

            <!-- THAILAND POST row start -->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                         <h5 class="font-weight-semibold">THAILAND POST</h5>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php if(isset($today_total_post3)){echo $today_total_post3;}else{ echo "0";} ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Yesterday Post</span>
                          <h4>
                              <?php 
                            $select3=mysqli_query($con,"SELECT * from posting where DATE(created_at) = DATE(NOW() - INTERVAL 1 DAY) && uid='".$_SESSION['uid']."' &&(page='thailandpaper' || page='thailandtips' || page='joolottery')");
                            
                            echo $select3->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">weekely post</span>
                          <h4>
                            <?php 
                            $select3=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&&(page='thailandpaper' || page='thailandtips' || page='joolottery')");
                            
                            echo $select3->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">monthely Post</span>
                          <h4>
                            <?php 
                            $select6=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' &&(page='thailandpaper' || page='thailandtips' || page='joolottery')");
                            
                            echo $select6->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--thailand page start-->
            
            <!--thailandpaper page start-->
             <?php if(isset($_GET['thaipaper'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">THAILAND POST</h5> <span class="ml-auto">Thailand Paper</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_thailandpaper_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='thailandpaper' ");
                          echo $today_thailandpaper_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $thailandpaper_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='thailandpaper'");
                            
                            echo $thailandpaper_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $thailandpaper_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='thailandpaper'");
                            
                            echo $thailandpaper_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $thailandpaper_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='thailandpaper' && uid='".$_SESSION['uid']."' ");
                          echo $thailandpaper_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--thailandpaper page end-->
            
            <!--thailandtips page start-->
             <?php if(isset($_GET['thaitips'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">THAILAND POST</h5> <span class="ml-auto">Thailand Lottery Tips</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_thailandtips_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='thailandtips' ");
                          echo $today_thailandtips_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $thailandtips_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='thailandtips'");
                            
                            echo $thailandtips_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $thailandtips_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='thailandtips'");
                            
                            echo $thailandtips_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $thailandtips_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='thailandtips' && uid='".$_SESSION['uid']."' ");
                          echo $thailandtips_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--thailandtips page end-->
            
             <!--joolottery page start-->
              <?php if(isset($_GET['lottery'])){ ?>
             <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">THAILAND POST</h5> <span class="ml-auto">Joo Lottery Tips</span> <!--<button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">Today Post</span>
                          <h4><?php 
                          
                         $today_joolottery_post= mysqli_query($con,"SELECT *FROM posting WHERE created_at  > DATE_SUB(CURDATE(), INTERVAL 0 DAY) && uid='".$_SESSION["uid"]."' && page='joolottery' ");
                          echo $today_joolottery_post->num_rows;
                          
                          ?></h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This week post</span>
                          <h4>
                            
                            <?php 
                            $joolottery_weekley_post=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'&& page='joolottery'");
                            
                            echo $joolottery_weekley_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">This month Post</span>
                          <h4>
                            <?php 
                            $joolottery_monthely_post=mysqli_query($con,"SELECT * FROM posting WHERE  created_at between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() && uid='".$_SESSION['uid']."' && page='joolottery'");
                            
                            echo $joolottery_monthely_post->num_rows;
                             ?>
                          </h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title text-uppercase">this year post</span>
                          <h4><?php 
                           $dt=date('yy');
                          $joolottery_year_post=mysqli_query($con,"SELECT * FROM posting WHERE YEAR(created_at) ='".$dt."' && page='joolottery' && uid='".$_SESSION['uid']."' ");
                          echo $joolottery_year_post->num_rows;
                          ?></h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!--joolottery page end-->
            
            <!--thailand page end-->
            
            <!-- THAILAND POST row end -->
 
 
 
 
 
 
 
            <!--<div class="row">-->
            <!--  <div class="col-md-12 grid-margin">-->
            <!--    <div class="card">-->
            <!--      <div class="card-body">-->
            <!--        <div class="row">-->
            <!--          <div class="col-md-12">-->
            <!--            <div class="d-sm-flex align-items-baseline report-summary-header">-->
            <!--              <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="row report-inner-cards-wrapper">-->
            <!--          <div class=" col-md -6 col-xl report-inner-card">-->
            <!--            <div class="inner-card-text">-->
            <!--              <span class="report-title">EXPENSE</span>-->
            <!--              <h4>$32123</h4>-->
            <!--              <span class="report-count"> 2 Reports</span>-->
            <!--            </div>-->
            <!--            <div class="inner-card-icon bg-success">-->
            <!--              <i class="icon-rocket"></i>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="col-md-6 col-xl report-inner-card">-->
            <!--            <div class="inner-card-text">-->
            <!--              <span class="report-title">PURCHASE</span>-->
            <!--              <h4>95,458</h4>-->
            <!--              <span class="report-count"> 3 Reports</span>-->
            <!--            </div>-->
            <!--            <div class="inner-card-icon bg-danger">-->
            <!--              <i class="icon-briefcase"></i>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="col-md-6 col-xl report-inner-card">-->
            <!--            <div class="inner-card-text">-->
            <!--              <span class="report-title">QUANTITY</span>-->
            <!--              <h4>2650</h4>-->
            <!--              <span class="report-count"> 5 Reports</span>-->
            <!--            </div>-->
            <!--            <div class="inner-card-icon bg-warning">-->
            <!--              <i class="icon-globe-alt"></i>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--          <div class="col-md-6 col-xl report-inner-card">-->
            <!--            <div class="inner-card-text">-->
            <!--              <span class="report-title">RETURN</span>-->
            <!--              <h4>25,542</h4>-->
            <!--              <span class="report-count"> 9 Reports</span>-->
            <!--            </div>-->
            <!--            <div class="inner-card-icon bg-primary">-->
            <!--              <i class="icon-diamond"></i>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
            
            
            
            <!--<div class="row">-->
            <!--  <div class="col-md-12 grid-margin">-->
            <!--    <div class="card">-->
            <!--      <div class="card-body">-->
            <!--        <div class="row income-expense-summary-chart-text">-->
            <!--          <div class="col-xl-4">-->
            <!--            <h5>Income And Expenses Summary</h5>-->
            <!--            <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>-->
            <!--          </div>-->
            <!--          <div class=" col-md-3 col-xl-2">-->
            <!--            <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>-->
            <!--            <h3>$ 1,766.00</h3>-->
            <!--          </div>-->
            <!--          <div class="col-md-3 col-xl-2">-->
            <!--            <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>-->
            <!--            <h3>$ 5,698.30</h3>-->
            <!--          </div>-->
            <!--          <div class="col-md-6 col-xl-4 d-flex align-items-center">-->
            <!--            <div class="input-group" id="income-expense-summary-chart-daterange">-->
            <!--              <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>-->
            <!--              <input type="text" class="form-control">-->
            <!--              <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="row income-expense-summary-chart mt-3">-->
            <!--          <div class="col-md-12">-->
            <!--            <div class="ct-chart" id="income-expense-summary-chart"></div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="row">-->
            <!--  <div class="col-md-4 grid-margin stretch-card">-->
            <!--    <div class="card">-->
            <!--      <div class="card-body">-->
            <!--        <h4 class="card-title">Sessions by channel</h4>-->
            <!--        <div class="aligner-wrapper">-->
            <!--          <canvas id="sessionsDoughnutChart" height="210"></canvas>-->
            <!--          <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">-->
            <!--            <h2 class="text-center mb-0 font-weight-bold">8.234</h2>-->
            <!--            <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">-->
            <!--          <div class="d-flex">-->
            <!--            <span class="square-indicator bg-danger ml-2"></span>-->
            <!--            <p class="mb-0 ml-2">Assigned</p>-->
            <!--          </div>-->
            <!--          <div class="d-flex">-->
            <!--            <span class="square-indicator bg-success ml-2"></span>-->
            <!--            <p class="mb-0 ml-2">Not Assigned</p>-->
            <!--          </div>-->
            <!--          <div class="d-flex">-->
            <!--            <span class="square-indicator bg-warning ml-2"></span>-->
            <!--            <p class="mb-0 ml-2">Reassigned</p>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="col-md-8 grid-margin stretch-card">-->
            <!--    <div class="card">-->
            <!--      <div class="card-body performane-indicator-card">-->
            <!--        <div class="d-sm-flex">-->
            <!--          <h4 class="card-title flex-shrink-1">Performance Indicator</h4>-->
            <!--          <p class="m-sm-0 ml-sm-auto flex-shrink-0">-->
            <!--            <span class="data-time-range ml-0">7d</span>-->
            <!--            <span class="data-time-range active">2w</span>-->
            <!--            <span class="data-time-range">1m</span>-->
            <!--            <span class="data-time-range">3m</span>-->
            <!--            <span class="data-time-range">6m</span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--        <div class="d-sm-flex flex-wrap">-->
            <!--          <div class="d-flex align-items-center">-->
            <!--            <span class="dot-indicator bg-primary ml-2"></span>-->
            <!--            <p class="mb-0 ml-2 text-muted font-weight-semibold">Complaints (2098)</p>-->
            <!--          </div>-->
            <!--          <div class="d-flex align-items-center">-->
            <!--            <span class="dot-indicator bg-info ml-2"></span>-->
            <!--            <p class="mb-0 ml-2 text-muted font-weight-semibold"> Task Done (1123)</p>-->
            <!--          </div>-->
            <!--          <div class="d-flex align-items-center">-->
            <!--            <span class="dot-indicator bg-danger ml-2"></span>-->
            <!--            <p class="mb-0 ml-2 text-muted font-weight-semibold">Attends (876)</p>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div id="performance-indicator-chart" class="ct-chart mt-4"></div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         