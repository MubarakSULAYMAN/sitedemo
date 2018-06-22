@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        Important fields marked *
        <div class="row">
            <div class="col-sm-12">
 
                {!! Form::open(['url' => 'contact/submit']) !!}

                    <div class="form-group">
                        {{Form::label('name', 'Name *')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('email', 'Email *')}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@email.com'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('message', 'Message *')}}
                        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Write a message...'])}}
                    </div>

                    <div class="form-group">
                        {{Form::file('image')}}
                    <div>

                    <div class="mt-2">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </div>

                {!! Form::close() !!}

            </div>

            We strongly believe you have carefully read and understood our tearms and condition.
        </div>
    </div>
@endsection