@extends('layouts.User-home')
@section('title')
	Reset Link
@endsection
@section('container')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 m-auto">
						<div class="card userregistration">
							<div class="card-header">Reset Link</div>
							<div class="card-body">
								<form method="POST" action="{{route('password.reset')}}">
									{{csrf_field()}}
									<div class="form-group row">
										<div class="col-md-5">
											<input type="hidden" name="token" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">E-mail:</label>
										<div class="col-md-5">
											<input type="email" name="email" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Password:</label>
										<div class="col-md-5">
											<input type="email" name="email" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Confirm password:</label>
										<div class="col-md-5">
											<input type="email" name="email" class="form-control">
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
										<div class="col-md-9">
											<input type="reset" class="btn btn-primary" name="reset" value="Reset">
										</div>
										<div class="col-md-3 ml-auto">
											<input type="submit" class="btn btn-success" name="submit" value="Send Reset Link">
										</div>
										@if(session('message'))
											<div class="alert alert-success m-auto">
												{{session('message')}}
											</div>
										@endif
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