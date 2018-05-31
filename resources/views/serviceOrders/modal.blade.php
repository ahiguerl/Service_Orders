<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva orden</h5>
      </div>

      <div class="modal-body">
        <form action="/services/create" method="post">
          @csrf
          <div class="form-group row ">
            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>

            <div class="col-md-8">
              <input type="text" class="form-control {{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" placeholder="Ingrese el número de identificación">

              @if ($errors->has('id'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('id') }}</strong>
                </span>
              @endif
            </div>

          </div>
{{-- fin input --}}

{{-- botones --}}
          <div class="form-group row mb-0 justify-content-center">
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">Crear</button>
            </div>

            <div class="col-md-2">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
{{-- fin botones --}}

        </form>
      </div>

    </div>
  </div>
</div>
