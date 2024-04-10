<?php

namespace App\Services;

use App\Exports\ExportToExcel;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AuxiliaryService
{
    private $headers = [
        'CEDULA',
        'GRADO/JERARQUIA',
        'APELLIDOS',
        'NOMBRES',
        'Nº DE OFICIO SOLICITUD',
        'LUGAR DE PROCEDENCIA DEL OFICIO',
        'FIRMANTE DE LA SOLICITUD',
        'TIPO DE SOLICITUD',
        'ESTATUS DEL DOCUMENTO',
        'Nº DE OFICIO EMITIDO',
        'OPINION EMITIDA DGCIM',
        'Nº DE PASAPORTE',
        'Nº DE LA VISA',
        'LUGAR DE NACIMIENTO',
        'FECHA DE NACIMIENTO',
        'DIRECCIÓN DE HABITACIÓN',
        'TELEFONO DE HABITACION',
        'TELEFONO MOVIL',
        'CORREO ELECTRONICO',
        'UNIDAD DONDE LABORA',
        'CARGO QUE OCUPA',
        'Nº DE TELEFONO DE LA UNIDAD DONDE LABORA',
        'MOTIVO DEL VIAJE',
        'PAIS A VISITAR',
        'ESCALA',
        'FECHA DE SALIDA',
        'FECHA DE REGRESO',
        'DIRECCIÓN  DE LUGAR DURANTE EL VIAJE',
        'CONSIGNACION DE PASAPORTE',
        'OBSERVACIÓN',
    ];

    private $searchables = [
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

    public function query(array $conditions)
    {
        return PersonalInfo::query()
            ->when($conditions['search'], function ($query) use ($conditions) {
                $query->whereAny($this->searchables, 'LIKE', "%{$conditions['search']}%");
            });
    }

    public function export_to_excel(Request $request)
    {
        $data = $this->query($this->make($request))->get()->makeHidden('id', 'created_at', 'updated_at');
        return Excel::download(new ExportToExcel($data, $this->headers), now('America/Caracas')->format('d-m-Y His') . ' Listado de datos del personal.xlsx');
    }

    public function make(Request $request)
    {
        $conditions['search'] = $request->input('search', false);
        return $conditions;
    }
}
