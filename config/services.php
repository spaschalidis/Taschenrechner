<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Infrastructure\DrivingAdapter\Action\addiere_zwei_Zahlen;
use App\Infrastructure\DrivingAdapter\Action\dividiere_zwei_Zahlen;
use App\Infrastructure\DrivingAdapter\Action\multipliziere_zwei_Zahlen;
use App\Infrastructure\DrivingAdapter\Action\subtrahiere_zwei_Zahlen;

return function(ContainerConfigurator $configurator) {
    $services = $configurator->services()
        ->defaults()
        ->autowire()      // Automatically injects dependencies in your services.
        ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;

    $services->load('App\\', '../src/*')
        ->exclude('../src/{DependencyInjection,Entity,Tests,Kernel.php}');

    $services->set(addiere_zwei_Zahlen::class)->tag('controller.service_arguments');
    $services->set(subtrahiere_zwei_Zahlen::class)->tag('controller.service_arguments');
    $services->set(dividiere_zwei_Zahlen::class)->tag('controller.service_arguments');
    $services->set(multipliziere_zwei_Zahlen::class)->tag('controller.service_arguments');
};