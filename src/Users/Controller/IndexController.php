<?php

namespace App\Users\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    public function listAction(Request $request, Application $app)
    {
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
        $app['repository.user']->delete($parameters['id']);

        return $app->redirect($app['url_generator']->generate('users.list'));
    }

    public function editAction(Request $request, Application $app)
    {
        $parameters = $request->attributes->all();
        $user = $app['repository.user']->getById($parameters['id']);

        return $app['twig']->render('users.form.html.twig', array('user' => $user));
    }

    public function saveAction(Request $request, Application $app)
    {
        $parameters = $request->request->all();
        if (isset($parameters['id'])) {
            $user = $app['repository.user']->update($parameters);
        } else {
            $user = $app['repository.user']->insert($parameters);
        }

        return $app->redirect($app['url_generator']->generate('users.list'));
    }

    public function newAction(Request $request, Application $app)
    {
        return $app['twig']->render('users.form.html.twig');
    }*/
}
