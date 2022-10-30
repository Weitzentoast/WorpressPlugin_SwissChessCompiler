<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnier Plugin</title>
</head>
<?php
    /*
        Name of Projekt
        Must be the exact Name as the Folder
        This Keywords are not allow to use anwhere else in the folder structure!
    */
    ini_set("display_errors", 1);
    define(
        "PROJEKT_NAME",
        "Turnier"
    );
    define(
        "FOLDER_LISTCONV",
        "ListConverter"
    );

    define(
        "S_F_T",
        ".php"
    );

    define(
        "STD_FILE_TYPE",
        ".php"
    );

    

    

    

    function testeOutput($className,)
    {


        if (empty($className)) {
            return "Fehler";
        }
        $basePath = str_replace(PROJEKT_NAME, "", __DIR__);
        $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        $className = "";
        $filePath = $basePath . DIRECTORY_SEPARATOR . $classPath. DIRECTORY_SEPARATOR;

        if (str_contains($className, FOLDER_LISTCONV)) {
            require_once "";
            require_once "";
        }

        if (file_exists($filePath)) {
            require_once $filePath."Config.php";
            require_once $filePath.$className.".php";
        }
    }

    /** (autoload function)
     *
     * tests if param is set and correct.
     * build the file path together and check if file exists.
     * if all is correct it included the file.
     **/
    spl_autoload_register(function ($className = "")
    {

        if (empty($className)) {
            return;
        }
        $basePath = str_replace(PROJEKT_NAME, "", __DIR__);

        $filePath = BASE_PATH . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

        if (file_exists($filePath)) {
            require_once $filePath;
        }
    });
    $test = new \Turnier\Source\DevMode\DebugHandler


?>
<body>
    
</body>
</html>