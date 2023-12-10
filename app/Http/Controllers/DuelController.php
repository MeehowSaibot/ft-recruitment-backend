<?php

namespace App\Http\Controllers;

use App\Services\DuelService;
use Illuminate\Http\JsonResponse;

class DuelController extends Controller
{
    public function __construct(
        private readonly DuelService $duelService,
    )
    {
    }

    /**
     * @param StartDuelRequest $request
     * @return JsonResponse
     */
    public function startDuel(StartDuelRequest $request): JsonResponse
    {
        return $this->duelService->startDuel($request);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function activeDuel(int $id): JsonResponse
    {
        return $this->duelService->activeDuel($id);
    }

    /**
     * @param SelectCardRequest $request
     * @return JsonResponse
     */
    public function selectCard(SelectCardRequest $request): JsonResponse
    {
        return $this->duelService->selectCard($request);
    }
}
