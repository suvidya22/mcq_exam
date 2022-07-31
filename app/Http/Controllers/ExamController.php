<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\Student;

class ExamController extends Controller
{

    public function __construct(
        Question $question,
        Student $student
    ) {
        $this->question = $question;
        $this->student = $student;
    }
    public function getExam()
    {
        // $questions = $this->question->with('options')->all();

        $questions = Question::with('options')->get(); //Get all questions

        return view('exam', compact(['questions', $questions]));
    }
    public function acceptExam()
    {
        $questions = $this->question->with('options')->get();
        return view('rightAnswers', [
            'questions' => $questions,
        ]);
        // print_r($question);
        // dd();
    }
}
