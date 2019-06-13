@extends('layout')
@section('content')
    {!! Form::open(['route' => 'registration.store']) !!}
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{$error}}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('name', "Imie:") !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastName', "Nazwisko:") !!}
        {!! Form::text('lastName', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('PESEL', "PESEL:") !!}
        {!! Form::number('PESEL', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ZIPcode', "Numer dowodu osobistego:") !!}
        {!! Form::text('ZIPcode', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', "Miasto:") !!}
        {!! Form::text('city', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('street', "Ulica:") !!}
        {!! Form::text('street', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('buildingNumber', "Numer budynku:") !!}
        {!! Form::text('buildingNumber', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phoneNumber', "Numer telefonu:") !!}
        {!! Form::number('phoneNumber', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@endsection

