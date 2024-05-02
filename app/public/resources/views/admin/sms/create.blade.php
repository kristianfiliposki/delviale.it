@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
           Crea recensione
        </h1>
        <div>
            <form action="{{ route('admin.sms.store') }}" method="post">
                @csrf
                <div class="form-group ">
                    <label for="autore"><h5>autore del messaggio:</h5></label>
                    <select name="autore" id="">
                        <option for="autore" class="form-control" id="autore" name="autore"><h5>{{$cliente->name}}</h5></option>
                        <option for="autore" class="form-control" id="autore" name="autore"><h5>Anonimo</h5></option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="testo"><h5>Il tuo pensiero è fondamentale</h5></label>
                    <textarea class="form-control" id="testo" name="testo" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Facci conoscere i tuoi pensieri!</button>
            </form>
        </div>
        
        
        <form action={{ route('admin.dashboard') }}></form>
    </div>
</div>
<style>
    .jumbotron{
        background: rgb(178,254,222);
        background: linear-gradient(58deg, rgba(178,254,222,1) 0%, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);
    }
</style>

@endsection