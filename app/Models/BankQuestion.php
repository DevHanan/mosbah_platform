<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankQuestion extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'title', 'mark', 'bank_group_id', 'active', 'model_answer', 'answer_notes',
        'answer_video_link', 'question_notes', 'correct_answer', 'answer1', 'answer2', 'answer3', 'answer4'
    ];

    protected $appends = ['pictureFullPath', 'questionFullPath', 'answerFullPath', 'correctAnswer'];


    public function getcorrectAnswerAttribute()
    {


            return $this->answer1;
       
    }

    public function getPictureFullPathAttribute($value)
    {

        return asset('public/' . $this->picture);
    }

    public function getQuestionFullPathAttribute($value)
    {

        return asset('public/' . $this->question_declare_img);
    }

    public function getAnswerFullPathAttribute($value)
    {

        return asset('public/' . $this->answer_declare_img);
    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function group()
    {
        return $this->belongsTo(BankGroup::class, 'bank_group_id');
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'quiz_questions','question_id','quiz_id');
    }
}
