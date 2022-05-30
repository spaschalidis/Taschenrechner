<?php

declare(strict_types=1);

namespace App\Core\Application\Rechenoperationen;

class subtrahiere extends abstrakte_Rechenoperation
{
    private float $Minuend;
    private float $Subtrahend;

    public function __construct(float $Minuend, float $Subtrahend)
    {
        $this->Minuend = $Minuend;
        $this->Subtrahend = $Subtrahend;
    }

    public function Minuend(): float
    {
        return $this->Minuend;
    }

    public function Subtrahend(): float
    {
        return $this->Subtrahend;
    }

}