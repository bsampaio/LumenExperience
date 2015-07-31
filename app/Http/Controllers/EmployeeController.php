<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Http\Request;

class EmployeeController extends Controller{
    
    public function index(){
    	return Employee::all();    	
    }

    public function view($id){
        return Employee::query()->find($id);
    }
    
    public function create(){
        $types = EmployeeType::getType();
        return view('new_employee', ['types' => $types]);
    }
    
    public function save(Request $request){
    	$employee = Employee::create($request->all());
        return $employee;
    }
}
