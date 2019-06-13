@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Status</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Jesteś zalogowany!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
    <table>
        <tr>
            <td><a class="btn btn-primary" align="right" href="{{route('registration.index')}}" style="width: 200px; height: 80px;">Pacjenci</a></td>
            <td><a class="btn btn-primary" align="right" href="{{route('workers.index')}}" style="width: 200px; height: 80px;">Pracownicy</a></td>
        </tr>
        <tr>
            <td colspan="2"><a class="btn btn-primary" align="right" href="{{route('pages.index')}}" style="width: 402px; height: 80px;">Notatki</a></td>
        </tr>
    </table>
    </center>
@endsection

