@extends('layout')

@section('content')

    {!! Form::model($page,['route' => ['pages.update', $page], 'method'=> 'PUT']) !!}


    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{$error}}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('name', "Imie:") !!}
        {!! Form::text('name', $page->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastName', "Nazwisko:") !!}
        {!! Form::text('lastName', $page->lastName, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ZIPcode', "Numer dowodu osobistego:") !!}
        {!! Form::text('ZIPcode', $page->ZIPcode, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', "Miasto:") !!}
        {!! Form::text('city', $page->city, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('street', "Ulica:") !!}
        {!! Form::text('street', $page->street, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('buildingNumber', "Numer budynku:") !!}
        {!! Form::text('buildingNumber', $page->buildingNumber, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phoneNumber', "Numer telefonu:") !!}
        {!! Form::number('phoneNumber', $page->phoneNumber, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}




@endsection