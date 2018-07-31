<?php

namespace Oilstone\SagePay\DataTypes;

use Oilstone\SagePay\Contracts\DataType as TypeContract;
use Illuminate\Support\Carbon;

/**
 * Class Transaction
 * @package Oilstone\SagePay\DataTypes
 */
class Batch extends DataType implements TypeContract
{
    /**
     * @return int
     */
    public function batchId(): int
    {
        return intval($this->batchid);
    }

    /**
     * @return Carbon
     */
    public function completed(): Carbon
    {
        return Carbon::createFromFormat('d/m/Y H:i:s', explode('.', $this->completed)[0]);
    }
}