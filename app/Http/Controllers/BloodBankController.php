<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBloodBankRequest;
use App\Http\Requests\UpdateBloodBankRequest;
use App\Repositories\BloodBankRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BloodBankController extends AppBaseController
{
    /** @var  BloodBankRepository */
    private $bloodBankRepository;

    public function __construct(BloodBankRepository $bloodBankRepo)
    {
        $this->bloodBankRepository = $bloodBankRepo;
    }

    /**
     * Display a listing of the BloodBank.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bloodBanks = $this->bloodBankRepository->all();

        return view('blood_banks.index')
            ->with('bloodBanks', $bloodBanks);
    }

    /**
     * Show the form for creating a new BloodBank.
     *
     * @return Response
     */
    public function create()
    {
        return view('blood_banks.create');
    }

    /**
     * Store a newly created BloodBank in storage.
     *
     * @param CreateBloodBankRequest $request
     *
     * @return Response
     */
    public function store(CreateBloodBankRequest $request)
    {
        $input = $request->all();

        $bloodBank = $this->bloodBankRepository->create($input);

        Flash::success('Blood Bank saved successfully.');

        return redirect(route('bloodBanks.index'));
    }

    /**
     * Display the specified BloodBank.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bloodBank = $this->bloodBankRepository->find($id);

        if (empty($bloodBank)) {
            Flash::error('Blood Bank not found');

            return redirect(route('bloodBanks.index'));
        }

        return view('blood_banks.show')->with('bloodBank', $bloodBank);
    }

    /**
     * Show the form for editing the specified BloodBank.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bloodBank = $this->bloodBankRepository->find($id);

        if (empty($bloodBank)) {
            Flash::error('Blood Bank not found');

            return redirect(route('bloodBanks.index'));
        }

        return view('blood_banks.edit')->with('bloodBank', $bloodBank);
    }

    /**
     * Update the specified BloodBank in storage.
     *
     * @param int $id
     * @param UpdateBloodBankRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBloodBankRequest $request)
    {
        $bloodBank = $this->bloodBankRepository->find($id);

        if (empty($bloodBank)) {
            Flash::error('Blood Bank not found');

            return redirect(route('bloodBanks.index'));
        }

        $bloodBank = $this->bloodBankRepository->update($request->all(), $id);

        Flash::success('Blood Bank updated successfully.');

        return redirect(route('bloodBanks.index'));
    }

    /**
     * Remove the specified BloodBank from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bloodBank = $this->bloodBankRepository->find($id);

        if (empty($bloodBank)) {
            Flash::error('Blood Bank not found');

            return redirect(route('bloodBanks.index'));
        }

        $this->bloodBankRepository->delete($id);

        Flash::success('Blood Bank deleted successfully.');

        return redirect(route('bloodBanks.index'));
    }
}
