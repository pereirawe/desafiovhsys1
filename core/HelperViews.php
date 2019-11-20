<?php
class HelperViews{
    public function url($controller=APP_DEFAULT_CONTROLLER,$accion=APP_DEFAULT_ACTION){
        $urlString="index.php?controller=".$controller."&action=".$accion;
        return $urlString;
    }
}
?>