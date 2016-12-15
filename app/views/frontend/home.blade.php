<section id="banner">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
				<?php foreach($sliders as $slider) { ?>
					  <li>
						<img src="{{ Request::root() }}/sliders/slider_{{ $slider->photo }}" alt="{{ $slider->title }}" title="{{ $slider->title }}" /> 
						<div class="flex-caption container">
							<h3>{{ $slider->content }}</h3> 
								<?php if ($slider->url != '') { 
									$button_text = ($slider->button_text == '')?'Read More' : $slider->button_text;
								?>							
									<a href="<?php echo $slider->url;?>" class="btn btn-theme"><?php echo $button_text; ?></a>
								<?php } ?>
						</div>
					  </li>   
				<?php } ?>	             
            </ul>
        </div>
    <!-- end slider -->
     </section>
	<section class="txt-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter">
				<h1 class="wow fadeInLeftBig">{{ $home_course_block[0]->content_english }}</h1>
				{{ $home_course_block[0]->content_nepali }}
				</div>
            </div>
        </div>
    </div>
    </section>
	<section id="content">
    <div class="container">
        <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 0ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $home_block1[0]->content_english }}</h4>
                                <p>{{ $home_block1[0]->content_nepali }}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 100ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $home_block2[0]->content_english }}</h4>
                                <p>{{ $home_block2[0]->content_nepali }}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="200ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 200ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $home_block3[0]->content_english }}</h4>
                                <p>{{ $home_block3[0]->content_nepali }}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 300ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $home_block4[0]->content_english }}</h4>
                                <p>{{ $home_block4[0]->content_nepali }}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="400ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 400ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $home_block5[0]->content_english }}</h4>
                                <p>{{ $home_block5[0]->content_nepali }}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="500ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 500ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $home_block6[0]->content_english }}</h4>
                                <p>{{ $home_block6[0]->content_nepali }}</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div>   
    </div>
    </section>
	<section class="aboutUs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">{{ $student_page[0]->title }}</h2>
					{{ $student_page[0]->intro_text }}
				</div>
                <br/>
            </div>
        </div> 
        <div class="row">
                            <div class="col-md-6">
                                <?php 
								if ($student_page[0]->photo != '') {?>
									<img src="{{ Request::root() }}/blog/large_{{ $student_page[0]->photo }}" />
								<?php } ?>
                                <div class="space"></div>
                            </div>
                            <div class="col-md-6">
                               <p>
							   		{{ $student_page[0]->description }}
							   </p>
                            </div>
                        </div>
    </div>
    </section>
	<?php /*?><section id='events'>
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Our Events</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus.</div>
                <br>
            </div>
        </div>
    <div class="row">
                <div class="col-md-4">
                    <div class="post3">
                        <img src="/img/e1.png" alt="">
                        <a href="#">
                            <time datetime="2015-03-01">
                                <span class="year">2015</span>
                                <span class="month">Feb</span>
                            </time>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post3">
                        <img src="/img/e2.png" alt="">
                        <a href="#">
                            <time datetime="2015-03-01">
                                <span class="year">2015</span>
                                <span class="month">March</span>
                            </time>
                            <p>Apsum dolor sit amet, consectetur adipisdslif.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post3">
                        <img src="/img/e3.png" alt="">
                        <a href="#">
                            <time datetime="2015-03-01">
                                <span class="year">2015</span>
                                <span class="month">April</span>
                            </time>
                            <p>Dolor sit amet, consectetur adipisic indfeft</p>
                        </a>
                    </div>
                </div>
            </div>
    </div>
    </section><?php */?>
	
	<?php /*?><section id="clients">
        <div class="container">
                <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Campus Placement</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                <br/>
            </div>
        </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
            </div>
        </div>
    </section><?php */?>