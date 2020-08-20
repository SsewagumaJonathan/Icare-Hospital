<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBloodDonorRequest;
use App\Http\Requests\UpdateBloodDonorRequest;
use App\Repositories\BloodDonorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BloodDonorController extends AppBaseController
{
    /** @var  BloodDonorRepository */
    private $bloodDonorRepository;

    public function __construct(BloodDonorRepository $bloodDonorRepo)
    {
        $this->bloodDonorRepository = $bloodDonorRepo;
    }

    /**
     * Display a listing of the BloodDonor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bloodDonors = $this->bloodDonorRepository->all();

        return view('blood_donors.index')
            ->with('bloodDonors', $bloodDonors);
    }

    /**
     * Show the form for creating a new BloodDonor.
     *
     * @return Response
     */
    public function create()
    {
        return view('blood_donors.create');
    }

    /**
     * Store a newly created BloodDonor in storage.
     *
     * @param CreateBloodDonorRequest $request
     *
     * @return Response
     */
    public function store(CreateBloodDonorRequest $request)
    {
        $input = $request->all();

        $bloodDonor = $this->bloodDonorRepository->create($input);

        Flash::success('Blood Donor saved successfully.');

        return redirect(route('bloodDonors.index'));
    }

    /**
     * Display the specified BloodDonor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bloodDonor = $this->bloodDonorRepository->find($id);

        if (empty($bloodDonor)) {
            Flash::error('Blood Donor not found');

            return redirect(route('bloodDonors.index'));
        }

        return view('blood_donors.show')->with('bloodDonor', $bloodDonor);
    }

    /**
     * Show the form for editing the specified BloodDonor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bloodDonor = $this->bloodDonorRepository->find($id);

        if (empty($bloodDonor)) {
            Flash::error('Blood Donor not found');

            return redirect(route('bloodDonors.index'));
        }

        return view('blood_donors.edit')->with('bloodDonor', $bloodDonor);
    }

    /**
     * Update the specified BloodDonor in storage.
     *
     * @param int $id
     * @param UpdateBloodDonorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBloodDonorRequest $request)
    {
        $bloodDonor = $this->bloodDonorRepository->find($id);

        if (empty($bloodDonor)) {
            Flash::error('Blood Donor not found');

            return redirect(route('bloodDonors.index'));
        }

        $bloodDonor = $this->bloodDonorRepository->update($request->all(), $id);

        Flash::success('Blood Donor updated successfully.');

        return redirect(route('bloodDonors.index'));
    }

    /**
     * Remove the specified BloodDonor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bloodDonor = $this->bloodDonorRepository->find($id);

        if (empty($bloodDonor)) {
            Flash::error('Blood Donor not found');

            return redirect(route('bloodDonors.index'));
        }

        $this->bloodDonorRepository->delete($id);

        Flash::success('Blood Donor deleted successfully.');

        return redirect(route('bloodDonors.index'));
    }
}
