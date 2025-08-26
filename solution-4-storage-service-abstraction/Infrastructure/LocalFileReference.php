<?php

namespace Infrastructure;

use Domain\FileReference;

class LocalFileReference implements FileReference
{
    public function __construct(
        private string $id,
        private ?string $mime,
    ) {}

    public function path(): string
    {
        return __DIR__ . '/uploads/' . $this->id . '.' . $this->mime;
    }
}