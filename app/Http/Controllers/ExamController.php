<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;

class ExamController extends Controller
{
    // public function __construct(
    //     Question $question,
    //     Option $option,
    //     ) 
    // {
    //     $this->questions = $question;
    //     $this->option = $option;
    // }

    public function getExam()
    {
        // $questions = $this->question->with('options')->all();

        // return view('students.get-exam', ['questions' => $questions]);

        $questions = Question::with('options')->get(); //Get all questions

        return view('exam',compact(['questions', $questions]));
    }
}
