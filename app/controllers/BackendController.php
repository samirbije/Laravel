<?php
class BackendController extends BaseController {
	protected $layout = "admin.index";	
	
	public function __construct() {
		 $this->beforeFilter('auth.admin');
	}		
	
	/**
	 * Display a listing of states
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		$this->layout->content= View::make('admin.dashboard');
	}
	
	/* change admin password */
	public function changePassword() {
		$this->layout->content = View::make('admin.users.change_password');
	}
	
	public function updatePassword() {
		$messages = array(
			'password.required' 	=> 'Password is required',
		  );
		  
		$rules = array(
			'password' 					=> 'required|confirmed'
		  );		
		
		$validator = Validator::make($data = Input::all(), $rules, $messages);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}	
		
		$data['password'] = Hash::make(Input::get('password'));
		User::where('id', '=', Auth::user()->id)->update($data);			
		return Redirect::to('admin/change_password')->with('success_message','Password changed sucessfully');
	}		
}
