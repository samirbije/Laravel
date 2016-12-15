<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Dashboard</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats">							
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big"><?php echo date("M d, Y");?></span>
									<span><?php echo date("D");?>, <?php echo date("H:i");?></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="#">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
<div class="span12">
						<ul class="tiles">
							<li class="blue">
								<a href="{{ Request::root() }}/admin/test"><span><i class="icon-folder-close-alt"></i></span><span class='name'>Pages</span></a>
							</li>	
							<li class="green">
								<a href="{{ Request::root() }}/admin/sliders"><span><i class="icon-picture"></i></span><span class='name'>Sliders</span></a>
							</li>	
							<li class="red">
								<a href="{{ Request::root() }}/admin/menus"><span><i class="icon-table"></i></span><span class='name'>Menus</span></a>
							</li>																																<li class="lime">
								<a href="{{ Request::root() }}/admin/users"><span><i class="icon-user"></i></span><span class='name'>Users</span></a>
							</li>																															</ul>
					</div>									
				</div>
			</div>