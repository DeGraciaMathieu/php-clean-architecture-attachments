<?php

namespace Infrastructure;

use Domain\PathResolver;

class S3PathResolver implements PathResolver
{
    public function resolve(string $id): string
    {
        return 's3://rfp-req/' . $id . '.pdf';
    }
}