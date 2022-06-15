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

</head>
<!-- body -->

<body class="main-layout contact-page">
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
                                        <li> <a href="sis_module.html">SIS Module</a> </li>
                                        <li> <a href="franchise_module.html">Franchise</a> </li>
                                        <li> <a href="helping_module.html">Helping</a> </li>
                                        <li> <a href="album.php"> Albums</a> </li>
                                        <li class="active"> <a href="contact.php">Contact&nbsp;&nbsp;</a> </li>
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

    <div class="contactbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>contact</h2>
                    </div>
                </div>
            </div>
        </div>
 </div>

 <center>  <?php
 session_start();
      if(isset($_SESSION['error'])){
        echo "
          <div class='text-center' style='color:red;'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
        if(isset($_SESSION['success'])){
        echo "
          <div class='text-center' style='color:green;'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?></center>

    <div class="container">
        <div class="row">
            <div class=" col-md-6 ">
                <b>Immunity Spot LLP,<br>
                Plot No.62, Ward No.25, Veerana Gouda Colony Near Triangle Park, Infantry Road, BALLARI - 583104.
                    <br>
                    <br></b>
                    <div class="address">
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
                                    <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            <div class=" col-md-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15404.152579532907!2d76.914556!3d15.1562497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc87b417c0825232!2sImmunity%20Spot!5e0!3m2!1sen!2sin!4v1648480879642!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
           
        </div>
    </div>
    <!--  footer -->

    <div class="copyright">
        <div class="container">
            <p>© 2021 All Rights Reserved. <a href="">Immunity Spot LLP</a></p>
        </div>
    </div>

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
<?php 
if(isset($_SESSION['lock']))
    unset($_SESSION['lock']);
?>
</html>