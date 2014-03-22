<?php

use Monolog\Logger;

// $BASE_PATH is set in htdocs/index.php

$BASE_APP_SETTINGS = [
    "mode" => "base",
    'view' => new \Slim\Views\Twig(),
    "debug" => false,
    "templates.path" => "{$BASE_PATH}/templates",
    "cookies.encrypt" => true,
    "cookies.lifetime" => "2 years",
    "cookies.path" => "/",
    "cookies.secure" => true,
    "cookies.httponly" => true,
    "cookies.secret_key" => "q34of9u03gvnwo4hrvg2509bu24ijrbwkgpwoigpsoif",
    "cookies.cipher" => MCRYPT_RIJNDAEL_256,
    "cookies.cipher_mode" => MCRYPT_MODE_CBC,
    "cookies.name" => "app_session",
    "http.version" => "1.1",

    "twig.debug" => true,
    "twig.cache_path" => "/tmp/fkapp_cache",

    "resty.debug" => false,

    "monolog.level" => Logger::ERROR,

    "csrf.secret" => "FIX ME",

    "myiga.api.base" => "https://api.iga.in.gov/",
    "myiga.api.key" => "FIX_ME",


];
