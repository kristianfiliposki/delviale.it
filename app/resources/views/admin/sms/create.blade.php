@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4  rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
           Crea il tuo ordine personalizzato!
        </h1>
        <hr>
        <h2>
            <strong>
                Siamo disposti ad aiutarti per ogni evenienza:
            </strong>
            organizza da noi il tuo compleanno,ordina la tua torta dei sogni o prova quel piatto caldo che vuoi da tanto!</h2>
        <hr>

        <div>
            <form action="{{ route('admin.sms.store') }}" method="post">
                @csrf
                <div class="form-group ">
                    <label for="autore"><h2>
                        <strong>
                            Autore del messaggio:
                        </strong>
                        </h2></label>
                    <select name="autore" id="selettore" class="m-32">
                        <option for="autore" class="form-control " id="autore" name="autore"><h5>{{$cliente->name}}</h5></option>
                        <option for="autore" class="form-control " id="autore" name="autore"><h5>Anonimo</h5></option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="testo"><h5>Crea una tua personale rischiesta.</h5></label>
                    <textarea class="form-control" id="testo" name="testo" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Facci conoscere le tue idee!</button>
            </form>
        </div>
        
        
        <form action={{ route('admin.dashboard') }}></form>
    </div>
</div>
<style>
    #selettore{
        border: 4px solid;
        border-radius: 0.5em;
        border-color: #0d6efd;
        margin: 1em;
        background: #0d6efd;
        color: white;
        font-weight: 900;
    }
</style>

@endsection