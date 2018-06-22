@extends('layouts.app')

@section('content')

	<div class="container text-center">

		<div class"row">

			<div class="col-3 col-sm-2 justify-content-center"></div>

				<div class="col-6 col-sm-8 col-md-12 justify-content-center">

					<form class="form-signin">
					<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
					<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
					<div class="checkbox mb-3">
						<label>
						<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					<!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
					</form>

				</div>

			<div class="col-3 col-sm-2 justify-content-center"></div>

		<div>

    </div>


@endsection