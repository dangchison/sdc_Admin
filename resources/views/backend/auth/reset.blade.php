<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="ThemeBucket">
		<link rel="shortcut icon" href="{{ asset("images/logo_icon.png") }}" type="image/png">
		<title>Reset Password Pages</title>
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
					<form method="post" action={{ URL::route('reset.success') }} role="form">
						{!! csrf_field() !!}
						<input type="hidden" name="token" value="{{ $token }}">
						<div class="form-group col-md-12 col-sm-12 col-xs-12 {{ ( $errors->first('email') ) ? 'has-error' : '' }}">
							<input type="email" name="email" class="form-control" placeholder="User ID" value="{{ old('email') }}">
							@if( $errors->first('email') )
								<label class="control-label pull-left" for="inputError1">{{ $errors->first('email') }}</label>
							@endif
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12 {{ ( $errors->first('password') ) ? 'has-error' : '' }}">
							<input type="password" name="password" class="form-control" placeholder="New Password">
							@if( $errors->first('password') )
								<label class="control-label pull-left" for="inputError1">{{ $errors->first('password') }}</label>
							@endif
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12 {{ ( $errors->first('password_confirmation') ) ? 'has-error' : '' }}">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
							@if( $errors->first('password') )
								<label class="control-label pull-left" for="inputError1">{{ $errors->first('password_confirmation') }}</label>
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
		</div>
		<script src={{ asset('js/jquery-1.10.2.min.js') }}></script>
		<script src={{ asset('js/bootstrap.min.js') }}></script>
		<script src={{ asset('js/modernizr.min.js') }}></script>
	</body>
</html>