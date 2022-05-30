<?php

namespace App\Infrastructure\DrivingAdapter\Action;

use App\Core\Application\Response\Ergebnis;
use App\Core\Domain\Taschenrechneroperationen;
use Symfony\Component\HttpFoundation\Request;

class subtrahiere_zwei_Zahlen
{
    public function __invoke(
        Request                   $Request,
        Taschenrechneroperationen $Taschenrechner
    ): Ergebnis
    {
        $Minuend = (float)$Request->attributes->get('Minuend');
        $Subtrahend = (float)$Request->attributes->get('Subtrahend');

        $Ergebnis = new Ergebnis(
            $Taschenrechner->subtrahiere($Minuend, $Subtrahend)
        );

        $Ergebnis->buildJsonContent();

        return $Ergebnis;
    }
}