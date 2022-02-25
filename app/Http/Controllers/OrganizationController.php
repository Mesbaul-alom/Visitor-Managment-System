<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\User;
use App\Models\Admin;
use App\Models\Branch;
use App\Models\Department;
use Illuminate\Http\Request;
use Exception;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // add organization view page funtion
    public function AddOrganization ()
    {
        return view('superadmin.addorganization');
    }


    // store organization funtion
    public function StoreOrganization (Request $request)
    {
                    $organization= new Organization;
                    $organization->name=$request->username;
                    $organization->phone=$request->phone;
                    $organization->email=$request->email;
                    $organization->is_active=1;
                  if ($request->username) {
                    $newImageName=time().'-'.$request->username.'.'.$request->image->extension();
                    $image=$request->image->move(public_path('org_img'),$newImageName);
                    $organization->image=$newImageName;
                  }
                   
                    $organization->save();

                  
        $notification = array(
            'message' => 'Organization Added Sucessyfuly',
            'alert-type' => 'success',
        );
        return redirect('/organization/list')->with($notification);
    }

    // organization lis funtion
    public function OrganizationList ()
    {
             $organizations = Organization::all();
        return view('superadmin.organizationlist',compact('organizations'));
    }

    // organization admin list funtion
    public function OrganizationAdminList ()
    {
             $admins = Admin::all();
             $organizations = Organization::all();
        return view('superadmin.adminorganizationlist',compact('admins','organizations'));
    }



// organization details funtion

public function OrganizationDeatils( $id)
{
   $organizations=Organization::find($id);
   $branch=Branch::Where('organization_id',$id)->count();
 

    return view('superadmin.organizationdetails',compact('organizations','branch'));
}
// organization delete funtion

public function OrganizationDelete( $id)
{
    $admin = Organization::find($id);
    if(!$admin){
        return response()->json(['error'=>'Operator Not Found'],404);
    }
    if($admin->delete()){
        return response()->json(['success'=>'Operator has been Deleted Successfully!']);
    }
    return response()->json(['error'=>'Some Error Occured Please Try Again!'],500);
}

// organization edit funtiom
public function OrganizationEdit( $id)
{
    $admin = Organization::find($id);
        if(!$admin){
            return response()->json(['error'=>'Operator Not Found'],404);
        }
        return response()->json(compact('admin'));
}
// organization update funtiom
public function OrganizationUpdate(Request $request,$id)
{
    $admin = Organization::find($id);
    if(!$admin){
        return response()->json(['error'=>'Organization Not Found'],404);
    }
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        
    ]);

    try{
        $data = $request->all();
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        if ($request->image) {
            $newImageName=time().'-'.$request->name.'.'.$request->image->extension();
            $image=$request->image->move(public_path('org_img'),$newImageName);  
            $data['image'] = $newImageName;
        }
        
        $admin->update($data);
        return response()->json(['success'=>"Organization has been updated successfully!"]);
    }catch(Exception $e){
         return response()->json(['error'=>"Some Error Occured Please Try Again!"],500);
    }
}


}


