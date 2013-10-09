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
    <div class="wrapper">
        <div style="height: 470px;">
            <div style="width: 92%;height: 80px;display: block;text-align: right;background-color: #8FC644;margin: 0px auto 10px;padding: 20px;">
                <div style="">
                    <span style="font-size: 40px;font-weight: bold;color: #fff;text-transform: uppercase;">
                        Our
                    </span>
                    <br />
                    <span style="font-size: 15px;font-weight: bold;color: #fff;text-transform: uppercase;">
                        Services
                    </span>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="tile triple-vertical triple bg-color-white" style="margin-left: 50px;">
                <div class="tile-content" style="cursor: default;">
                    <h1 style="font-weight: bold;font-size: 20px;font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;color: #000;">Services</h1>
                    <div style="font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;font-size: 13px;width: 100%;text-align: justify;margin-top: 15px;">
                        <?php echo $page_data; ?>
                    </div>
                </div>
            </div>
            <style>
                .service-menu {
                    font-size: 24px;
                    color: #000;
                    text-transform: uppercase;
                }
            </style>
            <div class="tile triple-vertical double bg-color-white">
                <div class="tile-content" id="who-we-are" style="cursor: default;">
                    <div style="width: 100%;float: left;padding: 5px;">
                        <div class="service-menu">
                            <a href="javascript:void(0);" id="advertising" style="font-size: 24px;color: #000;text-transform: uppercase;font-weight: bold;text-align: right;border-bottom: 1px;border-bottom-color: #b3b3b3;display: block;border-bottom-style: solid;padding-bottom: 8px;">Advertising</a>
                        </div>
                    </div>
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
