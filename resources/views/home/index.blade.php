<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Draggable + Sortable</title>
    <link rel="stylesheet" href="plugins/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="plugins/bootstrap-4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free-5.3.1/css/all.min.css">
    <link rel="stylesheet" href="css/core/template-editor.css">

    <style>
        ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
        li { margin: 5px; padding: 5px; width: 150px; }
        .colorido{ background: #d4e1c0;}
    </style>

    <script src="plugins/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="plugins/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <script src="js/core/base-grid-system.js"></script>
    <script>
        $( function() {
            $( "#sortable" ).sortable({
                revert: true,
                receive: function(event, ui){
                    console.log(event);
                    console.log(ui);
                }
            }).droppable({});

            $( "#draggable" ).draggable({
                connectToSortable: "#sortable",
                helper: "clone",
                revert: "invalid",
                cursorAt: { left: 10}
            });
        } );
    </script>
</head>
<body>
    <div class="container main-template">
        {{--<div class="row">--}}
            {{--<div id="draggable" class="col-lg-4 colorido">Item</div>--}}
        {{--</div>--}}
        <div class="row line" id="sortable">
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
            <div class="col column"></div>
        </div>
    </div>
</body>
</html>
