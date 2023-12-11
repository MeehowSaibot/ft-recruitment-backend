<?php

namespace Database\Seeders;

use App\Enum\AvailableCardsEnum;
use App\Models\CardModel;
use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cases = AvailableCardsEnum::cases();

        if (env('APP_ENV') === 'testing') {
            foreach ($cases as $case) {
                CardModel::query()->insert($case->cardData());
            }
        } else {
            foreach ($cases as $case) {
                CardModel::query()->firstOrCreate($case->cardData());
            }
        }
    }
}
