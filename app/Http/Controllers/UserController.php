<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->profile == 'operador'){
            return redirect()->back();
        }

        if(Auth::user()->profile == 'admin_sis'){
            return redirect()->back();
        }

        $user = User::all();

        return view('listUsers', [
            'user' => $user->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(User::where('id')->count() < 1 || Auth::user()->profile == 'admin_ti'){
            return view('auth.register');
        }
        if(Auth::user()->profile == 'admin_sis'){
            return view('registerUser');
        }
        if(Auth::user()->profile == 'operador'){
            return redirect()->back();
        }
        if(User::where('id')->count() < 1){
            return view('auth.register');
        }
        if(!Auth::user()){
            return redirect()->back();
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        if(User::where('id')->count() < 1 || Auth::user()){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->profile = $request->profile;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('listUser');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function cons_edit(User $user)
    {
        if(Auth::user()->profile == 'operador'){
            return redirect()->back();
        }

        if(Auth::user()->profile == 'admin_sis'){
            return redirect()->back();
        }

        return view('editUser', [
            'user' => $user
        ]);
        // var_dump($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::where('id', '=', $id)->first();

        if($user){
            return view('editingUser', [
                'user' => $user
            ]);
        } else{
            return redirect()->back()->withInput()->withErrors(['Id de usuário não encontrado!']);
        }

        return redirect()->route('updateStudent');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $profile = $request->profile;

        $user = User::find($id)->update([
            'name' => $name,
            'email' => $email,
            'profile' => $profile
        ]);

        return redirect()->route('listUser');

        //var_dump($user);
    }

    public function delete(Request $request, User $user)
    {
        if(Auth::user()->profile == 'operador'){
            return redirect()->back();
        }

        if(Auth::user()->profile == 'admin_sis'){
            return redirect()->back();
        }

        return view('deleteUser', [
            'user' => $user
        ]);

        return redirect()->route('destroyUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $id = $request->id;
        $user = User::where('id', '=', $id)->first();

        if($user){
            $user = User::where('id', $id)->delete();
        } else{
            return redirect()->back()->withInput()->withErrors(['Id do usuário não encontrado!']);
        }
        return redirect()->route('listUser');

        //var_dump($user);
    }
}
