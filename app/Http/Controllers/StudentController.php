<?php

namespace App\Http\Controllers;

use App\Class_School;
use App\student;
use App\Audit;
use App\Http\Requests\StoreStudentRequest;
// use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student::all();

        return view('listAlunos', [
            'student' => $student->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = new student();
        $student->name = $request->name;
        $student->sex = $request->sex;
        $student->birth_date = $request->birth_date;
        $student->city = $request->city;
        $student->district = $request->district;
        $student->street = $request->street;
        $student->number = $request->number;
        $student->complement = $request->complement;
        $student->class = $request->class;
        if($student->save()){
            if($request->sex == 'F'){
                return redirect()->route('listAll')->withInput()->withErrors(['Aluna ' .$student->name. ' cadastrado com sucesso!']);
            }
            return redirect()->route('listAll')->withInput()->withErrors(['Aluno ' .$student->name. ' cadastrado com sucesso!']);
        } else{
            return redirect()->back()->withInput()->withErrors(['erro ao cadastrar!']);
        }
        // var_dump($student);
    }

    public function show_student(Request $request)
    {
        //$id = $request->id;
        $student = student::where('id', '=', 5)->first();

        if($student) {
            echo '<h1>Dados do Aluno</h1>';
            echo "<p>Matrícula: {$student->id} Nome: {$student->name} Turma: {$student->class} Sexo: {$student->sex}</p>";
        }

        $dados = $student->turma()->get();

        if($dados){
            echo "<h2>Turma</h2>";
            foreach($dados as $dado) {
                echo "<p>Turma: {$dado->id} Descrição: {$dado->description}</p>";
            }

        }
        //var_dump($dados);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $student = student::where('id', '=', $id)->first();

        if($student){
            return view('consulta', [
                'student' => $student
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Matrícula não encontrada!']);
        }
        //var_dump($student->first());
    }

    public function consult(student $student)
    {
        return view('consultAluno', [
            'student' => $student
        ]);
        //var_dump($student);
        //dd($student);

        //return redirect()->route('listar');
    }

    public function reg_student(Request $request)
    {
        //$class = new Class_School();
        $id = $request->id;
        $student = student::where('id', '=', $id)->first();

        if($student){
            return view('regStudent', [
                'student' => $student
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Matrícula não encontrada!']);
        }
    }

    public function reg_cons_student(student $student)
    {
        return view('regisStudent', [
            'student' => $student
        ]);

        return redirect()->route('registration');
    }

    public function registration(Request $request)
    {
        $id = $request->id;
        $class = $request->class;
        $stud = Class_School::where('id', '=', $class)->first();
        if(!$stud){
            return redirect()->route('resultConsRegistration')->withInput()->withErrors(['Turma inexistente!']);
        }

        student::find($id)->update(['class' => $class]);

        return redirect()->route('registerClass');
    }

    public function list_register()
    {
        $student = student::all();

        return view('consultRegister', [
            'student' => $student->all()
        ]);
    }

    public function cons_edit(student $student)
    {
        return view('editStudent', [
            'student' => $student
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, student $student)
    {
        $id = $request->id;
        $student = student::where('id', '=', $id)->first();

        if($student){
            return view('editingStudent', [
                'student' => $student
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Matrícula não encontrada!']);
        }

        return redirect()->route('updateStudent');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $id = $request->id;
        $class = $request->class;
        $name = $request->name;
        $sex = $request->sex;
        $birth_date = $request->birth_date;
        $city = $request->city;
        $district = $request->district;
        $street = $request->street;
        $number = $request->number;
        $complement = $request->complement;

        if(student::find($id)->update([
            'class' => $class,
            'name' => $name,
            'sex' => $sex,
            'district' => $district,
            'birth_date' => $birth_date,
            'city' => $city,
            'district' => $district,
            'street' => $street,
            'number' => $number,
            'complement' => $complement
            ])){
            // student::find($id)->update();
            if($sex == 'M' or $sex == 'm'){
                return redirect()->route('listAll')->withInput()->withErrors(['Aluno de nome ' .$name. ' alterado com sucesso']);
            }
            if($sex == 'F' or $sex == 'f'){
                return redirect()->route('listAll')->withInput()->withErrors(['Aluna de nome ' .$name. ' alterado com sucesso']);
            }
        } else{
            return redirect()->back()->withInput()->withErrors(['Erro ao alterar!']);
        }


        // return redirect()->route('listAll');
        // dd($request);
    }

    public function delete(Request $request, student $student)
    {
        // $id = $request->id;
        // $student = student::where('id', '=', $id)->first();

        return view('delete', [
            'student' => $student
        ]);

        return redirect()->route('delete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, student $student)
    {
        $id = $request->id;
        $student = student::where('id', '=', $id)->first();

        if($student){
            $student = student::where('id', $id)->delete();
        } else{
            return redirect()->back()->withInput()->withErrors(['Matrícula não encontrada!']);
        }

        //$student->delete();
        return redirect()->route('listAll')->withInput()->withErrors(['Matrícula ' .$id. ' excluida com sucesso!']);
    }
}
