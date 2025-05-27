<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\OutputTest;

class OutputTestController extends Controller
{
    public function index() {
        return Inertia::render('Output/Index');
    }

    public function create() {
        return Inertia::render('Output/Create');
    }

    public function show($id) {
        return Inertia::render('Output/Show',[
            'id' => $id
        ]);
    }

    public function store(Request $request) {
        $outputTest = new OutputTest;
        $outputTest->team = $request->team;
        $outputTest->description = $request->description;
        $outputTest->pts_avg = $request->pts_avg;
        $outputTest->ast_avg = $request->ast_avg;
        $outputTest->reb_avg = $request->reb_avg;
        $outputTest->save();

        return to_route('output.index');
    }
}
