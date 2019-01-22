@extends('layout')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Specjalizacja</th>
        </tr>

        @foreach($doctors as $doctor)
            <tr>
                <td>{{$doctor->id}}</td>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->lastName}}</td>
                <td>{{$doctor->specialization}}</td>
            </tr>
        @endforeach
    </table>

@endsection