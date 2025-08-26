<?php

namespace Domain;

interface FileService
{
    public function retrieve(string $id): string;
}