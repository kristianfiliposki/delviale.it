@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <form method="POST" action="{{ route('admin.update.client.points', $client->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="punti">{{ __('punti') }}</label>
                <input type="number" min="0" class="form-control" id="punti" name="client[punti]" value="{{ $client->punti }}">
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna Punti</button>
        </form>
        
    </div>
</div>



<style>

</style>
@endsection
