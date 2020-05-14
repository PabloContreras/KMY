<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Shows;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nosotros(){
    	$title = 'Nosotros';
    	return view('nosotros', compact('title'));
    }
    public function shows(){
    	$title = 'Shows';
    	$shows = Shows::all();
    	return view('shows.shows', compact('title', 'shows'));
    }
}
