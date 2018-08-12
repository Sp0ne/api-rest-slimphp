<?php

namespace App\Controller\User;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Create User Controller.
 */
class CreateUser extends BaseUser
{
    /**
     * Create a user.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function __invoke($request, $response, $args)
    {
        $this->setParams($request, $response, $args);
        $input = $this->getInput();
        $result = $this->getUserService()->createUser($input);

//        $client = new \Predis\Client();
//        $key = 'api-rest-slimphp:user:'.$result->id;
//        $client->set($key, json_encode($result));

        return $this->jsonResponse('success', $result, 201);
    }
}
