<?php


namespace App\Services;


use JMS\Serializer\ContextFactory\SerializationContextFactoryInterface;

class TestService
{
    /** @var SerializationContextFactoryInterface */
    private $serializationContext;

    /**
     * @required
     * @param SerializationContextFactoryInterface $serializationContext
     */
    public function setSerializationContext(SerializationContextFactoryInterface $serializationContext): void
    {
        $this->serializationContext = $serializationContext;
    }

}