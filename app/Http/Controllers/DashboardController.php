<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class DashboardController extends Controller
{
    
    public function index()
    {
        
        //$query = Story::where('status', 1);
        $query = Story::active();

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

    public function show(Story $story)
    {
        
        return view('dashboard.show',[
            'story' => $story,
        ]);
    }
    public function page($page)
    {
        dd('page');
        
        // return view('dashboard.show',[
        //     'story' => $story,
        // ]);
    }
    
    public function show__(Story $story)
    {
        
        return view('dashboard.show',[
            'story' => $story,
        ]);
    }
}
