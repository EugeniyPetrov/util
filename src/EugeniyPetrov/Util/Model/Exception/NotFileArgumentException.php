<?php

namespace EugeniyPetrov\Util\Model\Exception;

use Exception;

class NotFileArgumentException extends \InvalidArgumentException
{
    /**
     * NotFileArgumentException constructor.
     * @param string $name
     * @param string $value
     * @param \Exception|null $previous
     */
    public function __construct($name, $value, \Exception $previous = null)
    {
        parent::__construct(
            'Invalid value of `$' . $name . '`. ' . $value . ' is not a regular file.',
            0,
            $previous
        );
    }
}