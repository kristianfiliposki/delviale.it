@extends('layouts.app')
@section('content')
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/js/app.js','resources/sass/app.scss'])
        @vite(['resources/app.js','resources/scss/app.scss'])
        <script type="text/javascript">
            var _iub = _iub || [];
            _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"floatingPreferencesButtonDisplay":"bottom-right","perPurposeConsent":true,"siteId":3619505,"whitelabel":false,"cookiePolicyId":83764315,"lang":"it","cookiePolicyUrl":"https://www.delviale.it/", "banner":{ "acceptButtonDisplay":true,"closeButtonRejects":true,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"showTitle":false }};
            </script>
            <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3619505.js"></script>
            <script type="text/javascript" src="//cdn.iubenda.com/cs/stable/iubenda_cs.js" charset="UTF-8" async></script>
    </head>
    
    <body>
        
        <div id="app" >
           <example-component/>
        </div>
    </body>
@endsection
{{-- <style>
    body{

        
    }
    nav{
        min-height: 10vh;
        background: rgb(178,254,222);
        background: linear-gradient(58deg, rgba(220,234,255,0.9878545168067226) 30%, rgba(240,247,255,1) 53%, rgba(255,247,234,1) 67%, rgba(255,238,209,1) 78%);
        }
    .nav-link{
        font-size: 1.6em;
        margin: 0.5em 0.3em;
        padding: 0.2em;
        border-radius: 0.5em;
        max-width: fit-content;
    }

</style> --}}