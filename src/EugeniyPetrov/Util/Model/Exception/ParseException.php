<?php

namespace EugeniyPetrov\Util\Model\Exception;

use Exception;

class ParseException extends \Exception
{
    public function __construct($entity, \Exception $previous = null)
    {
        parent::__construct("Unable to parse object of " . $entity . " from given string", 0, $previous);
    }
}