<?php

declare(strict_types=1);

namespace App\Infrastructure\DrivingAdapter\Action;

use App\Core\Application\Response\Ergebnis;
use App\Core\Domain\Taschenrechneroperationen;
use Symfony\Component\HttpFoundation\Request;

class multipliziere_zwei_Zahlen
{
    public function __invoke(
        Request                   $Request,
        Taschenrechneroperationen $Taschenrechner
    ): Ergebnis
    {
        $Multiplikand = (float)$Request->attributes->get('Multiplikand');
        $Multiplikator = (float)$Request->attributes->get('Multiplikator');

        $Ergebnis = new Ergebnis(
            $Taschenrechner->multipliziere($Multiplikand, $Multiplikator)
        );

        $Ergebnis->buildJsonContent();

        return $Ergebnis;
    }
}