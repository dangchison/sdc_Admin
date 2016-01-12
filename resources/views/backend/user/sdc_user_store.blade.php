@extends('backend.layout.sdc_backend')

@section('css')
	<link rel="stylesheet" type="text/css" href={{ asset("js/bootstrap-datepicker/css/datepicker-custom.css") }} />
	<link rel="stylesheet" type="text/css" href={{ asset("js/bootstrap-datepicker/css/datetimepicker-custom.css") }} />
@stop

@section('content-backend')
	<!-- page heading start-->
      @include( 'backend.layout.sdc_heading' )
   	<!-- page heading end-->
   	<div class="wrapper">
   		<div class="row">
   			<div class="col-md-12">
   				<form action="" class="form-horizontal" method="POST" >
   					{!! csrf_field() !!}
	   				<div class="panel">
	                  <header class="panel-heading">
	                     Edit Information
	                     <span class="tools pull-right">
	                        <a class="fa fa-chevron-down" href="javascript:;"></a>
	                     </span>
	                  </header>
	                	<div class="panel-body">
								<div class="row">
									<div class="col-md-6 col-xs-11">

										<div class="form-group">
		                           <label class="control-label col-md-4">Display name</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="display_name" type="text" value="{{ ( ! empty($user) ) ? $user->display_name : '' }}"/>
		                           </div>
		                       	</div>

		                       	<div class="form-group">
		                           <label class="control-label col-md-4">Email</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" id="email" name="email" type="email" value="{{ ( ! empty($user) ) ? $user->email : '' }}" required/>
		                           </div>
		                       	</div>
										
										<div class="form-group">
		                           <label class="control-label col-md-4">Gender</label>
		                           <div class="col-md-7 col-xs-11">
		                           	<select class="form-control" name="gender" id="">
		                           		<option value="">Please choose</option>
		                           		<option value="1" {{ ( isset( $user ) ) ? ( $user->gender == 1 ) ? "selected" : '' : '' }} >Men</option>
		                           		<option value="0" {{ ( isset( $user ) ) ? ( $user->gender == 0 ) ? "selected" : '' : '' }} >Famle</option>
		                           		<option value="2" {{ ( isset( $user ) ) ? ( $user->gender == 2 ) ? "selected" : '' : '' }} >Other</option>
		                           	</select>
		                           </div>
		                       	</div>
										
										<section id="change_pass">
											<div class="form-group">
			                           <label class="control-label col-md-4">Password</label>
			                           <div class="col-md-7 col-xs-11">
			                           	<button class="btn btn-info btn-block" onclick="clickPass(false)" type="button">Change password</button>
			                           </div>
			                       	</div>
										</section>

										<section id="display_pass" >

											<div class="form-group">
			                           <label class="control-label col-md-4">Password</label>
			                           <div class="col-md-7 col-xs-11">
			                            	<input class="form-control" id="password" name="password" type="password" required/>
			                           </div>
			                       	</div>

			                       	<div class="form-group">
			                           <label class="control-label col-md-4">Confirm Password</label>
			                           <div class="col-md-7 col-xs-11">
			                            	<input class="form-control" id="confirm_password" name="confirm_password" type="password" required/>
			                           </div>
			                       	</div>

										</section>

										<div class="form-group">
		                           <label class="control-label col-md-4">Address</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="address" type="text" value="{{ ( ! empty($user) ) ? $user->address : '' }}" />
		                           </div>
		                       	</div>
					
		                       	<div class="form-group">
		                           <label class="control-label col-md-4">Birthday</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="{{ ( ! empty($user) ) ? date('d-m-Y',strtotime($user->birthday)) : '' }}"  class="input-append date dpYears">
		                             		<input type="text" name="birthday" readonly value="{{ ( ! empty($user) ) ? date('d-m-Y',strtotime($user->birthday)) : '' }}" class="form-control">
													<span class="input-group-btn add-on">
														<button class="btn btn-primary" type="button">
															<i class="fa fa-calendar"></i>
														</button>
													</span>
		                            	</div>
		                           </div>
		                       	</div>

		                       	<div class="form-group">
		                           <label class="control-label col-md-4">Phone</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="phone" type="text" value="{{ ( ! empty($user) ) ? $user->phone : '' }}" />
		                           </div>
		                       	</div>
										
									</div>
									<div class="col-md-6 col-xs-11">
										
										<div class="form-group">
		                           <label class="control-label col-md-3">Facebook</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="facebook_id" type="text" value="{{ ( ! empty($user) ) ? $user->facebook_id : '' }}" />
		                           </div>
		                       	</div>

		                       	<div class="form-group">
		                           <label class="control-label col-md-3">Google</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="google_id" type="text" value="{{ ( ! empty($user) ) ? $user->google_id : '' }}" />
		                           </div>
		                       	</div>

		                       	<div class="form-group">
		                           <label class="control-label col-md-3">Twitter</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="twitter_id" type="text" value="{{ ( ! empty($user) ) ? $user->twitter_id : '' }}" />
		                           </div>
		                       	</div>
										
										<div class="form-group">
		                           <label class="control-label col-md-3">Skype</label>
		                           <div class="col-md-7 col-xs-11">
		                            	<input class="form-control" name="skype_id" type="text" value="{{ ( ! empty($user) ) ? $user->skype_id : '' }}" />
		                           </div>
		                       	</div>

										<div class="form-group">
		                           <label class="control-label col-md-3">Status</label>
		                           <div class="col-md-8 col-xs-11">
		                            	<textarea class="form-control" name="status" id="" rows="3">{{ ( ! empty($user) ) ? $user->status : '' }}</textarea>
		                           </div>
		                       	</div>

		                       	<div class="form-group">
		                           <label class="control-label col-md-3">Description</label>
		                           <div class="col-md-8 col-xs-11">
		                            	<textarea class="form-control" name="description" id="" rows="4">{{ ( ! empty($user) ) ? $user->description : '' }}</textarea>
		                           </div>
		                       	</div>
									</div>
								</div>
								<div class="row text-center">
									<input type="reset" value="Reset" onclick="clickRs(true)" class="btn btn-primary">
	                  		<input type="submit" value="Submit" class="btn btn-success">
								</div>
	                  </div>
	            	</div>
            	</form>
   			</div>
   		</div>
   	</div>
@stop

@section('js')
	<!--pickers plugins-->
	<script type="text/javascript" src={{ asset("js/bootstrap-datepicker/js/bootstrap-datepicker.js") }}></script>
	<script type="text/javascript" src={{ asset("js/jquery.validate.min.js") }}></script>
	<script type="text/javascript" src={{ asset("js/validation-init.js") }}></script>
	<script type="text/javascript" >
		$('.dpYears').datepicker();
	</script>	
	<script type="text/javascript" >
		@if ( isset($user) )
			$("#display_pass").hide();
			activePass(true);
			function activePass(attr){
				$("#password").attr('disabled', attr );
				$("#confirm_password").attr('disabled', attr );
			}
			function clickPass(attr){
				$("#display_pass").show("clip", 500);
				$("#change_pass").hide("blind", 300);
				activePass(attr);
			}
			function clickRs(attr){
				$("#display_pass").hide("clip", 500);
				$("#change_pass").show("blind", 300);
				activePass(attr);
			}
		@else
			$("#display_pass").show();
			$("#change_pass").hide();
		@endif
	</script>
@stop