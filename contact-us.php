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
if(isset($_POST['send-mail'])) {
    if($_POST['send-mail'] == 'Send') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to  = 'shakil.bokul@gmail.com';

// subject
        $subject = 'Mail From Contact Us Section';

// message
        $message = '
        <p>Name : '.$name.'<br />
        Email : '.$email.'<br />
        Phone : '.$phone.'<br />
        Subject : '.$subject.'<br />
        Message : '.$message.'<br />
        ';

// To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
        $headers .= 'To: Bokul <shakil.bokul@gmail.com>' . "\r\n";
        $headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";

// Mail it
        mail($to, $subject, $message, $headers);
    }
}

$result = query("SELECT * FROM `menus` where menu_id='PG-005' limit 1");
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

    <title>Contact Us -- Creative Solution</title>
</head>
<!--<body style="background-color: #4ea5c4;" class="metrouicss" onload="prettyPrint()">-->
<body class="metrouicss" onload="prettyPrint()">
    <div class="wrapper">
        <div style="height: 470px;">
            <div style="width: 100%;height: 80px;display: block;text-align: right;background:url('images/services.png') repeat;background-color: #8FC644;margin: 0px auto 10px;padding-right: 20px;">
                <div style="padding-top: 25px;font-size: 28px;font-weight: bold;color: #fff">
                    Contact Us
                    <!--<img src="images/Our-Services.png">-->
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="tile triple-vertical triple bg-color-white" style="margin-left: 50px;">
                <div class="tile-content" style="cursor: default;">
                    <!--<h1 style="font-weight: bold;font-size: 20px;font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;color: #000;">Contact Us</h1>-->
                    <div style="font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;font-size: 13px;width: 100%;text-align: justify;margin-top: 0px;">
                        <p><span style="color: #000000;"><span style="color: #000000;"><strong style="color: #000000;">LETS WORK TOGETHER</strong></span><br>We are happy to answer any question. Please feel free to write us. Fill up the form below with your query.</span></p>

                    </div>
                    <div style="color: #000;">
                        <form method="post" action="">
                            <fieldset>
                                <legend style="color: #000;">Contact Form</legend>
                                <label style="color: #000;">Name</label>
                                <div class="input-control text" data-role="input-control">
                                    <input style="color: #000;" type="text" name="name">
                                </div>
                                <label style="color: #000;">Email</label>
                                <div class="input-control text" data-role="input-control">
                                    <input style="color: #000;" type="text" name="email">
                                </div>
                                <label style="color: #000;">Phone</label>
                                <div class="input-control text" data-role="input-control">
                                    <input style="color: #000;" type="text" name="phone">
                                </div>
                                <label style="color: #000;">Subject</label>
                                <div class="input-control text" data-role="input-control">
                                    <input style="color: #000;" type="text" name="subject">
                                </div>
                                <label style="color: #000;">Message</label>
                                <div class="input-control text" data-role="input-control">
                                    <textarea name="message" rows="2" style="color: #000;min-height: 50px !important;"></textarea>
                                </div>
                                <input type="submit" name="send-mail" value="Send">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <style>
                .service-menu {
                    font-size: 24px;
                    color: #000;
                    text-transform: uppercase;
                }

                .right-menu-style {
                    font-size: 30px;
                    color: #000;
                    text-transform: uppercase;
                    font-weight: bold;
                    text-align: right;
                    border-bottom: 1px;
                    border-bottom-color: #b3b3b3;
                    display: block;
                    border-bottom-style: solid;
                    padding-bottom: 10px;
                }
            </style>
            <div class="tile triple-vertical double bg-color-white">
                <div class="tile-content" id="who-we-are" style="cursor: default;">
                    <?php echo $page_data; ?>
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
