<?php

namespace App\Http\Controllers;

use App\Buy;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ResourceController extends Controller
{
   public function index(){
    $name=Auth::user()->name;
    dd($name);
    $buy_infoes=DB::table('buys')->where('sender_name','ismail')->get();
   	return view('index',compact('buy_infoes'));
   }
   public function buy(){
   	return view('buy');
   }
   public function sell(){
   	return view('sell');
   }
}
