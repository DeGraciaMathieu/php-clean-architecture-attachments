<?php

namespace Domain;

use Domain\FileReference;

interface FileService
{
    public function retrieve(FileReference $fileReference): string;
}
