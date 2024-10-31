<?php
ini_set('display_errors', 1);
require_once './autoload.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CleanVote Gh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/widgets.css">
    <link rel="stylesheet" href="public/assets/css/dark.css">
    <link rel="stylesheet" href="public/assets/css/responsive.css">
    <link rel="stylesheet" href="public/assets/css/demo.css">
    <link rel="stylesheet" href="public/assets/css/avgrund.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .animated-button {
            position: relative;
            box-shadow: 0 0 0 5px #2195f360;
            color: #bbb;
            padding: 10px 22px;
            border: solid 3px #ccc;
            font-size: 14px;
            background-color: #ddd;
            
            border-radius: 100px;
            font-weight: 600;
         
            box-shadow: 0 0 0 2px #ffffff20;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .animated-button span:last-child {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background-color: #2196F3;
            border-radius: 50%;
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .animated-button span:first-child {
            position: relative;
            z-index: 1;
        }

        .animated-button:hover {
            box-shadow: 0 0 0 5px #2195f360;
            color: #ffffff;
        }

        .animated-button:active {
            scale: 0.95;
        }

        .animated-button:hover span:last-child {
            width: 150px;
            height: 150px;
            opacity: 1;
        }
    </style>
    	<script>
			function openDialog() {
				Avgrund.show( "#default-popup" );
			}
			function openSecondDialog() {
				Avgrund.show( "#second-popup" );
			}
			function closeDialog() {
				Avgrund.hide();
			}
		</script>
</head>

<body class="theme-mode">

<aside id="default-popup" class="avgrund-popup" style="border-radius: 10px;">

<div style="border-top-right-radius:10px;border-top-left-radius:10px;height:300px;padding:20px; background-image: url('public/assets/imgs/candidate/sample.png'); background-position: center; background-repeat: no-repeat; background-size: calc(100% - 10px) calc(100% - 10px);">
    <i class='bx bx-message-square-x' onclick="javascript:closeDialog();" style="position: absolute; top: 10px; right: 10px;font-size:30px;cursor:pointer;outline: none;"></i>
</div>

    <center><p></p>
    <h2 class="thename">That's all, folks</h2>
    <p style="padding: 15px;">
    <i class='bx bx-info-circle' style="font-size: 20px;"></i>  You will be charged [ <b>GH₵ 1 = 1 Vote</b> ] for this vote cast, click confirm to proceed. 
    </p>
    <p>
    

        <button class="animated-button"  onclick="javascript:closeDialog();">
            <span>Confirm</span>
            <span></span>
        </button>

       
    </p>
    </center>
</aside>
<div class="avgrund-cover"></div>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->

    <!-- Start Header -->
    <header class="" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 999;">
    <div class="header-topp">
        <div class="container">
            <div class="row pt-20 pb-20">
                <div class="col-md-3 col-xs-6">
                    <a href="index.html"><img class="logo" src="public/assets/imgs/theme/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html">World</a></li>
                            <li class="list-inline-item"><a href="category.html">American</a></li>
                            <li class="list-inline-item"><a href="category.html">Opinion</a></li>
                            <li class="list-inline-item"><a href="category.html">Tech</a></li>
                            <li class="list-inline-item"><a href="category.html">Science</a></li>
                            <li class="list-inline-item"><a href="category.html">Books</a></li>
                            <li class="list-inline-item"><a href="category.html">Travel</a></li>
                            <li class="list-inline-item"><a href="category.html">Business</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-80">
                    <div class="col-lg-4">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="public/assets/imgs/news/thumb-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Travel Tips</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="public/assets/imgs/news/thumb-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5 mb-30">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="single.html">
                                    <img src="public/assets/imgs/news/thumb-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="category.html">Hotel Review</a> </h6>
                                <p class="text-muted font-small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content -->
    <main>

        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="post-module-2">

                        <div class="row">

                            <?php
                            $candidates = (new Controller)->getAllCandidates();
                            foreach ($candidates as $item) {
                                ?>

                            <article class="col-md-4 mb-40 wow fadeInUp animated">
                                <div class="post-card-1 border-radius-10 hover-up" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                        style="background-image: url(public/assets/imgs/candidate/sample.png)">
                                        <a class="img-link" href="single.html"></a>
                                        
                                    </div>
                                    <div class="post-content p-30">
                                        <div class="entry-meta meta-0 font-small mb-10">
                                            <a href="category.html"><span class="post-cat text-info"><?=$item['poll_id']?></span></a>
                                            <a href="category.html"><span class="post-cat text-success"> Votes</span></a>
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5 class="post-title mb-20 font-weight-900">
                                                <a href="single.html" class="candidatename"><?=$item['candidate_name']?></a>
                                            </h5>
                                            <div class="post-excerpt mb-25 font-small text-muted">
                                                <center>

                                                    <button class="animated-button vote"  onclick="javascript:openDialog();">
                                                        <span>Vote me</span>
                                                        <span></span>
                                                    </button>

                                                </center>
                                            </div>
                                            <div class="entry-meta meta-1 float-start font-x-small text-uppercase">
                                                <span class="post-on">27 August</span>
                                                <span class="time-reading has-dot">12 mins read</span>
                                                <span class="post-by has-dot">23k views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <?php
                            }
                                ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
    <!--site-bottom-->

    <!--end site-bottom-->
    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">

            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-start font-small text-muted">  <img src="public/assets/imgs/pivo_white.png" width="150px" height="100px"> Powered by Pivo Apps &#8482;.</p>
                <!--  -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="public/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="public/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="public/assets/js/vendor/popper.min.js"></script>
    <script src="public/assets/js/vendor/bootstrap.min.js"></script>
    <script src="public/assets/js/vendor/jquery.slicknav.js"></script>
    <script src="public/assets/js/vendor/slick.min.js"></script>
    <script src="public/assets/js/vendor/wow.min.js"></script>
    <script src="public/assets/js/vendor/jquery.ticker.js"></script>
    <script src="public/assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="public/assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="public/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="public/assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="public/assets/js/vendor/jquery.sticky.js"></script>
    <script src="public/assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="public/assets/js/vendor/waypoints.min.js"></script>
    <script src="public/assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="public/assets/js/main.js"></script>
    <script src="public/assets/js/avgrund.js"></script>
    <script>
        $(function() {
            $(document).on("click", ".vote", function(){
                // Traverse up to the closest .post-card-content, then find the .candidatename within it
                let name = $(this).closest(".post-card-content").find('.candidatename').text();
                $(".thename").text(name)
                console.log(name);
            });
        });
    </script>
</body>

</html>