@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            
            <div class="col-sm-8">
            
                <div class="card">
            
                    <div class="card-header formheader"> Getting Started <i class="fas fa-pen-alt"></i> </div>
            
                        <div class="card-body">
            
                            <form method="POST" action="register">
            
                                {!! csrf_field() !!}
                                
                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-6">
                                        
                                        <label for="surname" class="col-form-label text-sm-center"> Last Name </label>
                                            
                                        <input id="surname" type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="surname" value="" placeholder="Surname" required autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                        @endif


                                    </div>

                                    <div class="form-group col-sm-6">
                                        
                                        <label for="firstname" class="col-form-label text-sm-center"> First Name </label>

                                        <input id="firstname" type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="firstname" value=""  placeholder="Your Name" required>

                                        @if ($errors->has('firstname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif

                                        
                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-6">
                                        
                                        <label for="username" class="col-form-label text-sm-center"> Username </label>

                                        <input id="username" type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="" placeholder="Maybe your nickname" required>

                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-6">
                                        
                                        <label for="email" class="col-form-label text-sm-center"> Email </label>
                                        
                                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" placeholder="mail@email_provider.domain" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <!-- <div class="form-group col-sm-6">
                                        
                                        <label for="phone" class="col-form-label text-sm-center"> Phone Number </label>
                                        
                                        <input id="phone" type="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="" placeholder="+2345678901234" required>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif

                                    </div> -->

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-6">
                                        
                                        <label for="password" class="col-form-label text-sm-center"> Password </label>
                                        
                                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="S6cure_M3" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif


                                    </div>

                                    <div class="form-group col-sm-6">
                                        
                                        <label for="password-confirm" class="col-form-label text-sm-right"> Confirm Password  </label>
                                        
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="S6cure_M3" required>

                                    </div>
                                    
                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col">
                                    
                                        <div class="col-form-label text-sm-right">
                                            <button type="submit" class="btn btn-primary"> Get Started </button>
                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
@endsection
