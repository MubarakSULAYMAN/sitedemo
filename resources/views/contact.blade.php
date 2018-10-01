@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            
            <div class="col-sm-12">
            
                <div class="card">
            
                    <div class="card-header formheader"> <b> Contact Us <i class="fas fa-pen-fancy"></i> </b> </div>
            
                        <div class="card-body">
                            
                            Important fields marked *

                            <form method="POST" action="contact/submit">
                                
                                {!! csrf_field() !!}

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-6">
                                        <label for="fullname"> Name * </label>
                                        <input id="fullname" type="text" class="form-control {{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="" placeholder="Lastname SURNAME" required autofocus>

                                        @if ($errors->has('fullname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fullname') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="email">Email *</label>
                                        <input id="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" placeholder="mail@email_provider.domain" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-12">

                                        <label for="message" class="col-form-label text-sm-center"> Message </label>
                                        <textarea id="message" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="" placeholder="Write a message here..." rows="5" required> Hello </textarea>

                                        @if ($errors->has('message'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-12">
                                        <input id="image" class="{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" type="file">

                                        @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif

                                    <div>

                                </div>

                                <div class="row content-sm-center">

                                    <p class="danger"> *** We strongly believe you have carefully read and understood our terms and condition. </p>

                                    <div class="form-group col-sm-8">

                                        <input type="checkbox" class="{{ $errors->has('checkbox') ? ' is-invalid' : '' }}" value="yes" name="terms" required> Accept Terms

                                        <!-- <label for="checkbox" class="col-form-label text-sm-center">  </label> -->

                                        @if ($errors->has('checkbox'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('checkbox') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-4">

                                        <div class="col-form-label text-sm-center">
                                            <button type="submit" class="btn btn-primary"> Hello here </button>
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