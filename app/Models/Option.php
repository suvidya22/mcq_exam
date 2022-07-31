<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $primaryKey = 'option_id';

    protected $fillable = [
        'question_id',
        'option',
        'is_right_option'
    ];

    public function getEncryptedIdAttribute()
    {
        return encrypt($this->option_id);
    }

    protected $appends = ['encrypted_id'];
}
