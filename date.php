<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="js/date2.js"></script>
    <script src="js/Date1.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({ minDate: +1, maxDate: "+1M" });
        } );
    </script>
    <style>
        .change
        {
            font:Georgia, "Times New Roman", Times, serif;
            color:#000;
        }
    </style>
</head>

<body>
<form>
    <input type="text" name="date" id="datepicker">
</form>
</body>
</html>