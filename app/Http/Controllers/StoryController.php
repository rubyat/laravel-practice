<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Http\Requests\StoryRequest;
use Illuminate\Support\Facades\Gate;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $stories = Story::where('user_id', auth()->user()->id)
                          ->orderBy('id', 'DESC')
                          ->paginate(5);
        
        return view('stories.index',[
            'stories' => $stories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $story = new Story;
        return view('stories.create', [
            'story' => $story,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
    {
        //

        // $data = $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        //     'type' => 'required',
        //     'status' => 'required',
        // ]);

        auth()->user()->stories()->create($request->all());

        return redirect()->route('stories.index')->with('status','Story Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        
        return view('stories.show',[
            'story' => $story,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story) 
    {
        //
        //Gate::authorize('edit-story', $story);
          
        return view('stories.edit', [
            'story' => $story
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoryRequest $request, Story $story)
    {
        //
        // $data = $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        //     'type' => 'required',
        //     'status' => 'required',
        // ]);

        $story->update($request->all());
        return redirect()->route('stories.index')->with('status','Story Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        
        $story->delete();
        return redirect()->route('stories.index')->with('status','Story Deleted Successfully');
    }
}
