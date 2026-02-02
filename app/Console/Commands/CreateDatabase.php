<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    protected $signature = 'database:create {name? : Database name}';
    protected $description = 'Create a new MySQL database';

    public function handle()
    {
        $name = $this->argument('name') ?? config('database.connections.mysql.database');

        try {
            // Create a PDO connection without database
            $pdo = new \PDO(
                'mysql:host=' . config('database.connections.mysql.host') .
                ';port=' . config('database.connections.mysql.port'),
                config('database.connections.mysql.username'),
                config('database.connections.mysql.password')
            );

            $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$name}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            $this->info("Database '{$name}' created successfully!");
        } catch (\Exception $e) {
            $this->error('Error creating database: ' . $e->getMessage());
        }
    }
}
