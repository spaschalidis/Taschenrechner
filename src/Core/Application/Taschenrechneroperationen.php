<?php

declare(strict_types=1);

namespace App\Core\Application;

use App\Core\Application\Rechenoperationen\abstrakte_Rechenoperation;
use App\Core\Application\Rechenoperationen\addiere;
use App\Core\Application\Rechenoperationen\dividiere;
use App\Core\Application\Rechenoperationen\multipliziere;
use App\Core\Application\Rechenoperationen\subtrahiere;
use App\Core\Domain\Taschenrechner;
use App\Core\Domain\Taschenrechneroperationen as Taschenrechneroperationen_Interface;
use App\Core\Domain\Werteobjekt\Ergebnis;

class Taschenrechneroperationen implements Taschenrechneroperationen_Interface
{
    private Taschenrechner $Taschenrechner;

    public function __construct(Taschenrechner $Taschenrechner)
    {
        $this->Taschenrechner = $Taschenrechner;
    }

    public function addiere(float $Summand1, float $Summand2): Ergebnis
    {
        $Addiere = new addiere($Summand1, $Summand2);

        return $this->fuehre_Rechenoperation_aus_fuer($Addiere);
    }

    public function dividiere(float $Dividend, float $Divisor): Ergebnis
    {
        $Dividiere = new dividiere($Dividend, $Divisor);

        return $this->fuehre_Rechenoperation_aus_fuer($Dividiere);
    }

    public function subtrahiere(float $Minuend, float $Subtrahend): Ergebnis
    {
        $Subtrahiere = new subtrahiere($Minuend, $Subtrahend);

        return $this->fuehre_Rechenoperation_aus_fuer($Subtrahiere);
    }

    public function multipliziere(float $Multiplikand, float $Multiplikator): Ergebnis
    {
        $Multipliziere = new multipliziere($Multiplikand, $Multiplikator);

        return $this->fuehre_Rechenoperation_aus_fuer($Multipliziere);
    }

    private function fuehre_Rechenoperation_aus_fuer(abstrakte_Rechenoperation $abstrakte_Rechenoperation): Ergebnis
    {
        return $this->Taschenrechner->fuehre_Rechenoperation_aus_fuer($abstrakte_Rechenoperation);
    }

}