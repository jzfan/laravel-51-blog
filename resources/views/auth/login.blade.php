@extends('admin.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@include('admin.partials.errors')
					<form class='form-horizontal' role='form' method="POST"
						action='/auth/login'>
						{!! csrf_field() !!}
						<div class="form-group">
							<label class='col-md-4 control-label'>Email Address</label>
							<div class="col-md-6">
								<input type="email" class='form-control' name='email' 
									value='{{ old('email') }}' autofocus>
							</div>
						</div>
						<div class="form-group">
							<label class='col-md-4 control-label'>Password</label>
							<div class="col-md-6">
								<input type="password" class='form-control' name='password' 
									value='{{ old('password') }}' autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name='remenber'>Remenber Me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type='submit' class='btn btn-primary'>Login</button>
							</div>
						</div>																			
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop