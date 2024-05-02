@extends('admin.admin')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div>
            <h1 class="display-5 fw-bold">
               messaggi
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
        <p>Footer Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, incidunt ex aliquam ullam temporibus ducimus ipsum dolores, eius ratione sed fuga! Necessitatibus quis inventore ipsam molestiae. Aperiam ad voluptatem alias.</p>
    </div>
</div>
<style>
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
        background-color: antiquewhite; 
        border: 3px solid lightskyblue;
        width: calc(100% / 5);
        margin: 1em;
        border-radius: 15px;
        padding: 1em;
    }
    .sms-container{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        overflow-y: auto;
        height: 50vh;
    }
</style>
@endsection
