@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            
            <div class="col-sm-4">
            
                <div class="card">
            
                    <div class="card-header formheader"> Reset Password <i class="fas fa-pen"></i> </div>
            
                        <div class="card-body">

                            @if (session('status'))

                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>

                            @endif

  
                            <form method="POST" action="password.email">
            
                                {!! csrf_field() !!}

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

                                    <div class="form-group col">

                                        <div class="col-form-label text-sm-right">

                                            <button type="submit" class="btn btn-primary">
                                                Send Password Reset Link
                                            </button>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
                
    </div>

@endsection
