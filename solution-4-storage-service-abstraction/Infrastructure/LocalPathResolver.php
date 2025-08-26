<?php

namespace Infrastructure;

use Domain\PathResolver;

class LocalPathResolver implements PathResolver
{
    public function resolve(string $id): string
    {
        return __DIR__ . '/uploads/' . $id . '.pdf';
    }
}
