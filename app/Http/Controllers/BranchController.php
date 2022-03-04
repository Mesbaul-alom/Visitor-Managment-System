<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\User;
use App\Models\Department;
use App\Models\Oparetor;
use App\Models\Designation;
use App\Models\Admin;
use Illuminate\Http\Request;


class BranchController extends Controller
{
   public function  BranchList(){
    $id= auth()->id();
    $id=User::find($id);
    $id=Admin::where('id',$id->admin_id)->first();
     $branchs=Branch::where('organization_id',$id->organization)->get();
       return view('admin.branchlist',compact('branchs'));
   }
   public function  DepartmentList(){
    $id= auth()->id();
    $id=User::find($id);
    $id=Admin::where('id',$id->admin_id)->first();
       $departments=Department::where('organization_id',$id->organization)->get();
      
       $branchs=Branch::where('organization_id',$id->organization)->get();
       return view('admin.departmentslist',compact('departments','branchs'));
   }
 
   public function  BranchEdit($id){
    // $id= auth()->id();
    $branch=Branch::find($id);
       return view('admin.branchedit',compact('branch'));
   }
 
     public function BranchAdd(Request $request)
   {
      $id= auth()->id();
      $id=User::find($id);
      $org_id=Admin::where('id',$id->admin_id)->first();
     
    $branch= new Branch;
    $branch->name=$request->name;
    $branch->organization_id=$org_id->organization;
    $branch->address=$request->address;
    $branch->phone=$request->phone;
    $branch->comment=$request->comment;
    $branch->is_active=1;
    $branch->save();
    $notification = array(
        'message' => 'Branch Added Sucessyfuly',
        'alert-type' => 'success',
    );
    return redirect('/branch/list')->with($notification);
   }
     public function Branchdupdate(Request $request,$id)
   {
     
      $branch=Branch::find($id);
    $branch->name=$request->name;
    $branch->address=$request->address;
    $branch->phone=$request->phone;
    $branch->save();
    $notification = array(
        'message' => 'Branch Update Sucessyfuly',
        'alert-type' => 'success',
    );
    return redirect('/branch/list')->with($notification);
   }
     public function DepartmentAdd(Request $request)
   {
    $id= auth()->id();
    $admin=User::find($id);
   
    $organization=Admin::where('id',$admin->admin_id)->pluck('organization')->first();
 
    $branch= new Department();
    $branch->name=$request->name;
    $branch->branch_id=$request->branch;
    $branch->is_active=1;
    $branch->organization_id=$organization;
    $branch->save();
    $notification = array(
        'message' => 'Department Added Sucessyfuly',
        'alert-type' => 'success',
    );
    return redirect('/department/list')->with($notification);
   }




   public function DesignationList(){
     $designation=Designation::all();
     return view('admin.designationlist',compact('designation'));
   }
   public function DesignationAdd(Request $request)
   {

    $designation= new Designation;
    $designation->name=$request->name;
    
    $designation->save();
    $notification = array(
        'message' => 'designation Added Sucessyfuly',
        'alert-type' => 'success',
    );
    return redirect('/designation/list')->with($notification);
   }


   public Function DesignationEdit($id){
    $designation=Designation::find($id);
    return response()->json(compact('designation'));
   }
   public function DesignationUpdate(Request $request,$id)
   {
    $designation=Designation::find($id);
$designation->name=$request->name;
    $designation->save();
   

    return response()->json(compact('designation'));
   }
   
  
   
}
