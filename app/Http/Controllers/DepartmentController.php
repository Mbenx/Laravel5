<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    
    public function index() {
        $title = "Department";
        $subtitle = "Data Karyawan";
        // $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        // $cars = ["volvo", "bmw", "vw"];        
        // $cars = array("Volvo", "BMW", "Toyota");
        // dd($cars);
        
        
        $employees = DB::table('employee')->get();
        // dd($employees);
        return view('department/home', [
            "title"     => $title,
            "subtitle"  => $subtitle,
            "employees"   => $employees
            ]);
    }

    public function create() {
        $title = "Create Department";
        return view('department/create', [
            "title"     => $title
        ]);
    }
}

