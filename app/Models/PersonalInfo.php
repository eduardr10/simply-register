<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $table = 'personal_info';

    protected $fillable = [
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
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_of_birth' => 'date',
        'departure_date' => 'date',
        'return_date' => 'date',
    ];
}
