<?php

namespace Domain;

class Rfp
{
    public function __construct(
        private string $title,
        private string $requirementsDocumentId,
    ) {}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRequirementsDocumentId(): string
    {
        return $this->requirementsDocumentId;
    }
}