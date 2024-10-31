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
                  <a class="sidebar-link gap-3 py-2 px-3  rounded-md  w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                    href="dashboard.php">
                    <i class="ti ti-layout-dashboard  text-xl"></i> <span>Dashboard</span>
                  </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-8">
                  <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                  <span>CORE MENU</span>
                </li>

                <li class="sidebar-item ">
                  <a
                    class="sidebar-link active gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500">
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
        <main class="h-full overflow-y-auto  max-w-full pt-4">
          <div class="containers p-5 full-container py-5 flex flex-col" style="background-color:#fff;">

            <div class="col-span-2">
            
              <div class="button-group">
                   
                    <button type="button" id="addnew" class="btn bg-primary-subtle text-secondary bbx" data-bs-toggle="modal"
                    data-bs-target="#signup-modal">
                    <i class='bx bx-user-plus' style="font-size: 25px;"></i> 
                    </button>
                    <button type="button" class="btn bg-primary-subtle text-secondary bbx refresh">
                      <i class='bx bx-refresh'  style="font-size: 25px;"></i>
                    </button>
                    
              </div>
              <div class="card">
                <div class="card-body">

                  <table class="table text-nowrap mb-0 align-middle table-bordered table-striped">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th>
                          <h6 class="fs-4 fw-semibold mb-0">Candidata Name</h6>
                        </th>
                        <th>
                          <h6 class="fs-4 fw-semibold mb-0">Name Initials</h6>
                        </th>
                        <th>
                          <h6 class="fs-4 fw-semibold mb-0">Candidate Gender</h6>
                        </th>
                        <th>
                          <h6 class="fs-4 fw-semibold mb-0">Candidate Mobile</h6>
                        </th>
                        <th>
                          <h6 class="fs-4 fw-semibold mb-0">Candidate Code</h6>
                        </th>
                        <th>
                          <t class="fs-4 fw-semibold mb-0">Candidat Status</t>
                        </th>
                        <th>
                          <h6 class="fs-4 fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                   $page = isset($_GET['page']) ? $_GET['page'] : 1;
$candidates = (new Model)->getAllCandidateWithPaging($page, 5);
foreach ($candidates as $item) {

    $xx = explode(" ", $item['candidate_name']);
    $first = substr($xx[0], 0, 1);
    $last = substr($xx[1] ?? null, 0, 1);

    ?>

                      <tr>
                        <td>
                          <data class="data" hidden><?=json_encode($item)?></data>
                          <div class="d-flex align-items-center " style="cursor:pointer;">
                            <img
                              src="../public/assets/imgs/candidate/<?=$item['candidate_image']?>"
                              class="rounded-circle photo" width="40" height="40" />
                            <div class="ms-3">
                              <h6 class="fs-4 fw-semibold mb-0">
                                <?=$item['candidate_name']?>
                              </h6>
                              <span class="fw-normal">Performing Artists</span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)"
                              class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                              <?= $first ?? null?>
                            </a>
                            <a href="javascript:void(0)"
                              class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                              <?= $last ?? null?>
                            </a>
                          </div>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4">
                            <?=$item['candidate_gender']?>
                          </p>
                        </td>

                        <td>
                          <p class="mb-0 fw-normal fs-4">
                            <?=$item['candidate_mobile']?>
                          </p>
                        </td>

                        <td>
                          <p class="mb-0 fw-normal fs-4">
                            <?=$item['candidate_code']?>
                          </p>
                        </td>

                        <td>
                          <span class="badge bg-success-subtle text-success">Active</span>
                        </td>

                        <td>
                          <div class="dropdown dropstart">
                            <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <i class='bx bx-menu-alt-left'></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li>
                                <a class="dropdown-item view d-flex align-items-center gap-3" href="javascript:void(0)">
                                  <i class="fs-4 ti ti-eye"></i>View
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item edit d-flex align-items-center gap-3" href="javascript:void(0)">
                                  <i class="fs-4 ti ti-edit"></i>Edit
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item delete d-flex align-items-center gap-3" href="javascript:void(0)">
                                  <i class="fs-4 ti ti-trash"></i>Delete
                                </a>
                              </li>
                            </ul>
                          </div>
                        </td>

                      </tr>

                      <?php
}

?>


                    </tbody>
                  </table>
                  <br>

                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link"
                          href="?page=<?= $pagination['prev'] ?>"
                          tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <?php
     $pages = (new Model)->paginateCandidate(1, 5);

foreach ($pages['pages'] as $page) {

    ?>

                      <li class="page-item">
                        <a class="page-link"
                          href="?page=<?= $page ?>"><?=$page?></a>
                      </li>

                      <?php

}
?>
                      <li class="page-item">
                        <a class="page-link"
                          href="?page=<?= $pagination['next'] ?>">Next</a>
                      </li>
                    </ul>
                  </nav>

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



  <script src="../public/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../public/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../public/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
  <script src="../public/assets/libs/@preline/dropdown/index.js"></script>
  <script src="../public/assets/libs/@preline/overlay/index.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../public/assets/js/jquery.uploadPreview.min.js"></script>

  <script src="../public/assets/js/system.js"></script>

  <script type="text/javascript">
    $('.anyName').uploadPreview({
      width: '180px',
      height: '180px',
      border: 'none',
      fontSize: '0px',
      borderRadius: '100px',
      lang: 'en', //language
    });
  </script>
</body>

</html>