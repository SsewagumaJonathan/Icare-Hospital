<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBedAllotmentRequest;
use App\Http\Requests\UpdateBedAllotmentRequest;
use App\Repositories\BedAllotmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BedAllotmentController extends AppBaseController
{
    /** @var  BedAllotmentRepository */
    private $bedAllotmentRepository;

    public function __construct(BedAllotmentRepository $bedAllotmentRepo)
    {
        $this->bedAllotmentRepository = $bedAllotmentRepo;
    }

    /**
     * Display a listing of the BedAllotment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bedAllotments = $this->bedAllotmentRepository->all();

        return view('bed_allotments.index')
            ->with('bedAllotments', $bedAllotments);
    }

    /**
     * Show the form for creating a new BedAllotment.
     *
     * @return Response
     */
    public function create()
    {
        return view('bed_allotments.create');
    }

    /**
     * Store a newly created BedAllotment in storage.
     *
     * @param CreateBedAllotmentRequest $request
     *
     * @return Response
     */
    public function store(CreateBedAllotmentRequest $request)
    {
        $input = $request->all();

        $bedAllotment = $this->bedAllotmentRepository->create($input);

        Flash::success('Bed Allotment saved successfully.');

        return redirect(route('bedAllotments.index'));
    }

    /**
     * Display the specified BedAllotment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bedAllotment = $this->bedAllotmentRepository->find($id);

        if (empty($bedAllotment)) {
            Flash::error('Bed Allotment not found');

            return redirect(route('bedAllotments.index'));
        }

        return view('bed_allotments.show')->with('bedAllotment', $bedAllotment);
    }

    /**
     * Show the form for editing the specified BedAllotment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bedAllotment = $this->bedAllotmentRepository->find($id);

        if (empty($bedAllotment)) {
            Flash::error('Bed Allotment not found');

            return redirect(route('bedAllotments.index'));
        }

        return view('bed_allotments.edit')->with('bedAllotment', $bedAllotment);
    }

    /**
     * Update the specified BedAllotment in storage.
     *
     * @param int $id
     * @param UpdateBedAllotmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBedAllotmentRequest $request)
    {
        $bedAllotment = $this->bedAllotmentRepository->find($id);

        if (empty($bedAllotment)) {
            Flash::error('Bed Allotment not found');

            return redirect(route('bedAllotments.index'));
        }

        $bedAllotment = $this->bedAllotmentRepository->update($request->all(), $id);

        Flash::success('Bed Allotment updated successfully.');

        return redirect(route('bedAllotments.index'));
    }

    /**
     * Remove the specified BedAllotment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bedAllotment = $this->bedAllotmentRepository->find($id);

        if (empty($bedAllotment)) {
            Flash::error('Bed Allotment not found');

            return redirect(route('bedAllotments.index'));
        }

        $this->bedAllotmentRepository->delete($id);

        Flash::success('Bed Allotment deleted successfully.');

        return redirect(route('bedAllotments.index'));
    }
}
