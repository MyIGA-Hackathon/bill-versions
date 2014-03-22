<?php

$app->get('/', function () use ($app) {
    $app->render("pages/index.html");
});
