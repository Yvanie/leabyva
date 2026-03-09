<?php
declare(strict_types=1);

use Dotenv\Dotenv;

$projectRoot = dirname(__DIR__);

// Chargement facultatif de dotenv
if (file_exists($projectRoot . '/vendor/autoload.php') && file_exists($projectRoot . '/.env')) {
    $dotenv = Dotenv::createImmutable($projectRoot);
    $dotenv->safeLoad();
}

// Autoload très simple pour le namespace App\
spl_autoload_register(function (string $class): void {
    $prefix  = 'App\\';
    $baseDir = __DIR__ . '/';

    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        return;
    }

    $relative = substr($class, strlen($prefix));
    $file     = $baseDir . str_replace('\\', '/', $relative) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

/**
 * Helper de rendu de vue.
 *
 * @param string $template nom de la vue, sans extension (ex: 'home')
 * @param array  $data     données passées à la vue
 */
function view(string $template, array $data = []): void
{
    extract($data);
    $view = $template;
    require __DIR__ . '/Views/layout.php';
}

