<?php

namespace EugeniyPetrov\Util\Model\Exception;

class NotStringArgumentException extends InvalidArgumentException
{
    /**
     * NotStringArgumentException constructor.
     * @param string $name
     * @param int $value
     * @param \Exception $previous
     */
    public function __construct($name, $value, \Exception $previous = null)
    {
        parent::__construct($name, $value, 'string', 1, $previous);
    }
}