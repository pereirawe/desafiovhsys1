<?php 
    define('APP_VERSION','1.0.0');
    define("APP_DEFAULT_ACTION", "index");
    define("APP_DEFAULT_CONTROLLER", "games");
    //define("APP_DEFAULT_ACTION", "index");
    //define("APP_DEFAULT_CONTROLLER", "index");
    define("APP_DOMAIN", "desafiovhsys1");
    
    // include_once("data/data.php"); // TEST INFO

    if( $_SERVER['HTTP_HOST']  == APP_DOMAIN.".test" || $_SERVER['HTTP_HOST']  == "localhost" ){ //Laragon VH Name        include_once("env/env_local.php");
        include_once("env/env_local.php");
    } else if( $_SERVER['HTTP_HOST']  == APP_DOMAIN.".com"){ // QA & PRODUCTION ENVIROMENT
        include_once("env/env_qa.php");
    }