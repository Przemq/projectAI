<!doctype html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>Project</title>
    <meta name="Internet Applications Project" content="Internet Applications Project">
    <meta name="author" content="Przemysław Kudła">

    <link rel="stylesheet" href="css/global-styles.css">
    <link rel="stylesheet" href="js/libs/bootstrap/css/bootstrap.min.css">
    <script src="js/scripts/jquery-3.2.1.min.js" ></script>
    <script src="js/ajax/getData.js"></script>
    <script src="js/scripts/global-scripts.js" ></script>
    <?php
   // include_once 'database/DBConnector.php';
    //$test = new DBConnector();
    //$test->getRecordsByID("testowa_tabela", 1);
    ?>
</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h2>Projekt- Aplikacje internetowe</h2></div>
            <div class="col-lg-12">
                <button class="btn btn-success" id="get-data">Get all users</button>
            </div>
            <div class="col-lg-12" id="ajax-container">

            </div>
        </div>
    </div>
</div>

</body>
</html>