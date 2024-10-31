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
          <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="view.php"
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
          <a class="sidebar-link active gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500" href="report.php"
           >
            <i class="ti ti-file-description  text-xl"></i> <span>Results</span>
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
<div class="right-element" >
<div class="dropdown" style="z-index:9999">
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
				<main class="h-full overflow-y-auto">
					<div class="containers p-5 full-container flex flex-col" style="background-color:#fff">
                   
                         <div class="col-span-2">
							<div class="card"  style="z-index:0">
								<div class="card-body">
									<div class="sm:flex block justify-between mb-5">
										<h4 class="text-gray-600 text-lg font-semibold sm:mb-0 mb-2">Voting results</h4>
										<!-- <select name="cars" id="cars" class=" border-gray-400 text-gray-500 rounded-md text-sm border-[1px] focus:ring-0 sm:w-auto w-full">
											<option value="volvo">March2023</option>
											<option value="saab">April2023</option>
											<option value="mercedes">May2023</option>
											<option value="audi">June2023</option>
										  </select> -->
									</div>
									<div id="chart"></div>
								</div>
							</div>
						 </div>
                         
					   <footer>
						<span class="text-base text-gray-500 font-normal p-3 text-center">
							<img src="../public/assets/imgs/pivo_white.png" width="100px" height="100px">
              Powered by PivoApps
						</span>
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
<!-- <script src="../public/assets/js/sidebarmenu.js"></script> -->

<script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../public/assets/js/report.js"></script>
	<script src="../public/assets/libs/apexcharts/dist/apexcharts.min.js"></script>

</body>

</html>