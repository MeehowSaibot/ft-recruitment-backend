<?php

namespace Tests\Traits;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Support\Facades\DB;

trait RefreshDatabaseTrait
{
    use RefreshDatabase {
        refreshTestDatabase as protected traitRefreshDatabase;
    }

    public function refreshTestDatabase(): void
    {
        $allowedTestingDatabases = [
            'cardgametesting.sqlite',
        ];

        if (TRUE === in_array(DB::connection()->getDatabaseName(), $allowedTestingDatabases)) {
            if (!RefreshDatabaseState::$migrated) {
                $this->artisan('migrate:fresh');
                $this->app[Kernel::class]->setArtisan(null);
                RefreshDatabaseState::$migrated = true;
            }
            $this->beginDatabaseTransaction();
        } else {
            die('Provided database is not allowed for testing.');
        }
    }



}
