<?php

namespace OpenSID\Resource\Contracts;

trait ResourceTrait
{
    /**
     * @var int|string
     */
    protected $id;

    /**
     * @return int|string
     * @psalm-suppress MixedInferredReturnType
     */
    public function getId()
    {
        return $this->id;
    }
}
