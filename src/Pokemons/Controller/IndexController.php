<?php

namespace App\Pokemons\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    public function listAction(Request $request, Application $app)
    {
        //$devices = $app['repository.device']->getAll();
        //return $app['twig']->render('device.list.html.twig', array('device' => $devices));
        
        $req = new HttpRequest("https://pokeapi.co/api/v2/pokedex/1", HttpRequest::METH_GET);
        $res = $req->send();

        if ($res->getResponseCode() == 200) {
            return $res->getResponseBody();
        } else {
            return $res;
        }
    }

    /*public function deleteAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $app['repository.device']->delete($parameters['id']);

        return $app->redirect($app['url_generator']->generate('device.list'));
    }

    public function editAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $device = $app['repository.device']->getById($parameters['id']);

        return $app['twig']->render('device.form.html.twig', array('device' => $device));
    }

    public function saveAction(Request $request, Application $app)
    {
        $parameters = $request->request->all();
        if (isset($parameters['id'])) {
            $device = $app['repository.device']->update($parameters);
        } else {
            $device = $app['repository.device']->insert($parameters);
        }

        return $app->redirect($app['url_generator']->generate('device.list'));
    }

    public function newAction(Request $request, Application $app)
    {
        $users = $app['repository.user']->getAll();

        return $app['twig']->render('device.form.html.twig', array('users' => $users));
    }*/
}
