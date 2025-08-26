<?php

namespace Infrastructure;

use Domain\FileService;
use Domain\FileReference;

class LocalFileService implements FileService
{
    public function retrieve(FileReference $fileReference): string
    {
        return file_get_contents($fileReference->path());
    }
}
