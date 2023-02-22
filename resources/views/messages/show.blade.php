@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Conversación con {{ $message->toUser->name }}</h1>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Mensaje</h3>
            </div>
            <div class="panel-body">
                {{ $message->content->content }}
            </div>
        </div>
        
        <a href="{{ route('messages.index') }}" class="btn btn-primary">Volver a la lista de conversaciones</a>
        <a href="{{ route('messages.create') }}" class="btn btn-primary">Mandar un mensaje</a>
    </div>
@endsection
