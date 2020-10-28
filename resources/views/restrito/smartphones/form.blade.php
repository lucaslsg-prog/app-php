@extends('adminlte::page')

@section('title', 'Cadastro de celulares')

@section('content_header')
    <h1>Formulário de Amostras</h1>
@stop

@section('content')
    @include('flash::message')

    <div class="card card-primary">
        @if (isset($smartphone))
            {!! Form::model($smartphone, ['url' => route('smartphones.update', $smartphone), 'method' => 'put']) !!}
        @else
            {!! Form::open(['url' => route('smartphones.store')]) !!}
        @endif
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    @error('name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('esim', 'e-SIM') !!}
                    {!! Form::boolean('esim', null, ['class' => 'form-control']) !!}
                    @error('esim')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('observation_id', 'Remark') !!}
                    {!! Form::text('observation_id', null, ['class' => 'form-control']) !!}
                    @error('observation_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('fabricante_id', 'Fabricante') !!}
                    {!! Form::select('fabricante_id', $fabricantes, null, ['class' => 'form-control']) !!}
                    @error('fabricante_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop