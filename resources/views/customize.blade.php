@extends('layouts.app')


@section('content')
    <div class="container">
    <form>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress"> Preferred Address </label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
        </div>
    </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1"> Description </label>
        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="7"> I want these extra features :-) ;-) ... </textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
        <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
            You must agree before submitting.
        </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit"> Submit Request </button>
    </form>
    </div>
</div>

@endsection