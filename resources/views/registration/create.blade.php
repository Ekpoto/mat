@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

	<h1>Register</h1>

	<form method="POST" action="/register">
		{{csrf_field()}}

		<div class="form-group">

			<label for="name">Name:</label>

			<input type="text" class="form-control" id="name" name="name" required>

		</div>


		<div class="form-group">

			<label for="email">Email:</label>

			<input type="email" class="form-control" name="email" required>

		</div>

		<div class="form-group">

			<label for="password">Password:</label>

			<input type="password" class="form-control" name="password" password="password" required>

		</div>

		<div class="form-group">

			<label for="password_confirmation">Password Confirmation:</label>

			<input type="password" class="form-control" name="password_confirmation" password="Password Confirmation" required>

		</div>

		<div class="form-group">

			<button type="submit" class="btn btn-primary">Register</button>
		</div>
	</div>
	</form>

	@if (session('error_message'))

	<div class="alert alert-danger">{{session('error_message')}}</div>

	@endif

	@if (session('success_message'))

	<div class="alert alert-success">{{session('success_message')}}</div>

	@endif
@endsection