<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class DashboardController extends Controller
{
    
    public function index()
    {
        
        $query = Story::where('status', 1);

        $type = request()->input('type');

        if(in_array($type, ['short','long'])){
            $query->where('type', $type);
        }

        $stories = $query->with('user')
            ->orderBy('id', 'DESC')
            ->paginate(5);
        
        return view('dashboard.index',[
            'stories' => $stories,
        ]);
    }
}
