<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Menus</h1>
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
									Menus Listings
								</h3>
								<nav align="right">
										<ul>
										   <li>
										   <a href="{{ Request::root() }}/admin/menus/create" class="btn btn-primary">Add new</a>
										   </li>
										</ul>
									</nav>								
							</div>
							<div class="box-content nopadding">
								<table class="table table-responsive table-bordered">
										<thead>
										  <tr>
											<th>Menu</th>
										  </tr>
										</thead>
										<tbody>
										  @foreach($menus as $entry)
											  <tr>
												<td>{{ $entry->name }}
														<div style='float:right;padding-right:12px;'>
															<span><a href="{{ Request::root() }}/admin/menus/{{ $entry->id }}/edit"><i class="icon-edit"></i></a></span> <!--|
															<span><a href='#'><i class="icon-trash"></i></a></span>-->
														</div>				
													<?php foreach($entry['children'] as $child_model_1) { ?>
														<ul style="list-style:none;padding:5px;">
															<li style="padding-left:20px;">
																<i class="icon-arrow-right"></i> <?php echo $child_model_1->name;?> (<?php echo $child_model_1->name_nepali;?>)
																<div style='float:right'>
																	<span><a href="{{ Request::root() }}/admin/menus/{{ $child_model_1->id }}/edit"><i class="icon-edit"></i></a></span> <!--|
																	<span><a href='#'><i class="icon-trash"></i></a></span>-->
																</div>
															</li>
														</ul>
														
														<?php foreach($child_model_1['children'] as $child_model_2) { ?>
															<ul style="list-style:none;padding:5px;">
																<li style="padding-left:40px;">
																	<i class="icon-arrow-right"></i> <?php echo $child_model_2->name;?> (<?php echo $child_model_2->name_nepali;?>)
																	<div style='float:right'>
																		<span><a href="{{ Request::root() }}/admin/menus/{{ $child_model_2->id }}/edit"><i class="icon-edit"></i></a></span> <!--|
																		<span><a href='#'><i class="icon-trash"></i></a></span>-->
																	</div>
																</li>
															</ul>
															
															<?php foreach($child_model_2['children'] as $child_model_3) { ?>
																<ul style="list-style:none;padding:5px;">
																	<li style="padding-left:60px;">
																		<i class="icon-arrow-right"></i> <?php echo $child_model_3->name;?> (<?php echo $child_model_3->name_nepali;?>)
																		<div style='float:right'>
																			<span><a href="{{ Request::root() }}/admin/menus/{{ $child_model_3->id }}/edit"><i class="icon-edit"></i></a></span> <!--|
																			<span><a href='#'><i class="icon-trash"></i></a></span>-->
																		</div>
																	</li>
																</ul>
															<?php } ?>								
															
														<?php } ?>						
														
													<?php } ?>
												</td>		   
											  </tr>
										  @endforeach 
										</tbody>
									  </table>								
							</div>
						</div>
					</div>
				
				</div>				
				
</div>