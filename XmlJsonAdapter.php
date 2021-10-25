<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

use SimpleXMLElement;

class XmlJsonAdapter implements AdapterInterface
{
    public function proceed($data)
    {
        $xml = new SimpleXMLElement($data);
        function toArray(SimpleXMLElement $xml)
        {
            $result = [];
            $value = (string)$xml[0];
            $attributes = $xml->attributes();
            $attr = [];
            foreach ($attributes as $key => $v) {
                $attr[$key] = (string)$v;
            }

            $child = [];
            foreach ($xml->children() as $key => $v) {
                $child[$key] = toArray($v);
            }

            if((count($xml) == 0) && (count($attributes) == 0)){
                $result = $value;
            } elseif((count($xml) == 0) && (count($attributes) != 0)) {
                if(!empty($value)){
                    $result['@value'] = $value;
                    $result['@attributes'] = $attr;
                } else {
                    $result = $attr;
                }
            } elseif((count($xml) != 0) && (count($attributes) == 0)) {
                $result = $child;
            } else {
                $result = array_merge($attr, $child);
            }
            return $result;
        }
        return json_encode([$xml->getName() => toArray($xml)]);
    }
}