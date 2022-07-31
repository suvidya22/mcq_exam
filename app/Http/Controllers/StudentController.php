<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile_number' => 'required',
        ]);

        $user = Student::create([
            'name' => $request->input('name'),
            'mobile_number' => $request->input('mobile_number'),
        ]);
        session()->flash('message', 'You have registered successfully!');
        return redirect()->route('exams.get-exam');
    }
    public function getExam()
    {
        return view('exam');
    } 
}
