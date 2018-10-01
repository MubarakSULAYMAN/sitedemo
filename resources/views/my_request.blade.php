@extends('layouts.app')

@section('content')

    @include('inc.topnav')

    <h1> Received Requests </h1>

    @if(count($customizes) > 0)

        @foreach($customizes as $customize)

            <!-- <ul class="list-group">
                <li class="list-group-item"> Address: {{$customize->address}} </li>
                <li class="list-group-item"> City: {{$customize->city}} </li>
                <li class="list-group-item"> State: {{$customize->state}} </li>
                <li class="list-group-item"> Zip: {{$customize->zip}} </li>
                <li class="list-group-item"> Describe: {{$customize->describe}} </li>
            </ul> -->

                        <ul class="list-group">
                <li class="list-group-item"> Name: {{$message->name}} </li>
                <li class="list-group-item"> Email: {{$message->email}} </li>
                <li class="list-group-item"> Message: {{$message->message}} </li>
                <!-- <li class="list-group-item"> Message: {{$message->message}} </li> -->
            </ul>

        @endforeach

    @endif

    @include('inc.footer')

@endsection