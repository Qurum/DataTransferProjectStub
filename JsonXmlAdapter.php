<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

use SimpleXMLElement;

class JsonXmlAdapter extends BasicAdapter implements AdapterInterface
{
    public function proceed($json)
    {
        $json = json_decode($json, true);
        $xml = simplexml_load_string('<?xml version="1.0"?><root></root>');

        function toXml($data, SimpleXMLElement $node){
            foreach ($data as $key => $value) {
                switch (gettype($value)) {
                    case 'array':
                        $child = $node->addChild($key);
                        toXml($value, $child);
                        break;
                    case 'string':
                        $node->addChild($key, $value);
                        break;
                }
            }
            return $node;
        }
        return toXml($json, $xml);
    }
}