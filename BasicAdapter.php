<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

abstract class BasicAdapter implements AdapterInterface
{
    protected LoggerInterface $logger;
    public function setLogger(LoggerInterface $l){
        $this->logger = $l;
    }
}