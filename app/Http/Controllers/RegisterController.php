<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function create()
    {
        $validateData=request()->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        
        $validateData['password']= bcrypt($validateData['password']);
        User::create($validateData);
        request()->session()->flash('success','Registration succsessfull, please log-in');
        return redirect('login');
    }
}
