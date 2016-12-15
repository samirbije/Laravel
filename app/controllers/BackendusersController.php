<?php
class BackendusersController extends BaseController {
	protected $layout = "admin.index";	
	public function __construct() {
		 $this->beforeFilter('auth.admin', array('except' => array('login', 'logout')));
	}	
	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		$users = User::orderBy('id', 'DESC')->paginate(20);
		$this->layout->content = View::make('admin.users.index', compact('users'));
	}
	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		$this->layout->content = View::make('admin.users.create');
	}
	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		
	$messages = array(
            'firstname.required' => 'Name is required',
            'username.required' => 'Username is required', 
			'email.required' 	=> 'Email is required',    
            'password.required' => 'Password is required',
        );
        $rules = array(
            'firstname' => 'required',
            'username' 	=> 'required|unique:users,username',
			'email' 	=> 'required|unique:users,email',
            'password' 	=> 'required|confirmed',
        );
        $validator = Validator::make($data = Input::all(), $rules, $messages);		
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$data['password'] = Hash::make(Input::get('password'));
		User::create($data);

		return Redirect::route('admin.users.index')->with('success_message','User created sucessfully');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		$user = User::find($id);
		$this->layout->content = View::make('admin.users.edit', compact('user'));
	}
	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		$user = User::findOrFail($id);
		$messages = array(
            'firstname.required' => 'Name is required',
			'email.required' 	=> 'Email is required',    
        );
        $rules = array(
            'firstname' => 'required',
			'email' => 'required|unique:users' . ',email,' . $id, 
        );
        $validator = Validator::make($data = Input::all(), $rules, $messages);		
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$user->update($data);
		return Redirect::route('admin.users.index')->with('success_message','User edited sucessfully');	
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		return Redirect::route('users.index');
	}
	
  /* Login methods */
  public function login() {
    if ($this->isPostRequest()) {
      $validator = $this->getLoginValidator();
      if ($validator->passes()) {
        $credentials = $this->getLoginCredentials();
        if (Auth::attempt($credentials)) {
			  return Redirect::to('admin')->with('message', 'You are now logged in!');
        }
        return Redirect::back()->withErrors([
          "password" => ["Invalid Credentials"]
        ]);
      } else {
        return Redirect::back()
          ->withInput()
          ->withErrors($validator);
      }
    }
   	return View::make("admin.users.login");
  }	
  
  protected function isPostRequest()
  {
    return Input::server("REQUEST_METHOD") == "POST";
  }  
  
  protected function getLoginValidator()
  {
    return Validator::make(Input::all(), [
      "username" => "required",
      "password" => "required"
    ]);
  }  

  protected function getLoginCredentials()
  {
    return [
      "username"	=> Input::get("username"),
      "password"	=> Input::get("password"),
	  "is_active"   => 1
    ];
  }  
  
  /* logging out admin */
  public function logout() {
  		Auth::logout();
		return Redirect::to('admin/login')->with('message', 'You are now logged out!');
  }  
  /* Login methods */
  
  /* reset user password by super admin */
  public function resetPassword($id) {
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
			
		$user = User::findOrFail($id);
		$this->layout->content = View::make('admin.users.reset_password',compact('user'));
  }
  
  /* change new password of the user */
  public function changeNewPassword() {
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		
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
		User::where('id', '=', Input::get('id'))->update($data);			
		return Redirect::to('admin/users')->with('success_message','Password changed sucessfully');  
  }
	/* change user status */
	public function changeStatus($status, $id) {
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
		$flag = ($status == 'd')?0 : 1;
		User::where('id', '=', $id)->update(array('is_active' => $flag));
		return Redirect::route('admin.users.index')->with('success_message','Status changed sucessfully');		
	}
	/* delete user */
	public function delete($id) {	
		if (Auth::user()->role != 1) {
			echo "You do not have permission to view this content!!";
			exit;
		}
			
		$user = User::find( $id );
		$user->delete();
		return Redirect::to('admin/users')->with('success_message','User deleted sucessfully.');			
	}  
}
