<?php

namespace Domain;

use Domain\FileReference;

interface PathResolver
{
    public function resolve(FileReference $fileReference): string;
}