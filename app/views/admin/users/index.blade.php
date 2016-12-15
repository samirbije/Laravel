
<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Users</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="#">Home</a>
							<i class="icon-angle-right"></i>
						</li>
					</ul>
					
				</div>
<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									User Listings 
								</h3>
								<nav align="right">
										<ul>
										   <li>
										   <a href="{{ Request::root() }}/admin/users/create" class="btn btn-primary">Add new</a>
										   </li>
										</ul>
									</nav>								
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-bordered">
									<thead>
										<tr>
											<th>Name</th>
											<th>Username</th>
											<th>Type</th>
											<th>Status</th>
											<th>Edit</th>
											<th>Change Password </th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach($users as $entry) { ?>
											<tr>
												<td><?php echo $entry->firstname; ?></td>
												<td>{{ $entry->username }}</td>
												<td>
													<?php if ($entry->role == 1) { ?>
														Super Admin
													<?php } else if ($entry->role == 2) { ?>
														Normal Admin
													<?php } ?>												</td>
												<td>
													<?php
														if($entry->is_active == 1) {
													?>
														<p style="color:#99CC33">Active</p> <a href="{{ Request::root() }}/admin/users/change_status/d/{{ $entry->id }}"><i class="icon-remove"></i> Deactivate</a>
													<?php } else { ?>
														<p style="color:#FF0000">Deactive</p> <a href="{{ Request::root() }}/admin/users/change_status/a/{{ $entry->id }}"><i class="icon-reply"></i> Activate Now</a>
													<?php } ?>												</td>
															
<td><a href="{{ Request::root() }}/admin/users/{{ $entry->id }}/edit"><i class="icon-edit"></i> Edit</a></td>												
												<td><a href="{{ Request::root() }}/admin/users/reset/{{ $entry->id }}"> Reset</a></td>
												<td><a onclick="return confirm('Are you sure?');" href="{{ Request::root() }}/admin/delete/user/{{ $entry->id }}"><i class="icon-remove-sign"></i> Delete</a></td>	
											</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				
				</div>				
				
{{ $users->links(); }}
</div>