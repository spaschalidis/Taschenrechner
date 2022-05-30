<?php

use App\Infrastructure\DrivingAdapter\Action\addiere_zwei_Zahlen;
use App\Infrastructure\DrivingAdapter\Action\dividiere_zwei_Zahlen;
use App\Infrastructure\DrivingAdapter\Action\multipliziere_zwei_Zahlen;
use App\Infrastructure\DrivingAdapter\Action\subtrahiere_zwei_Zahlen;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('addiere', '/addiere_Zahlen/{Summand}/{Summand2}')
        ->controller(addiere_zwei_Zahlen::class)
        ->methods(['GET']);

    $routes->add('subtrahiere', '/subtrahiere/{Minuend}/{Subtrahend}')
        ->controller(subtrahiere_zwei_Zahlen::class)
        ->methods(['GET']);

    $routes->add('multipliziere', '/multipliziere/{Multiplikand}/{Multiplikator}')
        ->controller(multipliziere_zwei_Zahlen::class)
        ->methods(['GET']);

    $routes->add('dividiere', '/dividiere/{Dividend}/{Divisor}')
        ->controller(dividiere_zwei_Zahlen::class)
        ->methods(['GET']);
};