@extends('components.layouts.app')
@section('content')

<div class="container-fluid" style="max-width: 75%;">
    <form action="{{ route('personal-info.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last_name">Apellido:</label>
                    <input value="{{ old('last_name') }}" type="text" class="form-control" id="last_name" name="last_name" maxlength="60" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name">Nombre:</label>
                    <input value="{{ old('first_name') }}" type="text" class="form-control" id="first_name" name="first_name" maxlength="60" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id_card">Cédula de Identidad:</label>
                    <input value="{{ old('id_card') }}" type="text" class="form-control" id="id_card" name="id_card" maxlength="15" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="rank">Rango:</label>
                    <select class="form-control" id="rank" name="rank" required>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="SM3">SM3</option>
                        <option value="SM2">SM2</option>
                        <option value="SM1">SM1</option>
                        <option value="SA">SA</option>
                        <option value="SS">SS</option>
                        <option value="TTE">TTE</option>
                        <option value="TC">TC</option>
                        <option value="PTTE">PTTE</option>
                        <option value="TF">TF</option>
                        <option value="CAP">CAP</option>
                        <option value="TNMY">TNMY</option>
                        <option value="CC">CC</option>
                        <option value="TCNEL">TCNEL</option>
                        <option value="CF">CF</option>
                        <option value="CNEL">CNEL</option>
                        <option value="CN">CN</option>
                        <option value="GB">GB</option>
                        <option value="CA">CA</option>
                        <option value="GD">GD</option>
                        <option value="VA">VA</option>
                        <option value="MG">MG</option>
                        <option value="A">A</option>
                        <option value="GJ">GJ</option>
                        <option value="AJ">AJ</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="request_office_number">Número de Oficina de Solicitud:</label>
                    <input value="{{ old('request_office_number') }}" type="text" class="form-control" id="request_office_number" name="request_office_number" maxlength="15" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="office_origin">Lugar de procedencia del documento:</label>
                    <input value="{{ old('office_origin') }}" type="text" class="form-control" id="office_origin" name="office_origin" maxlength="150" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="request_signer">Firmante de la Solicitud:</label>
                    <input value="{{ old('request_signer') }}" type="text" class="form-control" id="request_signer" name="request_signer" maxlength="60" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="request_type">Tipo de Solicitud:</label>
                    <input value="{{ old('request_type') }}" type="text" class="form-control" id="request_type" name="request_type" maxlength="150" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="document_status">Estado del Documento:</label>
                    <select class="form-control" id="document_status" name="document_status" required>
                        <option value="OFICIO_RECIBIDO">OFICIO RECIBIDO</option>
                        <option value="PROCESANDO">PROCESANDO</option>
                        <option value="PARA_LA_FIRMA">PARA LA FIRMA</option>
                        <option value="EN_DESPACHO">EN DESPACHO</option>
                        <option value="ENTREGADO">ENTREGADO</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="issued_office_number">Número de Oficina Emitido:</label>
                    <input value="{{ old('issued_office_number') }}" type="text" class="form-control" id="issued_office_number" name="issued_office_number" maxlength="15" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="dgcim_opinion_issued">Opinión Emitida por DGCIM:</label>
                    <select class="form-control" id="dgcim_opinion_issued" name="dgcim_opinion_issued" required>
                        <option value="FAVORABLE">FAVORABLE</option>
                        <option value="NO_FAVORABLE">NO FAVORABLE</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="passport_number">Número de Pasaporte:</label>
                    <input value="{{ old('passport_number') }}" type="text" class="form-control" id="passport_number" name="passport_number" maxlength="15">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="visa_number">Número de Visa:</label>
                    <input value="{{ old('visa_number') }}" type="text" class="form-control" id="visa_number" name="visa_number" maxlength="15">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="place_of_birth">Lugar de Nacimiento:</label>
                    <input value="{{ old('place_of_birth') }}" type="text" class="form-control" id="place_of_birth" name="place_of_birth" maxlength="200" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date_of_birth">Fecha de Nacimiento:</label>
                    <input type="date" value="{{ old('date_of_birth', now()->subYears(20)->format('Y-m-d')) }}" class="form-control" id="date_of_birth" name="date_of_birth" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="home_address">Dirección de Domicilio:</label>
                    <textarea class="form-control" id="home_address" name="home_address" rows="3" required>{{ old('home_address') }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="home_phone">Teléfono de Casa:</label>
                    <input value="{{ old('home_phone') }}" type="number" class="form-control" id="home_phone" name="home_phone" maxlength="15">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="mobile_phone">Teléfono Móvil:</label>
                    <input value="{{ old('mobile_phone') }}" type="number" class="form-control" id="mobile_phone" name="mobile_phone" maxlength="15">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input value="{{ old('email') }}" type="email" class="form-control" id="email" name="email" maxlength="60" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="work_unit">Unidad de Trabajo:</label>
                    <input value="{{ old('work_unit') }}" type="text" class="form-control" id="work_unit" name="work_unit" maxlength="150" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="position_held">Cargo Desempeñado:</label>
                    <input value="{{ old('position_held') }}" type="text" class="form-control" id="position_held" name="position_held" maxlength="150" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="work_unit_phone_number">Teléfono de la Unidad de Trabajo:</label>
                    <input value="{{ old('work_unit_phone_number') }}" type="number" class="form-control" id="work_unit_phone_number" name="work_unit_phone_number" maxlength="15">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="travel_reason">Motivo del Viaje:</label>
                    <input value="{{ old('travel_reason') }}" type="text" class="form-control" id="travel_reason" name="travel_reason" maxlength="200" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="country_to_visit">País a Visitar:</label>
                    <input value="{{ old('country_to_visit') }}" type="text" class="form-control" id="country_to_visit" name="country_to_visit" maxlength="60" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="scale">Escala:</label>
                    <input value="{{ old('scale') }}" type="text" class="form-control" id="scale" name="scale" maxlength="60" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="departure_date">Fecha de Salida:</label>
                    <input type="date" value="{{ old('departure_date', now()->format('Y-m-d')) }}" class="form-control" id="departure_date" name="departure_date" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="return_date">Fecha de Regreso:</label>
                    <input type="date" value="{{ old('return_date', now()->addDays(7)->format('Y-m-d')) }}" class="form-control" id="return_date" name="return_date" required>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label for="passport_submission">Pasaporte:</label>
                    <select class="form-control" id="passport_submission" name="passport_submission" required>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="travel_destination_address">Dirección de Destino del Viaje:</label>
                    <textarea class="form-control" id="travel_destination_address" name="travel_destination_address" rows="3" required>{{ old('travel_destination_address') }}</textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="observation">Observación:</label>
                    <textarea class="form-control" id="observation" name="observation" rows="3">{{ old('observation') }}</textarea>
                </div>
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

</div>
@endsection