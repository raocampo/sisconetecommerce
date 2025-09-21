<?php

/* DEPURAR ERRORES */

ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:/laragon/www/ecommerce/web/php_error_log");

/**require */
require_once "controllers/template.controller.php";
require_once "controllers/curl.controller.php";



/*Plantilla */

$index = new TemplateController();
$index->index();

