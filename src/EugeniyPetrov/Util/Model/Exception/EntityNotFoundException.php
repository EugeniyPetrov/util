<?php

namespace EugeniyPetrov\Util\Model\Exception;

class EntityNotFoundException extends \Exception
{
    /**
     * EntityNotFoundException constructor.
     * @param string $entityName
     * @param string $entityId
     * @param mixed $entityIdValue
     * @param \Exception|null $previous
     */
    public function __construct($entityName, $entityId, $entityIdValue, \Exception $previous = null)
    {
        parent::__construct(
            $entityName . ' with ' . $entityId . ' `' . $entityIdValue . '` not found.',
            0,
            $previous
        );
    }
}