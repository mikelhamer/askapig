<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['body'];

    public function question() {
        return $this->hasOne('App\Question');
    }

}
