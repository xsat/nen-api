<?php

use App\v1_0\Controllers\AuthController;
use App\v1_0\Controllers\PublicAuthController;
use App\v1_0\Controllers\PublicUserController;
use App\v1_0\Controllers\UserController;
use App\v1_0\Controllers\UserPasswordController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Route;
use Nen\Router\Routes;

return new Routes([
    new Group('api/1.0', new Routes([
        new Group('auth', new Routes([
            new Route(PublicAuthController::class, 'login', null, Request::METHOD_POST),
            new Route(AuthController::class, 'logout', null, Request::METHOD_DELETE),
        ])),
        new Group('user', new Routes([
            new Route(UserController::class, 'view', null, Request::METHOD_GET),
            new Route(PublicUserController::class, 'create', null, Request::METHOD_POST),
            new Route(UserController::class, 'update', null, Request::METHOD_PUT),
            new Route(UserController::class, 'delete', null, Request::METHOD_DELETE),
            new Group('password', new Routes([
                new Route(UserPasswordController::class, 'update', null, Request::METHOD_PUT),
            ])),
        ])),
    ])),
]);
