@extends('layout')
@section('content')

            <a class="btn btn-primary" href="{{route('registration.create')}}">Dodaj pacjenta</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>PESEL</th>
            <th>Numer dowodu</th>
            <th>Miasto</th>
            <th>Ulica</th>
            <th>Numer domu</th>
            <th>Numer telefonu</th>
            <th>OPCJE</th>
        </tr>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->lastName }}</td>
                <td>{{ $patient->PESEL }}</td>
                <td>{{ $patient->ZIPcode }}</td>
                <td>{{ $patient->city }}</td>
                <td>{{ $patient->street }}</td>
                <td>{{ $patient->buildingNumber }}</td>
                <td>{{ $patient->phoneNumber }}</td>
                <td><a class="btn btn-info" href="{{route('registration.edit', $patient)}}">Edytuj</a> </td>
                <td>
                    {!! Form::model($patient, ['route'=> ['registration.delete', $patient], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger" >Usuń</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    <table style="width:25%">
        <tr>
            <th>{{$patients->links()}}</th>
            <th><a class="btn btn-primary"  href="{{url('/home')}}">Powrót</a></th>
        </tr>
    </table>







@endsection