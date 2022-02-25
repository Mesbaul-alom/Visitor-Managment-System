<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\User;
use App\Models\Department;
use App\Models\Oparetor;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class OparetorController extends Controller
{
    public function  OpaetorList(){

        $id= auth()->id();
        $user_id=User::find($id);
        $idd=Admin::where('id',$user_id->admin_id)->first();
        $branchs=Branch::where('organization_id',$idd->organization)->get();
       
        $oparetors=Oparetor::where('organization',$idd->organization)->get();
      
    //    $branchs=Branch::where('organization_id',$id)->get();
        return view('oparetor.oparetorlist',compact('oparetors','branchs'));
    }

    //Branch admin add funtion
public function BranchOparetorAdd(Request $request)
{
 
    if ($request->password === $request->re_password) {
        $id= auth()->id();
        $id=User::find($id);
        $id=Admin::where('id',$id->admin_id)->first();
       
        $admin= new Oparetor;
    $admin->name=$request->name;
    $admin->address=$request->address;
    $admin->branch=$request->branch;
    $admin->organization=$id->organization;
    $admin->phone=$request->phone;
    $admin->comment=$request->comment;
    $admin->email=$request->email;
    $admin->password=$request->password;
    $admin->save();
    $notification = array(
        'message' => 'Oparetor Added Sucessyfuly',
        'alert-type' => 'success',
    );
    $op_id=Oparetor::where('email', $request->email)->pluck('id');
    User::insert([
        'name'=>$request->name,
        'is_admin'=>"3",
        // 'is_active'=>"1",
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'oparetor_id'=>$op_id[0]
        ]);

    
    return redirect('oparetor/list')->with($notification);
    }
    else{
        $notification = array(
            'message' => 'Password Dont Match',
            'alert-type' => 'success',
        );
        return redirect('oparetor/list')->with($notification);
    }
   
}

}
