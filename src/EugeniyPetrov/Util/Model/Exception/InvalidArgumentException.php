<?php

namespace EugeniyPetrov\Util\Model\Exception;

abstract class InvalidArgumentException extends \InvalidArgumentException
{
    /**
     * InvalidArgumentException constructor.
     * @param string $name
     * @param int $value
     * @param string $requiredType
     */
    public function __construct($name, $value, $requiredType, $code, $previous)
    {
        parent::__construct(
            'Invalid argument value of `$' . $name . '`. Must be ' . $requiredType . ' but ' . gettype($value) . ' given',
            $code,
            $previous
        );
    }
}