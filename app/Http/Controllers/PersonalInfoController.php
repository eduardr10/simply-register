<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalInfoStoreRequest;
use App\Http\Requests\PersonalInfoUpdateRequest;
use App\Models\PersonalInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PersonalInfoController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->input('search');
        $personalInfo = PersonalInfo::query()
            ->when($search, function ($query, $search) {
                $query->whereAny([
                    'id_card',
                    'rank',
                    'last_name',
                    'first_name',
                    'request_office_number',
                    'office_origin',
                    'request_signer',
                    'request_type',
                    'document_status',
                    'issued_office_number',
                    'dgcim_opinion_issued',
                    'passport_number',
                    'visa_number',
                    'place_of_birth',
                    'date_of_birth',
                    'home_address',
                    'home_phone',
                    'mobile_phone',
                    'email',
                    'work_unit',
                    'position_held',
                    'work_unit_phone_number',
                    'travel_reason',
                    'country_to_visit',
                    'scale',
                    'departure_date',
                    'return_date',
                    'travel_destination_address',
                    'passport_submission',
                    'observation',
                ], 'LIKE', "%{$search}%");
            })
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
