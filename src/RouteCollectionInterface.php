<?php

namespace Esiteks\Contracts\Resolver;

interface RouteCollectionInterface{
    public function insertRoute(RouteInterface $route) : RouteInterface;

    public function add(string $uri, string $method, mixed $callback ) : RouteInterface;

    public function get($uri, $callback) : RouteInterface;
    public function post($uri, $callback) : RouteInterface;
    public function put($uri, $callback) : RouteInterface;
    public function patch($uri, $callback) : RouteInterface;
    public function delete($uri, $callback) : RouteInterface;
    public function options($uri, $callback) : RouteInterface;
    public function head($uri, $callback) : RouteInterface;

    public function getUri($name, $params = [] ) : string;
    public function getUris($params = []) : array;
    public function getNames() : array;

    public function getRoute( $name ) : RouteInterface;
    public function getRoutes() : array;
}