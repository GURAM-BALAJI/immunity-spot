<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Immunity Spot</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<!-- body -->

<body class="main-layout album-page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">About Us</a> </li>
                                        <li> <a href="franchise_module.html">Franchise</a> </li>
                                        <li> <a href="helping_module.html">Helping</a> </li>
                                        <li class="active"> <a href="album.php"> Albums</a> </li>
                                        <li> <a href="contact.php">Contact</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->

    <div class="Albumsbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Albumstitlepage">
                        <h2>Albums</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Albums -->
    <div class="Albums">
        <div class="container">
            <div class="row">
           <?php
           include 'includes/session.php';
           $conn = $pdo->open();
           $stmt = $conn->prepare("SELECT * FROM galary");
		$stmt->execute();
		foreach ($stmt as $row){ ?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/<?php echo $row['galary_name'];?>" class="fancybox" rel="ligthbox">
                                <img src="images/<?php echo $row['galary_name'];?>" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                                <a href="images/<?php echo $row['galary_name'];?>" class="fancybox" rel="ligthbox"><img
                                        src="images/search.png"></a>
                            </span>
                        </figure>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- end Albums -->


    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                            <li><span class="material-symbols-outlined" style="color:red">
                                    location_on
                                    </span> Immunity Spot LLP,<br> Plot No.62, Ward No.25, Veerana Gouda Colony Near Triangle Park, Infantry Road, BALLARI - 583104.</li>
                                <li> <span class="material-symbols-outlined" style="color:red">
                                    call
                                    </span> Phone :  +91 91082 27222 <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    +91 81971 26222<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 81970 67222</li>
                                <li><span class="material-symbols-outlined" style="color:red">
                                    mail
                                    </span> Email : support@immunityspot.com</li>
                            </ul>

                            <ul class="contant_icon">
                                <li><a href="https://www.facebook.com/immunityspot2022/?ti=as"><img src="icon/fb.png"
                                            alt="icon" /></a></li>

                                <li><a href="https://instagram.com/immunityspot2022?utm_medium=copy_link"><img
                                            src="icon/instagram.png" alt="icon" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form action="send.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="phone">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text"
                                            name="message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <p>© 2023 All Rights Reserved. <a href="">Immunity Spot LLP</a></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function () {

                $(this).addClass('transition');
            }, function () {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>