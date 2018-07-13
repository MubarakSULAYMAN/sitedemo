@extends('layouts.app')

@section('content')
    <!-- <div class="container mt-4">

        <div class="row">
            <div class="col-sm-4">
            </div>


                <b> Important fields marked * </b>

                <div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail / Username') }}</label>

    <div class="col-md-6">
        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Login </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label"> Username </label>
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong> {{ $errors->first('username') }} </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label"> E-mail </label>
                                <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong> {{ $errors->first('email') }} </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label"> Password </label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong> {{ $errors->first('password') }} </strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

 
                <!-- {!! Form::open(['url' => 'contact/submit']) !!}

                    <div class="form-group">
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        {{Form::label('email', 'Email *')}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@email.com'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('password', 'Password *')}}
                        {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => '!+secureMePassword1'])}}
                    </div>

                    <div class="mt-2">
                        {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
                    </div>

                {!! Form::close() !!} -->

                <b> *** We strongly believe you have carefully read and understood our terms and condition. </b>
            <!-- </div>
            
            <div class="col-sm-4">
                
            </div>
        </div>
    </div> -->
@endsection



