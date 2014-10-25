<?php

function autoload($className)
{
    $className = ltrim($className, "\\");
    $fileName = "";
    if ($lastNamespace = strripos($className, "\\")) {
        $namespace = substr($className, 0, $lastNamespace);
        $className = substr($className, $lastNamespace + 1);
        $fileName = str_replace("\\", DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace("_", DIRECTORY_SEPARATOR, $className) . ".php";

    require_once $fileName;
}

spl_autoload_register("autoload");
