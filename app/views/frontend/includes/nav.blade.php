<?php
	$menus = Menu::orderBy('menu_order','ASC')->where('is_active','=','1')->get();
?>
<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ Request::root() }}"><img src="/img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">	
						<?php foreach($menus as $menu) { ?>
							<li><a href="{{ $menu->link }}">{{ $menu->name }}</a></li>
                    	<?php } ?>
					</ul>
                </div>
            </div>
        </div>
	</header>