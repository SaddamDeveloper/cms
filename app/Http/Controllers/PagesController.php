<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class PagesController extends Controller
{
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

    public function newDiv(){
        return 1;
    }
}
