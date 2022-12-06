<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WayVision.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!--toggle mobile-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="./img/logo2.jpg">

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
                    <h1 class="display-3 mb-3" style="color: #FEA116;">About Us</h1>
                    <h5 class="display-6 text-white mb-3">Let's meet our member</h5>
                </div>
            </div>
        </div>
        <!-- Navbar & Header End -->

        <!-- About Start -->
        <div class="container-xxl align-items-center p-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">About Us</h5>
                <h1 class="mb-5">WayV</h1>
            </div>
            <div class="abouts justify-content-center wow zoomIn p-5">
                <img class="image-header" src="img/header.jpg" alt="">
                <div class="contents">
                <p class="mt-5" style="text-align:justify;">
                WayV is a boy group from China, which is shaded by Label V, SM Entertainment. 
                WayV is NCT's fourth sub-unit and debuted on January 17, 2019 with the release 
                of the first digital mini album "The Vision". WayV has 7 members named Qian Kun, Ten, Winwin, 
                Lucas, Iao Dejun, Hendery, Yangyang, and nicknames for their fans are named WayZenni. 
                </p>
                <p class="mt-3" style="text-align:justify;">
                The uniqueness of this group is that when speaking they will mix five languages, namely Mandarin, 
                Korean, English, Japanese, and Thai. However, the languages they usually use are only Mandarin as 
                the main language, Korean, and English. In their dorm, they also keep 2 cats named Louis and Leon 
                and a dog named Bella, commonly referred to as "LoLeLa". WayV also did a photoshoot together with 
                their pets and named it "Our Home: WayV with Little Friends" in 2021.
                </p>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!--Member Start-->
        <div class="container-xxl pb-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Member</h5>
                    <h1 class="mb-5">Meet Our Member</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div class="album">
                                <img class="img-fluid" src="img/kun.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Qian Kun</h5>
                            <small>
                                <?php
                                    $member1 = mysqli_query($conn, "select * from member where nama='Qian Kun'");
                                    foreach ($member1 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div class="album">
                                <img class="img-fluid" src="img/ten.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Ten</h5>
                            <small>
                                <?php
                                    $member2 = mysqli_query($conn, "select * from member where nama='Ten'");
                                    foreach ($member2 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div class="album">
                                <img class="img-fluid" src="img/winwin.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Winwin</h5>
                            <small>
                                <?php
                                    $member3 = mysqli_query($conn, "select * from member where nama='Winwin'");
                                    foreach ($member3 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div class="squ">
                                <img class="img-fluid" src="img/lucas.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Lucas</h5>
                            <small>
                                <?php
                                    $member4 = mysqli_query($conn, "select * from member where nama='Lucas'");
                                    foreach ($member4 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div class="album">
                                <img class="img-fluid" src="img/dejun.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Xiao Dejun</h5>
                            <small>
                                <?php
                                    $member5 = mysqli_query($conn, "select * from member where nama='Xiao Dejun'");
                                    foreach ($member5 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div class="album">
                                <img class="img-fluid" src="img/hendery.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Hendery</h5>
                            <small>
                                <?php
                                    $member6 = mysqli_query($conn, "select * from member where nama='Hendery'");
                                    foreach ($member6 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member-item text-center rounded overflow-hidden">
                            <div>
                                <img src="img/yangyang.jpg" alt="">
                            </div>
                            <h5 class="mt-2 mb-2">Liu Yangyang</h5>
                            <small>
                                <?php
                                    $member7 = mysqli_query($conn, "select * from member where nama='Liu Yangyang'");
                                    foreach ($member7 as $value){
                                        echo"
                                            <tr>
                                                <td>".$value['tempat_lahir'].", ".$value['tanggal_lahir']."<br></td>
                                                <td>".$value['posisi']."<br></td>
                                            </tr><br><br>
                                        ";
                                    }
                                ?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Member End-->

        <!-- Galeri Start-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Photoshoot</h5>
                        <h1 class="mb-5">Gallery WayV's</h1>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded w-100 wow zoomIn mb-4" data-wow-delay="0.1s" src="img/galeri1.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded w-100 wow zoomIn mb-4" data-wow-delay="0.1s" src="img/galeri2.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded w-100 wow zoomIn mb-4" data-wow-delay="0.1s" src="img/galeri5.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded w-100 wow zoomIn mb-4" data-wow-delay="0.1s" src="img/galeri3.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded w-100 wow zoomIn mb-4" data-wow-delay="0.1s" src="img/galeri4.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid rounded w-100 wow zoomIn mb-4" data-wow-delay="0.1s" src="img/galeri6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--Galery End-->

        <!--footer-->
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>