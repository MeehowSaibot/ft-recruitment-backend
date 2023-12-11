<?php

use App\Http\Controllers\DuelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Authorization\LoginController;
use Symfony\Component\HttpFoundation\Response;

Route::get('/', function() {
   return response()->json('Welcome.', Response::HTTP_OK);
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::group(['prefix' => 'duels'], function () {
        //Start Duel
        Route::post('/start', [DuelController::class, 'startDuel']);
        //Current Game Data
        Route::get('/active', [DuelController::class, 'activeDuelGameData']);
        //User has just selected a card
        Route::post('/action', [DuelController::class, 'selectCard']);
        //Duels History
        Route::get('/history', [DuelController::class, 'duelsHistory']);
    });

    Route::group(['prefix' => 'cards'], function () {
        //Cards
        Route::get('/cards', [CardController::class, 'availableCards']);
//        Route::post('/cards',       [CardController::class, 'availableCards']);
    });

    Route::group(['prefix' => 'users'], function () {
        //User data
        Route::get('/', [UserController::class, 'getUserData']);
        Route::post('/add', [UserController::class, 'createUser']);
        Route::patch('/edit', [UserController::class, 'editUser']);
        Route::delete('/delete', [UserController::class, 'deleteUser']);
    });


//    //CURRENT GAME DATA
//    Route::get('duels/active', function (Request $request) {
//        return [
//            'round' => 4,
//            'your_points' => 260,
//            'opponent_points' => 100,
//            'status' => 'active',
//            'cards' => config('game.cards'),
//        ];
//    });

//    //User has just selected a card
//    Route::post('duels/action', function (Request $request) {
//        return response()->json();
//    });

//    //DUELS HISTORY
//    Route::get('duels', function (Request $request) {
//        return [
//            [
//                "id" => 1,
//                "player_name" => "Jan Kowalski",
//                "opponent_name" => "Piotr Nowak",
//                "won" => 0
//            ],
//            [
//                "id" => 2,
//                "player_name" => "Jan Kowalski",
//                "opponent_name" => "Tomasz Kaczyński",
//                "won" => 1
//            ],
//            [
//                "id" => 3,
//                "player_name" => "Jan Kowalski",
//                "opponent_name" => "Agnieszka Tomczak",
//                "won" => 1
//            ],
//            [
//                "id" => 4,
//                "player_name" => "Jan Kowalski",
//                "opponent_name" => "Michał Bladowski",
//                "won" => 1
//            ],
//        ];
//    });

//    //CARDS
//    Route::post('cards', function (Request $request) {
//        return response()->json();
//    });

//    //USER DATA
//    Route::get('user-data', function (Request $request) {
//        return [
//            'id' => 1,
//            'username' => 'Test User',
//            'level' => 1,
//            'level_points' => '40/100',
//            'cards' => config('game.cards'),
//            'new_card_allowed' => true,
//        ];
//    });
});
