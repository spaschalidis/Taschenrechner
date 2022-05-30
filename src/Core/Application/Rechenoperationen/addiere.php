<?php

declare(strict_types=1);

namespace App\Core\Application\Rechenoperationen;

class addiere extends abstrakte_Rechenoperation
{
    private float $Summand1;
    private float $Summand2;

    public function __construct(float $Summand1, float $Summand2)
    {
        $this->Summand1 = $Summand1;
        $this->Summand2 = $Summand2;
    }

    public function getSummand1(): float
    {
        return $this->Summand1;
    }

    public function getSummand2(): float
    {
        return $this->Summand2;
    }


}