<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBedsRequest;
use App\Http\Requests\UpdateBedsRequest;
use App\Repositories\BedsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BedsController extends AppBaseController
{
    /** @var  BedsRepository */
    private $bedsRepository;

    public function __construct(BedsRepository $bedsRepo)
    {
        $this->bedsRepository = $bedsRepo;
    }

    /**
     * Display a listing of the Beds.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $beds = $this->bedsRepository->all();

        return view('beds.index')
            ->with('beds', $beds);
    }

    /**
     * Show the form for creating a new Beds.
     *
     * @return Response
     */
    public function create()
    {
        return view('beds.create');
    }

    /**
     * Store a newly created Beds in storage.
     *
     * @param CreateBedsRequest $request
     *
     * @return Response
     */
    public function store(CreateBedsRequest $request)
    {
        $input = $request->all();

        $beds = $this->bedsRepository->create($input);

        Flash::success('Beds saved successfully.');

        return redirect(route('beds.index'));
    }

    /**
     * Display the specified Beds.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $beds = $this->bedsRepository->find($id);

        if (empty($beds)) {
            Flash::error('Beds not found');

            return redirect(route('beds.index'));
        }

        return view('beds.show')->with('beds', $beds);
    }

    /**
     * Show the form for editing the specified Beds.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $beds = $this->bedsRepository->find($id);

        if (empty($beds)) {
            Flash::error('Beds not found');

            return redirect(route('beds.index'));
        }

        return view('beds.edit')->with('beds', $beds);
    }

    /**
     * Update the specified Beds in storage.
     *
     * @param int $id
     * @param UpdateBedsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBedsRequest $request)
    {
        $beds = $this->bedsRepository->find($id);

        if (empty($beds)) {
            Flash::error('Beds not found');

            return redirect(route('beds.index'));
        }

        $beds = $this->bedsRepository->update($request->all(), $id);

        Flash::success('Beds updated successfully.');

        return redirect(route('beds.index'));
    }

    /**
     * Remove the specified Beds from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $beds = $this->bedsRepository->find($id);

        if (empty($beds)) {
            Flash::error('Beds not found');

            return redirect(route('beds.index'));
        }

        $this->bedsRepository->delete($id);

        Flash::success('Beds deleted successfully.');

        return redirect(route('beds.index'));
    }
}
