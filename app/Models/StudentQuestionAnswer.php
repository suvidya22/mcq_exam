<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuestionAnswer extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_question_answer_id';

    protected $fillable = [
        'student_id',
        'question_id',
        'option_id',
        'is_right'
    ];

    public function getEncryptedIdAttribute()
    {
        return encrypt($this->student_question_answer_id);
    }

    protected $appends = ['encrypted_id'];
}
