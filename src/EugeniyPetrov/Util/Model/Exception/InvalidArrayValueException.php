<?php

namespace EugeniyPetrov\Util\Model\Exception;

abstract class InvalidArrayValueException extends \InvalidArgumentException
{
    /**
     * InvalidArrayValueException constructor.
     * @param string $name
     * @param string $key
     * @param string $requiredType
     * @param bool $isObject
     * @param mixed $value
     * @param \Exception $previous
     */
    public function __construct($name, $key, $requiredType, $isObject, $value, $previous = null)
    {
        if ($isObject) {
            $given = null;
            if (is_object($value)) {
                $given = 'instance of ' . get_class($value);
            } else {
                $given = gettype($value);
            }
            parent::__construct(
                'Invalid value of element `' . $key . '` of array `$' . $name . '`. Must be an instance of '
                    . $requiredType . ' but ' . $given . ' given',
                0,
                $previous
            );
        } else {
            parent::__construct(
                'Invalid value of element `' . $key . '` of array `$' . $name . '`. Must be ' . $requiredType
                    . ' but ' . gettype($value) . ' given',
                0,
                $previous
            );
        }
    }
}