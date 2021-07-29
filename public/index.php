<?php

use Core\Http\Request;

ob_start();

require_once "../vendor/autoload.php";

if (APP_ENVIRONMENT === "production") {
    if ($_SERVER["SERVER_PORT"] != '443') {
        header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    }
}

echo "<pre>";
print_r(new Request);
echo "</pre>";

ob_end_flush();
