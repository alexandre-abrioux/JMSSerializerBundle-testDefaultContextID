<?php


namespace App\Services;


use JMS\Serializer\ContextFactory\SerializationContextFactoryInterface;
use JMS\Serializer\SerializationContext;

class SerializationContextFactory implements SerializationContextFactoryInterface
{

    public function createSerializationContext(): SerializationContext
    {
        return new SerializationContext();
    }
}