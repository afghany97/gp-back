<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingAssistant extends Model
{
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }
}