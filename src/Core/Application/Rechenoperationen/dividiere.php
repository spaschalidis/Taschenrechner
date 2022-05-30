<?php

declare(strict_types=1);

namespace App\Core\Application\Rechenoperationen;

class dividiere extends abstrakte_Rechenoperation
{
    private float $Dividend;
    private float $Divisor;

    public function __construct(float $Dividend, float $Divisor)
    {
        $this->Dividend = $Dividend;
        $this->Divisor = $Divisor;
    }

    public function Dividend(): float
    {
        return $this->Dividend;
    }

    public function Divisor(): float
    {
        return $this->Divisor;
    }


}