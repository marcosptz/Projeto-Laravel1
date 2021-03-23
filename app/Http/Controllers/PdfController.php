<?php

namespace App\Http\Controllers;

use App\Class_School;
use App\student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function class()
    {
        $class = Class_School::all();

        $pdf = PDF::loadView('forms.formPdfClass', array('class' => $class));
        return $pdf->stream('turma.pdf', ['Attachment' => false]);
        // return $pdf->download('alunos.pdf');
    }

    public function student()
    {
        $student = student::all();

        $pdf = PDF::loadView('forms.formPdf', array('student' => $student));
        // $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('alunos.pdf', ['Attachment' => false]);
        // return $pdf->download('alunos.pdf');
    }

    public function pdf_registrition()
    {
        return view('consPdf');
    }

    public function pdfTeste(Class_School $class, Request $request)
    {
        $id = $request->id;
        // $id = 3;
        $class = Class_School::where('id', '=', $id)->first();
        if(!$class){
            return redirect()->back()->withInput()->withErrors(['Turma não encontrada!']);
        }
        $v = $class->vacancies;
        $count = student::where('class', '=', $id)->count();
        $qtd = $v-$count;

        // $class = Class_School::where('id', '=', $id)->first();
        if($class){
            $student = $class->students()->get();
             // $qtd = $v-$qtdr;
            $pdf = PDF::loadView('forms.formpdfRegistrition', array('class' => $class,
            'student' => $student, 'count' => $count, 'qtd' => $qtd
            ));
            return $pdf->stream('alunos_matriculados.pdf', ['Attachment' => false]);
        } else {
            return redirect()->back()->withInput()->withErrors(['Turma não encontrada!']);
        }
        //var_dump($dados);
    }
}
