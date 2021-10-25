<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

class FileManager implements FileManagerInterface
{
    public function load($path)
    {
        return file_get_contents($path);
    }

    public function write($path, $data)
    {
        file_put_contents($path,$data);
    }

    public function append($path, $data)
    {
        file_put_contents($path,$data,FILE_APPEND);
    }
}