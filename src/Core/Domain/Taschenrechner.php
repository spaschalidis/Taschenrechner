<?php

declare(strict_types=1);

namespace App\Core\Domain;

use App\Core\Application\Rechenoperationen\abstrakte_Rechenoperation;
use App\Core\Application\Rechenoperationen\addiere;
use App\Core\Application\Rechenoperationen\dividiere;
use App\Core\Application\Rechenoperationen\multipliziere;
use App\Core\Application\Rechenoperationen\subtrahiere;
use App\Core\Domain\Exception\Unbekannte_Rechenoperation;
use App\Core\Domain\Werteobjekt\Ergebnis;

class Taschenrechner
{
    /**
     * @throws Unbekannte_Rechenoperation
     */
    public function fuehre_Rechenoperation_aus_fuer(abstrakte_Rechenoperation $Rechenoperation): Ergebnis
    {
        switch ($Rechenoperation) {
            case $Rechenoperation instanceof addiere:
                return new Ergebnis(
                    $Rechenoperation->getSummand1() + $Rechenoperation->getSummand2()
                );
            case $Rechenoperation instanceof subtrahiere:
                return new Ergebnis(
                    $Rechenoperation->Minuend() - $Rechenoperation->Subtrahend()
                );
            case $Rechenoperation instanceof multipliziere:
                return new Ergebnis(
                    $Rechenoperation->Multiplikand() * $Rechenoperation->Multiplikator()
                );
            case $Rechenoperation instanceof dividiere:
                return new Ergebnis(
                    $Rechenoperation->Dividend() / $Rechenoperation->Divisor()
                );
        }

        throw new Unbekannte_Rechenoperation('Rechenoperation ' . $Rechenoperation->Name() . ' ist nicht bekannt');

    }
}