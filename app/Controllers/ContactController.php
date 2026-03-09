<?php
declare(strict_types=1);

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index(): void
    {
        $this->render('contact', [
            'pageTitle' => 'Contact · Leabyva Digital Works',
            'active'    => 'contact',
        ]);
    }
}

