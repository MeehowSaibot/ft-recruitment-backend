<?php

namespace App\Enum;

enum AvailableCardsEnum: string
{
    case SERGIO = 'Sergio Donputamadre';
    case LEWANRS = 'Lewan RS';
    case ENPI12 = 'Enpi12';
    case DRIVERY = 'Drivery';
    case MAXIMUS = 'Maximus';
    case WYLEWINHO = 'Wylewinho';
    case ADAM76 = 'ADAM76';
    case KAMYKRS = 'Kamyk RS';
    case STARSKY = 'StArSkY';
    case NERZHUL = 'Nerzhul';
    case LUKASZOSTROWSKI = 'Łukasz Ostrowski';
    case SIRBASTEK = 'Sir Bastek';
    case SIEJA = 'Sieja';
    case SEBSON = 'Sebson';
    case ROLNIKRS = 'Rolnik RS';


    public function cardData(): array
    {
        return match ($this) {
            AvailableCardsEnum::SERGIO => [
                'name' => 'Sergio Donputamadre',
                'power' => 101,
                'image' => 'card-1.jpg'
            ],
            AvailableCardsEnum::LEWANRS => [
                'name' => 'Lewan RS',
                'power' => 69,
                'image' => 'card-2.jpg'
            ],
            AvailableCardsEnum::ENPI12 => [
                'name' => 'Enpi12',
                'power' => 85,
                'image' => 'card-3.jpg'
            ],
            AvailableCardsEnum::DRIVERY => [
                'name' => 'Drivery',
                'power' => 61,
                'image' => 'card-4.jpg'
            ],
            AvailableCardsEnum::MAXIMUS => [
                'name' => 'Maximus',
                'power' => 18,
                'image' => 'card-5.jpg'
            ],
            AvailableCardsEnum::WYLEWINHO => [
                'name' => 'Wylewinho',
                'power' => 32,
                'image' => 'card-6.jpg'
            ],
            AvailableCardsEnum::ADAM76 => [
                'name' => 'Adam76',
                'power' => 108,
                'image' => 'card-7.jpg'
            ],
            AvailableCardsEnum::KAMYKRS => [
                'name' => 'Kamyk RS',
                'power' => 79,
                'image' => 'card-8.jpg'
            ],
            AvailableCardsEnum::STARSKY => [
                'name' => 'StArSkY',
                'power' => 63,
                'image' => 'card-9.jpg'
            ],
            AvailableCardsEnum::NERZHUL => [
                'name' => 'Nerzhul',
                'power' => 63,
                'image' => 'card-10.jpg'
            ],
            AvailableCardsEnum::LUKASZOSTROWSKI => [
                'name' => 'Łukasz Ostrowski',
                'power' => 63,
                'image' => 'card-11.jpg'
            ],
            AvailableCardsEnum::SIRBASTEK => [
                'name' => 'Sir Bastek',
                'power' => 40,
                'image' => 'card-12.jpg'
            ],
            AvailableCardsEnum::SIEJA => [
                'name' => 'Sieja',
                'power' => 39,
                'image' => 'card-13.jpg'
            ],
            AvailableCardsEnum::SEBSON => [
                'name' => 'Sebson',
                'power' => 29,
                'image' => 'card-14.jpg'
            ],
            AvailableCardsEnum::ROLNIKRS => [
                'name' => 'Rolnik RS',
                'power' => 87,
                'image' => 'card-15.jpg',
            ],
        };
    }
}
