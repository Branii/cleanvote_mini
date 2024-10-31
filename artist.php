<?php
ini_set('display_errors', 1);
require_once './autoload.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clean Votes Gh.</title>
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

        .tag-cloud-link {
            cursor: pointer;
            color: #000;
            user-select: none;
        }

        .active{
            background-color: royalblue !important;
            color:#fff !important
        }

        button {
 display: flex;
 align-items: center;
 justify-content: center;
 gap: 5px;
 font-family: inherit;
 font-size: 16px;
 font-weight: 500;
 text-transform: uppercase;
 letter-spacing: 0.2px;
 color: #fff;
 background-color: blue;
 border-style: solid;
 border-width: 2px 2px 2px 2px;
 border-color: rgba(255, 255, 255, 0.333);
 border-radius: 40px 40px 40px 40px;
 /* padding: 16px 24px 16px 28px; */
 transform: translate(0px, 0px) rotate(0deg);
 transition: 0.2s;
 box-shadow: -4px -2px 16px 0px #ffffff, 4px 2px 16px 0px rgb(95 157 231 / 48%);
}

button:hover {
 color: #516d91;
 background-color: #E5EDF5;
 box-shadow: -2px -1px 8px 0px #ffffff, 2px 1px 8px 0px rgb(95 157 231 / 48%);
}

button:active {
 box-shadow: none;
}

footer {
    height: 100px; /* Adjust to your footer's height */
    background-color: #f1f1f1; /* Optional for visibility */
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
}

.mconfirm:hover {
  background-color: red;
  color: #fff;
}
.bottom-left-corner {
    position: fixed; /* Stay in the viewport */
    top:230px;
    left: 0;         /* Align at the left */
    margin: 20px;    /* Optional: Add some space around the div */
    background-color: transparent;
    color:red;
    padding: 10px;   /* Optional: Padding for content inside the div */
    z-index: 1000;   /* Optional: Ensure it's above other elements */
}
    </style>
    <script>
        function openDialog() {
            Avgrund.show("#default-popup");
        }

        function closeDialog() {
            Avgrund.hide();
        }
    </script>
</head>

