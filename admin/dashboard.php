<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <?php
              $result=mysqli_query($con,"select * from users");
	         $row=mysqli_fetch_array($result);
	         
	         if (isset($_GET["ban"])){
	mysqli_query($con,"update users set status='".$_GET["ban"]."' where uid=".$_GET["user"]."");
//	header("location:?pg=users");
header('Location: '.$_SERVER['PHP_SELF']);  

}
if (isset($_GET["vip"])){
	mysqli_query($con,"update users set vip='".$_GET["vip"]."' where uid=".$_GET["user"]."");
	//header("location:?pg=users");
	header('Location: '.$_SERVER['PHP_SELF']);  

}
if (isset($_GET["del"])){
	$result=mysqli_query($con,"select * from users where uid=".$_GET["del"]."");
	$row=mysqli_fetch_array($result);
	unlink ("../user_photo/".$row["photo"]);
	mysqli_query($con,"delete from users where uid=".$_GET["del"]."");
	mysqli_query($con,"delete from posting where uid=".$_GET["del"]."");
	header('Location: '.$_SERVER['PHP_SELF']); 
	//header("location:?pg=users");
}
	         ?>
            <div class="row purchace-popup">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                  <span class="card-body d-lg-flex align-items-center">
                    <p class="mb-lg-0">Like what you see? Check out our premium version for more.</p>
                    <a href="https://github.com/BootstrapDash/StellarAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-lg-auto download-button btn-success btn-sm my-1 my-sm-0">Download Free Version</a>
                    <a href="https://www.bootstrapdash.com/product/stellar-admin/" target="_blank" class="btn btn-warning purchase-button btn-sm ml-sm-2 my-1 my-sm-0">Upgrade To Pro</a>
                    <button class="close popup-dismiss ml-2">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">EXPENSE</span>
                          <h4>$32123</h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PURCHASE</span>
                          <h4>95,458</h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">QUANTITY</span>
                          <h4>2650</h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">RETURN</span>
                          <h4>25,542</h4>
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
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row income-expense-summary-chart-text">
                      <div class="col-xl-4">
                        <h5>Income And Expenses Summary</h5>
                        <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>
                      </div>
                      <div class=" col-md-3 col-xl-2">
                        <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>
                        <h3>$ 1,766.00</h3>
                      </div>
                      <div class="col-md-3 col-xl-2">
                        <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>
                        <h3>$ 5,698.30</h3>
                      </div>
                      <div class="col-md-6 col-xl-4 d-flex align-items-center">
                        <div class="input-group" id="income-expense-summary-chart-daterange">
                          <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                          <input type="text" class="form-control">
                          <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="row income-expense-summary-chart mt-3">
                      <div class="col-md-12">
                        <div class="ct-chart" id="income-expense-summary-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sessions by channel</h4>
                    <div class="aligner-wrapper">
                      <canvas id="sessionsDoughnutChart" height="210"></canvas>
                      <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                        <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                      </div>
                    </div>
                    <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                      <div class="d-flex">
                        <span class="square-indicator bg-danger ml-2"></span>
                        <p class="mb-0 ml-2">Assigned</p>
                      </div>
                      <div class="d-flex">
                        <span class="square-indicator bg-success ml-2"></span>
                        <p class="mb-0 ml-2">Not Assigned</p>
                      </div>
                      <div class="d-flex">
                        <span class="square-indicator bg-warning ml-2"></span>
                        <p class="mb-0 ml-2">Reassigned</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                      <h4 class="card-title flex-shrink-1">Performance Indicator</h4>
                      <p class="m-sm-0 ml-sm-auto flex-shrink-0">
                        <span class="data-time-range ml-0">7d</span>
                        <span class="data-time-range active">2w</span>
                        <span class="data-time-range">1m</span>
                        <span class="data-time-range">3m</span>
                        <span class="data-time-range">6m</span>
                      </p>
                    </div>
                    <div class="d-sm-flex flex-wrap">
                      <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-primary ml-2"></span>
                        <p class="mb-0 ml-2 text-muted font-weight-semibold">Complaints (2098)</p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-info ml-2"></span>
                        <p class="mb-0 ml-2 text-muted font-weight-semibold"> Task Done (1123)</p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-danger ml-2"></span>
                        <p class="mb-0 ml-2 text-muted font-weight-semibold">Attends (876)</p>
                      </div>
                    </div>
                    <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Products Inventory</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                    </div>

  <div class="table-responsive border rounded p-1">
                      <table class="table table-striped" id="users">
                        <thead>
                          <tr>
                            <th>User Name</th>
                            <th>Password</th>
                            <th>Location</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Level</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row=mysqli_fetch_array($result)){
                                
                            if ($row["level"]=="1"){
        						$level="Prizebond";
        					}elseif($row["level"]=="2"){
        						$level="Lottery";
        					}else{
        						$level="Both";
        					}
        						if ($row["status"]=="0"){
						$status="<a class='alert alert-primary' href='?pg=users&user=".$row["uid"]."&ban=1'>Ban</a>";
					}else{
						$status="<a class='alert alert-primary'  href='?pg=users&user=".$row["uid"]."&ban=0'>Unban</a>";
					}
					if ($row["vip"]=="0"){
						$date = strtotime(date("d F Y"));
						$vip="<a class='alert alert-success'  href='?pg=users&user=".$row["uid"]."&vip=$date'>VIP [No]</a>";
					}else{
						$vip="<a class='alert alert-success' href='?pg=users&user=".$row["uid"]."&vip=0'>VIP [Yes]</a>";
					}
                                ?>
                          <tr>
                            <td>
                             <?php echo $row["username"];?> </td>
                            <td> <?php echo $row["password"];?></td>
                            <td><?php echo $location="".$row["country"]." [ ".$row["city"]." ]";?></td>
                            <td><?php echo $row["email"];?></td>
                            <td> <?php echo $row["mobile"];?></td>
                            <td>
                              <div class="badge badge-success p-2"><?php echo $level;?></div>
                            </td>
                             <td>
                               <?php echo $status;?>
                              <?php echo $vip;?>
                                 <a class="alert alert-danger" href='?del=<?php echo $row["uid"];?>'>Delete </a>
                            </td>
                          </tr>
                         <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex mt-4 flex-wrap">
                      <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                      <nav class="ml-auto">
                        <ul class="pagination separated pagination-info">
                          <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">4</a></li>
                          <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         