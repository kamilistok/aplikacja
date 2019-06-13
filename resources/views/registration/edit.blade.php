@extends('layout')
@section('content')
    {!! Form::model($patient,['route' => ['registration.update', $patient], 'method'=> 'PUT']) !!}
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{$error}}</div>
        @endforeach
    @endif
    <div class="form-group">
        {!! Form::label('name', "Imie:") !!}
        {!! Form::text('name', $patient->name, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastName', "Nazwisko:") !!}
        {!! Form::text('lastName', $patient->lastName, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('PESEL', "PESEL:") !!}
        {!! Form::number('PESEL', $patient->PESEL, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ZIPcode', "Numer dowodu osobistego:") !!}
        {!! Form::text('ZIPcode', $patient->ZIPcode, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', "Miasto:") !!}
        {!! Form::text('city', $patient->city, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('street', "Ulica:") !!}
        {!! Form::text('street', $patient->street, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('buildingNumber', "Numer budynku:") !!}
        {!! Form::text('buildingNumber', $patient->buildingNumber, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phoneNumber', "Numer telefonu:") !!}
        {!! Form::number('phoneNumber', $patient->phoneNumber, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@endsection



