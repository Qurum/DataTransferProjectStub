<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

class XmlProvider implements ProviderInterface
{
    public function getData()
    {
        return
    '<?xml version="1.0"?>
     <glossary><title>example glossary</title>
      <GlossDiv><title>S</title>
       <GlossList>
        <GlossEntry ID="SGML" SortAs="SGML">
         <GlossTerm>Standard Generalized Markup Language</GlossTerm>
         <Acronym>SGML</Acronym>
         <Abbrev>ISO 8879:1986</Abbrev>
         <GlossDef>
          <para>A meta-markup language, used to create markup
    languages such as DocBook.</para>
          <GlossSeeAlso OtherTerm="GML" />
          <GlossSeeAlso OtherTerm="XML" />
         </GlossDef>
         <GlossSee OtherTerm="markup" />
        </GlossEntry>
       </GlossList>
      </GlossDiv>
     </glossary>
    ';
    }

    public function getType()
    {
        return 'XML';
    }
}