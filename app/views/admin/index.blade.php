<!doctype html>
<html>
 @include('admin.includes.header')
<body>	
	 @include('admin.includes.navigation')
		<div class="container-fluid" id="content">
			 @include('admin.includes.left-container')
			<div id="main">
				
				<!-- success message starts -->
						@if(Session::has('success_message'))
							<div class="alert alert-success" style="padding-top:5px;">{{ Session::get('success_message') }}</div>
						@endif					
				<!-- success message ends -->	
				
				<!-- error message starts -->
						@if(Session::has('error_message'))
							<div class="alert alert-error" style="padding-top:5px;">{{ Session::get('error_message') }}</div>
						@endif					
				<!-- error message ends -->						
				
				<!-- Validation error starts -->
					@if(count($errors->all())>0)
						<div class="alert alert-error">  
						<a class="close" data-dismiss="alert">X</a>  
						{{implode("<br />",$errors->all())}}
						</div>  
					@endif					
				<!-- validation error ends -->
				 {{$content}}
			</div>
		</div>	
			<!-- jQuery -->
<script type="text/javascript" src="/assets/js/adminlte/js/jquery.ui-1.11.0.min.js"></script>
<script type="text/javascript" src="/assets/js/adminlte/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/adminlte/js/AdminLTE/adminlte.js"></script>
<script type="text/javascript" src="/assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/assets/js/jquery.treeview.js"></script>
<script>
$(window).load(function() {
    $('.content').append('<div id="footer" class="bg-green">eRCS © 2016 All Rights Reserved.</div>');
    /*if ($(window).height() > $('.content').height()) {
        $('#footer').css({position: 'fixed', bottom: 0, right:0});
    }*/
});
</script>
	</body>
</html>

