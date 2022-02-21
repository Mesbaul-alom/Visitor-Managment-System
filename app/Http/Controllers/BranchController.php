<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\User;
use App\Models\Department;
use App\Models\Oparetor;
use App\Models\Admin;
use Illuminate\Http\Request;


class BranchController extends Controller
{
   public function  BranchList(){
    $id= auth()->id();
       $branchs=Branch::where('organization_id',$id)->get();
       return view('admin.branchlist',compact('branchs'));
   }
   public function  DepartmentList(){
       $departments=Department::all();
       $id= auth()->id();
       $branchs=Branch::where('organization_id',$id)->get();
       return view('admin.departmentslist',compact('departments','branchs'));
   }
 
     public function BranchAdd(Request $request)
   {
      $id= auth()->id();
      
    $branch= new Branch;
    $branch->name=$request->name;
    $branch->organization_id=$id;
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
     public function DepartmentAdd(Request $request)
   {
    $id= auth()->id();
    $admin=User::where('admin_id',$id)->get();
    $organization=Admin::Were('id',$admin)->pluck('organization')->get();
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
}
