<?php

namespace Tests\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Tests\Traits\RefreshDatabaseTrait;

class LoginControllerTests extends TestCase
{
    use RefreshDatabaseTrait;
    /**
     * A basic test example.
     */
    public function testLoginUserSuccess(): void
    {
        $user = $this->createUser([
            'name' => 'TesterskiGit',
            'email' => 'testerski@git.pl',
        ]);

        $response = $this->post('/api/login', [
            'email' => $user->email,
            'password' => $user->password,
        ]);

        $response->assertJson(['test']);

        $response->assertStatus(200);
    }
}
