<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Branch;
use App\Models\Visitor;
use App\Models\User;
use App\Models\Department;
use App\Models\Oparetor;
use App\Models\Admin;
use App\Models\Vuser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function  EmployeeList(){
        
        $employees=Employee::where('employee_role',1)->get();
        // $branchs=Branch::all();
        return view('employee.employeelist',compact('employees'));
    }
    public function  ParmanentEmployeeList(){
        
        $employees=Employee::all();
        // $branchs=Branch::all();
        return view('employee.employeelist',compact('employees'));
    }
    public function  Receplist(){
       
        $employees=Employee::where('employee_role',2)->get();
        // $branchs=Branch::all();
        return view('employee.receplist',compact('employees'));
    }

    public function BranchemployeeAdd(Request $request)
{
    $id= auth()->id();
    $user=User::where('id',$id)->pluck('oparetor_id');
    $branch=Oparetor::where('id',$user)->pluck('branch')->first();
   
     $department=Department::where('branch_id',$branch)->pluck('id')->first();
 
    if ($request->password === $request->re_password) {
      
       
        $admin= new Employee;
    $admin->name=$request->name;
    $admin->address=$request->address;
    $admin->designation=$request->designation;
    $admin->phone=$request->phone;
    $admin->comment=$request->comment;
    $admin->email=$request->email;
    $admin->employee_role=1;
     $admin->branch_id=$branch;
      $admin->department_id=$department;
    $admin->password=$request->password;
    $admin->save();
    $notification = array(
        'message' => 'Oparetor Added Sucessyfuly',
        'alert-type' => 'success',
    );
    $op_id=Employee::where('email', $request->email)->pluck('id');
    User::insert([
        'name'=>$request->name,
        'is_admin'=>"4",
        // 'is_active'=>"1",
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'employee_id'=>$op_id[0]
        ]);

    
    return redirect('employee/list')->with($notification);
    }
    else{
        $notification = array(
            'message' => 'Password Dont Match',
            'alert-type' => 'success',
        );
        return redirect('employee/list')->with($notification);
    }
   
}
    public function BranchRecepAdd(Request $request)
{
    $id= auth()->id();
    $user=User::where('id',$id)->pluck('oparetor_id')->first();
    $branch=Oparetor::where('id',$user)->pluck('branch')->first();
   
    $department=Department::where('branch_id',$branch)->pluck('id')->first();
    if ($request->password === $request->re_password) {
      
       
        $admin= new Employee;
    $admin->name=$request->name;
    $admin->address=$request->address;
    $admin->designation=$request->designation;
    $admin->phone=$request->phone;
    $admin->comment=$request->comment;
    $admin->email=$request->email;
    $admin->password=$request->password;
    $admin->employee_role=2;
    $admin->branch_id=$branch;
    $admin->department_id=$department;
    $admin->save();
    $notification = array(
        'message' => 'Recep Added Sucessyfuly',
        'alert-type' => 'success',
    );
    $op_id=Employee::where('email', $request->email)->pluck('id');
    User::insert([
        'name'=>$request->name,
        'is_admin'=>"5",
        // 'is_active'=>"1",
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'employee_id'=>$op_id[0]
        ]);

    
    return redirect('recep/list')->with($notification);
    }
    else{
        $notification = array(
            'message' => 'Password Dont Match',
            'alert-type' => 'success',
        );
        return redirect('recep/list')->with($notification);
    }
   
}

