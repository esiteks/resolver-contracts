<?php

namespace Esiteks\Contracts\Resolver;

interface ResolveInterface {
    public function getCallback() : mixed;
    public function getArgs() : mixed;
}