<?php

namespace Esiteks\Contracts\Resolver;

interface RouteResolverInterface{
    public function resolve( string $requestUri, string $method, RouteCollectionInterface $collection) : ResolveInterface;
}