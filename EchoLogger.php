<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

class EchoLogger implements LoggerInterface
{
    public function log(string $s)
    {
        echo $s, PHP_EOL;
    }

    public function reset()
    {
    }
}