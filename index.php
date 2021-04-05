<?php
session_start();
require("vendor/autoload.php");
define("INCLUDE_PATH_STATIC",'http://localhost/rede_social/App/Views/pages/');
define("INCLUDE_PATH",'http://localhost/rede_social/');

$app = new App\Application();
$app->run();

?>