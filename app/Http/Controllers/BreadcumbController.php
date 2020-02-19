<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cash;
use DB;
class BreadcumbController extends Controller
{
    public function index(){
         $breadcumb = Cash::where(DB::raw('MONTH(created_at)'), '=', date('n'))->sum('payableAmount');
         return view('inc.breadcumb')->with('breadcumb', $breadcumb);
    }
}
