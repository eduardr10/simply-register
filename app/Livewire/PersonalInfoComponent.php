<?php

namespace App\Livewire;

use Livewire\Component;

class PersonalInfoComponent extends Component
{
    public $id_card;
    public $rank;
    public $last_name;
    public $first_name;
    public $request_office_number;
    public $office_origin;
    public $request_signer;
    public $request_type;
    public $document_status;
    public $issued_office_number;
    public $dgcim_opinion_issued;
    public $passport_number;
    public $visa_number;
    public $place_of_birth;
    public $date_of_birth;
    public $home_address;
    public $home_phone;
    public $mobile_phone;
    public $email;
    public $work_unit;
    public $position_held;
    public $work_unit_phone_number;
    public $travel_reason;
    public $country_to_visit;
    public $scale;
    public $departure_date;
    public $return_date;
    public $travel_destination_address;
    public $passport_submission;
    public $observation;
    public $rows = [];

    public function render()
    {
        return view('livewire.personal-info-component');
    }

    public function store()
    {
        // Guardar los datos en la base de datos
        // ... (Tu lógica para guardar en la base de datos)

        // Validar los datos antes de guardar (opcional)

        // Agregar el nuevo registro a la tabla
        $this->rows[] = [
            'id_card' => $this->id_card,
            'rank' => $this->rank,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'request_office_number' => $this->request_office_number,
            'office_origin' => $this->office_origin,
            'request_signer' => $this->request_signer,
            'request_type' => $this->request_type,
            'document_status' => $this->document_status,
            'issued_office_number' => $this->issued_office_number,
            'dgcim_opinion_issued' => $this->dgcim_opinion_issued,
            'passport_number' => $this->passport_number,
            'visa_number' => $this->visa_number,
            'place_of_birth' => $this->place_of_birth,
            'date_of_birth' => $this->date_of_birth,
            'home_address' => $this->home_address,
            'home_phone' => $this->home_phone,
            'mobile_phone' => $this->mobile_phone,
            'email' => $this->email,
            'work_unit' => $this->work_unit,
            'position_held' => $this->position_held,
            'work_unit_phone_number' => $this->work_unit_phone_number,
            'travel_reason' => $this->travel_reason,
            'country_to_visit' => $this->country_to_visit,
            'scale' => $this->scale,
            'departure_date' => $this->departure_date,
            'return_date' => $this->return_date,
            'travel_destination_address' => $this->travel_destination_address,
            'passport_submission' => $this->passport_submission,
            'observation' => $this->observation,
        ];

        $this->resetExcept('rows');
    }
}


