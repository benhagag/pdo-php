<?php

spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});

$all=new Connection();
?>
<!DOCTYPE html>
<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>PDO MVC</title>
</head>
<body>


<div class="container">
    <h1> posts </h1>
    <table class="table" width="100%">
        <thead>
        <tr>
            <th>title</th>
            <th>body</th>
            <th>author</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>


</div>

</body>
</html>


