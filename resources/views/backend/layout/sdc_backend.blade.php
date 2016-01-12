<!DOCTYPE html>
<html lang="en">
<head>
	@include('backend.layout.sdc_seo')
	@include('backend.layout.sdc_css')
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    	@include('backend.layout.sdc_sidebar')
    <!-- left side end-->

    <!-- main content start-->
	    <div class="main-content" >

	        <!-- header section start-->
	        	@include('backend.layout.sdc_header')
	        <!-- header section end-->

	        <!--body wrapper start-->
	        	@yield('content-backend')
	        <!--body wrapper end-->

	    </div>
    <!-- main content end-->
</section>
	@include('backend.layout.sdc_js')
</body>
</html>