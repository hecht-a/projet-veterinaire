<?php
declare(strict_types=1);

use App\Core\Application;
use Dotenv\Dotenv;

require_once __DIR__ . "/vendor/autoload.php";
Dotenv::createImmutable(__DIR__)->load();

$config = [
    "db" => [
        "dsn" => $_ENV["DB_DSN"],
        "user" => $_ENV["DB_USER"],
        "password" => $_ENV["DB_PASSWORD"]
    ]
];

$app = new Application(__DIR__ . "/src", $config);
$app->db->applyMigrations();
