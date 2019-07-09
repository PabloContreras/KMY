<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;

class PersonalController extends Controller
{
    public function index(){
    	$personal = Personal::all();
    	//return $personal;
    	return view('shows.personal', compact('personal'));
    }
    public function show($id){
    	$persona = Personal::find($id);
    	
    	return view('shows.persona', compact('persona'));
    }
}
