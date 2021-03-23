<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Class_School extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    //protected $table = 'class__shools';

    protected $fillable = [
        'description', 'vacancies', 'teacher'
    ];

    public function students()
    {
        return $this->hasMany(student::class, 'class', 'id');
    }
}
