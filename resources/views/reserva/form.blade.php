<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Cliente') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $reserva?->name) }}" id="name" placeholder="Cliente">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="phone" class="form-label">{{ __('Contato') }}</label>
            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                value="{{ old('phone', $reserva?->phone) }}" id="phone" placeholder="(00) 00000-0000">
            {!! $errors->first('phone', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date" class="form-label">{{ __('Data Reserva') }}</label>
            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                value="{{ old('date', $reserva?->date) }}" id="date" placeholder="00/00/0000">
            {!! $errors->first('date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start" class="form-label">{{ __('Período') }}</label>
            <input type="time" name="start" class="form-control @error('start') is-invalid @enderror"
                value="{{ old('start', $reserva?->start) }}" id="start" placeholder="00:00">
            <input type="time" name="end" class="form-control @error('end') is-invalid @enderror"
                value="{{ old('end', $reserva?->end) }}" id="end" placeholder="00:00">
            {!! $errors->first('start', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            {!! $errors->first('end', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>
