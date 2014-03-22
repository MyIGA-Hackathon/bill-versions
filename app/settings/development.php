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

    "csrf.secret" => "938hfpq3ojg0jg[pwea[r0g9uq09[guq094u",
]);
