<?php
require_once("cms-admin/db/dba.php");
db_connect();
if(isset($_GET['page']) && $_GET['page'] != null) {
    $id = $_GET['id'];
    $query_result = query("SELECT * FROM `menus` where menu_id='".$id."' limit 1");
    $sub_row_result = mysql_fetch_array($query_result);
    $sub_page_data = $sub_row_result['content'];
    echo $sub_page_data;
    exit;
}
$result = query("SELECT * FROM `menus` where menu_id='PG-002' limit 1");
$row_result = mysql_fetch_array($result);
$page_data = $row_result['content'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Metro UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, Metro UI, style, modern, css, framework">

    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-drag.js"></script>
    <script type="text/javascript" src="js/modern/dialog.js"></script>
    <script type="text/javascript" src="js/modern/dropdown.js"></script>
    <script type="text/javascript" src="js/jquery.blockUI.js"></script>

    <title>Services -- Creative Solution</title>
</head>
<!--<body style="background-color: #4ea5c4;" class="metrouicss" onload="prettyPrint()">-->
<body class="metrouicss" onload="prettyPrint()">
    <div class="wrapper" style="height: 870px;">
        <div style="height: auto;width: 870px;text-align: center;display: block;margin: 0 auto;">
            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/ADTL.jpg" alt="">
                </div>
            </div>

            <div class="tile image double">
                <div class="tile-content">
                    <img src="image_clients/Air-Asia.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/BFF.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Data-Grid.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Daudkandi-News.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/DU.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/EWU.jpg" alt="">
                </div>
            </div>

            <div class="tile image double">
                <div class="tile-content">
                    <img src="image_clients/G-Tech.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Flying-Kites.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/GAVI.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/GBL.jpg" alt="">
                </div>
            </div>

            <div class="tile image double">
                <div class="tile-content">
                    <img src="image_clients/GCCN.jpg" alt="">
                </div>
            </div>

            <div class="tile image double">
                <div class="tile-content">
                    <img src="image_clients/Green-University.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Holy-Model-School.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Jatra.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/JCI.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Talpata.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/Walker.jpg" alt="">
                </div>
            </div>

            <div class="tile image double">
                <div class="tile-content">
                    <img src="image_clients/Help-Cooperative.jpg" alt="">
                </div>
            </div>

            <div class="tile image">
                <div class="tile-content">
                    <img src="image_clients/US-Bangla-Group.jpg" alt="">
                </div>
            </div>

        </div>
        <div style="margin-top: 10px;">
            <?php include('menu.php'); ?>
        </div>
    </div>
<script src="js/app.js" type="text/javascript"></script>
</body>
</html>
