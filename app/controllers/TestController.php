<?php
class TestController extends BaseController {
	protected $layout = "admin.index";	
	public function __construct() {
		 $this->beforeFilter('auth.admin');
	}	
	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$tests = Page::orderBy('id', 'DESC')->paginate(20);
		//print_r($tests);
		$this->layout->content = View::make('admin.test.index', compact('tests'));
	}
	public function call_new()
	{
			$data = Input::all();
			$filtersCount		= '';
			$filterDatafield 	= '';
			$filterValue 		= '';
			$filterOperator 	= '';
			$filterCondition	= '';
			$sortdatafield 		= 'id';
			$sortorder 			= ' DESC';
		//print_r($data);
	//	if (isset($data['sortdatafield'])) {
			//echo "ss";
			$filtersCount = $data['filterscount'];
			if (isset($filtersCount)) {
			$filtersCount = $filtersCount;
			if ($filtersCount > 0) {
				for ($i=0; $i < $filtersCount; $i++) {
					// get the filter's column.
					$filterDatafield 	= $data['filterdatafield' . $i];
					// get the filter's value.
					$filterValue 		= $data['filtervalue' 	. $i];
					// get the filter's condition.
					$filterCondition 	= $data['filtercondition' . $i];
					// get the filter's operator.
					$filterOperator 	= $data['filteroperator' 	. $i];
					$operatorLike = 'LIKE';
					if ($filterValue == 'true') 
						$filterValue = 1;
					elseif ($filterValue == 'false')
						$filterValue = 0;
					if ($filterDatafield == 'group_id') {
						$filterDatafield = 'group';
					}
				}
			}
			//$sortdatafield 		= $data['sortdatafield'];
			$sortorder 			= (isset($data['sortorder'])) ? $data['sortorder'] :'asc';
		}
		//}
		//echo "fsdf".$filterCondition;
		//else
		//{
			
		//}
		
		//echo "sfsdf";
		//exit;
		//$rows = array('country'=>'ff','area'=>'ttt');
		//$te = new Page();
		$rows = Page::testGet('',$sortdatafield, $sortorder,$filtersCount,$filterDatafield,$filterValue,$filterOperator,$filterCondition);
		//$users = User::orderBy('id', 'DESC')->paginate(20);
		//print_r($rows);
		//exit;
		//print_r($rows22);
		 return Response::json($rows);
		//echo json_encode(array('total'=>count($rows),'rows'=>$rows));
		//exit;
	}
	public function save()
	{
		$data = Input::all();
		$id = Input::get('id');
		//	print_r($data);
		//exit;
		if(Input::get('id')=='')
		{
		//print_r($_POST);
		//echo "sdf";
		//exit;
			//$data = Input::all();
			Page::create($data)
			;
		}
		else
		{
			//echo "sfs";
			//exit;
			$data1['title'] = Input::get('title');
			$data1['slug'] = Input::get('slug');
			Page::where('id', '=', Input::get('id'))->update($data1);
			//Page::update1($id,$data);
		}
		//print_r($data);
		//exit;
		$success = TRUE;
        $msg='Success';
        return Response::json(array('msg'=>$msg,'success'=>$success),201);
		//echo json_encode(array('msg'=>$msg,'success'=>$success));
		//exit;
	}
	public function check_duplicate()
	{
		//return Response::json(array('success' => true));
		//exit;
		echo json_encode(array('success' => true));
		exit;
	}
	public function delete($id)
	{
	//	echo $id;
		//exit;
		$page = Page::find( $id );
		$page->delete();
		return Response::json(array('success' => true));
		//echo json_encode(array('success' => true));
		//exit;
	}
}
