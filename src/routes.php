<?php

$app->get('/pokemons/list', 'App\Controller\IndexController::listAction')->bind('pokemons.list');
$app->get('/pokemons/edit/{id}', 'App\Controller\IndexController::editAction')->bind('pokemons.edit');
$app->get('/pokemons/new', 'App\Controller\IndexController::newAction')->bind('pokemons.new');
$app->post('/pokemons/delete/{id}', 'App\Controller\IndexController::deleteAction')->bind('v.delete');
$app->post('/pokemons/save', 'App\Controller\IndexController::saveAction')->bind('pokemons.save');