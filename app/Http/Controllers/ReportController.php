<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        Keluhan::all();
        return view('pages.report', compact('keluhan'));
    }
}
