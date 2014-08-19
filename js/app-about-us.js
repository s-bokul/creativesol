$(document).ready(function(){
    $('#about-company').click(function(e) {
        $.ajax({
            type: "GET",
            url: "/services",
            data: { id: "PG-006", page: "about-company" },
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
                    'title'      : 'About Company',
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

    $('#what-we-do').click(function(e) {
        $.ajax({
            type: "GET",
            url: "/services",
            data: { id: "PG-006", page: "what-we-do" },
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
                    'title'      : 'What we do',
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

    $('#how-we-do').click(function(e) {
        $.ajax({
            type: "GET",
            url: "/services",
            data: { id: "PG-007", page: "how-we-do" },
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
                    'title'      : 'How we do',
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

    $('#who-we-are').click(function(e) {
        $.ajax({
            type: "GET",
            url: "/services",
            data: { id: "PG-008", page: "who-we-are" },
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
                    'title'      : 'Our Working Process',
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
});