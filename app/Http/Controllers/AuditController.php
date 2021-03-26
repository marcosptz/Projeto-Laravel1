<?php

namespace App\Http\Controllers;

use App\Audit;
use Illuminate\Http\Request;
use App\student;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuditController extends Controller
{
    public function index()
    {
        $audits = \OwenIt\Auditing\Models\Audit::with('user')
                ->orderBy('created_at', 'desc')
                ->get();

        return view('auditUser', ['audits' => $audits]);

        //var_dump($audits);
    }

    public function show(Request $request)
    {
        $id = $request->id;

        $userid = User::where('id', '=', $id)->first();

        $audits = \OwenIt\Auditing\Models\Audit::where('user_id', '=', $id)->get();

        if($userid){
            return view('consultAudit', [
                'audits' => $audits
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Usuário não encontrado!']);
        }
        //var_dump($student->first());
    }

    public function consult(Audit $audit)
    {
        return view('consultAluno', [
            'audit' => $audit
        ]);
        //var_dump($student);
        //dd($student);

        //return redirect()->route('listar');
    }
}
