<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_id',
        'name',
        'mobile_number',
    ];

    public function getEncryptedIdAttribute()
    {
        return encrypt($this->student_id);
    }

    protected $appends = ['encrypted_id'];
}
