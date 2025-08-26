<?php

namespace Domain;

use Domain\FileReference;

class Rfp
{
    public function __construct(
        private string $title,
        private FileReference $requirementsDocument,
    ) {}

    public function getRequirementDocument(): FileReference
    {
        return $this->requirementsDocument;
    }
}
