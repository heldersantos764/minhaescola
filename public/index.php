<?php

ob_start();

require_once "../vendor/autoload.php";

Core\App::run();

ob_end_flush();
