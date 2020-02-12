<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function log(){
    	$user=Auth::user();
    	//return view('admin', ['admin'=>$user->admin]);
    	return view('admin', ['users' => User::all(), 'admin'=>$user->admin]);
    }

    public function post(){
    	$user=Auth::user();
    	return view('admin', ['data' => $request->post(), 'admin'=>$user->admin]);
    }
}
