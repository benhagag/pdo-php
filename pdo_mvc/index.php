<?php

spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

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

    <link rel="stylesheet" href="assets/index.css">

    <title>PDO MVC</title>
</head>
<body>

<?php require 'header.php';?>
<?php
$posts = new Posts();
$postsResult = $posts->getAllPosts();
?>
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
        <?php
        while ($row = $postsResult->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['body'] ?></td>
            <td><?php echo $row['author'] ?></td>
        </tr>
            <?php } ?>


        </tbody>
    </table>


</div>

</body>
</html>