public function Visiroelist(){
    $visitors=Vuser::all();
    return view('employee.visitorlist',compact('visitors'));
}
public function VisitorAdd(){
     $id= auth()->id();
     $user=User::where('id',$id)->pluck('employee_id')->first();
     $branch=Employee::where('id', $user)->pluck('branch_id')->first();
     $deparments=Department::where('branch_id', $branch)->get();
    $employees=Employee::where('employee_role',1)->get();

    return view('employee.visitoradd',compact('employees','deparments'));
}
public function VisitorStore(Request $request){
   
   
    
    foreach($request->input('name') as $key=>$name){
        $vuser=Vuser::where('phone',$request->input('phone')[$key])->first();
         if ($vuser == null) {
             
            $admin= new Vuser;
            $admin->name=$name;
            $admin->phone=$request->input('phone')[$key];
            $admin->email=$request->input('email')[$key];
            $admin->gender=$request->input('gender')[$key];
            $admin->save();
         }
         $v_id=Vuser::where('phone',$request->input('phone')[$key])->first();
        //  dd($request);
        $admin= new Visitor;
        $admin->name=$name;
        $admin->phone=$request->input('phone')[$key];
        $admin->email=$request->input('email')[$key];
        $admin->gender=$request->input('gender')[$key];
        $admin->employee=$request->input('employee')[$key];
        $admin->department=$request->input('department')[$key];
        $admin->branch=$request->input('branch')[$key];
        $admin->auth=$request->input('auth')[$key];
        $admin->checkin=$request->input('checkin')[$key];
        $admin->checkout=$request->input('checkout')[$key];
        $admin->v_id=$request->input('id')[$key];
        $admin->locar=$request->input('locar')[$key];
        $admin->vuser_id=$v_id->id;

        // $newImageName=time().'-'.$name.'.'.$request->input('image')[$key]->extension();
        // $image=$request->input('image')[$key]->move(public_path('org_img'),$newImageName);
        // $admin->image=$newImageName;
   

        // $admin->image=$request->input('image')[$key];
         $admin->save();
        
         
        
      
    }
    $notification = array(
        'message' => 'Visitor Add Done',
        'alert-type' => 'success',
    );
    return redirect('visitor/list')->with($notification);
   
  
}


public function PendingVisiroelist(){
    $id= auth()->id();
    $user=User::where('id',$id)->pluck('employee_id');
    $visitors=Visitor::where('approve',null)->where('employee', $user)->get();
   
    return view('employee.pendingvisitor',compact('visitors'));

}
public function AllVisiroelist(){
    $id= auth()->id();
    $user=User::where('id',$id)->pluck('employee_id');
    $visitors=Visitor::where('employee', $user)->get();
   
    return view('employee.pendingvisitor',compact('visitors'));

}
public function HistoryVisiroelist(){
   
    $visitors=Visitor::all();
   
    return view('employee.pendingvisitor',compact('visitors'));

}
public function ApproveVisiroelist(){
    $id= auth()->id();
    $user=User::where('id',$id)->pluck('employee_id');
    $visitors=Visitor::where('approve',1)->where('employee', $user)->get();
   
    return view('employee.pendingvisitor',compact('visitors'));

}
public function RejectedVisiroelist(){
    $id= auth()->id();
    $user=User::where('id',$id)->pluck('employee_id');
    $visitors=Visitor::where('approve',2)->where('employee', $user)->get();
   
    return view('employee.pendingvisitor',compact('visitors'));

}
public function VisitorView($id){
    $vuser=Vuser::with('visitor')->find($id);
   
    $visitorss=Visitor::with('vuser')->where('vuser_id',$id)->get();
    return view('employee.visitorView',compact('visitorss','vuser'));

}
public function detailsView($id){
    $vuser_id=Visitor::find($id)->pluck('vuser_id')->first();
    $vuser=Vuser::with('visitor')->find($vuser_id);
   
    $visitorss=Visitor::with('vuser')->where('vuser_id',$vuser_id)->get();
    return view('employee.visitorView',compact('visitorss','vuser'));

}
public function VisitorApprove($id){
    $name= auth()->user()->name;
    $visitors=Visitor::find($id);
    $visitors->approve=1;
    $visitors->approve_by	= $name;
    $visitors->save();
    $notification = array(
        'message' => 'Visitor Approve Done',
        'alert-type' => 'success',
    );
   
    return redirect()->back()->with($notification); 

}
public function VisitorReject($id){
    $name= auth()->user()->name;
    $visitors=Visitor::find($id);
    $visitors->approve=2;
    $visitors->approve_by	= $name;
    $visitors->save();
    $notification = array(
        'message' => 'Visitor Reject Done',
        'alert-type' => 'success',
    );
   
    return redirect()->back()->with($notification);
    

}

public function VisitorCheckOut($id){
    $current = Carbon::now();
    $name= auth()->user()->name;
$visitor=Visitor::find($id);
$visitor->checkout=$current;
$visitor->checkoutfinal=1;
$visitor->approve=2;
$visitor->approve_by	= $name;
$visitor->save();
$notification = array(
    'message' => 'Visitor CheckOut Done',
    'alert-type' => 'success',
);

return redirect()->back()->with($notification);


}
public function EmployeeDetails($id){
    $vuser=Employee::find($id);
   
    
    return view('employee.employeedetails',compact('vuser'));
 
}
public function EmployeeDelete($id){
    Employee::destroy($id);
   
    
    $notification = array(
        'message' => 'Employee Delete Done',
        'alert-type' => 'success',
    );
    
    return redirect()->back()->with($notification);
    

}
 

}
