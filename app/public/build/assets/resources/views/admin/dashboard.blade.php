@extends('admin.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('tutti gli utenti') }}</div>

                    <div class="card-body box">
                        @if (session('status'))
                            
                        @endif

                        @foreach ($clienti as $item)
                            <div class="box-user">
                                <h1>
                                    {{$item->name}}
                                </h1>
                                <p>
                                    {{$item->role->name}}
                                </p>
                                <p>punti: <strong>{{$item->punti}}</strong></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    h1{
        font-size: 1.2rem;
    }
    
    .box{
        display: flex;
        flex-wrap: wrap;
    }
    .box-user{
        padding: 1em;
        border: 1px solid black;
        border-radius: 0.9em;
        margin: 1em;
        width: calc(100% / 5)
    }

    </style>
@endsection
