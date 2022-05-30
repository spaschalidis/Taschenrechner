<?php

declare(strict_types=1);

namespace App\Infrastructure\DrivingAdapter\Action;

use App\Core\Application\Response\Ergebnis;
use App\Core\Domain\Taschenrechneroperationen;
use Symfony\Component\HttpFoundation\Request;

class addiere_zwei_Zahlen
{
    public function __invoke(
        Request                   $Request,
        Taschenrechneroperationen $Taschenrechner
    ): Ergebnis
    {
        $Summand1 = (float)$Request->attributes->get('Summand');
        $Summand2 = (float)$Request->attributes->get('Summand2');

        $Ergebnis = new Ergebnis(
            $Taschenrechner->addiere($Summand1, $Summand2)
        );

        $Ergebnis->buildJsonContent();

        return $Ergebnis;
    }
}