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

        $questions = Question::with('options')->get(); //Get all questions

        return view('exam', compact(['questions', $questions]));
    }
    public function acceptExam()
    {
        $questions = $this->question->with('options')->get();
        $score = 8;
        return view('rightAnswers', [
            'questions' => $questions,
            'score' => $score,
        ]);
    }
}
