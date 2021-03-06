<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Department;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
//organization admin add funtion
public function OrganizationAdminAdd(Request $request)
{
 
    if ($request->password === $request->re_password) {
      
       
        $admin= new Admin;
    $admin->name=$request->name;
    $admin->adress=$request->address;
    $admin->organization=$request->organization;
    $admin->phone=$request->phone;
    $admin->comment=$request->comment;
    $admin->email=$request->email;
    $admin->password=$request->password;
    $admin->save();
    $notification = array(
        'message' => 'Admin Added Sucessyfuly',
        'alert-type' => 'success',
    );
    $org_id=Admin::where('email', $request->email)->pluck('id');
    User::insert([
        'name'=>$request->name,
        'is_admin'=>"2",
        // 'is_active'=>"1",
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'admin_id'=>$org_id[0]
        ]);

    
    return redirect('/organization/admin/list')->with($notification);
    }
    else{
        $notification = array(
            'message' => 'Password Dont Match',
            'alert-type' => 'success',
        );
        return redirect('/organization/admin/list')->with($notification);
    }
   
}

public function DepartmentEdit($id){
    $idd= auth()->id();
    $user_id=User::find($idd);
    $iddd=Admin::where('id',$user_id->admin_id)->first();
    $branchs=Branch::where('organization_id',$iddd->organization)->get();
    $department=Department::find($id);
    // dd($department);
    return view('admin.departmentedit',compact('department','branchs'));
}
public function Departmentupdate(Request $request,$id){

    // dd($request);
$dept=Department::find($id);
   $dept->name=$request->name;
    $dept->branch_id=$request->branch;
    $dept->save();
    $notification = array(
        'message' => 'Department Update Sucessyfuly',
        'alert-type' => 'success',
    );
    return redirect('/department/list')->with($notification);
}
}
