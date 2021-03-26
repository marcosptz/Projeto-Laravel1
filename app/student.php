<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class student extends Model implements Auditable
{
    protected $table = 'students';

    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name', 'sex', 'birth_date', 'class'
    ];

    public function turma()
    {
        return $this->belongsTo(Class_School::class, 'class', 'id');
    }

}
