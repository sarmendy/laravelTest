@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    <a href="{{ route('messages.create') }}" class="btn btn-primary mb-2">New Message</a>
    <table class="table">
        <thead>
            <tr>
                <th>From</th>
                <th>To</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->fromUser->name }}</td>
                    <td>{{ $message->toUser->name }}</td>
                    <td>{{ $message->content ? $message->content->content : 'No hay contenido en esta conversacion...' }}</td>
                    <td>
                        <a href="{{ route('messages.show', $message) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
