<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

interface FileManagerInterface
{
    public function load($path);
    public function write($path,$data);
    public function append($path,$data);
}