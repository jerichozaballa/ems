<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{


    public function index(){
    	$employees = Employee::paginate(5);
        return view('employees.index', compact('employees'));
    }

    public function create(){
        $employee = new Employee();
        return view('employees.create', compact('employee'));
    }

    public function store(){
        $employee = Employee::create($this->validateRequest());
    	return redirect('employees');
    }

    public function update(Employee $employee){
        $employee->update($this->validateRequest());
        return redirect('employees/');
    }

    public function destroy(Employee $employee){
        $employee->delete();
        return redirect('employees');
    }

    private function validateRequest(){
        return request()->validate([
            'first' => 'required|string',
            'last' => 'required|string',
            'bday' => 'required|string',
            'gender' => 'required',
            'jobtitle' => 'required|string',
            'dateemployed' => 'required|string',
        ]);

    }
}
