<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use DB;

class PersonalController extends Controller
{
    public function index(){
    	$personal = DB::table('personals')->orderByRaw('nombre ASC')->get();
    	//return $personal;
    	return view('shows.personal', compact('personal'));
    }
    public function show($id){
    	$persona = Personal::find($id);
    	
    	return view('shows.persona', compact('persona'));
    }
}
