<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="ThemeBucket">
		<link rel="shortcut icon" href="{{ asset("images/logo_icon.png") }}" type="image/png">
		<title>Login Pages</title>
		@include('backend.layout.sdc_css')
	</head>
	<body class="login-body">
		<div class="lock-wrapper">
			<div class="panel lock-box text-center">
				<img alt="lock avatar" src={{ asset("/images/photos/nophoto.png") }}>
				<div class="locked">
					<i class="fa fa-lock"></i>
				</div>
				<br>
				<div class="row">
					<form method="post" action="{{ URL::route('B.post.login') }}" role="form">
						{!! csrf_field() !!}
						<div class="form-group col-md-12 col-sm-12 col-xs-12 {{ ( $errors->first('email') ) ? 'has-error' : '' }}">
							<input type="email" name="email" class="form-control" placeholder="User ID" value="{{ Input::old('email','') }}">
							@if( $errors->first('email') )
								<label class="control-label pull-left" for="inputError1">{{ $errors->first('email') }}</label>
							@endif
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12 {{ ( $errors->first('password') ) ? 'has-error' : '' }}">
							<input type="password" name="password" class="form-control" placeholder="Password">
							@if( $errors->first('password') )
								<label class="control-label pull-left" for="inputError1">{{ $errors->first('password') }}</label>
							@endif
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<button type="submit" class="btn btn-lock btn-block">
								<i class="fa fa-check"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
			<label class="checkbox">
				<span class="pull-right">
					<a data-toggle="modal" href="#myModal"> Forgot Password?</a>
				</span>
			</label>
		</div>
		<!-- Modal -->
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action={{ URL::route("reset.get.email") }} method="POST" >
						{!! csrf_field() !!}
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Forgot Password ?</h4>
						</div>
						<div class="modal-body">
							<p>Enter your e-mail address below to reset your password.</p>
							<input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
						</div>
						<div class="modal-footer">
							<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- modal -->
		<script src={{ asset('js/jquery-1.10.2.min.js') }}></script>
		<script src={{ asset('js/bootstrap.min.js') }}></script>
		<script src={{ asset('js/modernizr.min.js') }}></script>
		@include('vendor.sdc_message')
	</body>
</html>