@extends('admin.admin')


@section('content')

    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/svg+xml" href="https://fontawesome.com/icons/futbol?f=classic&s=regular">
    
        <!-- Usando Vite -->
        @vite(['resources/app.js','resources/sass/app.scss'])
    </head>
    
    <body>
        <div id="app">
                <div class="all">
                    <div class="container">
                        <div class="card-1">
                            <div class="photo">
                                <div class="connection">
                                    <h3>Utente connesso</h3>
                                </div>
                                <img src="/public/img/utentes.jpeg" alt="">
                            </div>
                        </div>
                        <div class="card-2">                            
                            <h1>{{ $cliente->role->name }}:{{ Auth::user()->name }}</h1>
                            <h4>Email: {{ Auth::user()->email }}</h4>

                            <div class="boxx">
                                <div class="box">
                                    <div class="desc-1">
                                        <h1>I tuoi punti: {{ $cliente->punti }}</h1>
                                    </div>
                                </div>
                                <div class="button ">
                                    <div class="click">
                                        <button class="chat">
                                            <a class="nav-link" href="{{ route('admin.sms.create') }}">{{ __('Chat') }}</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </body>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=VT323&display=swap');        
            #app{
                width: 100%;
            }
            body{
                margin: 0;
                padding: 0;
                display:  flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                font-family: "Plus Jakarta Sans", sans-serif;
                background-color: #929292;
                background: rgb(178,254,222);
                background: linear-gradient(58deg, rgba(178,254,222,1) 0%, rgba(220,234,255,0.9878545168067226) 38%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);
                
            }
            .all {
                width: 90%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top:10%; 
            }
            .all .container{
                background-color: rgb(255, 255, 255);
                width: 800px;
                display: flex;
                justify-content: center;
                border-radius: 30px;
            }
            .connection{
                display: flex;
                justify-content: center
            }
            .container .card-1{
                width: 100%;
                display: flex;
                align-items: center;
                padding: 0;
            }
            .card-1 img{
                padding: 10px;
                width: 100%;
                border-radius: 35px;
            }
            .container .card-2{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                row-gap: 10px;
                padding: 20px;
            }
            .card-2 h1{
                margin: 0;
                padding: 0;
            }
            .card-2 h2{
                font-size: 15px;
                margin: 0;
                padding: 0;
            }
            .card-2 .boxx{
                display: flex;
                flex-direction: column;
                width: 100%;
            }
            .box{
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                text-align: center;
                background-color: rgba(172, 172, 172, 0.329);
                padding: 20px;
                border-radius: 20px;
            }
            .box .desc-1{
                display: flex;
                flex-direction: column;
            }
            .box .desc-1 h3{
                margin: 0;
                padding: 0;
            }
            .click{
                width: 100%;
                display: flex;
                justify-content: center;
                margin-top: 1em;
            }
            .click .chat{
                padding: 10px 60px;
                border-radius: 10px;
                border: black solid 1px;
                font-size: 15px;
                background-color: transparent;
            }
            .click .follow{
                padding: 10px 60px;
                border-radius: 10px;
                border: none;
                background-color: blue;
                color: white;
                font-size: 15px;
            }
            @media only screen and (max-width: 990px){
                .all .container{
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
                .container .card-1 .photo{
                    width: 100%;
                    padding: 20px;
                }
                .card-1 .photo img{
                    width: 100%;
                    border-radius: 20px;
                    padding: 0;
                }
                .container .card-2{
                    text-align: center;
                    padding: 0;
                }
                .boxx .box{
                    margin: 20px;
                }
                .box .desc-1 h3{
                    margin: 0;
                    padding: 0;
                }
                .button{
                    display: flex;
                    padding-bottom: 20px;
                }
                .click{
                    justify-content: space-evenly;
                }
                .click .chat{
                    padding: 20px 100px;
                    font-size: 15px;
                }
                .click .follow{
                    padding: 20px 100px;
                }
            }
            @media only screen and (max-width: 870px){
                .all .container{
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
                .container .card-1 .photo{
                    width: 100%;
                    padding: 20px;
                }
                .card-1 .photo img{
                    width: 100%;
                    border-radius: 20px;
                    padding: 0;
                }
                .container .card-2{
                    text-align: center;
                    padding: 0;
                }
                .boxx .box{
                    margin: 20px;
                }
                .box .desc-1 h3{
                    margin: 0;
                    padding: 0;
                }
                .button{
                    display: flex;
                    padding-bottom: 20px;
                }
                .click{
                    justify-content: space-evenly;
                }
                .click .chat{
                    padding: 20px 100px;
                    font-size: 15px;
                }
                .click .follow{
                    padding: 20px 100px;
                }
            }
            @media only screen and (max-width: 600px){
                .click .chat{
                    padding: 20px 80px;
                    font-size: 15px;
                }
                .click .follow{
                    padding: 20px 80px;
                    font-size: 15px;
                }
            }
            @media only screen and (max-width: 500px){
                .click .chat{
                    padding: 20px 60px;
                    font-size: 15px;
                }
                .click .follow{
                    padding: 20px 60px;
                    font-size: 15px;
                }
            }
            @media only screen and (max-width: 400px){
                .click .chat{
                    padding: 15px 50px;
                    font-size: 15px;
                }
                .click .follow{
                    padding: 15px 50px;
                    font-size: 15px;
                }
                .boxx .box{
                    display: flex;
                    justify-content: space-between;
                }
                .box .desc-1 h1{
                    font-size: 30px;
                }
            }
            @media only screen and (max-width: 375px){
                .click .chat{
                    padding: 15px 40px;
                    font-size: 15px;
                }
                .click .follow{
                    padding: 15px 40px;
                    font-size: 15px;
                }
                .boxx .box{
                    display: flex;
                    justify-content: space-between;
                }
                .box .desc-1 h1{
                    font-size: 25px;
                }
                .box .desc-1 h3{
                    font-size: 15px;
                }
                .button{
                    padding-left: 10px;
                    padding-right: 10px;
                }
            }
    </style>
    </html>
    

@endsection