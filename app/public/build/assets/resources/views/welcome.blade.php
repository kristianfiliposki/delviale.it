@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        {{-- account plus --}}

        {{-- slide 1 --}}
        <div class="row boxA">
            {{-- left-box --}}
            <div class="col-6">
                <div>
                    <h1>Non è mai stato cosi facile avere sconti,sorprese,regali e infiniti giochi....</h1>
                    <h4>Del Viale,è molto altro che il classico bar...</h4>
                </div>
            </div>
            {{-- left-box --}}

            {{-- right-box --}}
            <div class="col-6">
                <div>
                    <div class="img-box">
                        <img src="../storage/public/storia.jpeg" alt="foto"  >
                    </div>                    
                </div>
            </div>            
            {{-- right-box --}}


        </div>
        {{-- slide 1 --}}

        {{-- slide 2 --}}
        {{-- slide 2 --}}

        {{-- slide 3 --}}
        {{-- slide 3 --}}

        {{-- account plus --}}


    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
<style>
    .boxA{
        border: 2px solid darkgrey;
        border-radius: 2em;
        background-color: lightgrey;
        width: 100%;
        height: 55vh;
        display: flex;
        align-content: center;
        padding: 2em;
    }
</style>
@endsection

