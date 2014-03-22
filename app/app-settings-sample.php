<?php

include "{$BASE_PATH}/app/settings/base.php";

use Monolog\Logger;

$APP_SETTINGS = array_merge($BASE_APP_SETTINGS, [
    "mode" => "development",
    "debug" => true,
    "cookies.encrypt" => false,
    "cookies.secure" => "false",
    "cookies.httponly" => "true",
    "twig.debug" => true,
    "twig.cache_path" => "/tmp/fkapp_cache", // avoid using the app root on VMs

    "resty.debug" => false,

    "monolog.level" => Logger::DEBUG,

    "csrf.secret" => "FIX_ME",
    "myiga.api.key" => "FIX_ME",
]);
