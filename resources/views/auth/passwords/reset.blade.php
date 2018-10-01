@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">
            
                <div class="card-header"> Reset Password </div>

                <div class="card-body">
                    
                    <form method="POST" action="password.request" aria-label="Reset Password">


                        {!! csrf_field() !!}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row content-sm-center">

                            <div class="form-group col-sm-12">
                                
                                <label for="username" class="col-form-label text-sm-center formfield"> Registered email </label>

                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your registered email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                        </div>

                        <div class="row content-sm-center">

                            <div class="form-group col-sm-6">

                                <label for="password" class="col-form-label text-sm-center formfield"> Password </label>

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group col-sm-6">

                                <label for="password-confirm" class="col-form-label text-sm-center formfield"> Confirm Password </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required>
                                </div>

                            </div>

                        </div>

                        <div class="row content-sm-center">

                            <div class="form-group col">

                                <div class="col-form-label text-sm-right">

                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
