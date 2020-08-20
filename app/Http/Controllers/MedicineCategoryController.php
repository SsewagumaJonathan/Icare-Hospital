<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicineCategoryRequest;
use App\Http\Requests\UpdateMedicineCategoryRequest;
use App\Repositories\MedicineCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicineCategoryController extends AppBaseController
{
    /** @var  MedicineCategoryRepository */
    private $medicineCategoryRepository;

    public function __construct(MedicineCategoryRepository $medicineCategoryRepo)
    {
        $this->medicineCategoryRepository = $medicineCategoryRepo;
    }

    /**
     * Display a listing of the MedicineCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $medicineCategories = $this->medicineCategoryRepository->all();

        return view('medicine_categories.index')
            ->with('medicineCategories', $medicineCategories);
    }

    /**
     * Show the form for creating a new MedicineCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('medicine_categories.create');
    }

    /**
     * Store a newly created MedicineCategory in storage.
     *
     * @param CreateMedicineCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicineCategoryRequest $request)
    {
        $input = $request->all();

        $medicineCategory = $this->medicineCategoryRepository->create($input);

        Flash::success('Medicine Category saved successfully.');

        return redirect(route('medicineCategories.index'));
    }

    /**
     * Display the specified MedicineCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicineCategory = $this->medicineCategoryRepository->find($id);

        if (empty($medicineCategory)) {
            Flash::error('Medicine Category not found');

            return redirect(route('medicineCategories.index'));
        }

        return view('medicine_categories.show')->with('medicineCategory', $medicineCategory);
    }

    /**
     * Show the form for editing the specified MedicineCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicineCategory = $this->medicineCategoryRepository->find($id);

        if (empty($medicineCategory)) {
            Flash::error('Medicine Category not found');

            return redirect(route('medicineCategories.index'));
        }

        return view('medicine_categories.edit')->with('medicineCategory', $medicineCategory);
    }

    /**
     * Update the specified MedicineCategory in storage.
     *
     * @param int $id
     * @param UpdateMedicineCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicineCategoryRequest $request)
    {
        $medicineCategory = $this->medicineCategoryRepository->find($id);

        if (empty($medicineCategory)) {
            Flash::error('Medicine Category not found');

            return redirect(route('medicineCategories.index'));
        }

        $medicineCategory = $this->medicineCategoryRepository->update($request->all(), $id);

        Flash::success('Medicine Category updated successfully.');

        return redirect(route('medicineCategories.index'));
    }

    /**
     * Remove the specified MedicineCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicineCategory = $this->medicineCategoryRepository->find($id);

        if (empty($medicineCategory)) {
            Flash::error('Medicine Category not found');

            return redirect(route('medicineCategories.index'));
        }

        $this->medicineCategoryRepository->delete($id);

        Flash::success('Medicine Category deleted successfully.');

        return redirect(route('medicineCategories.index'));
    }
}
