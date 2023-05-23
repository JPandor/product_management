<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className){
    $path = "../app/";
    $endPath = ".php";

    if (file_exists($path . "controllers/" . $className . $endPath)){
        require $path . "controllers/" . $className . $endPath;
    }
    elseif (file_exists($path . "core/" . $className . $endPath)){
        require $path . "core/" . $className . $endPath;
    }
    elseif (file_exists($path . "models/" . $className . $endPath)){
        require $path . "models/" . $className . $endPath;
    }
    elseif (file_exists($path . "views/" . $className . $endPath)){
        require $path . "views/" . $className . $endPath;
    }
}