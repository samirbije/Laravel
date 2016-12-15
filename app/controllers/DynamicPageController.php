<?php
class DynamicPageController extends BaseController {
	protected $layout = "frontend.dynamic-layout";
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	/* show the static page content */
	public function dynamicText($slug=null)
	{
		if($slug=='')
		{
			$slug = 'about';
		}
		//echo storage_path();
		//$model = new Page;
		//echo $table = $model->getTable();
		//echo "sfs";
		//exit;
		
//echo $table = $model->getTable();
		//$page = '';
		$page =	Page::where('slug', '=', $slug)->where('is_active', '=', '1')->get();
		//echo $table = Page::getTable();
		//print_r($page);	
		//exit;	
		$this->layout->content = View::make('frontend.dynamic', compact('page'));
	}
}
