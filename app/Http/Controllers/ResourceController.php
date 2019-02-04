<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
   public function index(){
   	return view('index');
   }
   public function buy(){
   	return view('buy');
   }
   public function sell(){
   	return view('sell');
   }
}
