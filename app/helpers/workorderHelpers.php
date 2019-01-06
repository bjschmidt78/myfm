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

// if (! function_exists('*')) {
//     function *() {

//     }
// }


// ***************************************
// **  Display all workorders no limit  **
// ***************************************

if (! function_exists('bsWorkorderAll')) {
    function bsWorkorderAll() {
        $workorders = Workorder::all();
        $categories = Categories::all();
        $users = User::all();
        $priorities = Priority::all();
        $statuses = Status::all();

        return compact('workorders', 'statuses', 'priorities', 'users', 'categories');
    }
}

if (! function_exists('bsWorkorderNew')) {
    function bsWorkorderNew() {
        $workorders = Workorder::whereIn('status_id', [1])->orderBy('due', 'desc')->get();
        $categories = Categories::all();
        $users = User::all();
        $priorities = Priority::all();
        $statuses = Status::all();

        return compact('workorders', 'statuses', 'priorities', 'users', 'categories');
    }
}

