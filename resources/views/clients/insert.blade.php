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
              <div class="form-group row ">
                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Nit') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}">

                  @if ($errors->has('id'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('id') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Name --}}
              <div class="form-group row ">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Razón Social') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                  @if ($errors->has('name'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Address --}}
              <div class="form-group row ">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}">

                  @if ($errors->has('address'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- City --}}
              <div class="form-group row ">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}">

                  @if ($errors->has('city'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('city') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Cellphone --}}
              <div class="form-group row ">
                <label for="cellphone" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('cellphone') ? ' is-invalid' : '' }}" name="cellphone" value="{{ old('cellphone') }}">

                  @if ($errors->has('cellphone'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('cellphone') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Phone --}}
              <div class="form-group row ">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                <div class="col-md-4">
                  <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

                  @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="col-md-2">
                  <input type="text" class="form-control {{ $errors->has('extension_number') ? ' is-invalid' : '' }}" name="extension_number" value="{{ old('extension_number') }}">

                  {{-- @if ($errors->has('extension_number'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('extension_number') }}</strong>
                    </span>
                  @endif --}}
                </div>
              </div>

{{-- Contact Name --}}
              <div class="form-group row ">
                <label for="contact_name" class="col-md-4 col-form-label text-md-right">{{ __('Contacto') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('contact_name') ? ' is-invalid' : '' }}" name="contact_name" value="{{ old('contact_name') }}">

                  @if ($errors->has('contact_name'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('contact_name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

{{-- Extension --}}
              {{-- <div class="form-group row ">
                <label for="extension_number" class="col-md-4 col-form-label text-md-right">{{ __('Extensión') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('extension_number') ? ' is-invalid' : '' }}" name="extension_number" value="{{ old('extension_number') }}">

                  @if ($errors->has('extension_number'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('extension_number') }}</strong>
                    </span>
                  @endif
                </div>
              </div> --}}

{{-- Email --}}
              <div class="form-group row ">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                <div class="col-md-6">
                  <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>



{{-- botón --}}
              <div class="form-group row mb-0 justify-content-center">
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Registrar') }}
                  </button>
                </div>

                <div class="col-md-2">
                  <a href="/dashboard" class="btn btn-danger">
                    {{ __('Cancelar') }}
                  </a>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
