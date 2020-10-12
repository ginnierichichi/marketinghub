<?php

namespace App\Http\Controllers;

use App\Models\Unicrimp;
use Illuminate\Http\Request;

class UnicrimpController extends Controller
{
    public function index()
    {
        $users = Unicrimp::all();

        return view('/unicrimp', compact('users'));
    }
}
