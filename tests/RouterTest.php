<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Router\Router;

class RouterTest extends TestCase
{
    public function testRegisterAddsRoute(): void
    {
        $router = new Router();

        $action = fn () => "ok";

        $router->register("/home", $action);

        $this->assertArrayHasKey("/home", $router->routes);
        $this->assertSame($action, $router->routes["/home"]);
    }
}
