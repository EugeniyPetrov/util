<?php

namespace EugeniyPetrov\Util\Model;

use EugeniyPetrov\Util\Model\Exception\InvalidLengthException;
use EugeniyPetrov\Util\Model\Exception\NotFloatArgumentException;
use EugeniyPetrov\Util\Model\Exception\NotIntegerArgumentException;
use EugeniyPetrov\Util\Model\Exception\NotStringArgumentException;

class Currency implements ObjectInterface
{
    private $symbol;
    private $symbolNative;
    private $decimalDigits;
    private $rounding;
    private $code;

    /**
     * Currency constructor.
     * @param string $symbol
     * @param string $symbolNative
     * @param int $decimalDigits
     * @param float $rounding
     * @param string $code
     */
    public function __construct($symbol, $symbolNative, $decimalDigits, $rounding, $code)
    {
        if (!is_string($symbol)) {
            throw new NotStringArgumentException('symbol', $symbol);
        }

        if (!is_string($symbolNative)) {
            throw new NotStringArgumentException('symbolNative', $symbolNative);
        }

        if (!is_int($decimalDigits)) {
            throw new NotIntegerArgumentException('decimalDigits', $decimalDigits);
        }

        if (!is_int($rounding) && !is_float($rounding)) {
            throw new NotFloatArgumentException('rounding', $rounding);
        }

        if (!is_string($code)) {
            throw new NotStringArgumentException('code', $code);
        }

        if (mb_strlen($code) !== 3) {
            throw new InvalidLengthException('code', $code, 3, 3);
        }

        $this->symbol = (string)$symbol;
        $this->symbolNative = (string)$symbolNative;
        $this->decimalDigits = (int)$decimalDigits;
        $this->rounding = (float)$rounding;
        $this->code = (string)$code;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getSymbolNative()
    {
        return $this->symbolNative;
    }

    /**
     * @return int
     */
    public function getDecimalDigits()
    {
        return $this->decimalDigits;
    }

    /**
     * @return float
     */
    public function getRounding()
    {
        return $this->rounding;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getHashCode()
    {
        return $this->getCode();
    }
}