<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class PagesController extends Controller
{
    /**
     * @params for Reception
     */
    public function index(){
        return view('pages.index');
    }

    public function create(){
        return view('pages.create');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function show(){
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.show')->with('projects', $projects);
    }
    
    public function user(){
        // $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.user');
    }

    /**
     * @params for Admin
     */
    public function admin(){
        return view('pages.admin');
    }

    /**
     * @params for Employee
     */
    public function employee(){
        return view('pages.employee');
    }
}
