<?php

$app->get('/users/list', 'App\Users\Controller\IndexController::listAction')->bind('users.list');
$app->get('/users/edit/{id}', 'App\Users\Controller\IndexController::editAction')->bind('users.edit');
$app->get('/users/new', 'App\Users\Controller\IndexController::newAction')->bind('users.new');
$app->post('/users/delete/{id}', 'App\Users\Controller\IndexController::deleteAction')->bind('users.delete');
$app->post('/users/save', 'App\Users\Controller\IndexController::saveAction')->bind('users.save');

$app->get('/device/list', 'App\Devices\Controller\IndexController::listAction')->bind('device.list');
$app->get('/device/edit/{id}', 'App\Devices\Controller\IndexController::editAction')->bind('device.edit');
$app->get('/device/new', 'App\Devices\Controller\IndexController::newAction')->bind('device.new');
$app->post('/device/delete/{id}', 'App\Devices\Controller\IndexController::deleteAction')->bind('device.delete');
$app->post('/device/save', 'App\Devices\Controller\IndexController::saveAction')->bind('device.save');
