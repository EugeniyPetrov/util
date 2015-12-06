<?php

namespace EugeniyPetrov\Util\Model\Exception;

class NotReadableArgumentException extends \InvalidArgumentException
{
    /**
     * NotFileArgumentException constructor.
     * @param string $name
     * @param string $filename
     * @param \Exception|null $previous
     */
    public function __construct($name, $filename, \Exception $previous = null)
    {
        parent::__construct(
            'Invalid value of `$' . $name . '`. File ' . $filename . ' is not readable.',
            0,
            $previous
        );
    }
}