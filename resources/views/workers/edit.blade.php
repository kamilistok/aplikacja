@extends('layout')

@section('content')

    {!! Form::model($worker,['route' => ['workers.update', $worker], 'method'=> 'PUT']) !!}


    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{$error}}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('name', "Imie:") !!}
        {!! Form::text('name', $worker->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastName', "Nazwisko:") !!}
        {!! Form::text('lastName', $worker->lastName, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('function', "Stanowisko:") !!}
        {!! Form::text('function', $worker->function, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('earnings', "Zarobki:") !!}
        {!! Form::number('earnings', $worker->earnings, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}




@endsection