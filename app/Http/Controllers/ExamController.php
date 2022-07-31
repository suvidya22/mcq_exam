<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Student;
use App\Models\Result;
class ExamController extends Controller
{

    public function __construct(
        Question $question,
        Student $student,
        Result $result
    ) {
        $this->question = $question;
        $this->student = $student;
    }

    public function getExam()
    {
        $questions = Question::with('options')->get(); //Get all questions
        $student = Student::latest()->first();
        $id = $student->student_id;

        return view('exam', [
            'questions' => $questions,
            'id' => $id
        ]);
    }
    
    public function acceptExam()
    {
        $questions = $this->question->with('options')->get();
        $studId = request('studDetails');
        $score = 8;

        $result = Result::create([
            'student_id' => $studId,
            'result' => $score,
        ]);
        return view('rightAnswers', [
            'questions' => $questions,
            'score' => $score,
        ]);
    }

    public function viewResults()
    {
        $results = Result::with('students')->get();
        return view('results', [
            'results' => $results
        ]);
    }
}
