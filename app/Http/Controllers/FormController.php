<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FormController extends Controller{
    public function index(Request $request){
        $name = $request->input('nama');
        $email = $request->input('email');
        $gender = $request->input('gender');
        $senjata = $request->input('senjata');
        return view('forms')
            ->with('nama',$name)
            ->with('email',$email)
            ->with('gender',$gender)
            ->with('senjata',$senjata);
    }
}