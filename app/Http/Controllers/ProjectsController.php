<?php

namespace App\Http\Controllers;

use App\Project;
use App\ClientType;
use App\Cash;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $projects = ClientType::with('projects')->paginate(10);
        // return $projects[0]['projects'];
        return view('pages.show')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'amount'    =>  'required|numeric',
            'clienttype'    => 'required|not_in:0',
            'deliverydate'  =>  'required',
            'paymentmethod' =>  'required||not_in:0'
        ]);

        $project = new Project;
        $project->projectname = $request->input('title');
        $project->amount = $request->input('amount');
        $project->projecttype = $request->input('clienttype');
        $project->deliverydate = $request->input('deliverydate');
        $project->paymentmethod = $request->input('paymentmethod');
        $project->status = 0;
        $clienttype = new ClientType;
        $clienttype->clientName = $request->input('clientName');
        $clienttype->contactNo = $request->input('contactNo');
        $clienttype->altContactNo = $request->input('altContactNo');
        $clienttype->email = $request->input('email');
        $clienttype->address = $request->input('address');

        $cash = new Cash;
        $cash->payableAmount = $request->input('payableAmount');

        $clienttype->save();
        $project->clientId = $clienttype->id;
        $project->save();
        $cash->project_id = $project->id;
        $cash->save();
        return redirect('/projects')->with('success', 'Project Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = ClientType::with('projects')->find($id);
        return view('pages.edit')->with('projects', $projects);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'amount'    =>  'required|numeric',
            'clienttype'    => 'required|not_in:0',
            'deliverydate'  =>  'required',
            'paymentmethod' =>  'required||not_in:0'
        ]);

        $project = ClientType::with('projects')->find($id);
        $project->projectname = $request->input('title');
        $project->amount = $request->input('amount');
        $project->projecttype = $request->input('clienttype');
        $project->deliverydate = $request->input('deliverydate');
        $project->paymentmethod = $request->input('paymentmethod');
        $project->status = 0;
        return $project;
        $clienttype = ClientType::with('projects')->find($id);
        $clienttype->clientName = $request->input('clientName');
        $clienttype->contactNo = $request->input('contactNo');
        $clienttype->altContactNo = $request->input('altContactNo');
        $clienttype->email = $request->input('email');
        $clienttype->address = $request->input('address');
        return $clienttype;
        $cash = Cash::with('projects')->find($id);
        $cash->payableAmount = $request->input('payableAmount');

        $clienttype->save();
        $project->clientId = $clienttype->id;
        $project->save();
        $cash->project_id = $project->id;
        $cash->save();
        return redirect('/projects')->with('success', 'Project Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
