<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Audit extends Model implements \OwenIt\Auditing\Contracts\Audit
{
    protected $table = 'audits';

    use \OwenIt\Auditing\Audit;

    protected $guarded = [];

    protected $casts = [
        'old_values'   => 'array',
        'new_values'   => 'array',
        'auditable_id' => 'integer',
    ];
    // protected $casts = [
    //     'old_values'   => 'json',
    //     'new_values'   => 'json',
    //     'auditable_id' => 'integer',
    // ];

    // public function teste(Request $request)
    // {
    //     $user = Auth::user()->id;
    //     $user = Auth::user()->name;
    //     $student = new student();
    //     $student->name = $request->name;
    //     $student->save();
    //     return;
    // }
}
