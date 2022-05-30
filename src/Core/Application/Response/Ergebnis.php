<?php

declare(strict_types=1);

namespace App\Core\Application\Response;

use App\Core\Domain\Werteobjekt\Ergebnis as Ergebnis_Werteobjekt;
use Symfony\Component\HttpFoundation\Response;

class Ergebnis extends Response
{
    private Ergebnis_Werteobjekt $Ergebnis;

    public function __construct(Ergebnis_Werteobjekt $Ergebnis)
    {
        parent::__construct();
        $this->Ergebnis = $Ergebnis;
    }

    public function buildJsonContent(): void
    {
        $this->setContent(json_encode($this->Ergebnis->Wert()));
    }
}