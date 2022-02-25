<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Oparetor;
use App\Models\Employee;
use Illuminate\Support\Str;
Use Mail;

class LoginController extends Controller
{
public function index(){
return view('login.index');

 }

 //public function regverify(){
//return redirect('/login');
//}

 public function verify(userRequest $req){
// $validation = Validator::make($req->all(), [
// 'username' => 'required',
// 'password'=> 'required|min:5'
// ]);

$user =User::where('email', $req->email)->where('is_active',"1")->first();

if ($user) {
	$user =User::where('email', $req->email)->where('password',$req->password)->where('is_active',"1")->first();

}
if ($user == NULL) {
	$user =User::where('phone', $req->email)->where('password',$req->password)->where('is_active',"1")->first();
}

// $users = User::orwhere('email', $req->email)->orWhere('phone', $req->email)->get()->first();
// if($users==null)
// {
// $req->session()->flash('msg', 'Invaild username or password');
// return redirect('/login');
// }

// $user = $users->where('password', $req->password)->where('is_active',"1")
// ->first();
// if($user==null)
// {
// $req->session()->flash('msg', 'Invaild username or password');
// return redirect('/login');
// }
if ($user == Null) {
	$req->session()->flash('msg', 'Invaild username or password');
     return redirect('/login');
}

elseif($user->role =='1' && $user->is_active=='1' ){
$req->session()->put('username', $user->username);
$req->session()->put('email', $req->email);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->id);
return redirect('/admin');
}
elseif($user->role =='2' && $user->is_active=='1'){
	$req->session()->put('email', $req->email);
$req->session()->put('username', $user->username);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->id);
return redirect('/oparetor');
}
elseif($user->role =='3'  && $user->is_active=='1'){
	$req->session()->put('email', $req->email);
$req->session()->put('username', $user->username);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->id);
return redirect('/employee');
}
else{
	$req->session()->flash('msg', 'invaild username or password');
return redirect('/login');
}
}
public function forgot(Request $req){
	return view('registration.signup');
}
public function sendcode(Request $req){
	$token =random_int(1000, 9999);
    $user=User::where('email',$req->email)->where('role', $req->role)->get()->first();
	if ($user == null) {
		$req->session()->flash('email', 'বৈধ ইমেইল জমা দিন');
		return view('registration.signup');
	}
	else {
		$user->token =$token;
	$user->save();

	$id=$user->id;
	$email=$user->email;

$details = [
    'title' =>'নৈমিত্তিক ছুটি ব্যবস্থাপনা',
    'body' => 'your reset password code:' . $token
];

Mail::to($email)->send(new \App\Mail\MyTestMail($details));
return view('login.resetpass',compact('id'));
	}
	
}
public function verifycode(Request $req){
	 

    $user=User::find($req->id);
	if ($req->token == $user->token) {
        return view('login.createpass',compact('user')); 
	}
	$req->session()->flash('pass', 'Invaild reset code');
	$id=$user->id;

return view('login.resetpass',compact('id'));
}
public function createpass(Request $req){


    $user=User::find($req->id);
	$user->password = $req->password;
	$user->save();
	if ($user->oparetor_id == null) {
		Employee::where('id', $user->employee_id)->update([
			'password' => $req->password,
			]);
	}
	elseif ($user->employee_id == null) {
		Oparetor::where('id', $user->oparetor_id)->update([
			'password' => $req->password,
		
			]);
	}
	

	$req->session()->flash('pass', 'নতুন পাসওয়ার্ড তৈরি করা হয়েছে। অনুগ্রহ করে লগইন করুন');
  return redirect('/');
}
}