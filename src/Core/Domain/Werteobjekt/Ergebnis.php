<?php

declare(strict_types=1);

namespace App\Core\Domain\Werteobjekt;

class Ergebnis
{
    private float $Wert;

    public function __construct(float $Wert)
    {
        $this->Wert = $Wert;
    }

    public function Wert(): float
    {
        return $this->Wert;
    }

}