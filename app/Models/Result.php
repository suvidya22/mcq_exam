<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $primaryKey = 'result_id';

    protected $fillable = [
        'result_id',
        'student_id',
        'result',
    ];

    public function getEncryptedIdAttribute()
    {
        return encrypt($this->result_id);
    }

    protected $appends = ['encrypted_id'];
}
