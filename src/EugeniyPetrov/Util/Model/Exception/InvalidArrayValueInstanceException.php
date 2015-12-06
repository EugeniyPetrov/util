<?php

namespace EugeniyPetrov\Util\Model\Exception;

class InvalidArrayValueInstanceException extends InvalidArrayValueException
{
    /**
     * InvalidArrayValueInstanceException constructor.
     * @param string $name
     * @param string $key
     * @param string $reuquiredInstance
     * @param mixed $value
     * @param \Exception $previous
     */
    public function __construct($name, $key, $reuquiredInstance, $value, $previous = null)
    {
        parent::__construct($name, $key, $reuquiredInstance, true, $value, $previous);
    }
}