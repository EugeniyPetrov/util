<?php

namespace EugeniyPetrov\Util\Dao;

use EugeniyPetrov\Util\Model\Currency;
use EugeniyPetrov\Util\Model\Exception\EntityNotFoundException;

interface CurrencyRepositoryInterface
{
    /**
     * @param $code
     * @return Currency
     * @throws EntityNotFoundException
     */
    public function getByCode($code);

    /**
     * @return \Generator
     */
    public function getAll();
}