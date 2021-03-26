<?php

namespace App\Http\Controllers;

use App\Class_School;
use App\Http\Requests\StoreClassSchoolRequest;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class ClassSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = Class_School::all();

        return view('listClass', [
            'class' => $class->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadClass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassSchoolRequest $request)
    {
        $class = new Class_School();
        $class->description = $request->description;
        $class->vacancies = $request->vacancies;
        $class->teacher = $request->teacher;
        // $class->save();
        if($class->save()){
            return redirect()->route('listClass')->withInput()->withErrors(['Turma ' .$class->id. ' cadastrada com sucesso!']);
        } else{
            return redirect()->back()->withInput()->withErrors(['Erro ao cadastrar!']);
        }

        // return redirect()->route('listClass');
    }

    public function consult_register(Class_School $class)
    {
        return view('consultClassRegister', [
            'class' => $class
        ]);

        //return redirect()->route('listClass');
    }

    public function show_class(Class_School $class, Request $request)
    {
        $id = $request->id;
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
            return view('resultRegister', [
            'class' => $class,
            'student' => $student,
            'count' => $count,
            'qtd' => $qtd
        ]);
        } else {
            return redirect()->back()->withInput()->withErrors(['Turma não encontrada!']);
        }
        //var_dump($dados);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Class_School  $class_School
     * @return \Illuminate\Http\Response
     */
    public function show(Class_School $class_School, Request $request)
    {
        $id = $request->id;
        $class = Class_School::where('id', '=', $id)->first();
        if($class){
            return view('resultClass', [
                'class' => $class
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Turma não encontrada!']);
        }
    }


    public function consult(Class_School $class)
    {
        return view('consultClass', [
            'class' => $class
        ]);
        //var_dump($student);
        //dd($student);

        //return redirect()->route('listClass');
    }

    public function result(Class_School $class, Request $request)
    {
        $id = $request->id;
        $class = Class_School::where('id', '=', $id)->first();

        return view('consulta', [
            'class' => $class
        ]);
    }

    public function cons_edit_class(Class_School $class)
    {
        return view('editClass', [
            'class' => $class
        ]);
        // $student = student::where('id', '=', 2)->first();
        // var_dump($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class_School  $class_School
     * @return \Illuminate\Http\Response
     */
    public function edit(Class_School $class, Request $request)
    {
        $id = $request->id;
        $class = Class_School::where('id', $id)->first();

        if($class){
            return view('editingClass', [
                'class' => $class
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Turma não encontrada!']);
        }

        return redirect()->route('updateClass');
        //var_dump($class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class_School  $class_School
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Class_School $class)
    {
        $id = $request->id;
        $description = $request->description;
        $vacancies = $request->vacancies;
        $teacher = $request->teacher;

        $class = Class_School::where('id', $id)->first();

        $class = Class_School::find($id)->update([
            'description' => $description,
            'vacancies' => $vacancies,
            'teacher' => $teacher
        ]);

        return redirect()->route('listClass');

        //var_dump($id);
    }

    public function delete(Request $request, Class_School $class)
    {
        // $id = $request->id;
        // $student = student::where('id', '=', $id)->first();

        return view('deleteClass', [
            'class' => $class
        ]);

        return redirect()->route('deleteClass');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class_School  $class_School
     * @return \Illuminate\Http\Response
     */
    public function destroy(Class_School $class, Request $request)
    {
        $id = $request->id;
        $class = Class_School::where('id', $id)->first();
        // $class = Class_School::where('id', $id)->delete();

        if($class){
            $class = Class_School::where('id', $id)->delete();
        } else{
            return redirect()->back()->withInput()->withErrors(['Turma não encontrada!']);
        }



        return redirect()->route('listClass');
    }
}
