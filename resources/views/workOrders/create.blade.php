@extends('layouts.dashboard')

@section('title')
  {{ 'Órdenes de trabajo' }}
@endsection

@section('dashboard_title')
  {{ 'Nueva orden de trabajo' }}
@endsection


@section('sidebar_title')
  {{ 'Menú' }}
@endsection



@section('sidebar_options')
  {{-- <div class="menuItem"><a class="menuSubItem" style="color: white;" href="/services/create">Crear</a></div> --}}
@endsection




@section('dashboard_content')
<form class="" action="/works/create" method="post">
  @csrf
  <div class="form-group row ">
    <label for="service_Id" class="col-md-4 col-form-label text-md-right">{{ __('Orden de servicio') }}</label>

    <div class="col-md-6">
      <input type="text" class="form-control" name="service_Id" value="{{ session('serviceId') }}" >
    </div>
  </div>

{{-- Item a reparar --}}
  <div class="form-group row ">
    <label for="item" class="col-md-4 col-form-label text-md-right">{{ __('Item') }}</label>

    <div class="col-md-6">
      <input type="text" class="form-control {{ $errors->has('item') ? ' is-invalid' : '' }}" name="item" value="{{ old('item') }}"
      placeholder="Ingrese el ID del Item a reparar">

      @if ($errors->has('item'))
        <span class="invalid-feedback">
          <strong>{{ $errors->first('item') }}</strong>
        </span>
      @endif
    </div>
  </div>

{{-- Descripción --}}
  <div class="form-group row ">
    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

    <div class="col-md-6">
      <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"
        rows="10"  placeholder="Describa los procesos que requiere el item a intervenir."
      ></textarea>

      @if ($errors->has('description'))
        <span class="invalid-feedback">
          <strong>{{ $errors->first('description') }}</strong>
        </span>
      @endif
    </div>
  </div>

{{-- Observación --}}
  <div class="form-group row ">
    <label for="remark" class="col-md-4 col-form-label text-md-right">{{ __('Observación') }}</label>

    <div class="col-md-6">
      <textarea type="text" class="form-control" name="remark"
        placeholder="Escriba cualquier observación sobre el trabajo a realizar, sólo si se requiere."
      ></textarea>

    </div>
  </div>


{{-- Botones --}}
  <div class="form-group row mb-0 justify-content-center">
    <div class="col-md-3">
      <button type="submit" class="btn btn-primary">Guardar y listar</button>
    </div>

    <div class="col-md-3">
      <button type="button" class="btn btn-secondary">Guardar y crear</button>
    </div>
  </div>
</form>
@endsection


@section('scripts')

@endsection
