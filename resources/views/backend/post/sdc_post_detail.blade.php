@extends("backend.layout.sdc_backend")

@section("content-backend")
	<div class="wrapper">
		<div class="row blog">

			@include("backend.post.sdc_post_sidebar")

			<div class="col-md-8">
				<div class="blog">
					<div class="single-blog">
						<div class="panel">
							<div class="panel-body">
								<h1 class="text-center mtop35">
									<a href="#">{{ $post->post_title }}</a>
								</h1>
								<p class="text-center auth-row">
									By <a href="#">Anthony Jones</a> | {{ date("d M Y",strtotime($post->created_at)) }}
								</p>
								<div class="blog-img-wide">
									<img src="images/blog/blog-wide-img.jpg" alt="">
								</div>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
								<blockquote>
									<p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. 				Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat port			titor ligula, eget lacinia odio sem nec elit.</p>
								</blockquote>

								<p>consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

								<div class="blog-tags">
									TAGS <a href="#">photoshop</a> <a href="#">illustrator</a> <a href="#">adobe</a> <a href="#">theme</a>
									<div class="pull-right tag-social">
										<a href="#" class="btn btn-share pull-right">Share</a>

										<ul class="pull-right">
											<li>
												<a href="#">
												   <i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
												   <i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
												   <i class="fa fa-google-plus"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-body ">
								<div class="media blog-cmnt">
									<a href="javascript:;" class="pull-left">
										<img alt="" src="images/blog/blog-avatar.jpg" class="media-object">
									</a>
									<div class="media-body">
										<h4 class="media-heading">
											<a href="#">jones</a>
										</h4>
										<p class="mp-less">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-body">
							<h1 class="text-center cmnt-head">5 Comments</h1>
							<div class="media blog-cmnt">
								<a href="javascript:;" class="pull-left">
									<img alt="" src="images/blog/blog-avatar-2.jpg" class="media-object">
								</a>
								<div class="media-body">
									<h4 class="media-heading">
										<a href="#">jones</a>
									</h4>
									<div class="bl-status">
										<span class="pull-left">About 10 Min ago</span>
										<a href="#" class="pull-right reply">Reply</a>
									</div>
									<p class="mp-less">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</div>
							<div class="media blog-cmnt">
							<a href="javascript:;" class="pull-left">
							<img alt="" src="images/blog/blog-avatar.jpg" class="media-object">
							</a>
							<div class="media-body">
							<h4 class="media-heading">
							<a href="#">jones</a>
							</h4>
							<div class="bl-status">
							<span class="pull-left">About 10 Min ago</span>
							<a href="#" class="pull-right reply">Reply</a>
							</div>
							<p class="mp-less">
							Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit.
							</p>
							<div class="media blog-cmnt">
							<a href="javascript:;" class="pull-left">
							<img alt="" src="images/blog/blog-avatar-2.jpg" class="media-object-child">
							</a>
							<div class="media-body">
							<h4 class="media-heading">
							   <a href="#">jones</a>
							</h4>
							<div class="bl-status">
							   <span class="pull-left">About 10 Min ago</span>
							   <!--<a href="#" class="pull-right reply">Reply</a>-->
							</div>
							<p class="mp-less">
							   Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit.
							</p>
							<div class="media blog-cmnt">
							   <a href="javascript:;" class="pull-left">
							       <img alt="" src="images/blog/blog-avatar.jpg" class="media-object-child">
							   </a>
							   <div class="media-body">
							       <h4 class="media-heading">
							           <a href="#">gomez</a>
							       </h4>
							       <div class="bl-status">
							           <span class="pull-left">About 10 Min ago</span>
							           <!--<a href="#" class="pull-right reply">Reply</a>-->
							       </div>
							       <p class="mp-less">
							           Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit.
							       </p>
							       <div class="media blog-cmnt">
							           <a href="javascript:;" class="pull-left">
							               <img alt="" src="images/blog/blog-avatar-2.jpg" class="media-object-child">
							           </a>
							           <div class="media-body">
							               <h4 class="media-heading">
							                   <a href="#">gomez</a>
							               </h4>
							               <div class="bl-status">
							                   <span class="pull-left">About 10 Min ago</span>
							                   <!--<a href="#" class="pull-right reply">Reply</a>-->
							               </div>
							               <p class="mp-less">
							                   Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit.
							               </p>
							               <div class="media blog-cmnt">
							                   <a href="javascript:;" class="pull-left">
							                       <img alt="" src="images/blog/blog-avatar.jpg" class="media-object-child">
							                   </a>
							                   <div class="media-body">
							                       <h4 class="media-heading">
							                           <a href="#">gomez</a>
							                       </h4>
							                       <div class="bl-status">
							                           <span class="pull-left">About 10 Min ago</span>
							                           <!--<a href="#" class="pull-right reply">Reply</a>-->
							                       </div>
							                       <p class="mp-less">
							                           Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
							                       </p>
							                   </div>
							               </div>
							           </div>
							       </div>
							   </div>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-body">
							<h1 class="text-center cmnt-head ">Leave a Comments</h1>
							<p class="text-center fade-txt">If you want you can <a href="#">Cancel Reply</a></p>

							<form role="form" class="form-horizontal leave-cmnt">
							<div class="form-group">
							<div class="col-lg-12">
							<input type="text" class="col-lg-12 form-control" placeholder="Name *">
							</div>
							</div>
							<div class="form-group">
							<div class="col-lg-12">
							<input type="text" class="col-lg-12 form-control" placeholder="Email *">
							</div>

							</div>
							<div class="form-group">
							<div class="col-lg-12">
							<textarea class=" form-control" rows="8" placeholder="Message"></textarea>
							</div>
							</div>
							<p>
							<button class="btn btn-post-cmnt pull-right" type="submit">Post Comment</button>
							</p>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@stop