<body class="theme-mode" style="height:100vh">

    <aside id="default-popup" class="avgrund-popup" style="border-radius: 10px; user-select: none;">
    <!-- <span class="top-right-icon bg-secondary"><i class="elegant-icon icon_link_alt"></i></span> -->
        <div style="border-top-right-radius:10px;border-top-left-radius:10px;height:300px;padding:20px; background-image: url('public/assets/imgs/candidate/img.jpg'); background-position: center; background-repeat: no-repeat; background-size: calc(100% - 10px) calc(100% - 10px);">
            <i class='bx bx-share-alt'
                style="position: absolute; top: 10px; right: 10px;font-size:30px;cursor:pointer;outline: none;color:#fff"></i>
                <span class="bottom-left-corner">100</span>
            </div>

        <center>
            <p></p>
            <h2 class="thename">That's all, folks</h2>

            <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                <div class="tagcloud mt-20">
                    <a class="tag-cloud-link">GH₵ 1</a>
                    <a class="tag-cloud-link">GH₵ 5</a>
                    <a class="tag-cloud-link">GH₵ 10</a>
                    <a class="tag-cloud-link">GH₵ 20</a>
                    <a class="tag-cloud-link">GH₵ 50</a>
                    <a class="tag-cloud-link">GH₵ 100</a>
                    <a class="tag-cloud-link">GH₵ 150</a>
                </div>
            </div>

            <input type="number" pattern="\d+" title="Please enter a valid whole number" step="1" min="0" oninput="this.value = this.value.replace(/\D+/g, '')" class="form-control amount" id="amount" value="1" style="width: 200px; position:relative;bottom:20px" required>


            <!-- <button class="animated-button confirm">
                <span>Confirm</span>
                <span></span>
            </button> -->

        </center>

        <div class="confirm" style="border-top:solid 2.5px #bbb;border-bottom-right-radius:10px;border-bottom-left-radius:10px;height: 60px; background-color:red;color:#fff; display: flex; justify-content: center; align-items: center;cursor:pointer;user-select: none;">
            <b style="font-size: 20px;color:#fff">Confirm</b> <i class='bx bx-loader bx-spin bx-flip-horizontal loader' style="font-size: 20px;margin-left:10px; display:none"></i>
        </div>

    </aside>
    <div class="avgrund-cover"></div>

    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->

    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading" style="position: relative;">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="index.html"><img class="logo" src="public/assets/imgs/theme/logo.png" alt=""></a>
                    </div>
                    <div class="col-md-9 col-xs-6 text-end header-top-right ">

                        
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>

        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="post-module-2">

                        <div class="row">

                            <?php
                            $candidateCode = $_GET['code'];
                            $item = (new Controller)->getCandidateByCode($candidateCode) ?? [];
                            if($item){

                             ?>

                            <article hidden class="col-md-4 mb-40 wow fadeInUp animated">
                                <div class="post-card-1 border-radius-10 hover-up"
                                    style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;border:solid 1px blue;user-select: none;">
                                    <div class=" img-hover-slide position-relative"
                                        style="background-image: url(public/assets/imgs/candidate/img.jpg); background-position: center; background-repeat: no-repeat; background-size: calc(100% - 10px) calc(100% - 10px);">
                                        <a class="img-link" href="single.html"></a>

                                    </div>
                                    <div class="post-content p-30">
                                        <div class="entry-meta meta-0 font-small mb-10" style="font-size: 16px;">
                                            <a><span
                                                    class=" text-info"><?=$item['cadidate_vote_count']?></span></a>
                                            <a><span class="post-cat text-success"><?= $item['cadidate_vote_count'] > 1 ? 'Votes' : 'Vote' ?></span></a>
                                        </div>
                                        <div class="d-flex post-card-content">
                                            <h5 class="post-title mb-20 font-weight-900">
                                                <a hidden
                                                    class="candidatenaid"><?=$item['candidate_id']?></a>
                                                <a href="#"
                                                    class="candidatename"><?=$item['candidate_name']?></a>

                                                    <a href="#"
                                                    class="totalvote" hidden><?= $item['cadidate_vote_count'] . " Votes" ?></a>
                                            </h5>
                                            <div class="">
                                                <center>

                                                    <!-- <button class="animated-button vote"
                                                        onclick="javascript:openDialog();">
                                                        <span>Vote me</span>
                                                        <span></span>
                                                    </button> -->

                                                    <button class="vote" onclick="javascript:openDialog();">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Vote me
                                                    </button>

                                                </center>
                                            </div>
                                        </div>
                                        <p></p>
                                        <div class="progress" style="height:5px;">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                        style="width: <?= max(0, min(100, $item['cadidate_vote_count']/100)) ?>%" 
                                        aria-valuenow="<?= $item['cadidate_vote_count'] ?>" 
                                        aria-valuemin="0" 
                                        aria-valuemax="100">
                                        </div>
                                        </div>

                                    </div>

                                </div>

                            </article>
                            

                            <?php
                            }else{
                                echo "Candidate not found, try with a different code";
                            }
                            ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

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
    <script src="public/assets/js/single.js"></script>
    <script>
        $(function() {

            let candidateId
            let candidateName

            $(document).on("click", ".vote", function() {
                // Traverse up to the closest .post-card-content, then find the .candidatename within it
                let id = $(this).closest(".post-card-content").find('.candidatenaid').text();
                let name = $(this).closest(".post-card-content").find('.candidatename').text();
                let totalVotes = $(this).closest(".post-card-content").find('.totalvote').text();
                candidateId = id
                candidateName = name
                $(".thename").text(name)
                $(".bottom-left-corner").text(totalVotes)
                console.log(id + "   " + name + " " + totalVotes );

            });

            $(".vote").trigger("click");

            $(document).on("click", ".confirm", function() {
                $(".loader").show()
                let money = $(".amount").val()
                $.post("app/core/paystack.php", {
                    candidateId:candidateId,
                    candidateName:candidateName,
                    money:money
                }, function(data) {
                    $(".loader").hide()
                    let response = JSON.parse(data)
                    if(response.status){
                       // console.log(response.data.authorization_url)
                        window.location.href = response.data.authorization_url
                        closeDialog()
                    }else{
                        console.log(response.status)
                    }
                })

            });

            $(document).on("click", ".tag-cloud-link", function() {

                $(".tag-cloud-link").each(function () {
                    $(".tag-cloud-link").removeClass("active")
                })
                $(this).addClass("active")

                let money = $(this).text().split(" ")[1]
                $(".amount").val(money)
                console.log(money);

            });

        });
    </script>
</body>

</html>