<?php

namespace EugeniyPetrov\Util\Model\Exception;

class NotIntegerArgumentException extends InvalidArgumentException
{
    /**
     * NotStringArgumentException constructor.
     * @param string $name
     * @param int $value
     * @param \Exception $previous
     */
    public function __construct($name, $value, \Exception $previous = null)
    {
        parent::__construct($name, $value, 'integer', 1, $previous);
    }
}