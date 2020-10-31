@extends('adminlte::page')

@section('title', 'Create New')

@section('content_header')
    <h1>Sample registration</h1>
@stop


{{--
    Para trabalhar com formulário de maneira mais simples e orientado a objetos, 
    vamos utilizar um pacote chamado Laravel Collective, segue o link:
    https://laravelcollective.com/docs/6.0/html (comando: composer require laravelcollective/html)
    Para trabalhar com as mensagens de feedback (sucesso, erro etc), 
    vamos utilizar um pacote chamado Flash, segue o link:
    https://github.com/laracasts/flash (comando: composer require laracasts/flash)
    (Obs: ambos os pacotes só precisa instalar, não necessita de configurações)
--}}


@section('content')
    @include('flash::message')

    <div class="card card-primary">
        @if (isset($smartphone))
            {!! Form::model($smartphone, ['url' => route('restrito.smartphones.update', $smartphone), 'method' => 'put']) !!}
        @else
            {!! Form::open(['url' => route('restrito.smartphones.store')]) !!}
        @endif
            <div class="card-body row">
                <div class="form-group">
                    {!! Form::label('tss_sample_id', 'Model') !!}
                    <div class="col-sm-12">
                        {!! Form::text('tss_sample_id', $model ?? '', null, ['class' => 'form-control']) !!}
                    </div>
                    @error('tss_sample_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('tss_sample_id', 'IMEI') !!}
                    <div class="col-sm-12">
                        {!! Form::text('tss_sample_id', $imei ?? '', null, ['class' => 'form-control']) !!}
                    </div>
                    @error('tss_sample_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="card-body row">
                <div class="form-group">
                    {!! Form::label('avg_sleep_mode_id', 'Average Current') !!}
                    <div class="col-sm-12">
                        {!! Form::number('avg_sleep_mode_id', $average_current ?? '', null, ['class' => 'form-control']) !!}
                    </div>
                    @error('avg_sleep_mode_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('tss_sample_id', 'TSS') !!}
                    <div class="col-sm-12">
                        {!! Form::text('tss_sample_id', $tss ?? '', null, ['class' => 'form-control']) !!}
                    </div>
                    @error('tss_sample_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="card-body row">
                <div class="form-group">
                    {!! Form::label('esim', 'e-SIM') !!}
                    <div class="col-sm-9">
                        {!! Form::text('esim', null, ['class' => 'form-control']) !!}
                    </div>
                    @error('esim')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('power_of_lock', 'Power of Lock') !!}
                    <div class="col-sm-9">
                        {!! Form::text('power_of_lock', null, ['class' => 'form-control']) !!}
                    </div>
                    @error('power_of_lock')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-body row">
                <div class="form-group">
                    {!! Form::label('observation_id', 'Remark') !!}
                    <div class="col-sm-12">
                        {!! Form::textarea('observation_id', $remark ?? '', null, ['class' => 'form-control', 'rows' => 2]) !!}
                    </div>
                    @error('observation_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                {!! link_to_route('restrito.smartphones.index', 'Voltar', null, ['class' => 'btn btn-secondary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop