<?php
 
function getController($controller){
    $controller=ucwords($controller).'Controller';
    $strFileController='controller/'.$controller.'.php';
     
    if(!is_file($strFileController)){
        $strFileController='controller/'.ucwords(APP_DEFAULT_CONTROLLER).'Controller.php';  
    }
    require_once $strFileController;
    $controllerObj = new $controller();
    return $controllerObj;
}
 
function getAction($controllerObj,$action){
    $controllerObj->$action();
}

function launchAction($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        getAction($controllerObj, $_GET["action"]);
    }else{
        getAction($controllerObj, APP_DEFAULT_ACTION);
    }
}
 
?>