<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OutputTestController extends Controller
{
    public function index() {
        return Inertia::render('Output/Index');
    }

    public function show($id) {
        return Inertia::render('Output/Show',[
            'id' => $id
        ]);
    }
}
