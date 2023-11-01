@extends('layouts.app')

@section('template_title')
    {{ $aplicacionVacuna->name ?? "{{ __('Show') Aplicacion Vacuna" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aplicacion Vacuna</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aplicacion-vacunas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $aplicacionVacuna->CUI }}
                        </div>
                        <div class="form-group">
                            <strong>Marcas Id:</strong>
                            {{ $aplicacionVacuna->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis Id:</strong>
                            {{ $aplicacionVacuna->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
