<?php

namespace OlegV\Cliche;

class SomeClass
{
    public function __invoke(mixed $arg): mixed
    {
        return $arg;
    }
}