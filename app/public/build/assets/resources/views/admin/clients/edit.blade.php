@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <form action="{{ route('admin/clients') }}" method="PUT" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           
            <div class="mb-3 row">
                <div class="col">
                    <label for="role_id" class="form-label">Seleziona il ruolo</label>
                    <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <div class="invalid-feedback">{{ $errors->first('role_id') }}</div>
                    @enderror
                </div>
            </div>
       
            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
</div>


<style>

</style>
@endsection

