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
    <link href="css/sky-mega-menu.css" rel="stylesheet">
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
        <div class="tile triple-vertical double bg-color-blue" style="margin-right: 50px;">
            <div class="tile-content">
                <h1 style="font-weight: bold;font-size: 20px;font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;">Services</h1>
                <p style="font-family: 'Open Sans', Verdana, Arial, Helvetica, sans-serif;font-size: 13px;width: 100%;text-align: justify;margin-top: 15px;">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </p>
            </div>
        </div>
            <div class="tile">
                <div class="tile-content">
                    <h5>Advertising</h5>
                    <p>Newspaper</p>
                    <p>Magazine</p>
                    <p>Website</p>
                    <p>TVC/RDC</p>
                    <p>Outdoor</p>
                    <div class="brand">
                        <img class="icon" src="images/Mail128.png">
                    </div>
                </div>
            </div>
            <div class="tile double bg-color-green">
                <div class="tile-content">
                    <img src="images/michael.jpg" class="place-right">
                    <h5>Branding</h5>
                    <p>Corporate</p>
                    <p>Product</p>
                    <p>Campaign</p>
                    <p>Re-branding</p>
                    <div class="brand">
                        <img class="icon" src="images/Camera48.png">
                    </div>
                </div>
            </div>
            <div class="tile double image bg-color-blue">
                <div class="tile-content">
                    <img id="staticDialog" src="images/5.jpg">
                    <div style="z-index: 999;text-align: center;width: 100%;margin-top:380px;position: absolute;background: rgba(1,1,1, .1);height: 800px;"><img src="images/ajax-loader2.gif"></div>
                </div>
            </div>
            <div class="tile bg-color-orange"></div>
        <div class="tile bg-color-teal"></div>
        <div class="tile double bg-color-redLight">
            <div class="tile-content">
                <h2>mattberg@live.com</h2>
                <h5>Re: Wedding Annoucement!</h5>
            </div>
        </div>
        </div>
        <div style="margin-top: 10px;">
            <?php include('menu.php'); ?>
        </div>
    </div>
<script>

    $(document).ready(function(){
        $('#staticDialog').click(function(e) {
            $.ajax({
                url: "http://search-test.jetfuel.co/myipaddress.php",
                beforeSend: function ( xhr ) {
                    $.blockUI({
                        message: "<span style='color: red;font-weight: bold;'>Please Wait ...</span>",
                        css: {
                        border: 'none',
                        padding: '20px',
                        height: '70px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#000000'
                        }
                    });
                }
            }).done(function ( data ) {
                    $.Dialog({
                        'title'      : 'Advertising',
                        'content'    : '<span style="height: auto;width: 500px;display: block;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</span>',
                        'draggable'   : true,
                        'overlay'     : true,
                        'buttons'    : {
                            'Ok'    : {
                                'action': function() {}
                            }
                        }
                    });
                });
        });
        //$(document).ajaxStart($.blockUI);
        $(document).ajaxStop($.unblockUI);
        /*$('#setupDialog').click(function(e) {
            $.Dialog({
                'title'      : 'Step 1 - Dialog',
                'content'    : 'This content is the first step.<br /><br /><b>Steps:</b><ol><li>Customize</li><li>Check</li><li>Install!</li></ol>',
                'draggable'  : true,
                'keepOpened' : true,
                'closeButton': true,
                'buttonsAlign': 'right',
                'buttons'    : {
                    'Next'    : {
                        'action': function() {}
                    }
                }
            });
        });*/
    });

</script>
</body>
</html>
