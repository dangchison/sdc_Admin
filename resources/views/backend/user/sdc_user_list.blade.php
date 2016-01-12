@extends('backend.layout.sdc_backend')

@section('content-backend')
	<!-- page heading start-->
		@include( 'backend.layout.sdc_heading' )
	<!-- page heading end-->
	<div class="wrapper">
      <ul class="directory-list">
         @foreach ( $alphabet as $key => $apb)
            <li>
               <a href={{ URL::route("B.user.list")."?skey=".$apb }} class={{ ( $skey == $apb ) ? "active" : "" }} >
                  {{ $apb }}
               </a>
            </li>
         @endforeach
      </ul>
      <div class="directory-info-row">
       	<div class="row render-user">
            @if ( $users->count() != 0 )
               @foreach( $users as $key => $user )
                 	<div class="col-md-6 col-sm-6">
                     <div class="panel">
                      	<div class="panel-body">
                          	<h4>
                              {{ $user->display_name }} <span class="text-muted small"> - {{ $user->sdc_role_id }}</span>
                           </h4>
                          	<div class="media">
                              <a class="pull-left" href={{ URL::route("B.user.profile",$user->user_slug) }}>
                               	<img class="thumb media-object" src={{ asset( $user->avatar_small ) }} alt="">
                              </a>
                              <div class="media-body">
                               	<address>
                                   	<strong>{{ $user->display_name }}</strong><br>
                                    <abbr title="Email">E:</abbr>&nbsp;{{ $user->email }}<br>
                                   	<abbr title="Address">A:</abbr>&nbsp;{{ $user->address }}<br>
                                   	<abbr title="Phone">P:</abbr>&nbsp;{{ $user->phone }}
                               	</address>
                               	<ul class="social-links">
                                   	<li><a data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                   	<li><a data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                   	<li><a data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                   	<li><a data-placement="top" data-toggle="tooltip" class="tooltips" href="skype:thaontt89?chat" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                               	</ul>
                              </div>
                          	</div>
                      	</div>
                     </div>
                 	</div>
               @endforeach
            @else
               <div class="col-md-12 col-sm-12">
                  <div class="alert alert-danger" role="alert">Do not found user !</div>
               </div>
            @endif
       	</div>
         <div class="row text-center">
            @if ( $users->count() != 0 && $users->count() > 1)
               {!! $users->appends( [ 'skey'=> $skey ] )->render() !!}
            @endif
         </div>
      </div>
  	</div>
@stop