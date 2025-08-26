<?php

namespace Infrastructure;

use Domain\PathResolver;
use Domain\FileReference;

class S3PathResolver implements PathResolver
{
    public function resolve(FileReference $fileReference): string
    {
        return 's3://rfp-req/' . $fileReference->id() . '.' . $fileReference->mime();
    }
}
