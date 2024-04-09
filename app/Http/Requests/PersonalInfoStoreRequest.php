<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'id_card' => ['required', 'string', 'max:15', 'unique:personal_infos,id_card'],
            'rank' => ['required', 'in:S1,S2,SM3,SM2,SM1,SA,SS,TTE,TC,PTTE,TF,CAP,TNMY,CC,TCNEL,CF,CNEL,CN,GB,CA,GD,VA,MG,A,GJ,AJ'],
            'last_name' => ['required', 'string', 'max:60'],
            'first_name' => ['required', 'string', 'max:60'],
            'request_office_number' => ['required', 'string', 'max:15'],
            'office_origin' => ['required', 'string', 'max:150'],
            'request_signer' => ['required', 'string', 'max:60'],
            'request_type' => ['required', 'string', 'max:150'],
            'document_status' => ['required', 'in:OFICIO_RECIBIDO,PROCESANDO,PARA_LA_FIRMA,EN_DESPACHO,ENTREGADO'],
            'issued_office_number' => ['required', 'string', 'max:15'],
            'dgcim_opinion_issued' => ['required', 'in:FAVORABLE,NO_FAVORABLE'],
            'passport_number' => ['required', 'string', 'max:15'],
            'visa_number' => ['required', 'string', 'max:15'],
            'place_of_birth' => ['required', 'string', 'max:200'],
            'date_of_birth' => ['required', 'date'],
            'home_address' => ['required', 'string'],
            'home_phone' => ['required', 'string', 'max:15'],
            'mobile_phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'email', 'max:60', 'unique:personal_infos,email'],
            'work_unit' => ['required', 'string', 'max:150'],
            'position_held' => ['required', 'string', 'max:150'],
            'work_unit_phone_number' => ['required', 'string', 'max:15'],
            'travel_reason' => ['required', 'string', 'max:200'],
            'country_to_visit' => ['required', 'string', 'max:60'],
            'scale' => ['required', 'string', 'max:60'],
            'departure_date' => ['required', 'date'],
            'return_date' => ['required', 'date'],
            'travel_destination_address' => ['required', 'string'],
            'passport_submission' => ['required', 'in:SI,NO'],
            'observation' => ['nullable', 'string'],
        ];
    }
}
