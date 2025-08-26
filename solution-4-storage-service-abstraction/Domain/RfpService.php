<?php

namespace Domain;

use Domain\Rfp;
use Domain\PathResolver;

class RfpService
{
    public function __construct(
        private PathResolver $pathResolver,
    ) {}

    public function requirementsReference(Rfp $rfp): string
    {
        return $this->pathResolver->resolve(
            $rfp->requirementsId()
        );
    }
}
