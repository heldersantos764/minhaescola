<?php

namespace Core;

use Dotenv\Dotenv;

class App
{
    public static function run(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/..");
        $dotenv->load();

        if ($_ENV['APP_ENVIRONMENT'] === "production") {
            if ($_SERVER["SERVER_PORT"] != '443') {
                header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
            }
        }

        self::requiredsFiles();
    }

    private static function requiredsFiles(){
        require_once __DIR__."/Helpers/Url.php";
        require_once __DIR__."/../app/Config/Routes.php";
    }
}
