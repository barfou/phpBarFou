<?php

$app->get('/pokemons/list', 'App\Controller\PokeController::listAction')->bind('pokemons.list');
$app->get('/pokemons/edit/{id}', 'App\Controller\PokeController::editAction')->bind('pokemons.edit');
$app->get('/pokemons/new', 'App\Controller\PokeController::newAction')->bind('pokemons.new');
$app->post('/pokemons/delete/{id}', 'App\Controller\PokeController::deleteAction')->bind('v.delete');
$app->post('/pokemons/save', 'App\Controller\PokeController::saveAction')->bind('pokemons.save');