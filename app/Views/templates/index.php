<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title><?= $judul; ?></title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/public/css/owl-carousel.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/public/css/tooplate-artxibition.css">
    <!--

Tooplate 2125 ArtXibition

https://www.tooplate.com/view/2125-artxibition

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Pre HEader ***** -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <span>Shalom!! Acara kita tinggal <span id="day_to_go"><?= $day_to_go; ?></span> hari lagi</span>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="text-button">
                        <a href="rent-venue.html">Contact Us Now! <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Topbar -->
                    <?= $this->include('templates/topbar'); ?>
                    <!-- End of Topbar -->
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- Begin Page Content -->
    <?= $this->renderSection('page-content'); ?>
    <!-- /.container-fluid -->

    <!-- *** Footer *** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address">
                        <h4>Sunny Hill Festival Address</h4>
                        <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Outreach</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hours">
                        <h4>Open Hours</h4>
                        <ul>
                            <li>Mon to Fri: 10:00 AM to 8:00 PM</li>
                            <li>Sat - Sun: 11:00 AM to 4:00 PM</li>
                            <li>Holidays: Closed</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <p>São Conrado, Rio de Janeiro</p>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <p class="copyright">Copyright 2021 ArtXibition Company

                                    <br>Design: <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo"><span>KKR Youth <em>Bandung Barat</em></span></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu">
                                    <ul>
                                        <li><a href="index.html" class="active">Home</a></li>
                                        <li><a href="<?= base_url(); ?>home/about">About Us</a></li>
                                        <li><a href="<?= base_url(); ?>home/rent">Rent Venue</a></li>
                                        <li><a href="<?= base_url(); ?>home/shows">Shows & Events</a></li>
                                        <li><a href="<?= base_url(); ?>home/tickets">Tickets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/public/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/public/js/popper.js"></script>
    <script src="<?= base_url(); ?>/public/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?= base_url(); ?>/public/js/scrollreveal.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/imgfix.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/mixitup.js"></script>
    <script src="<?= base_url(); ?>/public/js/accordions.js"></script>
    <script src="<?= base_url(); ?>/public/js/owl-carousel.js"></script>

    <!-- Global Init -->
    <script src="<?= base_url(); ?>/public/js/custom.js"></script>

</body>

</html>