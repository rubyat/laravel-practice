<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestsController extends Controller
{
    

    public function index()
    {

        $result = DB::table('pages')->get();

        dd($result);
        
        return view('test');
    }


}
