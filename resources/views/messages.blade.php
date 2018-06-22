@extends('layouts.app')

@section('content')

    @include('inc.topnav')

    <h1> Received Mails </h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item"> Name: {{$message->name}} </li>
                <li class="list-group-item"> Email: {{$message->email}} </li>
                <li class="list-group-item"> Message: {{$message->message}} </li>
            </ul>
        @endforeach
    @endif

    @include('inc.footer')

@endsection