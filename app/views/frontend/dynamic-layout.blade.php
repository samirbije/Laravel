 @include('frontend.includes.header')
<body>
<div id="wrapper" class="home-page">
	<!-- start header -->
	 @include('frontend.includes.nav')
	<!-- end header -->

<!-- Body part -->
{{ $content }}
<!-- Body part ends -->    

<!-- Footer starts -->
 @include('frontend.includes.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/frontend_root/js/jquery.js"></script>
<script src="/frontend_root/js/jquery.easing.1.3.js"></script>
<script src="/frontend_root/js/bootstrap.min.js"></script>
<script src="/frontend_root/js/jquery.fancybox.pack.js"></script>
<script src="/frontend_root/js/jquery.fancybox-media.js"></script> 
<script src="/frontend_root/js/portfolio/jquery.quicksand.js"></script>
<script src="/frontend_root/js/portfolio/setting.js"></script>
<script src="/frontend_root/js/jquery.flexslider.js"></script>
<script src="/frontend_root/js/animate.js"></script>
<script src="/frontend_root/js/custom.js"></script>
<script src="/frontend_root/js/owl-carousel/owl.carousel.js"></script>
<!-- For smooth animatin  -->
<script src="/frontend_root/js/wow.min.js"></script> 
</body>
</html>
<!-- footer ends -->

