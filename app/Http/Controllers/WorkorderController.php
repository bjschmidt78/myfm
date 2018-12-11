<?php

namespace App\Http\Controllers;

use App\User;
use App\Time;
use App\Tasks;
use App\Status;
use App\Priority;
use App\Workorder;
use App\Categories;
use App\Est_time;
use Illuminate\Http\Request;

class WorkorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workorders = Workorder::all();
        //return dd($users);
        return view('workorder.index', compact('workorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::pluck('name', 'id')->all();
        return view('workorder.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Workorder::create($input);
        return redirect('/workorder/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        $priority = Priority::pluck('name', 'id')->all();
        $status = Status::pluck('name', 'id')->all();
        $tasks = Tasks::where('workorders_id', $id)->get();
        $workorder = Workorder::findOrFail($id);
        return view('workorder.show', compact('workorder', 'users', 'tasks', 'status', 'priority'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $workorder = Workorder::findOrFail($id);
        $categories = Categories::pluck('name', 'id')->all();
        $priority = Priority::pluck('name', 'id')->all();
        $status = Status::pluck('name', 'id')->all();
        $tasks = Tasks::where('workorders_id', $id)->get();
        $users = User::all();
        $user = User::pluck('name', 'id')->all();
        $est_time = Est_time::pluck('name', 'value', 'id')->all();
        return view('workorder.edit', compact('workorder', 'categories', 'priority', 'user', 'est_time', 'users', 'tasks', 'status'));
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
        $workorder = Workorder::findOrFail($id);
        $input = $request->all();
        $workorder->update($input);   
        return redirect('/workorder/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsem 
     */
    public function destroy($id)
    {
        //
        $workorder = Workorder::findOrFail($id);
        $workorder->delete();
        return redirect('/workorder');
    }
}
