<?php
if(isset($_GET['search']))
{
    ?>

    <html>
    <head>
        <title>Blood Bank informtion System(BBIS)</title>


        <!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <link href="css/bootstrap3.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Donate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
        <!--google fonts-->

    </head>
    <body>
    <?php include('Admin/function.php'); ?>
    <div class="banner1">
        <div class="header1">
            <div class="container">
                <div class="header-main">
                    <div class="logo">
                        <h1><a href="index.php">BBIS</a></h1>
                        <h4>(Blood Bank Info. System)</h4>
                    </div>
                    <div class="header-icons">
                        <ul>
                            <li><a href="#" class="fb"> </a></li>
                            <li><a href="#" class="twit"> </a></li>
                            <li><a href="#" class="gmail"> </a></li>
                            <li><a href="#" class="dri"> </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="top-nav-main">
            <div class="top-nav">
                <span class="menu"> <img src="images/icon.png" alt=""></span>
                <?php require('header.php'); ?>
            </div>
        </div>
    </div>
    <div class="h_bg">
        <div class="wrap">
            <div class="header">
                <div class="logo">

                    </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php

    for ($a = 1; $a <= 2; $a++) {
        echo '<br>';
    }


    ?>


    <div style=" height:auto">
        <form method="post" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" width="1000px" style="margin:auto">
                <tr>
                    <td>
                        <div class="container well" style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" width="800px" height="450px"
                                   style="margin:auto; border-color: blue">
                                <tr>
                                    <td align="center"><img src="Images/results.png" height="60px"
                                                            style="padding-top:20px"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <?php
                                $cn = makeconnection();
                                $s = "select * from donarregistration,bloodgroup where donarregistration.b_id='" . $_REQUEST["bg"] . "' and donarregistration.b_id=bloodgroup.bg_id";
                                $result = mysqli_query($cn, $s);
                                $r = mysqli_num_rows($result);
                                $n = 0;
                                $em = "";
                                while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="panel-body">
                                                <table cellpadding="0" cellspacing="0" width="800px" height="150px"
                                                       style="margin:auto; border:none; border:0px solid blue;"
                                                       class="tableborder">

                                                    <tr>
                                                        <td width="200px" align="center" style="vertical-align:middle">
                                                            <a href="doner_pic<?php echo $data[8] ?>"
                                                               data-lightbox="image-1"> <img
                                                                        src="donor_pic/<?php echo $data[8] ?>"
                                                                        height="100px" width="100px"
                                                                        style="margin:auto; padding-left:70px; padding-right:50px; float:left"/></a>
                                                        </td>

                                                        <td width="500px" height="50px" style="vertical-align:top">


                                                            <table cellpadding="0" width="500px" height="150px"
                                                                   style="border:none">
                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                    </td>
                                                                    <td><?php echo $data[1]; ?></td>
                                                                    <td align="left" width="50%"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><span class="title">Address</span></td>
                                                                    <td><?php echo $data[9]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Gender</span></td>
                                                                    <td><?php echo $data[2]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:24px"><span class="title">Mobile No:</span>
                                                                    </td>
                                                                    <td><?php echo $data[4]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Email</span></td>
                                                                    <td><?php echo $data[6]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Blood Group</span></td>
                                                                    <td><?php echo $data[11]; ?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>


                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                    ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div>

        <div class="footer">
            <div class="container">
                <div>
                    <div class="col-md-4 ftr-grid">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="donar.php">Info Of Donor</a></li>
                            <li><a href="Admin/index.php">Admin LogIn</a></li>
                            <li><a href="login.php">Donor Login</a></li>

                        </ul>
                    </div>

                    <div class="col-md-7 ">

                    </div>


                    <div class="col-md-5 ftr-grid">
                        <h3>Keep In Touch</h3>
                        <div>
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-map-marker">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>Kaziranga University, Koraikhuwa, JORHAT-785006, ASSAM</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ftr-icons">
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-earphone">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>+91 1800-265-2020</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ftr-icons">
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-envelope">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>BBIS.ku17@gmail.com</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--footer end here-->
        <!--copy rights start here-->
        <div class="copy-right">
            <div class="container">
                <div class="copy-rights-main">
                    <p>© 2017 Donate. All Rights Reserved | Design by Aichwajya, Nawab, Nishanta </p>
                </div>
            </div>
        </div>
    </body>
    </html>







    <?php

}
else {


    ?>
    <html>
    <head>
        <title>blood bank info. system</title>


        <!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <link href="css/bootstrap3.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Donate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
        <!--google fonts-->

    </head>
    <body>
    <?php include('Admin/function.php'); ?>
    <div class="banner1">
        <div class="header1">
            <div class="container">
                <div class="header-main">
                    <div class="logo">
                        <h1><a href="index.php">BBIS</a></h1>
                        <h4>(Blood Bank Info. System)</h4>
                    </div>
                    <div class="header-icons">
                        <ul>
                            <li><a href="#" class="fb"> </a></li>
                            <li><a href="#" class="twit"> </a></li>
                            <li><a href="#" class="gmail"> </a></li>
                            <li><a href="#" class="dri"> </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="top-nav-main">
            <div class="top-nav">
                <span class="menu"> <img src="images/icon.png" alt=""></span>
                <?php require('header.php'); ?>
            </div>
        </div>
    </div>
    <div class="h_bg">
        <div class="wrap">
            <div class="header">
                <div class="logo">

                    </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php

    for ($a = 1; $a <= 2; $a++) {
        echo '<br>';
    }


    ?>


    <div style=" height:auto">
        <form method="post" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" width="1000px" style="margin:auto">
                <tr>
                    <td>
                        <div class="container well" style="margin-top: 50px">
                            <table cellpadding="0" cellspacing="0" width="800px" height="450px"
                                   style="margin:auto; border-color: blue">
                                <tr>
                                    <td align="center"><img src="Images/results.png" height="60px"
                                                            style="padding-top:20px"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                                <?php
                                $cn = makeconnection();
                                $s = "select * from donarregistration,bloodgroup where donarregistration.b_id='" . $_REQUEST["bg"] . "' and donarregistration.b_id=bloodgroup.bg_id";
                                $result = mysqli_query($cn, $s);
                                $r = mysqli_num_rows($result);
                                $n = 0;
                                $em = "";
                                while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="panel-body">
                                                <table cellpadding="0" cellspacing="0" width="800px" height="150px"
                                                       style="margin:auto; border:none; border:0px solid blue;"
                                                       class="tableborder">

                                                    <tr>
                                                        <td width="200px" align="center" style="vertical-align:middle">
                                                            <a href="doner_pic<?php echo $data[8] ?>"
                                                               data-lightbox="image-1"> <img
                                                                        src="donor_pic/<?php echo $data[8] ?>"
                                                                        height="100px" width="100px"
                                                                        style="margin:auto; padding-left:70px; padding-right:50px; float:left"/></a>
                                                        </td>

                                                        <td width="500px" height="50px" style="vertical-align:top">


                                                            <table cellpadding="0" width="500px" height="150px"
                                                                   style="border:none">
                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                    </td>
                                                                    <td><?php echo $data[1]; ?></td>
                                                                    <td align="left" width="50%"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><span class="title">Address</span></td>
                                                                    <td><?php echo $data[9]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Gender</span></td>
                                                                    <td><?php echo $data[2]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:24px"><span class="title">Mobile No:</span>
                                                                    </td>
                                                                    <td><?php echo $data[4]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Email</span></td>
                                                                    <td><?php echo $data[6]; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="title">Blood Group</span></td>
                                                                    <td><?php echo $data[11]; ?></td>
                                                                </tr>
                                                                <?php
                                                                $em = $data[11];
                                                                if (isset($_GET['temp'])) {
                                                                    ini_set('max_execution_time', 300);
                                                                    $header = "From:bbis.ku17@gmail.com";
                                                                    mail($data[6], "Urgent Request For Blood", "Hello $data[1], There is a patient " . $_GET['name'] . ", who has an urgent need for blood group " . $data[11] . ". You can contact " . $_GET['name'] . " by calling at " . $_GET['phone'] . " or mailing at " . $_GET['email'] . ". Thank You. Team BBIS.", $header);
                                                                }
                                                                ?>

                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>


                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                                $query = "SELECT * FROM `org_reg`";
                                $result1 = mysqli_query($cn, $query);
                                while ($r1 = mysqli_fetch_array($result1)) {

                                    $header = "From:bbis.ku17@gmail.com";
                                    mail($r1['email'], "Urgent Request For Blood", "Hello " . $r1['inc_name'] . ", There is a patient " . $_GET['name'] . ", who has an urgent need for blood group " . $em . ". You can contact " . $_GET['name'] . " by calling at " . $_GET['phone'] . " or mailing at " . $_GET['email'] . ". If your team of " . $r1['name'] . " can help him/her it will be very kind of you. Thank You. Team BBIS.", $header);
                                }
                                ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div>

        <div class="footer">
            <div class="container">
                <div>
                    <div class="col-md-4 ftr-grid">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="donar.php">Info Of Donor</a></li>
                            <li><a href="Admin/index.php">Admin LogIn</a></li>
                            <li><a href="login.php">Donor Login</a></li>

                        </ul>
                    </div>

                    <div class="col-md-7 ">

                    </div>


                    <div class="col-md-5 ftr-grid">
                        <h3>Keep In Touch</h3>
                        <div>
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-map-marker">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>Kaziranga University, Koraikhuwa, JORHAT-785006, ASSAM</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ftr-icons">
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-earphone">  </span>
                            </div>
                            <div class="ftr-text">
                                <p>+91 1800-265-2020</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ftr-icons">
                            <div class="ftr-iblock">
                                <span class="glyphicon glyphicon-envelope">  </span>
                            </div>
                            <div class="ftr-text">
                                <p><a href="BBIS@gmail.com91 1800-265-2020">BBIS@gmail.com</a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--footer end here-->
        <!--copy rights start here-->
        <div class="copy-right">
            <div class="container">
                <div class="copy-rights-main">
                    <p>© 2017 Donate. All Rights Reserved | Design by Aichwajya, Nawab, Nishanta </p>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}
    ?>