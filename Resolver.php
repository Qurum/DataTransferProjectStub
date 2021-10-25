<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

/**
 * Этот класс ресолвит JSON в XML, а XML в JSON.
 */
class Resolver implements ResolverInterface
{
    public function __construct(
        protected AdapterInterface $json_xml_adapter,
        protected AdapterInterface $xml_json_adapter,
        protected AdapterInterface $id_adapter
    ){}

    public function resolve($type): AdapterInterface
    {
        switch ($type){
            case 'JSON': return $this->json_xml_adapter;
            case 'XML': return $this->xml_json_adapter;
            default: return $this->id_adapter;
        }
    }
}