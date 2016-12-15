<?php

class HomeController extends BaseController {
	protected $layout = "frontend.home-layout";
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showHomePage()
	{
		$sliders = Slider::where('is_active', '=', '1')->get();	
		$home_course_block = Constant::where('title', '=', 'home_course_block')->get();
		$home_block1 = Constant::where('title', '=', 'home_block1')->get();
		$home_block2 = Constant::where('title', '=', 'home_block2')->get();
		$home_block3 = Constant::where('title', '=', 'home_block3')->get();
		$home_block4 = Constant::where('title', '=', 'home_block4')->get();
		$home_block5 = Constant::where('title', '=', 'home_block5')->get();
		$home_block6 = Constant::where('title', '=', 'home_block6')->get();
		$student_page = Page::where('id', '=', '9')->get();
		$this->layout->content = View::make('frontend.home', compact('sliders', 'home_course_block', 'home_block1', 'home_block2', 'home_block3', 'home_block4', 'home_block5','home_block6', 'student_page'));
	}
}
