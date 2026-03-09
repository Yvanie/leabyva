<?php
declare(strict_types=1);

namespace App\Controllers;

abstract class BaseController
{
    /**
     * Rendu d'une vue via le layout global.
     */
    protected function render(string $view, array $data = []): void
    {
        view($view, $data);
    }
}

