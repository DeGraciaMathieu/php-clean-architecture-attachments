<?php

namespace Domain;

interface PathResolver
{
    public function resolve(string $id): string;
}
