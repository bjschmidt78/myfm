<?php

namespace App\Http\Controllers;

use App\User;
use App\Time;
use App\Tasks;
use App\Status;
use App\Priority;
use App\Workorder;
use App\Categories;
use Illuminate\Http\Request;

class WorkOrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('workorderlist.index', bsWorkorderNew());
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
        $categories = Categories::all();
        $priorities = Priority::all();
        $statuses = Status::all();
        $status = Status::pluck('name', 'id')->all();
        $users = User::all();

        switch ($request->Date) {
            case 1: //Due Date Assending
                $workorders = $this->my_date_sort($request, 'due', 'asc');
                break;
            case 2:  //Due Date Decending
                $workorders = $this->my_date_sort($request, 'due', 'desc');
                break;
            case 3:  //Created Date Assending
                    $workorders = $this->my_date_sort($request, 'created_at', 'asc');
                break;
            case 4:  //Created Date Decending
                    $workorders = $this->my_date_sort($request, 'created_at', 'desc');
                break;
        }
        return view('workorderlist.index', compact('workorders', 'statuses', 'priorities', 'users', 'categories'));
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
        //
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
        //
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

    public function my_date_sort($request, $d, $dir)
    {
        if(is_null($request->User)){
            $workorders = Workorder::whereIn('status_id', $request->statuses)->orderBy($d, $dir)->get();
        } else {
            $workorders = Workorder::whereIn('status_id', $request->statuses)->whereUsersId($request->User)->orderBy($d, $dir)->get();
        }
        return $workorders;
    }


}
