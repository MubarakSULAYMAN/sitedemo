@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">

            <div class="col-sm-6">

                <div class="card">
            
                    <div class="card-header formheader"> Check In <i class="fas fa-sign-in-alt"></i> </div>
            
                        <div class="card-body">

                            <form method="POST" action="/login">
            
                                {!! csrf_field() !!}
                                
                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-12">
                                        
                                        <label for="email" class="col-form-label text-sm-center formfield"> Email </label>
                                            
                                        <input id="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" placeholder="mail@email.here" required autofocus>

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-12">
                                        
                                        <label for="password" class="col-form-label text-sm-center formfield"> Password </label>

                                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value=""  placeholder="S6cureM3" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        
                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-12 checkbox formfield">
                                        <label>
                                            <input type="checkbox" name="remember" value=""> Remember Me
                                        </label>
                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-3 formextra">

                                        <button type="submit" class="btn btn-primary">
                                            Get In
                                        </button>

                                    </div>

                                    <div class="form-group col-sm-5 formextra">

                                        <a class="btn btn-link" href="/password/reset">
                                            Forgot Password
                                        </a>

                                    </div>

                                    <div class="form-group col-sm-3 formextra">

                                        <a class="btn btn-link" href="/register">
                                            Get Started
                                        </a>

                                    </div>
                                    

                                    <div class="form-group col-sm-1"> </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


@endsection
