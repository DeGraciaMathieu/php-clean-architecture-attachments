<?php

namespace Infrastructure;

use Domain\PathResolver;
use Domain\FileReference;

class LocalPathResolver implements PathResolver
{
    public function resolve(FileReference $fileReference): string
    {
        return __DIR__ . '/uploads/' . $fileReference->id() . '.' . $fileReference->mime();
    }
}
