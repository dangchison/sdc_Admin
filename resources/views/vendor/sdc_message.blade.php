<!-- Modal Message -->
<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        	<h4 class="modal-title" id="myModalLabel">Message</h4>
      	</div>
	      <div class="modal-body">
	      	@if( Session::has('message') )				
					<div class="alert alert-danger" role="alert">{{ session('message') }}</div>
				@endif
				@if( Session::has('status') )
					<div class="alert alert-success" role="alert">please check your email !</div>
				@endif
	      </div>
	      <div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
		</div>
  	</div>
</div>
<!-- modal Message -->
@if( Session::has('message') || Session::has('status') )
<script>
	$(document).ready(function() {
		$("#modalMessage").modal('show');
	});
</script>
@endif