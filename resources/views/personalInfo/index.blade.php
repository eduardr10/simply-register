@extends('components.layouts.app')


@section('content')
@use('Illuminate\Support\Str')
<div class="row justify-content-end">
    <div class="col-auto">
        <form class="form-inline" action="{{ route('personal-info.index') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" id="search" name="search" value="{{ request()->input('search') }}" placeholder="Buscar">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="table-responsive mt-4">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cédula de Identidad</th>
                <th scope="col">Rango</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Número de Oficina de Solicitud</th>
                <th scope="col">Oficina de Origen</th>
                <th scope="col">Firmante de la Solicitud</th>
                <th scope="col">Tipo de Solicitud</th>
                <th scope="col">Estado del Documento</th>
                <th scope="col">Número de Oficina Emitida</th>
                <th scope="col">Opinión DGCIM Emitida</th>
                <th scope="col">Número de Pasaporte</th>
                <th scope="col">Número de Visa</th>
                <th scope="col">Lugar de Nacimiento</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Dirección de Hogar</th>
                <th scope="col">Teléfono de Hogar</th>
                <th scope="col">Teléfono Móvil</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Unidad de Trabajo</th>
                <th scope="col">Cargo Desempeñado</th>
                <th scope="col">Número de Teléfono de la Unidad de Trabajo</th>
                <th scope="col">Motivo de Viaje</th>
                <th scope="col">País a Visitar</th>
                <th scope="col">Escala</th>
                <th scope="col">Fecha de Salida</th>
                <th scope="col">Fecha de Retorno</th>
                <th scope="col">Dirección de Destino de Viaje</th>
                <th scope="col">Entrega de Pasaporte</th>
                <th scope="col">Observación</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personalInfo as $info)
            <tr>
                <td title="{{$loop->index}}">{!! Str::limit($loop->index + 1, 25) !!}</td>
                <td title="{{$info->id_card}}">{!! Str::limit($info->id_card, 25) !!}</td>
                <td title="{{$info->rank}}">{!! Str::limit($info->rank, 25) !!}</td>
                <td title="{{$info->last_name}}">{!! Str::limit($info->last_name, 25) !!}</td>
                <td title="{{$info->first_name}}">{!! Str::limit($info->first_name, 25) !!}</td>
                <td title="{{$info->request_office_number}}">{!! Str::limit($info->request_office_number, 25) !!}</td>
                <td title="{{$info->office_origin}}">{!! Str::limit($info->office_origin, 25) !!}</td>
                <td title="{{$info->request_signer}}">{!! Str::limit($info->request_signer, 25) !!}</td>
                <td title="{{$info->request_type}}">{!! Str::limit($info->request_type, 25) !!}</td>
                <td title="{{$info->document_status}}">{!! Str::limit($info->document_status, 25) !!}</td>
                <td title="{{$info->issued_office_number}}">{!! Str::limit($info->issued_office_number, 25) !!}</td>
                <td title="{{$info->dgcim_opinion_issued}}">{!! Str::limit($info->dgcim_opinion_issued, 25) !!}</td>
                <td title="{{$info->passport_number}}">{!! Str::limit($info->passport_number, 25) !!}</td>
                <td title="{{$info->visa_number}}">{!! Str::limit($info->visa_number, 25) !!}</td>
                <td title="{{$info->place_of_birth}}">{!! Str::limit($info->place_of_birth, 25) !!}</td>
                <td title="{{$info->date_of_birth}}">{!! Str::limit($info->date_of_birth, 25) !!}</td>
                <td title="{{$info->home_address}}">{!! Str::limit($info->home_address, 25) !!}</td>
                <td title="{{$info->home_phone}}">{!! Str::limit($info->home_phone, 25) !!}</td>
                <td title="{{$info->mobile_phone}}">{!! Str::limit($info->mobile_phone, 25) !!}</td>
                <td title="{{$info->email}}">{!! Str::limit($info->email, 25) !!}</td>
                <td title="{{$info->work_unit}}">{!! Str::limit($info->work_unit, 25) !!}</td>
                <td title="{{$info->position_held}}">{!! Str::limit($info->position_held, 25) !!}</td>
                <td title="{{$info->work_unit_phone_number}}">{!! Str::limit($info->work_unit_phone_number, 25) !!}</td>
                <td title="{{$info->travel_reason}}">{!! Str::limit($info->travel_reason, 25) !!}</td>
                <td title="{{$info->country_to_visit}}">{!! Str::limit($info->country_to_visit, 25) !!}</td>
                <td title="{{$info->scale}}">{!! Str::limit($info->scale, 25) !!}</td>
                <td title="{{$info->departure_date}}">{!! Str::limit($info->departure_date, 25) !!}</td>
                <td title="{{$info->return_date}}">{!! Str::limit($info->return_date, 25) !!}</td>
                <td title="{{$info->travel_destination_address}}">{!! Str::limit($info->travel_destination_address, 25) !!}</td>
                <td title="{{$info->passport_submission}}">{!! Str::limit($info->passport_submission, 25) !!}</td>
                <td title="{{$info->observation}}">{!! Str::limit($info->observation, 25) !!}</td>
                <td>
                    <div class="row">
                        <div class="col-12 d-flex">
                            <a href="{{ route('personal-info.edit', $info) }}" class="btn btn-warning mx-2">Editar</a>
                            <form action="{{ route('personal-info.destroy', $info) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="pagination justify-content-center">
    {{ $personalInfo->links() }}
</div>
@endsection