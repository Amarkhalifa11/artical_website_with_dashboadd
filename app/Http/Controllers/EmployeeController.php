<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employes = Employee::all();
        return view('backend.employee.all_employee' , compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.employee.add_employee');
    }

    public function store(Request $request)
    {

        $aa = $request->file('image');

 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($aa->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image = $img_name; 
        $aa->move($upload_location,$img_name); 


        $employee = new Employee();

        $employee->name  = $request->input('name');
        $employee->email = $request->input('email');
        $employee->image = $image;

        $employee->save();
        return redirect()->route('all_employee');

    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('backend.employee.edit_employee' , compact('employee'));

    }

    public function update(Request $request,  $id)
    {
        
        $aa = $request->file('image');

 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($aa->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/images/'; 
        $image = $img_name; 
        $aa->move($upload_location,$img_name); 

        $name  = $request->input('name');
        $email = $request->input('email');
        $email = $email;

        $employee = Employee::find($id);
        $employee->update([

            'name'  => $name,
            'email' => $email,
            'image' => $image,
        ]);


        $employee->save();
        return redirect()->route('all_employee');

    }

    public function destroy($id)
    {
        $employes = Employee::find($id);
        $employes->delete();

        return redirect()->route('all_employee');
    }
}
