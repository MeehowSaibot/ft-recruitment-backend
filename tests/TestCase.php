<?php

namespace Tests;

use App\Models\CardModel;
use App\Models\UserModel;
use Database\Factories\CardModelFactory;
use Database\Factories\UserModelFactory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Laravel\Sanctum\Sanctum;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @return void
     * @throws BindingResolutionException
     */
    protected function setUp():void
    {
        parent::setUp();

        $db = app()->make('db');

        if ($db->connection() instanceof SQLiteConnection) {
            $db->getSchemaBuilder()->enableForeignKeyConstraints();
        }

        $this->withHeaders([
            'Accept' => 'application/json'
        ]);
    }

    /**
     * @param UserModel $user
     * @return void
     */
    protected function loginAs(UserModel $user): void
    {
        Sanctum::actingAs($user, ['*'], 'web');
    }

    /**
     * @param array $data
     * @return UserModel
     */
    public function createUser(array $data = []): UserModel
    {
        return (new UserModelFactory())->create($data);
    }

    public function createCard(array $data = []): CardModel
    {
        return (new CardModelFactory())->create($data);
    }
}
