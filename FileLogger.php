<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

class FileLogger implements LoggerInterface
{
    public function __construct(
        protected FileManagerInterface $fileManager,
        protected string $path
    ){}

    public function log(string $s){
        $this->fileManager->append($this->path, $s);
    }

    public function reset(){
        $this->fileManager->write($this->path, '');
    }
}