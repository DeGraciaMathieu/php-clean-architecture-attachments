<?php

namespace Domain;

class Rfp
{
    public function __construct(
        private string $title,
        private string $requirementsPath,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRequirementsPath(): string
    {
        return $this->requirementsPath;
    }
}
