<?php
/*
 * Copyright (c) Ronia Rebane 2021.
 * Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted.
 */

namespace Abethropalle\DataTransferProjectStub;

class Main
{
    public function __construct(
        protected ProviderInterface $provider,
        protected ResolverInterface $resolver,
        protected LoggerInterface   $logger
    )
    {
    }
	
	public function saySomething($phrase)
	{
		$this->logger->log($phrase);
	}

    public function run()
    {
        $data = $this->provider->getData();
        $adapter = $this->resolver->resolve($this->provider->getType());
        $this->logger->log(
            "A data transfer operation was performed with the result: "
            . PHP_EOL .
            $adapter->proceed($data)
            . PHP_EOL
        );
    }
}