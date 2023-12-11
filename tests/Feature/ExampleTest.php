<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\Traits\RefreshDatabaseTrait;

class ExampleTest extends TestCase
{
    use RefreshDatabaseTrait;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('api/');

        $response->assertStatus(200);
    }
}
