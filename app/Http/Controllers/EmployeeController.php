<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home()
    {
        $employees=Employee::all();
        
        return $employees;
        return view('welcome');
     
    }
}
