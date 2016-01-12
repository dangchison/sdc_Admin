@extends('backend.layout.sdc_backend')

@section('content-backend')
   <!-- page heading start-->
      @include( 'backend.layout.sdc_heading' )
   <!-- page heading end-->
	<div class="wrapper">
      <div class="row">
        	<div class="col-md-4">
          	<div class="row">
               <div class="col-md-12">
               	<div class="panel">
                     <header class="panel-heading">
                        Avatar&nbsp;
                        <a title="" data-toggle="tooltip" class="tooltips" data-placement="top" data-original-title="Edit" href={{ URL::route( 'B.user.edit' ) . "?slug=" . $user->user_slug }} >
                           <i class="fa fa-edit"></i>
                        </a>
                        <span class="tools pull-right">
                           <a class="fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                     </header>
                   	<div class="panel-body">
                        <div class="profile-pic text-center">
                        	<img alt="avatar" src={{ asset("$user->avatar_large") }} >
                        </div>
                   	</div>
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="panel">
                     <header class="panel-heading">
                        Information&nbsp;
                        <a title="" data-toggle="tooltip" class="tooltips" data-placement="top" data-original-title="Edit" href={{ URL::route( 'B.user.edit' ) . "?slug=" . $user->user_slug }} >
                           <i class="fa fa-edit"></i>
                        </a>
                        <span class="tools pull-right">
                           <a class="fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                     </header>
                   	<div class="panel-body">
                       <ul class="p-info">
                        	<li>
                            	<div class="title">Gender</div>
                            	<div class="desk">{{ ( ! empty($user->gender) ) ? ( $user->gender == 1 ) ? 'Male' : 'Female' : '-'  }}</div>
                        	</li>
                        	<li>
                            	<div class="title">Email</div>
                            	<div class="desk">{{ $user->email }}</div>
                        	</li>
                        	<li>
                            	<div class="title">Birthday</div>
                            	<div class="desk">{{ ( ! empty($user->birthday) ) ? date('Y/m/d',strtotime($user->birthday)) : '-' }}</div>
                        	</li>
                        	<li>
                            	<div class="title">Address</div>
                            	<div class="desk">{{ ( ! empty($user->address) ) ? $user->address : '-' }}</div>
                        	</li>
                        	<li>
                            	<div class="title">Phone</div>
                            	<div class="desk">{{ ( ! empty($user->phone) ) ? $user->phone : '-' }}</div>
                        	</li>
                       </ul>
                   	</div>
               	</div>
               </div>
          	</div>
            <div class="location-map">
               <div id="map-canvas"></div>
            </div>
        	</div>
        	<div class="col-md-8">
          	<div class="row">
               <div class="col-md-12">
                  <div class="panel">
                     <header class="panel-heading">
                        Introduction&nbsp;
                        <a title="" data-toggle="tooltip" class="tooltips" data-placement="top" data-original-title="Edit" href={{ URL::route( 'B.user.edit' ) . "?slug=" . $user->user_slug }} >
                           <i class="fa fa-edit"></i>
                        </a>
                        <span class="tools pull-right">
                           <a class="fa fa-chevron-down" href="javascript:;"></a>
                        </span>
                     </header>
                     <div class="panel-body">
                        <div class="profile-desk">
                           <h1>{{ $user->display_name }}</h1>
                           @if ( $user->status ) 
                       	   <span class="designation">
                              {{ $user->status }}
                           </span>
                           @endif
                           @if ( $user->description )
                          	<p>
                              {{ $user->description }}
                           </p>
                           @endif                    	
                        </div>
                     </div>
                     <div class="panel-footer ">
                        <ul class="nav nav-pills p-option">
                           <li>
                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook">
                                 <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter">
                                 <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn">
                                 <i class="fa fa-linkedin"></i>
                              </a>
                           </li>
                           <li>
                              <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="skype:thaontt89?chat" data-original-title="Skype">
                                 <i class="fa fa-skype"></i>
                              </a>
                           </li>
                        </ul>
                     </div>                 
                  </div>
               </div>
          	</div>
            
            @if ($user->sdcPosts->count() != 0)
          	<div class="row">
               <div class="col-md-12">
            		<div class="panel">
                   	<header class="panel-heading">
                        <a href={{ URL::route('B.post.list') }} class="fa fa-link" >&nbsp;Post published</a>
                        <span class="tools pull-right">
                           <a class="fa fa-chevron-down" href="javascript:;"></a>
                     	</span>
                   	</header>
                   	<div class="panel-body">
                        <ul class="activity-list">
                           @foreach( $user->sdcPosts as $key => $post)
                        	<li>
                            	<div class="avatar">
                             	<img src="images/photos/user1.png" alt=""/>
                            	</div>
                            	<div class="activity-desk">
                                 <h5><a href={{ URL::route("B.post.detail",$post->post_slug) }} >{{ $post->post_title }}</a></h5>
                                 <p class="text-muted">{{ date("d M Y",strtotime($post->updated_at)) }}</p>
                            	</div>
                        	</li>
                           @endforeach
                        </ul>
                   	</div>
               	</div>
               </div>
          	</div>
            @endif

        	</div>
      </div>
	</div>
@stop