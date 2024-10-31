<?php 
session_start();

 if(isset($_SESSION['email'])){
  header("location:dashboard.php");
 } 
 ?>

<!DOCTYPE html>
<html   lang="en" dir="ltr" >

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
</head>

<body class="DEFAULT_THEME bg-white">
	<main>
				<!-- Main Content -->
                <div class="flex flex-col w-full  overflow-hidden relative min-h-screen radial-gradient items-center justify-center g-0 px-4">
                  
                    <div class="justify-center items-center w-full card lg:flex max-w-md ">
                        <div class=" w-full card-body">
                                <a  class="py-4 block"><img src="../public/assets/imgs/theme/logo.png" alt="" class="mx-auto"/></a>
                            <form>
                                <!-- username -->
                                <div class="mb-4">
                                    <label for="forUsername"
                                    class="block text-sm font-semibold mb-2 text-gray-600">Emal Addr.</label>
                                <input type="text" id="forEmail"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                                </div>
                                <!-- password -->
                                <div class="mb-6">
                                    <label for="forPassword"
                                    class="block text-sm font-semibold mb-2 text-gray-600">Password</label>
                                <input type="password" id="forPassword"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 " aria-describedby="hs-input-helper-text">
                                </div>
                                <!-- checkbox -->
                                  <div class="flex justify-between">
                                    <div class="flex">
                                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-[4px] text-blue-600 focus:ring-blue-500 " id="hs-default-checkbox" checked>
                                        <label for="hs-default-checkbox" class="text-sm text-gray-600 ms-3">Remeber this Device</label>
                                      </div>
                                        <a class="text-sm font-medium text-blue-600 hover:text-blue-700">Forgot Password ?</a>
                                  </div>
                                    <!-- button -->
                                      <div class="grid my-6 signin" >
                                        <a  class="btn py-[10px] text-base text-white font-medium hover:bg-blue-700">Sign In</a>
                                      </div>
        
                                    <div class="flex justify-center gap-2 items-center">
                                        <!-- <p class="text-base font-medium text-gray-500">New to Modernize?</p>
                                        <a href="./authentication-register.html" class="text-sm font-medium text-blue-600 hover:text-blue-700">Create an account</a> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
				
			</div>
		<!--end of project-->

    <button type="button" hidden class="btn mb-1 bg-info-subtle text-info  px-4 fs-4 message" data-bs-toggle="modal" data-bs-target="#al-info-alert">
                      Info Alert
                    </button>

                    <!-- Vertically centered modal -->
                    <div class="modal fade" id="al-info-alert" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content modal-filled bg-info-subtle">
                          <div class="modal-body p-4">
                            <div class="text-center text-info">
                              <i class="ti ti-info-circle fs-7"></i>
                              <h4 class="mt-2">Heads up!</h4>
                              <p class="mt-3">
                                Wrong email or password, if this continues to happen you can contact the administrator for support
                              </p>
                              <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">
                                Continue
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                    </div>


	</main>

<script src="../public/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../public/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../public/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="../public/assets/libs/@preline/dropdown/index.js"></script>
<script src="../public/assets/libs/@preline/overlay/index.js"></script>
<script src="../public/assets/js/sidebarmenu.js"></script>
<script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../public/assets/js/system.js"></script>

</body>
</html>