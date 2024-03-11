<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoksana_ApuRequest;
use App\Http\Requests\UpdateRoksana_ApuRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Roksana_ApuRepository;
use Illuminate\Http\Request;
use Flash;

class Roksana_ApuController extends AppBaseController
{
    /** @var Roksana_ApuRepository $roksanaApuRepository*/
    private $roksanaApuRepository;

    public function __construct(Roksana_ApuRepository $roksanaApuRepo)
    {
        $this->roksanaApuRepository = $roksanaApuRepo;
    }

    /**
     * Display a listing of the Roksana_Apu.
     */
    public function index(Request $request)
    {
        $roksanaApus = $this->roksanaApuRepository->paginate(10);

        return view('roksana__apus.index')
            ->with('roksanaApus', $roksanaApus);
    }

    /**
     * Show the form for creating a new Roksana_Apu.
     */
    public function create()
    {
        return view('roksana__apus.create');
    }

    /**
     * Store a newly created Roksana_Apu in storage.
     */
    public function store(CreateRoksana_ApuRequest $request)
    {
        $input = $request->all();

        $roksanaApu = $this->roksanaApuRepository->create($input);

        Flash::success('Roksana  Apu saved successfully.');

        return redirect(route('roksanaApus.index'));
    }

    /**
     * Display the specified Roksana_Apu.
     */
    public function show($id)
    {
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            Flash::error('Roksana  Apu not found');

            return redirect(route('roksanaApus.index'));
        }

        return view('roksana__apus.show')->with('roksanaApu', $roksanaApu);
    }

    /**
     * Show the form for editing the specified Roksana_Apu.
     */
    public function edit($id)
    {
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            Flash::error('Roksana  Apu not found');

            return redirect(route('roksanaApus.index'));
        }

        return view('roksana__apus.edit')->with('roksanaApu', $roksanaApu);
    }

    /**
     * Update the specified Roksana_Apu in storage.
     */
    public function update($id, UpdateRoksana_ApuRequest $request)
    {
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            Flash::error('Roksana  Apu not found');

            return redirect(route('roksanaApus.index'));
        }

        $roksanaApu = $this->roksanaApuRepository->update($request->all(), $id);

        Flash::success('Roksana  Apu updated successfully.');

        return redirect(route('roksanaApus.index'));
    }

    /**
     * Remove the specified Roksana_Apu from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $roksanaApu = $this->roksanaApuRepository->find($id);

        if (empty($roksanaApu)) {
            Flash::error('Roksana  Apu not found');

            return redirect(route('roksanaApus.index'));
        }

        $this->roksanaApuRepository->delete($id);

        Flash::success('Roksana  Apu deleted successfully.');

        return redirect(route('roksanaApus.index'));
    }
}
