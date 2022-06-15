<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>

<?php if ($admin['style_view']) { ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include '../includes/navbar.php'; ?>
            <?php include '../includes/menubar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Style
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Style</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
                        unset($_SESSION['success']);
                    }
                    ?>
                    <div class="panel panel-default" style="overflow-x:auto;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                                        <form action="style_edit.php" method="post" enctype="multipart/form-data">
                                            <h2>Index page color:</h2>
                                            <input type="color" name="ipagecolor" class="form-control">
                                            <h2>Index background color:</h2>
                                            <input type="color" name="ibgcolor" class="form-control">
                                            <h2>History background color:</h2>
                                            <input type="color" name="abgcolor" class="form-control">
                                            <h2>Profile background color:</h2>
                                            <input type="color" name="pbgcolor" class="form-control">
                                            <h2>Settings background color:</h2>
                                            <input type="color" name="sbgcolor" class="form-control">
                                            <h2>Index text color:</h2>
                                            <input type="color" name="ifontcolor" class="form-control">
                                            <h2>Index Font size :</h2>
                                            <input type="number" name="ipagefontsize" class="form-control">
                                            <h2>Index Win background color:</h2>
                                            <input type="color" name="iwinpagecolor" class="form-control">
                                            <h2>Index paymrnt color:</h2>
                                            <input type="color" name="ipaymentcolor" class="form-control">
                                            <h2>Index text style:</h2>
                                            <select name="ifontstyle" class="form-control">
                                                <option value="">Select style</option>
                                                <option value="Arial, Helvetica, sans-serif">Arial, Helvetica, sans-serif</option>
                                                <option value="Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Cambria, Cochin, Georgia, Times, 'Times New Roman', serif</option>
                                                <option value="cursive">cursive</option>
                                                <option value="fantasy">fantasy</option>
                                                <option value="'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif</option>
                                                <option value="Georgia, 'Times New Roman', Times, serif">Georgia, 'Times New Roman', Times, serif</option>
                                                <option value="'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif</option>
                                                <option value="Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif</option>
                                                <option value="'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif</option>
                                                <option value="monospace">monospace</option>
                                                <option value="sans-serif">sans-serif</option>
                                                <option value="'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">'Segoe UI', Tahoma, Geneva, Verdana, sans-serif</option>
                                                <option value="serif">serif</option>
                                                <option value="'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif</option>
                                                <option value="Verdana, Geneva, Tahoma, sans-serif">Verdana, Geneva, Tahoma, sans-serif</option>
                                            </select>
                                            <br>
                                            <input type="submit" name="save" value="Save" class='btn btn-success btn-sm edit btn-flat'>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
        <?php include '../includes/scripts.php'; ?>
        <!-- ./wrapper -->
    </body>
<?php } ?>

</html>