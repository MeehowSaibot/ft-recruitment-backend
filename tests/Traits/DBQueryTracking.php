<?php

namespace Tests\Traits;

use Illuminate\Support\Facades\DB;

trait DBQueryTracking
{
    protected function trackQueries(): void
    {
        DB::enableQueryLog();
    }

    protected function getQueriesExecuted(): array
    {
        return DB::getQueryLog();
    }

    protected function getQueryCount(): int
    {
        return count($this->getQueriesExecuted());
    }

    protected function assertQueryCount(int $expected)
    {
        $this->assertEquals($expected, $this->getQueryCount());
    }
}
