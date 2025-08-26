<?php

namespace Domain;

class FileReference
{
    public function __construct(
        private string $id,
        private string $kind,
        private ?string $mime,
    ) {
        $this->guard($id);
    }

    public function id(): string
    {
        return $this->id;
    }
    
    public function kind(): string
    {
        return $this->kind;
    }

    public function mime(): ?string
    {
        return $this->mime;
    }

    private function guard(string $id): void
    {
        if ($id === '') {
            throw new \Exception('File id cannot be empty.');
        }
    }
}
