<?php
session_start();
require_once '../app/database/Database.php';
require_once '../app/model/Helper.php';
require_once '../app/model/Model.php';
require_once '../app/controller/Controller.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html   lang="en" >

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
  z-index: 9999;
}

.left-element{
  position:relative;
  top:10px;
  margin-left: 40px;
}

.dropdown-menu{
  z-index: 9999 !important;
}
  </style>
</head>

<body class=" bg-white">
	<main>
		<!--start the project-->
		<div id="main-wrapper" class=" flex">
			<aside id="application-sidebar-brand"
				class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed top-0 with-vertical h-screen z-[999] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400  bg-white left-sidebar   transition-all duration-300" >
				<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="p-4" >
  
  <a class="text-nowrap">
    <img
      src="../public/assets/imgs/theme/logo.png"
      alt="Logo-Dark"
    />
  </a>
</div>

<hr>

<div class="scroll-sidebar" data-simplebar="">
 <div class="px-6 mt-8" >
    <nav class=" w-full flex flex-col sidebar-nav">
      <ul  id="sidebarnav" class="text-gray-600 text-sm">
        <li class="text-xs font-bold pb-4">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span>HOME</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md  w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="dashboard.php"
           >
            <i class="ti ti-layout-dashboard  text-xl"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="text-xs font-bold mb-4 mt-8">
          <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
          <span>CORE MENU</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="add.php"
           >
            <i class="ti ti-article  text-xl"></i> <span>Add Candidates</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 active py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" 
           >
            <i class="ti ti-alert-circle  text-xl"></i> <span>View Candidates</span>
          </a>
        </li>        

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="prog.php"
           >
            <i class="ti ti-cards  text-xl"></i> <span>View Progresses</span>
          </a>
        </li>   

        <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="report.php"
           >
            <i class="ti ti-file-description  text-xl"></i> <span>View Results</span>
          </a>
        </li> 

        <!-- <li class="sidebar-item">
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="../components/typography.html"
           >
            <i class="ti ti-typography text-xl"></i> <span>Typography</span>
          </a>
        </li>    -->
        
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
        <header class="cont w-full text-sm py-4 ">

<div class="left-element">Version 1.0.1</div>
<div class="right-element">
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
				<main class="h-full overflow-y-auto  max-w-full">
					<div class="containers p-5 full-container flex flex-col" style="background-color:#fff">
          <div class="card">
          <div class="card-body row">
                  <?php

                  $candidates = (new Model)->getAllCandidates();
                  foreach ($candidates as $item) {

                      ?>

                      <div class="col-md-6 col-lg-3">
                        <div class="card overflow-hidden">
                          <div class="position-relative">
                            <a href="javascript:void(0)">
                              <img src="../public/assets/imgs/candidate/<?=$item['candidate_image']?>" class="card-img-top" alt="modernize-img">
                            </a>
                            <a href="javascript:void(0)" class="btn btn-primary rounded-circle p-2 d-flex align-items-center justify-content-center position-absolute bottom-0 end-0 me-3 mb-n3">
                              <i class="ti ti-basket"></i>
                            </a>
                          </div>
                          <div class="card-body p-4">
                            <h4 class="card-title"><?=$item['candidate_name']?></h4>
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center gap-2">
                                <h5 class="fs-4 mb-0">GH₵ <?=$item['candidate_amount_recieved']?>  = </h5>
                                <p class="mb-0 "><?=$item['candidate_vote_count']?> Votes</p>
                              </div>
                              <ul class="d-flex align-items-center gap-1 mb-0">
                                <li>
                                  <a href="javascript:void(0)" class="text-warning">
                                    <i class="ti ti-star"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="javascript:void(0)" class="text-warning">
                                    <i class="ti ti-star"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="javascript:void(0)" class="text-warning">
                                    <i class="ti ti-star"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="javascript:void(0)" class="text-warning">
                                    <i class="ti ti-star"></i>
                                  </a>
                                </li>
                                <li>
                                  <a href="javascript:void(0)" class="text-warning">
                                    <i class="ti ti-star"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php
                  }

                  ?>
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


	
<script src="../public/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../public/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../public/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="../public/assets/libs/@preline/dropdown/index.js"></script>
<script src="../public/assets/libs/@preline/overlay/index.js"></script>
<script src="../public/assets/js/sidebarmenu.js"></script>

<script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>