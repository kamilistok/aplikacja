@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('pages.create')}}">Dodaj pacjenta</a>

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
            <th>OPCJE</th>

        </tr>
    @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->name }}</td>
            <td>{{ $page->lastName }}</td>
            <td>{{ $page->ZIPcode }}</td>
            <td>{{ $page->city }}</td>
            <td>{{ $page->street }}</td>
            <td>{{ $page->buildingNumber }}</td>
            <td>{{ $page->phoneNumber }}</td>
            <td><a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edytuj</a> </td>
            <td>
                {!! Form::model($page, ['route'=> ['pages.delete', $page], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger" >Usuń</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </table>

    {{$pages->links()}}


@endsection