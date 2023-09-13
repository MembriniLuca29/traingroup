<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;

class AgencyController extends Controller
{

    public function index() {

        $agencies = Agency::select('*')->get();

        return view('agencies', compact('agencies'));
    }
}
