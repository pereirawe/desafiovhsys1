<?php
class MainController{
 
    public function __construct() {
        require_once 'Main.php';
        require_once 'MainModel.php';
         
        //Include Methods
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
     
    public function view($view,$data){
        foreach ($data as $id_assoc => $value) {
            ${$id_assoc}=$value;
        }
         
        require_once 'core/HelperViews.php';
        $helper=new HelperViews();
     
        require_once 'views/'.$view.'View.php';
    }
     
    public function redirect($controlador=APP_DEFAULT_CONTROLLER,$action=APP_DEFAULT_ACTION){
        header("Location:index.php?controller=".$controlador."&action=".$action);
    }
    
}
?>