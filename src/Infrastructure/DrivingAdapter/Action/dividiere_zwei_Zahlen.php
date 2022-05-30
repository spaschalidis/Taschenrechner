<?php

declare(strict_types=1);

namespace App\Infrastructure\DrivingAdapter\Action;

use App\Core\Application\Response\Ergebnis;
use App\Core\Domain\Taschenrechneroperationen;
use Symfony\Component\HttpFoundation\Request;

class dividiere_zwei_Zahlen
{
    public function __invoke(
        Request                   $Request,
        Taschenrechneroperationen $Taschenrechner
    ): Ergebnis
    {
        $Dividend = (float)$Request->attributes->get('Dividend');
        $Divisor = (float)$Request->attributes->get('Divisor');

        $Ergebnis = new Ergebnis(
            $Taschenrechner->dividiere($Dividend, $Divisor)
        );

        $Ergebnis->buildJsonContent();

        return $Ergebnis;
    }
}