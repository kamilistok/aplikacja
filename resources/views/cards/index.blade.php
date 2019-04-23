@extends('layout')
@section('content')

    <table class="table table-hover">

        <tr>
            <th>ID Pacjenta</th>
            <th>Grupa krwi</th>
            <th>Uzależnienia</th>
            <th>Leki stałe</th>
            <th>Przebyte choroby</th>
        </tr>
        @foreach($cards as $card)
            <tr>
                <td>{{ $card->patient_id }}</td>
                <td>{{ $card->blood }}</td>
                <td>{{ $card->addiction }}</td>
                <td>{{ $card->medicines }}</td>
                <td>{{ $card->diseases }}</td>
            </tr>
        @endforeach
    </table>

    <table style="width:25%">
        <tr>
            <th><a class="btn btn-primary"  href="{{url('/home')}}">Powrót</a></th>
        </tr>
    </table>







@endsection