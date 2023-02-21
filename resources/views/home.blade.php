@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h1>Lista de usuarios</h1>
                    <form action="{{route("pets.store")}}" method="POST">
                        @csrf
                        <label>Name</label><input type="text" name="name">
                        <button type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
