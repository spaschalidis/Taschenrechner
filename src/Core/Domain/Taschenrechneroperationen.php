<?php

declare(strict_types=1);

namespace App\Core\Domain;

use App\Core\Domain\Werteobjekt\Ergebnis;
use Summand;

interface Taschenrechneroperationen
{
    public function addiere(float $Summand1, float $Summand2): Ergebnis;

    public function subtrahiere(float $Minuend, float $Subtrahend): Ergebnis;

    public function multipliziere(float $Multiplikand, float $Multiplikator): Ergebnis;

    public function dividiere(float $Dividend, float $Divisor): Ergebnis;
}