<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRoksana_ApuAPIRequest;
use App\Http\Requests\API\UpdateRoksana_ApuAPIRequest;
use App\Models\Roksana_Apu;
use App\Repositories\Roksana_ApuRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class Roksana_ApuAPIController
 */
class Roksana_ApuAPIController extends AppBaseController
{
    private Roksana_ApuRepository $roksanaApuRepository;

    public function __construct(Roksana_ApuRepository $roksanaApuRepo)
    {
        $this->roksanaApuRepository = $roksanaApuRepo;
    }

    /**
     * Display a listing of the Roksana_Apus.
     * GET|HEAD /roksana_-apus
     */
    public function index(Request $request): JsonResponse
    {
        $roksanaApus = $this->roksanaApuRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($roksanaApus->toArray(), 'Roksana  Apus retrieved successfully');
    }

    /**
     * Store a newly created Roksana_Apu in storage.
     * POST /roksana_-apus
     */
    public function store(CreateRoksana_ApuAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $roksanaApu = $this->roksanaApuRepository->create($input);

        return $this->sendResponse($roksanaApu->toArray(), 'Roksana  Apu saved successfully');
    }

    /**
     * Display the specified Roksana_Apu.
     * GET|HEAD /roksana_-apus/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Roksana_Apu $roksanaApu */
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            return $this->sendError('Roksana  Apu not found');
        }

        return $this->sendResponse($roksanaApu->toArray(), 'Roksana  Apu retrieved successfully');
    }

    /**
     * Update the specified Roksana_Apu in storage.
     * PUT/PATCH /roksana_-apus/{id}
     */
    public function update($id, UpdateRoksana_ApuAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Roksana_Apu $roksanaApu */
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            return $this->sendError('Roksana  Apu not found');
        }

        $roksanaApu = $this->roksanaApuRepository->update($input, $id);

        return $this->sendResponse($roksanaApu->toArray(), 'Roksana_Apu updated successfully');
    }

    /**
     * Remove the specified Roksana_Apu from storage.
     * DELETE /roksana_-apus/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Roksana_Apu $roksanaApu */
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            return $this->sendError('Roksana  Apu not found');
        }

        $roksanaApu->delete();

        return $this->sendSuccess('Roksana  Apu deleted successfully');
    }
}
