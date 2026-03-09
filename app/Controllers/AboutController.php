<?php
declare(strict_types=1);

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index(): void
    {
        $this->render('about', [
            'pageTitle' => 'À propos · Leabyva Digital Works',
            'active'    => 'about',
        ]);
    }
}

