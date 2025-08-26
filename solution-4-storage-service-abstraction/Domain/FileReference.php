<?php

namespace Domain;

interface FileReference
{
    public function id(): string;
    public function mime(): ?string;
}