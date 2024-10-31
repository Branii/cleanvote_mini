<?php
session_start();
require_once '../app/database/Database.php';
require_once '../app/model/Helper.php';
require_once '../app/model/Model.php';
require_once '../app/controller/Controller.php';

$results = (new Model)->getAllCandidates();
$TotalVotes = array_sum(array_column($results,"candidate_vote_count"));
$TotalCandidate = count(array_column($results,"candidate_name"));
$jsonData = [
   'target' => 10000,
   "votecount"=> $TotalVotes,
   "moneycount"=> $TotalVotes,
   "candidate"=> $TotalCandidate
];

 if(!isset($_SESSION['email'])){
  header("location:index.php");
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://bootstrapdemos.adminmart.com/modernize/dist/assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
  <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>-->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- Core Css -->
  <link rel="stylesheet" href="../public/assets/css/theme.css" />
  <title>CleanVote GH</title>
  <style>
    .active {
      background-color: rgb(117, 153, 255, 0.8) !important;
    }

    .ti-alert-circle {
      color: #7599FF !important;
    }

    .nn {
      border-radius: 10px !important;
      border: solid .5px #ccc;
      outline: none;
      user-select: none;
    }

    table thead tr {
      background-color: #f0f0f0; /* Set your desired color */
      color: #333; /* Optional: change text color */
    }

    .bbx{
      background-color: #fff !important;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
    }

    .button-group{
      margin-left: 5px;
    }

    .cont {
  position: relative;
  padding:20px;
}

.right-element {
  position: absolute;
  right: 0; /* Positions element at the far right of the container */
  top: 50%; /* Center vertically, adjust if needed */
  transform: translateY(-50%);
  margin-right: 70px;

}

.left-element{
  position:relative;
  top:10px;
  margin-left: 40px;
}

  </style>
</head>

<body class=" bg-white">
  <main>
    <!--start the project-->
    <div id="main-wrapper" class=" flex">
      <aside id="application-sidebar-brand"
        class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed top-0 with-vertical h-screen z-[999] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400  bg-white left-sidebar   transition-all duration-300">
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="p-4">

          <a class="text-nowrap">
            <img src="../public/assets/imgs/theme/logo.png" alt="Logo-Dark" />
          </a>
        </div>

        <hr>

        <div class="scroll-sidebar" data-simplebar="">
          <div class="px-6 mt-8">
            <nav class=" w-full flex flex-col sidebar-nav">
              <ul id="sidebarnav" class="text-gray-600 text-sm">
                <li class="text-xs font-bold pb-4">
                  <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                  <span>HOME</span>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link active gap-3 py-2 px-3  rounded-md  w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    >
                    <i class="ti ti-layout-dashboard  text-xl"></i> <span>Dashboard</span>
                  </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-8">
                  <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                  <span>CORE MENU</span>
                </li>

                <li class="sidebar-item ">
                  <a href="add.php"
                    class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500">
                    <i class="ti ti-article  text-xl"></i> <span>Add Candidates</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="view.php">
                    <i class="ti ti-alert-circle  text-xl"></i> <span>View Candidates</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="prog.php">
                    <i class="ti ti-cards  text-xl"></i> <span>View Progresses</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="report.php">
                    <i class="ti ti-file-description  text-xl"></i> <span>View Results</span>
                  </a>
                </li>

                <!-- <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="../components/typography.html">
                    <i class="ti ti-typography text-xl"></i> <span>Typography</span>
                  </a>
                </li> -->

                <li class="text-xs font-bold mb-4 mt-8">
                  <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                  <span>AUTH</span>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="backup.php"
                  >
                    <i class="ti ti-login  text-xl"></i> <span>Backup Results</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="restore.php"
                  >
                    <i class="ti ti-user-plus  text-xl"></i> <span>Restore Results</span>
                  </a>
                </li> 

                <li class="text-xs font-bold mb-4 mt-8">
                  <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                  <span>EXTRA</span>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="#">
                    <i class="ti ti-mood-happy  text-xl"></i> <span>PivoApp</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="signout.php">
                    <i class="ti ti-aperture  text-xl"></i> <span>Sign out</span>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- </aside> -->
      </aside>
      <div class=" w-full page-wrapper overflow-hidden">

        <!--  Header Start -->
        <header class="cont w-full text-sm py-4">

        <div class="left-element">Version 1.0.1</div>
        <div class="right-element" style="z-index:9999">
        <div class="dropdown">
        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../public/assets/imgs/user.png" width="45px" height="45px" style="border-radius:100px"/>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li></li>
          <li><a class="dropdown-item"><b><?=$_SESSION['email']?></b></a></li>
          <li><hr></li>
          <li><a class="dropdown-item" href="#">Change password</a></li>
          <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
        </ul>
      </div>
        </div>
<br>
        </header>
        <!--  Header End -->
        <hr>
        <!-- Main Content -->
        <main class="h-full overflow-y-auto  max-w-full pt-4"  style="z-index:0">
          <div class="containers p-5 full-container py-5 flex flex-col" style="background-color:#fff;">

       
              <div class="card">
                <div class="card-body">


				<div class="row">
            <div class="col-sm-6 ">
              <div class="card bg-primary-subtle shadow-none">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                    <div class="round rounded text-bg-primary d-flex align-items-center justify-content-center">
                      <i class="cc BTC text-white fs-7" title="BTC"></i>
                    </div>
                    <h6 class="mb-0 ms-3">Target</h6>
                    <div class="ms-auto text-primary d-flex align-items-center">
                      <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                      <span class="fs-2 fw-bold">...</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7">GH₵ <?=$jsonData['target']?></h3>
                    <span class="fw-bold"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 ">
              <div class="card bg-danger-subtle shadow-none">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                    <div class="round rounded text-bg-danger d-flex align-items-center justify-content-center">
                      <i class="cc ETH text-white fs-7" title="ETH"></i>
                    </div>
                    <h6 class="mb-0 ms-3">Earned</h6>
                    <div class="ms-auto text-danger d-flex align-items-center">
                      <i class="ti ti-trending-up text-danger fs-6 me-1"></i>
                      <span class="fs-2 fw-bold">...</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7">GH₵ <?=$jsonData['moneycount']?></h3>
                    <span class="fw-bold"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 ">
              <div class="card bg-success-subtle shadow-none">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                    <div class="round rounded text-bg-success d-flex align-items-center justify-content-center">
                      <i class="cc LTC text-white fs-7" title="LTC"></i>
                    </div>
                    <h6 class="mb-0 ms-3">Candidates</h6>
                    <div class="ms-auto text-info d-flex align-items-center">
                      <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                      <span class="fs-2 fw-bold text-success">...</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7"><?=$jsonData['candidate']?></h3>
                    <span class="fw-bold"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 ">
              <div class="card bg-warning-subtle shadow-none">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                    <div class="round rounded text-bg-warning d-flex align-items-center justify-content-center">
                      <i class="cc XRP text-white fs-7" title="XRP"></i>
                    </div>
                    <h6 class="mb-0 ms-3">Total Votes</h6>
                    <div class="ms-auto text-info d-flex align-items-center">
                      <i class="ti ti-trending-down text-warning fs-6 me-1"></i>
                      <span class="fs-2 fw-bold text-warning">...</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7"><?=$jsonData['votecount']?></h3>
                    <span class="fw-bold"></span>
                  </div>
                </div>
              </div>
            </div>



				</div>
				</div>

				
            </div>


            <div id="signup-modal" class="modal fade" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                      <a class="text-success">
                        <span>
                          <img src="../public/assets/imgs/theme/logo.png" class="me-3 img-fluid" alt="modernize-img" />
                        </span>
                      </a>
                    </div>

                    <form class="ps-3 pr-3" action="#" style="padding:10px">

                      <div class="mb-3">
                        <center>
                          <!-- <img style='user-select:none' src="../public/assets/imgs/user.png" class="rounded-circle" width="150" height="150" alt="modernize-img" /> -->
                          <div class="anyName"
                            style="background:url('../public/assets/imgs/user.png');background-repeat: no-repeat;background-size: cover;border-width:2px;border-style:dashed;border-color:#eee;">
                            <input type="file" accept="image/gif, image/jpeg, image/png" name="myfile" id="myfile">
                          </div>
                        </center>
                      </div>

                      <div class="mb-3">
                        <label for="username">Candidate Name</label>
                        <input class="form-control nn" type="text" id="name" required="" placeholder="Example name" />
                      </div>

                      <div class="mb-3">
                        <label for="username">Candidate Gender</label>
                        <select class="form-control gender" id="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="emailaddress">Candidate Mobile</label>
                        <input class="form-control nn" type="number" id="mobile" required="" placeholder="0244xxxxxx" />
                      </div>

                      <div class="mb-3">
                        <label for="password">Candidate Code (Auto gen)</label>
                        <input class="form-control nn" type="text" required="" id="code" placeholder="0011" />
                      </div>

                      <div class="mb-3">
                        <div class="form-check">
                          <input type="checkbox" checked disabled class="form-check-input" id="customCheck1" />
                          <label class="form-check-label" for="customCheck1">I accept
                            <a href="javascript:void(0)">Terms and Conditions</a>
                          </label>
                        </div>
                      </div>

                      <div class="mb-3 text-center">
                        <button class="btn bg-info-subtle text-info" type="submit" id="submit">
                          Add candidate <i class='bx bx-loader bx-spin' style="font-size: 20px;display:none"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            <div id="edit-modal" class="modal fade" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                      <a class="text-success">
                        <span>
                          <img src="../public/assets/imgs/theme/logo.png" class="me-3 img-fluid" alt="modernize-img" />
                        </span>
                      </a>
                    </div>

                    <form class="ps-3 pr-3" action="#" style="padding:10px">

                    <div class="mb-3">
                        <label for="username">Candidate Id</label>
                        <input class="form-control nn" hidden readonly type="text" id="eid" required="" placeholder="Example name" />
                      </div>

                      <div class="mb-3">
                        <label for="username">Candidate Name</label>
                        <input class="form-control nn" type="text" id="ename" required="" placeholder="Example name" />
                      </div>

                      <div class="mb-3">
                        <label for="username">Candidate Gender</label>
                        <select class="form-control gender" id="egender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="emailaddress">Candidate Mobile</label>
                        <input class="form-control nn" type="number" id="emobile" required="" placeholder="0244xxxxxx" />
                      </div>

                      <div class="mb-3">
                        <label for="password">Candidate Code (Auto gen)</label>
                        <input class="form-control nn" type="text" required="" id="ecode" placeholder="0011" />
                      </div>

                      <div class="mb-3">
                        <div class="form-check">
                         
                        </div>
                      </div>

                      <div class="mb-3 text-center">
                        <button class="btn bg-info-subtle text-info" type="submit" id="submit-update">
                          Update details <i class='bx bx-loader bx-spin updatespin' style="font-size: 20px;display:none"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            <div id="view-modal" class="modal fade" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                      <a class="text-success">
                        <span>
                          <img src="../public/assets/imgs/theme/logo.png" class="me-3 img-fluid" alt="modernize-img" />
                        </span>
                      </a>
                    </div>

                    <form class="ps-3 pr-3" action="#" style="padding:10px">

                      <div class="mb-3 row d-flex justify-center">
                         <img width="100" height="100" class="preview">
                      </div>

                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            <!-- Vertically centered modal -->
            <div class="modal fade" id="al-success-alert" tabindex="-1" aria-labelledby="vertical-center-modal"
              aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-success-subtle text-success">
                  <div class="modal-body p-4">
                    <div class="text-center text-success">
                      <i class="ti ti-circle-check fs-7"></i>
                      <h4 class="mt-2">Success</h4>
                      <p class="mt-3 text-info-70 alert-text" style="color:#000"></p>
                      <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">
                        Okay
                      </button>
                    </div>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
            </div>

            <div class="modal fade" id="al-danger-alert" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content modal-filled bg-danger-subtle">
                          <div class="modal-body p-4">
                            <div class="text-center text-danger">
                              <i class="ti ti-hexagon-letter-x fs-7"></i>
                              <h4 class="mt-2">Oh snap!</h4>
                              <p class="mt-3">
                                Deleting this candidate will prevent recieving funds and vote count and will be evicted automatically.
                              </p>
                              <button type="button" class="btn btn-light my-2 del" data-bs-dismiss="modal">
                                Delete
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
            </div>

            <footer>
              <p class="text-base text-gray-500 font-normal p-3 text-center">
                Powered by <b class="text-blue-600 underline hover:text-blue-700">PivoApps</b>
              </p>
            </footer>
          </div>


        </main>
        <!-- Main Content End -->

      </div>
    </div>
    <!--end of project-->
  </main>
  <script
    src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="../public/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../public/assets/js/dashboard.js"></script>
<script src="../public/assets/libs/apexcharts/dist/apexcharts.min.js"></script>



</body>

</html>