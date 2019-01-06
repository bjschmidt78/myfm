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
use Carbon\Carbon;

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
        $status = Status::pluck('name', 'id')->all();
        $categories = Categories::pluck('name', 'id')->all();
        return view('workorder.create', compact('categories', 'status'));
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
        $date = Carbon::now();
        $input = $request->all();
        if(!is_null($input['due2'])){
            $input['due'] = $input['due2'];
        } else {
            switch ($input['due']) {
                case 1: //24H
                    $input['due'] = $date->addWeekday();
                    break;
                case 2: //3Days
                    $input['due'] = $date->addWeekdays(3);
                    break;
                case 3: //1Week
                    $input['due'] = $date->addWeekdays(5);
                    break;
                case 4: //2Weeks
                    $input['due'] = $date->addWeekdays(10);
                    break;
                case 5: //1Month
                    $input['due'] = $date->addMonth();
                    while ($input['due']->isWeekend()) {
                        $input['due']->addWeekday();
                    }
                    break;
            }
        }
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
        return view('workorder.show', compact('workorder', 'users', 'tasks', 'status', 'priority'));    
    }

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
        if(is_null($workorder->due)){
            switch ($request->priority_id) {
                case 1: //None
                    $ddue = $workorder->created_at;
                    break;
                case 2: //Lowe
                    $ddue = $workorder->created_at->addDays(30);
                    while ($ddue->isWeekend()) {
                        $ddue->addDays(1);
                    }
                    break;
                case 3: //Medium
                    $ddue = $workorder->created_at->addDays(7);
                    while ($ddue->isWeekend()) {
                        $ddue->addDays(1);
                    }
                    break;
                case 4: //High
                    $ddue = $workorder->created_at->addDays(1);
                    while ($ddue->isWeekend()) {
                        $ddue->addDays(1);
                    }
                    break;
            }
            $input['due'] = $ddue;  
        }
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
