@extends('layouts.Admin-home')
@section('title')
	Admin Login
@endsection
@section('container')
<div class="col-md-6 m-auto">
	<div class="row"></div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10">
					<div class="card adminlogin">
						@if(session('message'))
							<div class="alert alert-success m-auto">
								{{session('message')}}
							</div>
						@endif
					<div class="card-header"><h2>Admin Login</h2></div>
					<div class="card-body">
						<form method="POST" action="">
							{{csrf_field()}}
							<div class="form-group row">
								<label class="col-md-3">User Name:</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="username">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Password:</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							@if($errors->any())
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							@endif
							<div class="row">
								<div class="col-md-8">
									<input type="reset" class="btn btn-danger" name="" value="Reset">
								</div>
								<div class="col-md-3">
									<input type="submit" class="btn btn-success" name="" value="Login">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection