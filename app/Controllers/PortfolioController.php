<?php
declare(strict_types=1);

namespace App\Controllers;

class PortfolioController extends BaseController
{
    public function index(): void
    {
        $this->render('portfolio', [
            'pageTitle' => 'Réalisations · Leabyva Digital Works',
            'active'    => 'portfolio',
        ]);
    }
}

