<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test3Controller extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function store(Request $request)
    {
        return view('register');
    }

    public function create(WeightLogRequest $request)
    {
        $form = $request->all();
        WeightLog::create($form);
        return redirect('/weight_logs');
    }
}
