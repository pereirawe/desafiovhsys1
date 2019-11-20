<?php
    include_once('./config/config.php');
    include_once('./core/MainController.php');
    include_once('./core/Controller.func.php');
?>
<!DOCTYPE html>
<html lang="po">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio VHSYS 1</title>
    <link rel="stylesheet" href="includes/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/fontawesome-free-5.11.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container mb-4 mt-4 pb-4">
        <div class="row">
            <div class="col-12">
                <h1>VHSYS Desafio 1</h1>
            </div>
        </div>
        <div class="row">

<?php
    if(isset($_GET["controller"])){
        $controllerObj=getController($_GET["controller"]);
        launchAction($controllerObj);
    }else{
        $controllerObj=getController(APP_DEFAULT_CONTROLLER);
        launchAction($controllerObj);
    }        

    // print_r($controllerObj);
?>

        </div>
    </div>
    <script src="includes/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="includes/fontawesome-free-5.11.2-web/js/fontawesome.min.js"></script>
</body>
</html>