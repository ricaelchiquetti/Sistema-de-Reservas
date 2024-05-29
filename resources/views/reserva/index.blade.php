@extends('layouts.app')

@section('template_title')
    Reservas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservas') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('reservas.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nova Reserva') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Cliente</th>
                                        <th>Contato</th>
                                        <th>Data da Reserva</th>
                                        <th>Início</th>
                                        <th>Final</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $reserva->name }}</td>
                                            <td>{{ $reserva->phone }}</td>
                                            <td>{{ $reserva->date }}</td>
                                            <td>{{ $reserva->start }}</td>
                                            <td>{{ $reserva->end }}</td>

                                            <td>
                                                <form action="{{ route('reservas.destroy', $reserva->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('reservas.show', $reserva->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Visualizar') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('reservas.edit', $reserva->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Alterar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Você tem certeza que quer Cancelar?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Cancelar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
