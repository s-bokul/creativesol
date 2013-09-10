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

    $('#advertising').click(function(e) {
        $.ajax({
            type: "GET",
            url: "/services",
            data: { id: "PG-006", page: "advertising" },
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
                    'content'    : '<span style="height: auto;width: 500px;display: block;text-align: justify;">'+ data +'</span>',
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