<?php

declare(strict_types=1);

namespace App\Core\Application\Rechenoperationen;

class abstrakte_Rechenoperation
{
    public function Name(): string
    {
        return str_replace('\\', '.', strtolower(static::class));
    }
}