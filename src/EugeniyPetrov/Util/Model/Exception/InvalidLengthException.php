<?php

namespace EugeniyPetrov\Util\Model\Exception;

class InvalidLengthException extends \InvalidArgumentException
{
    /**
     * InvalidLengthException constructor.
     * @param string $name
     * @param int $value
     * @param null $minLength
     * @param null $maxLength
     * @param null $previous
     */
    public function __construct($name, $value, $minLength = null, $maxLength = null, $previous = null)
    {
        $lengthMessage = 'Given string of length ' . mb_strlen($value);

        $message = null;
        if ($minLength === null && $maxLength === null) {
            parent::__construct('Invalid length of `$' . $name . '`. ' . $lengthMessage);
        } elseif ($minLength === null && $maxLength !== null) {
            parent::__construct(
                'Value of `$' . $name . '` must be no longer than ' . $maxLength . '. ' . $lengthMessage
            );
        } elseif ($minLength !== null && $maxLength === null) {
            parent::__construct(
                'Value of `$' . $name . '` must be no shorter than ' . $minLength . '. ' . $lengthMessage
            );
        } elseif ($minLength === $maxLength) {
            parent::__construct(
                'Value of `$' . $name . '` must be exactly ' . $minLength . ' characters long. ' . $lengthMessage
            );
        } else {
            parent::__construct(
                'Value of `$' . $name . '` must be no shorter than ' . $minLength . ' and no longer than '
                . $maxLength . '. ' . $lengthMessage
            );
        }
    }
}