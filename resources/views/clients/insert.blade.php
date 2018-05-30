@extends('layouts.app')

@section('title')
  {{ 'Registro clientes' }}
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Registro de clientes') }}</div>

          <div class="card-body">

            <form method="POST" action="/clients/create">
              @csrf

{{-- ID --}}
              <div class="form-group row">
                <label for="ide" class="col-md-4 col-form-label text-md-right">{{ __('NIT o CC') }}</label>

                <div class="col-md-6">
                  <input id="ide" type="text" class="form-control{{ $errors->has('ide') ? ' is-invalid' : '' }}" name="ide" value="{{ old('ide') }}">

                  @if ($errors->has('ide'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('ide') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Nombre --}}
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre o Razón Social') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                  @if ($errors->has('name'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Direccion --}}
              <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                <div class="col-md-6">
                  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}">

                  @if ($errors->has('address'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Ciudad --}}
              <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                <div class="col-md-6">
                  <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}">

                  @if ($errors->has('city'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('city') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- phone --}}
              <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                <div class="col-md-4">
                  <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" >

                  @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="col-md-2">
                  <input id="ext" type="text" placeholder="Ext" class="form-control{{ $errors->has('ext') ? ' is-invalid' : '' }}" name="ext" value="{{ old('ext') }}" >

                  @if ($errors->has('ext'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('ext') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- cellphone --}}
              <div class="form-group row">
                <label for="cellphone" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                <div class="col-md-6">
                  <input id="cellphone" type="number" class="form-control{{ $errors->has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}" >

                  @if ($errors->has('cellphone'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('cellphone') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- contact_name --}}
              <div class="form-group row">
                <label for="contact_name" class="col-md-4 col-form-label text-md-right">{{ __('Contacto') }}</label>

                <div class="col-md-6">
                  <input id="contact_name" type="text" class="form-control" name="contact_name">
                </div>
              </div>

{{-- email --}}
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- botón --}}
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Registrar') }}
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
