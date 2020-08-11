<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('tasks');
    }

    public function create()
    {
        return redirect('tasks');
    }

    public function delete($id)
    {
        return redirect('tasks');
    }
}
