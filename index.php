<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Project</title>
    <meta name="Internet Applications Project" content="Internet Applications Project">
    <meta name="author" content="Przemysław Kudła">

    <link rel="stylesheet" href="css/global-styles.css">
    <link rel="stylesheet" href="js/libs/bootstrap/css/bootstrap.min.css">

<?php
include_once 'database/DBConnector.php';
$test = new DBConnector();
$test->getTable("testowa_tabela")
?>
</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias deleniti est
                qui.
            </div>
        </div>
    </div>
</div>
<script src="js/scripts/jquery-3.2.1.min.js"></script>
<script src="js/scripts/global-scripts.js"></script>
</body>
</html>