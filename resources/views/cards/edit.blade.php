@extends('layout')

@section('content')

    {!! Form::model($card,['route' => ['cards.update', $card], 'method'=> 'PUT']) !!}

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{$error}}</div>
        @endforeach
    @endif

    <font size="7">Karta pacjenta</font>
    <div class="form-group">
        {!! Form::label('blood', "Grupa krwi:") !!}
        {!! Form::text('blood', $card->blood, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('addiction', "Uzależnienia:") !!}
        {!! Form::text('addiction', $card->addiction, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('medicines', "Leki stałe:") !!}
        {!! Form::text('medicines', $card->medicines, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('diseases', "Przebyte choroby:") !!}
        {!! Form::textarea('diseases', $card->diseases, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}




@endsection