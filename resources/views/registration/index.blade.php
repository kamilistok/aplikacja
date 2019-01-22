@extends('layout')
@section('content')
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Numer dowodu</th>
            <th>Miasto</th>
            <th>Ulica</th>
            <th>Numer domu</th>
            <th>Numer telefonu</th>
            <th>ID lekarza</th>
            <th>OPCJE</th>
        </tr>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->lastName }}</td>
                <td>{{ $patient->ZIPcode }}</td>
                <td>{{ $patient->city }}</td>
                <td>{{ $patient->street }}</td>
                <td>{{ $patient->buildingNumber }}</td>
                <td>{{ $patient->phoneNumber }}</td>
                <td>{{ $patient->doctorID }}</td>
                <td><a class="btn btn-info" href="#">Edytuj</a>  <a class="btn btn-danger" href="#">Delete</a></td>
            </tr>
            @endforeach
            </table>
    {{$patients->links()}}
@endsection