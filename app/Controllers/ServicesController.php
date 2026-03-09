<?php
declare(strict_types=1);

namespace App\Controllers;

class ServicesController extends BaseController
{
    public function index(): void
    {
        $this->render('services', [
            'pageTitle' => 'Services · Leabyva Digital Works',
            'active'    => 'services',
        ]);
    }
}

