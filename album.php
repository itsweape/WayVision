<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WayVision.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!--icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="./img/logo2.jpg">

    <!--toggle mobile-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!--Library-->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--Koneksi Database-->
    <?php
        include'koneksi.php';
    ?>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Header Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="album.php" class="nav-item nav-link">Album</a>
                    </div>
                    <a href="form.php" class="btn btn-primary py-2 px-4">Join</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4 wow fadeIn">
                    <h1 class="display-3 mb-3" style="color: #FEA116;">WayV's Album </h1>
                    <h5 class="display-6 text-white mb-3">Colections</h5>
                </div>
            </div>
        </div>
        <!-- Navbar & Header End -->

        <!-- Album Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div id="album3" class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">The 3rd Mini Album </h5>
                    <h1 class="mb-5">Kick Back</h1>
                    <img class="flex-shrink-0 img-fluid rounded" src="img/album5.jpeg" alt="" style="width: 300px;">
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-6">
                            <div class="col-lg-10">
                                <div class="d-flex align-items-center wow fadeInUp">
                                    <div class="w-100 d-flex flex-column mt-5">
                                        <h5 class="d-flex justify-content-around">
                                            <table>
                                                <?php
                                                    $album5 = mysqli_query($conn, "select * from album where nama_album='Kick Back'");
                                                    $no=1;
                                                    foreach ($album5 as $value){
                                                        echo"
                                                            <tr>
                                                                ".$value['judul_lagu']."<br>
                                                            </tr><br>
                                                        ";
                                                    }
                                                ?>
                                            </table>
                                        </h5>
                                    </div>
                                    <table class="text-end">
                                        <tr>
                                            <td><button onclick="playAudio22()" type="button" class="btn btn-primary me-5 mb-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio23()" type="button" class="btn btn-primary me-5"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio24()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio25()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio26()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio27()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="album2" class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top: 100px">The 2nd Mini Album </h5>
                                <h1 class="mb-5">Take Over The Moon</h1>
                                <img class="flex-shrink-0 img-fluid rounded" src="img/album3.png" alt="" style="width: 300px;">
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex align-items-center wow fadeInUp">
                                    <div class="w-100 d-flex flex-column text-start mt-5">
                                        <h5 class="album d-flex justify-content-around">
                                            <table>
                                                <?php
                                                    $album4 = mysqli_query($conn, "select * from album where nama_album='Take Over The Moon'");
                                                    foreach ($album4 as $value){
                                                        echo"
                                                            <tr>
                                                                ".$value['judul_lagu']."<br>
                                                            </tr><br>
                                                        ";
                                                    }
                                                ?>
                                            </table>
                                        </h5>
                                    </div>
                                    <table class="text-end">
                                        <tr>
                                            <td><button onclick="playAudio7()" type="button" class="btn btn-primary me-5 mb-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio8()" type="button" class="btn btn-primary me-5"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio9()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio10()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio11()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio12()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="album1" class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top: 100px">The 1st Album </h5>
                                <h1 class="mb-5">Awaken The World</h1>
                                <img class="flex-shrink-0 img-fluid rounded" src="img/album4.png" alt="" style="width: 300px;">
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex align-items-center wow fadeInUp">
                                    <div class="w-100 d-flex flex-column text-start mt-5">
                                        <h5 class="album d-flex justify-content-around">
                                            <table>
                                                <?php
                                                    $album3 = mysqli_query($conn, "select * from album where nama_album='Awaken The World'");
                                                    foreach ($album3 as $value){
                                                        echo"
                                                            <tr>
                                                                ".$value['judul_lagu']."<br>
                                                            </tr><br>
                                                        ";
                                                    }
                                                ?>
                                            </table>
                                        </h5>
                                    </div>
                                    <table class="text-end">
                                        <tr>
                                            <td><button onclick="playAudio13()" type="button" class="btn btn-primary me-5 mb-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio14()" type="button" class="btn btn-primary me-5"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio15()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio16()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio17()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio18()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio19()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio20()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio21()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="album1mn" class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top: 100px">The 1st Mini Album </h5>
                                <h1 class="mb-5">Take Off</h1>
                                <img class="flex-shrink-0 img-fluid rounded" src="img/album2.png" alt="" style="width: 300px;">
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex align-items-center wow fadeInUp">
                                    <div class="w-100 d-flex flex-column text-start mt-5">
                                        <h5 class="d-flex justify-content-around">
                                            <table>
                                                <?php
                                                    $album2 = mysqli_query($conn, "select * from album where nama_album='Take Off'");
                                                    foreach ($album2 as $value){
                                                        echo"
                                                            <tr>
                                                                ".$value['judul_lagu']."<br>
                                                            </tr><br>
                                                        ";
                                                    }
                                                ?>
                                            </table>
                                        </h5>
                                    </div>
                                    <table class="text-end">
                                        <tr>
                                            <td><button onclick="playAudio4()" type="button" class="btn btn-primary me-5 mb-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio5()" type="button" class="btn btn-primary  me-5"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio6()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h5 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-top: 100px">The 1st Digital EP</h5>
                                <h1 class="mb-5">The Vision</h1>
                                <img class="flex-shrink-0 img-fluid rounded" src="img/album1.png" alt="" style="width: 300px;">
                            </div>
                            <div class="col-lg-10">
                                <div class="d-flex align-items-center mb-5 wow fadeInUp">
                                    <div class="w-100 d-flex flex-column text-start mt-5">
                                        <h5 class="d-flex justify-content-around">
                                            <table>
                                                <?php
                                                    $album1 = mysqli_query($conn, "select * from album where nama_album='The Vision'");
                                                    foreach ($album1 as $value){
                                                        echo"
                                                            <tr>
                                                                ".$value['judul_lagu']."<br>
                                                            </tr><br>
                                                        ";
                                                    }
                                                ?>
                                            </table>
                                        </h5>
                                    </div>
                                    <table class="text-end">
                                        <tr>
                                            <td><button onclick="playAudio1()" type="button" class="btn btn-primary me-5 mb-2"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio2()" type="button" class="btn btn-primary me-5"><small>Play</small></button></td>
                                        </tr>
                                        <tr>
                                            <td><button onclick="playAudio3()" type="button" class="btn btn-primary me-5 mt-2"><small>Play</small></button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>  
            </div>
        </div>
        <!-- Album End -->

        <!--footer start-->
        <div class="container-fluid bg-dark text-light footer pt-2 wow fadeIn">
            <div class="container py-2">
                <div class="row g-4">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p style="padding-top: 15px;"> &copy;2022  <a href="">WayVision.com</a> All Right Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end mb-3 mb-md-0" style="padding-top: 5px;">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/WayV_official"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/WayVofficial/"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UC-ZHt5Zgadfx-B1CM63Lqew"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--footer end-->
    </div>
    <audio id="mySong1">
        <source src="https://drive.google.com/uc?export=open&id=1hUnbqqKRM3MFXHKXJsBAOThjZHKV5vhb" type="audio/mp3">
    </audio>
    <audio id="mySong2">
        <source src="https://drive.google.com/uc?export=open&id=1ir4_TnydsAaCK6TU7VKQ_we9NrKsRELq" type="audio/mp3">
    </audio>
    <audio id="mySong3">
        <source src="https://drive.google.com/uc?export=open&id=1UV0ztnYtUqSE88Hhv93-3L7fLv5-H_Yi" type="audio/mp3">
    </audio>
    <audio id="mySong4">
        <source src="https://drive.google.com/uc?export=open&id=1qogKr4rK1YnkwhBopGbJNa_Nq6oCbv8G" type="audio/mp3">
    </audio>
    <audio id="mySong5">
        <source src="https://drive.google.com/uc?export=open&id=17XSfHZy_7kfsXGVsj7h13JRlEsAXm5gt" type="audio/mp3">
    </audio>
    <audio id="mySong6">
        <source src="https://drive.google.com/uc?export=open&id=17f5w0vvwsKIpB8mK3w7lLFhvSZGWaj3f" type="audio/mp3">
    </audio>
    <audio id="mySong7">
        <source src="https://drive.google.com/uc?export=open&id=1Ay-7ESQIRgeUNee3f3CuMPGdd6uQu-xV" type="audio/mp3">
    </audio>
    <audio id="mySong8">
        <source src="https://drive.google.com/uc?export=open&id=1ksZ5kcVjZlngH0Hw3WchqC2iLML1qFP3" type="audio/mp3">
    </audio>
    <audio id="mySong9">
        <source src="https://drive.google.com/uc?export=open&id=1cmBQlUcse5L7NF6_OBziJiktc0K0j8kw" type="audio/mp3">
    </audio>
    <audio id="mySong10">
        <source src="https://drive.google.com/uc?export=open&id=1KsQMOQ13KmCr2xesMwRwPFJu8ijjqv76" type="audio/mp3">
    </audio>
    <audio id="mySong11">
        <source src="https://drive.google.com/uc?export=open&id=1cJCcd-mPUiobwCYfng7xS4MNiyYsDOAH" type="audio/mp3">
    </audio>
    <audio id="mySong12">
        <source src="https://drive.google.com/uc?export=open&id=13-l31SWcJluTgwPRTPlRgsEEPQFnD0Ul" type="audio/mp3">
    </audio>
    <audio id="mySong13">
        <source src="https://drive.google.com/uc?export=open&id=1bGlgcg4qaMOyULlPyX6LBjA6UDoY4sVv" type="audio/mp3">
    </audio>
    <audio id="mySong14">
        <source src="https://drive.google.com/uc?export=open&id=1PYwWJJxIU0gLn2WTghA_4Qz8TfFRQS3c" type="audio/mp3">
    </audio>
    <audio id="mySong15">
        <source src="https://drive.google.com/uc?export=open&id=19zOmMBqOdh0DmcvXC4P5hvqfAaQuWnmX" type="audio/mp3">
    </audio>
    <audio id="mySong16">
        <source src="https://drive.google.com/uc?export=open&id=16dIwm3bnT-xDhWIfUsmoQYL_7jL6Iv1o" type="audio/mp3">
    </audio>
    <audio id="mySong17">
        <source src="https://drive.google.com/uc?export=open&id=1CvzcrqEmJVE61vSi5Uk7uLWJXlfrZMmw" type="audio/mp3">
    </audio>
    <audio id="mySong18">
        <source src="https://drive.google.com/uc?export=open&id=1pwp9pPX3_mzlLF1g7boxHxtPAZbWLeJI" type="audio/mp3">
    </audio>
    <audio id="mySong19">
        <source src="https://drive.google.com/uc?export=open&id=1smLmDLzO497ZTw-hjqWcF5GkIdKh72NW" type="audio/mp3">
    </audio>
    <audio id="mySong20">
        <source src="https://drive.google.com/uc?export=open&id=186URk5CqE1Pn38kX66qfOrOU1UgxCzq6" type="audio/mp3">
    </audio>
    <audio id="mySong21">
        <source src="https://drive.google.com/uc?export=open&id=1wCOY0QiTbDbhuMbISZwEgvpAtBBkgY49" type="audio/mp3">
    </audio>
    <audio id="mySong22">
        <source src="https://drive.google.com/uc?export=open&id=1lvPcWKr9CuEf_BYjWxpl2grbpBAcLO85" type="audio/mp3">
    </audio>
    <audio id="mySong23">
        <source src="https://drive.google.com/uc?export=open&id=1Z1TzWEc0tgcsoGkA3qQTE2bufTVgDMfg" type="audio/mp3">
    </audio>
    <audio id="mySong24">
        <source src="https://drive.google.com/uc?export=open&id=1y670U7cappeLZBRX3WmO_eBp_8NiSwVd" type="audio/mp3">
    </audio>
    <audio id="mySong25">
        <source src="https://drive.google.com/uc?export=open&id=1PV3-KAuPQUGXzxSkp-ZiUuZdkESqgQFh" type="audio/mp3">
    </audio>
    <audio id="mySong26">
        <source src="https://drive.google.com/uc?export=open&id=1BVqrwNIDcUWNXwZQc-Xy8TjB1DknfTkd" type="audio/mp3">
    </audio>
    <audio id="mySong27">
        <source src="https://drive.google.com/uc?export=open&id=1DGKkhrA0J7oUACqvi-8CAjhpxZXCcB-z" type="audio/mp3">
    </audio>
    <!-- Template Javascript -->
    <script>
        var mySong1 = document.getElementById("mySong1");
        function playAudio1() {
            if(mySong1.paused){
                mySong1.play();
            } else {
                mySong1.pause()
            }
        }
        
        var mySong2 = document.getElementById("mySong2");
        function playAudio2() {
            if(mySong2.paused){
                mySong2.play();
            } else {
                mySong2.pause()
            }
        }

        var mySong3 = document.getElementById("mySong3");
        function playAudio3() {
            if(mySong3.paused){
                mySong3.play();
            } else {
                mySong3.pause()
            }
        }
        var mySong4 = document.getElementById("mySong4");
        function playAudio4() {
            if(mySong4.paused){
                mySong4.play();
            } else {
                mySong4.pause()
            }
        }

        var mySong5 = document.getElementById("mySong5");
        function playAudio5() {
            if(mySong5.paused){
                mySong5.play();
            } else {
                mySong5.pause()
            }
        }
        var mySong6 = document.getElementById("mySong6");
        function playAudio6() {
            if(mySong6.paused){
                mySong6.play();
            } else {
                mySong6.pause()
            }
        }
        var mySong7 = document.getElementById("mySong7");
        function playAudio7() {
            if(mySong7.paused){
                mySong7.play();
            } else {
                mySong7.pause()
            }
        }
        var mySong8 = document.getElementById("mySong8");
        function playAudio8() {
            if(mySong8.paused){
                mySong8.play();
            } else {
                mySong8.pause()
            }
        }
        var mySong9 = document.getElementById("mySong9");
        function playAudio9() {
            if(mySong9.paused){
                mySong9.play();
            } else {
                mySong9.pause()
            }
        }
        var mySong10 = document.getElementById("mySong10");
        function playAudio10() {
            if(mySong10.paused){
                mySong10.play();
            } else {
                mySong10.pause()
            }
        }
        var mySong11 = document.getElementById("mySong11");
        function playAudio11() {
            if(mySong11.paused){
                mySong11.play();
            } else {
                mySong11.pause()
            }
        }
        var mySong12 = document.getElementById("mySong12");
        function playAudio12() {
            if(mySong12.paused){
                mySong12.play();
            } else {
                mySong12.pause()
            }
        }
        var mySong13 = document.getElementById("mySong13");
        function playAudio13() {
            if(mySong13.paused){
                mySong13.play();
            } else {
                mySong13.pause()
            }
        }
        var mySong14 = document.getElementById("mySong14");
        function playAudio14() {
            if(mySong14.paused){
                mySong14.play();
            } else {
                mySong14.pause()
            }
        }
        var mySong15 = document.getElementById("mySong15");
        function playAudio15() {
            if(mySong15.paused){
                mySong15.play();
            } else {
                mySong15.pause()
            }
        }
        var mySong16 = document.getElementById("mySong16");
        function playAudio16() {
            if(mySong16.paused){
                mySong16.play();
            } else {
                mySong16.pause()
            }
        }
        var mySong17 = document.getElementById("mySong17");
        function playAudio17() {
            if(mySong17.paused){
                mySong17.play();
            } else {
                mySong17.pause()
            }
        }
        var mySong18 = document.getElementById("mySong18");
        function playAudio18() {
            if(mySong18.paused){
                mySong18.play();
            } else {
                mySong18.pause()
            }
        }
        var mySong19 = document.getElementById("mySong19");
        function playAudio19() {
            if(mySong19.paused){
                mySong19.play();
            } else {
                mySong19.pause()
            }
        }
        var mySong20 = document.getElementById("mySong20");
        function playAudio20() {
            if(mySong20.paused){
                mySong20.play();
            } else {
                mySong20.pause()
            }
        }
        var mySong21 = document.getElementById("mySong21");
        function playAudio21() {
            if(mySong21.paused){
                mySong21.play();
            } else {
                mySong21.pause()
            }
        }
        var mySong22 = document.getElementById("mySong22");
        function playAudio22() {
            if(mySong22.paused){
                mySong22.play();
            } else {
                mySong22.pause()
            }
        }
        var mySong23 = document.getElementById("mySong23");
        function playAudio23() {
            if(mySong23.paused){
                mySong23.play();
            } else {
                mySong23.pause()
            }
        }
        var mySong24 = document.getElementById("mySong24");
        function playAudio24() {
            if(mySong24.paused){
                mySong24.play();
            } else {
                mySong24.pause()
            }
        }
        var mySong25 = document.getElementById("mySong25");
        function playAudio25() {
            if(mySong25.paused){
                mySong25.play();
            } else {
                mySong25.pause()
            }
        }
        var mySong26 = document.getElementById("mySong26");
        function playAudio26() {
            if(mySong26.paused){
                mySong26.play();
            } else {
                mySong26.pause()
            }
        }
        var mySong27 = document.getElementById("mySong27");
        function playAudio27() {
            if(mySong27.paused){
                mySong27.play();
            } else {
                mySong27.pause()
            }
        }
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>