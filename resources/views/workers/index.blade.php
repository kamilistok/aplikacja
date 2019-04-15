@extends('layout')

@section('content')

    <a class="btn btn-primary" href="{{route('workers.create')}}">Dodaj nowego pracownika</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Stanowisko</th>
            <th>Zarobki</th>
            <th>EDYTUJ</th>
            <th>USUŃ</th>

        </tr>

        @foreach($workers as $worker)
            <tr>
                <td>{{ $worker->id }}</td>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->lastName }}</td>
                <td>{{ $worker->function }}</td>
                <td>{{ $worker->earnings }}</td>
                <td><a class="btn btn-info" href="{{route('workers.edit', $worker)}}">Edytuj</a> </td>
                <td>
                    {!! Form::model($worker, ['route'=> ['workers.delete', $worker], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger" >Usuń</button>
                    {!! Form::close() !!}
                </td>

            </tr>

        @endforeach
    </table>

    <table style="width:25%">
        <tr>
            <th><a class="btn btn-primary"  href="{{url('/home')}}">Powrót</a></th>
        </tr>
    </table>



@endsection