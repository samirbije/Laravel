<div id="navigation">
		<div class="container-fluid">
			<a href="{{ Request::root() }}/admin" id="brand">{{ Config::get('admin-constants.AMIN_PANEL_CAPTION') }}</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<ul class='main-nav'>
				<li class='active'>
					<a href="{{ Request::root() }}/admin">
						<span>Dashboard</span>
					</a>
				</li>
				
				
							
				
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Contents</span>
						<span class="caret"></span>
					</a>				
					<ul class="dropdown-menu">
						<?php /*?><li class='dropdown-submenu'>
							<a href="#">Blogs</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ Request::root() }}/admin/blog/approve_comments">Comments</a>
								</li>								
								<li>
									<a href="{{ Request::root() }}/admin/blogs/create">Add new post</a>
								</li>
								<li>
									<a href="{{ Request::root() }}/admin/blogs">View Posts</a>
								</li>
							</ul>
						</li><?php */?>
						
					<li class='dropdown-submenu'>
							<a href="#">Pages</a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{ Request::root() }}/admin/pages/create">Add new page</a>
								</li>
								<li>
									<a href="{{ Request::root() }}/admin/pages">Pages</a>
								</li>
							</ul>
						</li>	
					<li class='dropdown-submenu'>
								<a href="#">Sliders</a>
								<ul class="dropdown-menu">
									<li>
										<a href="{{ Request::root() }}/admin/sliders">Manage Sliders</a>
									</li>
									<li>
										<a href="{{ Request::root() }}/admin/sliders/create">Add new slider</a>
									</li>
								</ul>
							</li>						
						
					<?php /*?><li class='dropdown-submenu'>
								<a href="#">Staff</a>
								<ul class="dropdown-menu">
									<li>
										<a href="{{ Request::root() }}/admin/staffs">Manage Staff</a>
									</li>
									<li>
										<a href="{{ Request::root() }}/admin/staffs/create">Add new staff</a>
									</li>
								</ul>
							</li><?php */?>																
					</ul>
				</li>				
			<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Menus</span>
						<span class="caret"></span>
					</a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ Request::root() }}/admin/menus">Manage menus</a>
							</li>															
						</ul>
			</li>				
				<?php 
				if (Auth::user()->role == 1) { ?>
					<li>
						<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
							<span>Users</span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ Request::root() }}/admin/users">Manage Users</a>
							</li>
							<li>
								<a href="{{ Request::root() }}/admin/users/create">Add New User</a>
							</li>															
						</ul>
					</li>			
				<?php } ?>
			<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Settings</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ Request::root() }}/admin/constants">Configure Content</a>
						</li>
					</ul>
				</li>	
			</ul>
			<div class="user">
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">Hi, {{ Auth::user()->firstname }} <img src="/admin_root/img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="{{ Request::root() }}/admin/change_password">Change Password</a>
						</li>
						<li>
							<a href="{{ Request::root() }}/admin/logout">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>