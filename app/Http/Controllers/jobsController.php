<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class jobsController extends Controller
{
    //
    public function index()
    {
        return Jobs::all();
    }
}
