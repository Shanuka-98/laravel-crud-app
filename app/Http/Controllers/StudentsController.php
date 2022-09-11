<?php

namespace App\Http\Controllers;

use domain\facades\StudentsFacade;
use Illuminate\Http\Request;

class StudentsController extends ParentController
{

    public function index()
    {
        return view('pages.students.add');
    }

    public function store(Request $request)
    {
        StudentsFacade::store($request);
        return redirect()->route('home')->with('success', 'Student Added Successfully!');
    }

    public function view()
    {
        $response['student'] = StudentsFacade::view();
        return view('pages.students.view')->with($response);
    }

    public function edit()
    {
        $response['student'] = StudentsFacade::edit();
        return view('pages.students.edit')->with($response);
    }

    public function delete($student_id)
    {
        StudentsFacade::delete($student_id);
        return redirect()->route('students.edit')->with('success', 'Student Deleted Successfully!');
    }

    public function active($student_id)
    {
        StudentsFacade::active($student_id);
        return redirect()->route('students.edit')->with('success', 'Student Status Updated Successfully!');
    }

    public function ViewUpdate($id)
    {
        $response['student'] = StudentsFacade::ViewUpdate($id);
        return view('pages.students.update')->with($response);
    }

    public function update(Request $request)
    {
        StudentsFacade::update($request);
        return redirect()->route('students.edit')->with('success', 'Student Updated Successfully!');
    }
}
