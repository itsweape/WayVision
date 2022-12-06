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
                    <h1 class="display-3 mb-3" style="color: #FEA116;">Join Our Community </h1>
                    <h5 class="display-6 text-white mb-3">Wayzenni</h5>
                </div>
            </div>
        </div>
        <!-- Navbar & Header End -->

        <!--Join Start-->
        <div class="row mb-5">
                <div class="col-md-6">
                    <div class="photo">
                        <img class="image-form" src="img/wayzen.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Wayzenni</h5>
                        <h1 class="text-white mb-4">Join Community</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                        <label for="fisrtname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                        <label for="lastname">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="eMail" placeholder="e-Mail">
                                        <label for="email">e-Mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                          <option value="1">None</option>
                                          <option value="2">Female</option>
                                          <option value="3">Male</option>
                                        </select>
                                        <label for="select1">Gender</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="form.php"><button onclick="submited()" type="button" class="btn btn-primary w-100 py-3" type="submit">Join Now</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Join End -->

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
    <script>
        function submited(){
            alert("The from has been sent! Thank You! ");
        }
    </script>
</body>

</html>