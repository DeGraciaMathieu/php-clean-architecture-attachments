<?php

namespace Infrastructure;

use Domain\FileReference;

class S3FileReference implements FileReference
{
    public function __construct(
        private string $id,
        private ?string $mime,
    ) {}

    public function id(): string
    {
        return $this->id;
    }

    public function mime(): ?string
    {
        return $this->mime;
    }
}
