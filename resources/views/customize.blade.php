@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            
            <div class="col-sm-12">
            
                <div class="card">
            
                    <div class="card-header formheader"> <b> Customize <i class="fas fa-pen-fancy"></i> </b> </div>
            
                        <div class="card-body">
                        
                            <p> <b> *This is only available in Nigeria... </b> </p>

                            <form method="POST" action="customize/getme">
            
                                {!! csrf_field() !!}
                                
                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-4">
                                        
                                        <label for="address" class="col-form-label text-sm-center"> Preferred Address </label>
                                            
                                        <input id="address" type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="" placeholder="House 1, Zone A, Wuse II" required autofocus>

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-3">
                                        
                                        <label for="city" class="col-form-label text-sm-center"> City </label>

                                        <input id="city" type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value=""  placeholder="Abuja" required>

                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                        
                                    </div>

                                    <div class="form-group col-sm-3">
                                        
                                        <label for="state" class="col-form-label text-sm-center"> State </label>

                                            <select id="state" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="" placeholder="Abuja" required>
                                                <option selected> Choose... </option>
                                                <option> Abia </option>
                                                <option> Adamawa </option>
                                                <option> Akwa-Ibom </option>
                                                <option> Anambra </option>
                                                <option> Bauchi </option>
                                                <option> Borno </option>
                                                <option> Bayelsa </option>
                                                <option> Benue </option>
                                                <option> Borno </option>
                                                <option> Cross-River </option>
                                                <option> Delta </option>
                                                <option> Ebonyi </option>
                                                <option> Edo </option>
                                                <option> Ekiti </option>
                                                <option> Gombe </option>
                                                <option> Imo </option>
                                                <option> Jigawa </option>
                                                <option> Kaduna </option>
                                                <option> Kano </option>
                                                <option> Katsina </option>
                                                <option> Kebbi </option>
                                                <option> Kogi </option>
                                                <option> Kwara </option>
                                                <option> Lagos </option>
                                                <option> Nassarawa </option>
                                                <option> Niger </option>
                                                <option> Ondo </option>
                                                <option> Osun </option>
                                                <option> Oyo </option>
                                                <option> Plateau </option>
                                                <option> Rivers </option>
                                                <option> Sokoto </option>
                                                <option> Taraba </option>
                                                <option> Yobe </option>
                                                <option> Zamfara </option>
                                                <option> FCT </option>
                                            </select>

                                        @if ($errors->has('state'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group col-sm-2">
                                        
                                        <label for="zip" class="col-form-label text-sm-center"> Postal Code </label>

                                        <input id="zip" type="text" class="form-control {{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value=""  placeholder="1001101" required>

                                        @if ($errors->has('zip'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('zip') }}</strong>
                                            </span>
                                        @endif
                                        
                                    </div>

                                </div>

                                <div class="row content-sm-center">

                                    <div class="form-group col-sm-12">
                                        
                                        <label for="description" class="col-form-label text-sm-center"> Description </label>
                                        
                                            <textarea id="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="" placeholder="I will like to have this item with these features, attached is picture(s) for more details. :-) ;-) ..." rows="5" required> Hello </textarea>

                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
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
                                
                                    <div class="form-group col-sm-12">

                                        <p> <b> *** We strongly believe you have carefully read and understood our terms and condition. </b> </p>
                                    
                                    </div>
                                    
                                </div>

                                <div class="row content-sm-center">

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
                                            <button type="submit" class="btn btn-primary"> Get Custom </button>
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