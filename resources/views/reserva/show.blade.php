@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? __('Show') . ' ' . __('Reserva') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Consulta de ') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Cliente:</strong>
                            {{ $reserva->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Contato:</strong>
                            {{ $reserva->phone }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Data Reserva:</strong>
                            {{ $reserva->date }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Início:</strong>
                            {{ $reserva->start }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Final:</strong>
                            {{ $reserva->end }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
