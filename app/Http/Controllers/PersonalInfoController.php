<?php

namespace App\Http\Controllers;

use App\Exports\ExportToExcel;
use App\Http\Requests\PersonalInfoStoreRequest;
use App\Http\Requests\PersonalInfoUpdateRequest;
use App\Models\PersonalInfo;
use App\Services\AuxiliaryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class PersonalInfoController extends Controller
{
    public function __construct(private AuxiliaryService $auxiliaryService) {}

    public function index(Request $request): View
    {
        $conditions = $this->auxiliaryService->make($request);
        $personalInfo = $this->auxiliaryService->query($conditions)
            ->paginate(12);

        return view('personalInfo.index', compact('personalInfo'));
    }

    public function create(Request $request): View
    {
        return view('personalInfo.create');
    }

    public function store(PersonalInfoStoreRequest $request): RedirectResponse
    {
        $personalInfo = PersonalInfo::create($request->validated());

        return redirect()->route('personal-info.index');
    }

    public function show(Request $request, PersonalInfo $personalInfo): View
    {
        return view('personalInfo.show', compact('personalInfo'));
    }

    public function edit(Request $request, PersonalInfo $personalInfo): View
    {
        return view('personalInfo.edit', compact('personalInfo'));
    }

    public function update(PersonalInfoUpdateRequest $request, PersonalInfo $personalInfo): RedirectResponse
    {
        $personalInfo->update($request->validated());

        return redirect()
            ->route('personal-info.index')
            ->with('success', 'Datos actualizados de manera correcta.');
    }

    public function destroy(Request $request, PersonalInfo $personalInfo): RedirectResponse
    {
        $personalInfo->delete();

        return redirect()->route('personal-info.index');
    }

}
