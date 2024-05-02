@extends('admin.admin')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div>
            <h1 class="display-5 fw-bold">
               Messaggi
            </h1>
        </div>
        <div class="sms-container">
            @foreach ($messagges as $item)
                <div class="messaggio">
                    <div>
                        <h5>messaggio {{$item->id}}</h5>
                        <div>
                            <h4>
                                {{$item->autore}}
                            </h4>
                        </div>
                        <div>
                            {{$item->testo}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

<div class="content">
    <div class="container">
        <p>Siamo un team.Pronti a scoprire ogni parere,ogni richiesta,ogni nuova collaborazione!</p>
    </div>
</div>
<style>
    .jumbotron{
        border: 1px solid grey;
        border-radius:1em; 
        font-family: "Plus Jakarta Sans", sans-serif;
        background-color: #929292;
        background: rgb(100,200,200);
        background: linear-gradient(58deg, rgba(118,214,221,1) 0%, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);

    }
    .container{
        display: flex;
        justify-content: center;
        align-content: center;
        flex-direction: column;
    }
    h1{
        text-align: center;
    }
    .messaggio{
        background-color: aliceblue;
        border: 3px solid cornflowerblue;
        width: calc(100% / 5);
        margin: 1em;
        border-radius: 15px;
        padding: 1em;
    }
    .sms-container{
        display: flex;
        flex-wrap: wrap;
        overflow-y: auto;
    }
    @media screen and (max-width: 950px) {
        .messaggio{
            background-color: aliceblue;
            border: 3px solid cornflowerblue;
            width: 100%;
            margin:1em 0;
            border-radius: 15px;
            padding: 1em;
    }
    .sms-container{
        display: block;
        /* justify-content: center; */
        /* flex-wrap: wrap; */
        height: 50vh;
        overflow-y: auto;
    }

}
</style>
@endsection
