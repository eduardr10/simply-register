@extends('components.layouts.app')
@section('content')
<form action="{!! route('personal-info.update', $personalInfo) !!}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_name">Apellido:</label>
                <input value="{{ old('last_name', $personalInfo->last_name) }}" type="text" class="form-control" id="last_name" name="last_name" maxlength="60" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="first_name">Nombre:</label>
                <input value="{{ old('first_name', $personalInfo->first_name) }}" type="text" class="form-control" id="first_name" name="first_name" maxlength="60" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="id_card">Cédula de Identidad:</label>
                <input value="{{ old('id_card', $personalInfo->id_card) }}" type="text" class="form-control" id="id_card" name="id_card" maxlength="15" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="rank">Rango:</label>
                <select class="form-control" id="rank" name="rank" required>
                    <option value="S1" {{ old('rank', $personalInfo->rank) == 'S1' ? 'selected' : '' }}>S1</option>
                    <option value="S2" {{ old('rank', $personalInfo->rank) == 'S2' ? 'selected' : '' }}>S2</option>
                    <option value="SM3" {{ old('rank', $personalInfo->rank) == 'SM3' ? 'selected' : '' }}>SM3</option>
                    <option value="SM2" {{ old('rank', $personalInfo->rank) == 'SM2' ? 'selected' : '' }}>SM2</option>
                    <option value="SM1" {{ old('rank', $personalInfo->rank) == 'SM1' ? 'selected' : '' }}>SM1</option>
                    <option value="SA" {{ old('rank', $personalInfo->rank) == 'SA' ? 'selected' : '' }}>SA</option>
                    <option value="SS" {{ old('rank', $personalInfo->rank) == 'SS' ? 'selected' : '' }}>SS</option>
                    <option value="TTE" {{ old('rank', $personalInfo->rank) == 'TTE' ? 'selected' : '' }}>TTE</option>
                    <option value="TC" {{ old('rank', $personalInfo->rank) == 'TC' ? 'selected' : '' }}>TC</option>
                    <option value="PTTE" {{ old('rank', $personalInfo->rank) == 'PTTE' ? 'selected' : '' }}>PTTE</option>
                    <option value="TF" {{ old('rank', $personalInfo->rank) == 'TF' ? 'selected' : '' }}>TF</option>
                    <option value="CAP" {{ old('rank', $personalInfo->rank) == 'CAP' ? 'selected' : '' }}>CAP</option>
                    <option value="TNMY" {{ old('rank', $personalInfo->rank) == 'TNMY' ? 'selected' : '' }}>TNMY</option>
                    <option value="CC" {{ old('rank', $personalInfo->rank) == 'CC' ? 'selected' : '' }}>CC</option>
                    <option value="TCNEL" {{ old('rank', $personalInfo->rank) == 'TCNEL' ? 'selected' : '' }}>TCNEL</option>
                    <option value="CF" {{ old('rank', $personalInfo->rank) == 'CF' ? 'selected' : '' }}>CF</option>
                    <option value="CNEL" {{ old('rank', $personalInfo->rank) == 'CNEL' ? 'selected' : '' }}>CNEL</option>
                    <option value="CN" {{ old('rank', $personalInfo->rank) == 'CN' ? 'selected' : '' }}>CN</option>
                    <option value="GB" {{ old('rank', $personalInfo->rank) == 'GB' ? 'selected' : '' }}>GB</option>
                    <option value="CA" {{ old('rank', $personalInfo->rank) == 'CA' ? 'selected' : '' }}>CA</option>
                    <option value="GD" {{ old('rank', $personalInfo->rank) == 'GD' ? 'selected' : '' }}>GD</option>
                    <option value="VA" {{ old('rank', $personalInfo->rank) == 'VA' ? 'selected' : '' }}>VA</option>
                    <option value="MG" {{ old('rank', $personalInfo->rank) == 'MG' ? 'selected' : '' }}>MG</option>
                    <option value="A" {{ old('rank', $personalInfo->rank) == 'A' ? 'selected' : '' }}>A</option>
                    <option value="GJ" {{ old('rank', $personalInfo->rank) == 'GJ' ? 'selected' : '' }}>GJ</option>
                    <option value="AJ" {{ old('rank', $personalInfo->rank) == 'AJ' ? 'selected' : '' }}>AJ</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="request_office_number">Número de Oficina de Solicitud:</label>
                <input value="{{ old('request_office_number', $personalInfo->request_office_number) }}" type="text" class="form-control" id="request_office_number" name="request_office_number" maxlength="15" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="office_origin">Lugar de procedencia del documento:</label>
                <input value="{{ old('office_origin', $personalInfo->office_origin) }}" type="text" class="form-control" id="office_origin" name="office_origin" maxlength="150" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="request_signer">Firmante de la Solicitud:</label>
                <input value="{{ old('request_signer', $personalInfo->request_signer) }}" type="text" class="form-control" id="request_signer" name="request_signer" maxlength="60" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="request_type">Tipo de Solicitud:</label>
                <input value="{{ old('request_type', $personalInfo->request_type) }}" type="text" class="form-control" id="request_type" name="request_type" maxlength="150" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="document_status">Estado del Documento:</label>
                <select class="form-control" id="document_status" name="document_status" required>
                    <option value="OFICIO_RECIBIDO" {{ $personalInfo->document_status == 'OFICIO_RECIBIDO' ? 'selected' : '' }}>OFICIO RECIBIDO</option>
                    <option value="PROCESANDO" {{ $personalInfo->document_status == 'PROCESANDO' ? 'selected' : '' }}>PROCESANDO</option>
                    <option value="PARA_LA_FIRMA" {{ $personalInfo->document_status == 'PARA_LA_FIRMA' ? 'selected' : '' }}>PARA LA FIRMA</option>
                    <option value="EN_DESPACHO" {{ $personalInfo->document_status == 'EN_DESPACHO' ? 'selected' : '' }}>EN DESPACHO</option>
                    <option value="ENTREGADO" {{ $personalInfo->document_status == 'ENTREGADO' ? 'selected' : '' }}>ENTREGADO</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="issued_office_number">Número de Oficina Emitido:</label>
                <input value="{{ old('issued_office_number', $personalInfo->issued_office_number) }}" type="text" class="form-control" id="issued_office_number" name="issued_office_number" maxlength="15" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="dgcim_opinion_issued">Opinión Emitida por DGCIM:</label>
                <select class="form-control" id="dgcim_opinion_issued" name="dgcim_opinion_issued" required>
                    <option value="FAVORABLE" {{ $personalInfo->gdcim_opinion_issued == 'FAVORABLE' ? 'selected' : '' }}>FAVORABLE</option>
                    <option value="NO_FAVORABLE" {{ $personalInfo->gdcim_opinion_issued == 'NO_FAVORABLE' ? 'selected' : '' }}>NO FAVORABLE</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="passport_number">Número de Pasaporte:</label>
                <input value="{{ old('passport_number', $personalInfo->passport_number) }}" type="text" class="form-control" id="passport_number" name="passport_number" maxlength="15">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="visa_number">Número de Visa:</label>
                <input value="{{ old('visa_number', $personalInfo->visa_number) }}" type="text" class="form-control" id="visa_number" name="visa_number" maxlength="15">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="place_of_birth">Lugar de Nacimiento:</label>
                <input value="{{ old('place_of_birth', $personalInfo->place_of_birth) }}" type="text" class="form-control" id="place_of_birth" name="place_of_birth" maxlength="200" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="date_of_birth">Fecha de Nacimiento:</label>
                <input type="date" value="{{ $personalInfo->date_of_birth->format('Y-m-d') }}" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="home_address">Dirección de Domicilio:</label>
                <textarea class="form-control" id="home_address" name="home_address" rows="3" required>{{ $personalInfo->home_address }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="home_phone">Teléfono de Casa:</label>
                <input value="{{ old('home_phone', $personalInfo->home_phone) }}" type="number" class="form-control" id="home_phone" name="home_phone" maxlength="15">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="mobile_phone">Teléfono Móvil:</label>
                <input value="{{ old('mobile_phone', $personalInfo->mobile_phone) }}" type="number" class="form-control" id="mobile_phone" name="mobile_phone" maxlength="15">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input value="{{ old('email', $personalInfo->email) }}" type="email" class="form-control" id="email" name="email" maxlength="60" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="work_unit">Unidad de Trabajo:</label>
                <input value="{{ old('work_unit', $personalInfo->work_unit) }}" type="text" class="form-control" id="work_unit" name="work_unit" maxlength="150" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="position_held">Cargo Desempeñado:</label>
                <input value="{{ old('position_held', $personalInfo->position_held) }}" type="text" class="form-control" id="position_held" name="position_held" maxlength="150" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="work_unit_phone_number">Teléfono de la Unidad de Trabajo:</label>
                <input value="{{ old('work_unit_phone_number', $personalInfo->work_unit_phone_number) }}" type="number" class="form-control" id="work_unit_phone_number" name="work_unit_phone_number" maxlength="15">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="travel_reason">Motivo del Viaje:</label>
                <input value="{{ old('travel_reason', $personalInfo->travel_reason) }}" type="text" class="form-control" id="travel_reason" name="travel_reason" maxlength="200" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="country_to_visit">País a Visitar:</label>
                <input value="{{ old('country_to_visit', $personalInfo->country_to_visit) }}" type="text" class="form-control" id="country_to_visit" name="country_to_visit" maxlength="60" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="scale">Escala:</label>
                <input value="{{ old('scale', $personalInfo->scale) }}" type="text" class="form-control" id="scale" name="scale" maxlength="60" required>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="departure_date">Fecha de Salida:</label>
                <input type="date" value="{{ $personalInfo->departure_date->format('Y-m-d') }}" class="form-control" id="departure_date" name="departure_date" required>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="return_date">Fecha de Regreso:</label>
                <input type="date" value="{{ $personalInfo->return_date->format('Y-m-d') }}" class="form-control" id="return_date" name="return_date" required>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="passport_submission">Presentación de Pasaporte:</label>
                <select class="form-control" id="passport_submission" name="passport_submission" required>
                    <option value="SI" {{ $personalInfo->passport_submission == 'SI' ? 'selected' : '' }}>SI</option>
                    <option value="NO" {{ $personalInfo->passport_submission == 'NO' ? 'selected' : '' }}>NO</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="travel_destination_address">Dirección de Destino del Viaje:</label>
                <textarea class="form-control" id="travel_destination_address" name="travel_destination_address" rows="3" required>{{ $personalInfo->travel_destination_address }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="observation">Observación:</label>
                <textarea class="form-control" id="observation" name="observation" rows="3">{{ $personalInfo->observation }}</textarea>
            </div>
        </div>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection
