<?php
class Page extends Eloquent {
	//protected $table = 'pages';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	//echo $table = $model->getTable();
	// Don't forget to fill this array
	protected $fillable = ['title', 'slug', 'photo', 'intro_text', 'description', 'is_active'];
	public static function testGet($where = NULL , $sortdatafield=null , $order_by = NULL, $filterscount = null, $filterDatafield=null,$filterValue=null,$filterOperator=null,$filterCondition=null, $limit = array('limit' => NULL,'offset' => '')) {
		//echo "jjj".$filterCondition;
		//echo "sdfsd".$filterValue;
		$filterDatafield1='';
		if(isset($filterDatafield) && $filterDatafield!='')
		{
			// $filterDatafield1	= 'and ' . $filterDatafield .' like ' .'"'.$filterValue.'%"' ;
		}
		else
		{
			//$filterDatafield1='';
		}
		
		switch($filterCondition) {
					case "CONTAINS":
					//$this->db->like($filterDatafield, $filterValue);
					$filterDatafield1	= 'and ' . $filterDatafield .' like ' .'"'.$filterValue.'%"' ;
					break;
					case "DOES_NOT_CONTAIN":
					$filterDatafield1	= 'and ' . $filterDatafield .'do not like ' .'"'.$filterValue.'%"' ;
					//$this->db->not_like($filterDatafield, $filterValue);
					break;
					case "EQUAL":
					$filterDatafield1	= 'and ' . $filterDatafield .' = ' .'"'.$filterValue.'"' ;
					//$this->db->where($filterDatafield, $filterValue);
					break;
					case "GREATER_THAN":
					$filterDatafield1	= 'and ' . $filterDatafield .' > ' .'"'.$filterValue.'"' ;
					//$this->db->where($filterDatafield . ' >', $filterValue);
					break;
					case "LESS_THAN":
					$filterDatafield1	= 'and ' . $filterDatafield .' < ' .'"'.$filterValue.'"' ;
					//$this->db->where($filterDatafield . ' <', $filterValue);
					break;
					case "GREATER_THAN_OR_EQUAL":
					$filterDatafield1	= 'and ' . $filterDatafield .' >= ' .'"'.$filterValue.'"' ;
					//$this->db->where($filterDatafield . ' >=', $filterValue);
					break;
					case "LESS_THAN_OR_EQUAL":
					$filterDatafield1	= 'and ' . $filterDatafield .' <= ' .'"'.$filterValue.'"' ;
					//$this->db->where($filterDatafield . ' <=', $filterValue);
					break;
					case "STARTS_WITH":
					//$this->db->like($filterDatafield, $filterValue, 'after'); 
					break;
					case "ENDS_WITH":
					//$this->db->like($filterDatafield, $filterValue, 'before'); 
					break;
					}
		//echo "23234".$filterDatafield1;
		$result = DB::select('select id,title, slug from pages where 1=1  '.$filterDatafield1.' ORDER BY '.$sortdatafield .' '. $order_by );
	//	->orderBy('title', $order_by);
		//$result = $result->toArray();
		//$result = $result->toArray();
		//print_r($result);
		//exit;
		//return $this->belongsTo('Country', 'country_id');
		return $result;
	}
}