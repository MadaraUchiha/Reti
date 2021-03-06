<?php
namespace Reti\Core;

/**
 * Class Router
 *
 * The main router class
 *
 * @package Reti
 */
class Router {

    /** @var  Route[] Array of all routes in the router. */
    private $routes;

    public function __construct() {
    }

    public function addRoute(Route $route) {
        $this->routes[$route->getName()] = $route;
    }

    public function getRoutesFromSource(RouteSource $routeSource) {
        array_merge($this->routes, $routeSource->toRouteArray());
    }

} 