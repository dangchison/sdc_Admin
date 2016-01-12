@extends("backend.layout.sdc_backend")

@section("content-backend")
	<div class="wrapper">
		<div class="row blog">

			@include("backend.post.sdc_post_sidebar")

			<div class="col-md-8">
				@if ( $posts->count() != 0 )
					@foreach( $posts as $key => $post )
						<div class="panel">
				       	<div class="panel-body">
				           	<div class="blog-img-wide">
			               	<img src="images/blog/blog-wide-img.jpg" alt="">
				           	</div>
				           	<h1 class=""><a href={{ URL::route("B.post.detail",$post->post_slug) }} >{{ $post->post_title }}</a></h1>
				           	<p class=" auth-row">
				               By <a href={{ URL::route("B.user.profile",$post->sdcUser->user_slug) }}  >{{ $post->sdcUser->display_name }}</a> | {{ date("d M Y", strtotime($post->created_at)) }}
				           	</p>

				           	<p>{{ $post->post_description }}</p>
				           	<a href={{ URL::route("B.post.detail",$post->post_slug) }} class="more">Continue Reading</a>
				       	</div>
					   </div>
					@endforeach
				@endif
				@if ( $posts->count() != 0 && $posts->lastPage() > 1)
			   <div class="text-center">
		       	<ul class="pagination blog-pagination">
		       		<li class={{ ($posts->currentPage() == 1) ? "disabled" : "" }}>
		       			<a href={!! $posts->previousPageUrl() !!}>PREV</a>
		       		</li>
		       		@for( $i = 1; $i <= $posts->lastPage(); $i++ )
		       			<li class={{ ($posts->currentPage() == $i) ? "active" : "" }}>
		       				<a {{ ($posts->currentPage() != $i) ? "href=".$posts->url($i) : "" }}>{{$i}}</a>
		       			</li>
		       		@endfor
		           	<li class={{ ( $posts->currentPage() == $posts->lastPage() ) ? "disabled" : "" }}>
		           		<a href={!! $posts->nextPageUrl() !!}>NEXT</a>
	           		</li>
		       	</ul>
			   </div>
			 	@endif
			</div>

		</div>
	</div>
@stop