<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class MyCallableClass
{
    function __invoke(RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        $response->getBody()->write('hello from a class method');
        return $response;
    }
}
