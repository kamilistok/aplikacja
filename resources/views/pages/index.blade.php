@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('pages.create')}}">Dodaj notatkę</a>

    <table class="table table-hover">
        <tr>
            <th>Numer</th>
            <th>Tytuł</th>
            <th>Treść</th>
            <th>Data utworzenia</th>
            <th>Data edycji</th>
            <th>Opcje</th>
        </tr>
    @foreach($pages as $page)
        <tr>
            <td>{{ $page->id }}</td>
            <td>{{ $page->title }}</td>
            <td>{{ $page->content }}</td>
            <td>{{ $page->created_at }}</td>
            <td>{{ $page->updated_at }}</td>
            <td><a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edytuj</a> </td>
            <td>
                {!! Form::model($page, ['route'=> ['pages.delete', $page], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger" >Usuń</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </table>

    <table style="width:25%">
        <tr>
            <th>{{$pages->links()}}</th>
            <th><a class="btn btn-primary"  href="{{url('/home')}}">Powrót</a></th>
        </tr>
    </table>


@endsection