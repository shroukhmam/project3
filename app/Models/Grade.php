<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model 
{
    use HasTranslations;

   
    protected $fillable=['Name','Notes'];
    protected $table = 'Grades';
    public $timestamps = true;
    public $translatable = ['Name'];

    public function Sections()
    {
        return $this->hasMany('App\Models\Section', 'Grade_id');
    }

}