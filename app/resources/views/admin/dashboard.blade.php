@extends('admin.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('tutti gli utenti') }}</div>

                    <div class="card-body box">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($clienti as $cliente)
                            <div class="box-user">
                                <h1>
                                    {{ $cliente->id }} : {{ $cliente->name }}
                                </h1>
                                <p>
                                    {{ $cliente->role->name }}
                                </p>
                                <p>
                                    {{ $cliente->email }}
                                </p>
                                <p>
                                    {{ $cliente->telefono }}
                                </p>
                                



                                <p>punti: <strong>{{ $cliente->punti }}</strong></p>

                                <div>
                                    <a class="btn btn-primary" href="{{ route('admin.edit.secret', $cliente->id) }}">{{ __('modifica') }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        h1 {
            font-size: 1.2rem;
        }

        .box {
            display: flex;
            flex-wrap: wrap;
            height: 80vh;
            overflow-y: auto;
        }

        .box-user {
            padding: 1em;
            border: 1px solid black;
            border-radius: 0.9em;
            margin: 1em;
            width: calc(100% / 3);
        }
        @media screen and (max-width: 850px) {
            .box-user {
            width: calc(100% / 3);}
        }

        @media screen and (max-width: 769px) {
            .box-user {
            width: calc(100%);
            }
        }



    </style>
@endsection
