<?php

declare(strict_types=1);

namespace App\Core\Application\Rechenoperationen;

class multipliziere extends abstrakte_Rechenoperation
{
    private float $Multiplikand;
    private float $Multiplikator;

    public function __construct(float $Multiplikand, float $Multiplikator)
    {
        $this->Multiplikand = $Multiplikand;
        $this->Multiplikator = $Multiplikator;
    }

    public function Multiplikand(): float
    {
        return $this->Multiplikand;
    }

    public function Multiplikator(): float
    {
        return $this->Multiplikator;
    }


}