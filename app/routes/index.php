<?php
use \BVApp\Lib\ApiClient;

$app->get('/', function () use ($app) {
    $api = new ApiClient($app);
    $rs = $api->get('2014/bills/sb0001');
    $app->setJsonBody($rs['body']);
});


$app->get('/bills/:code', function ($code) use ($app) {
    $api = new ApiClient($app);
    $rs = $api->get('2014/bills/' . $code);
    $app->setJsonBody($rs['body']);
});
