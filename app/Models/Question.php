<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'question_id';

    protected $fillable = [
        'question',
        'type',
        'is_active'
    ];

    public function options() {
        return $this->hasMany(Option::class,'question_id','question_id');
    }

    public function getEncryptedIdAttribute()
    {
        return encrypt($this->question_id);
    }

    protected $appends = ['encrypted_id'];
}
