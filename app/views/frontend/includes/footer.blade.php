<?php
	$menus = Menu::orderBy('menu_order','ASC')->where('is_active','=','1')->get();
?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Think Big Education Consultancy</strong><br>
					Maitidevi Chowk<br>
					Kathmandu, Nepal.</address>
					<p>
						<i class="icon-phone"></i> <a href="tel:+97714418607">+977 1 4418607</a> <br>
						<i class="icon-envelope-alt"></i> <a href="mailto:info@tbec.edu.np">info(@)tbec(.)edu(.)np</a>
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<?php foreach($menus as $menu) { ?>
							<li><a href="{{ $menu->link }}">{{ $menu->name }}</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Think Big Education Consultancy <?php echo date("Y"); ?> All right reserved. By </span><a href="http://www.alignstech.com" target="_blank">Alignstech</a>
							<a href="http://laravel.com">Laravel <?php $laravel = app(); echo $laravel::VERSION; ?></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>