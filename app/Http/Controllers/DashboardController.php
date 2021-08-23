<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Story;
use App\Mail\NotifyAdmin;
use App\Mail\NewStoryNotification;

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

    public function show($slug)
    {
        $story = Story::where('slug', $slug)->where('status',1)->firstOrFail();
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


    public function sendMail()
    {
        
        // Mail::raw('plain text message', function ($message) {
        //     $message->from('john@johndoe.com', 'John Doe');
        //     $message->sender('john@johndoe.com', 'John Doe');
        //     $message->to('john@johndoe.com', 'John Doe');
        //     $message->cc('john@johndoe.com', 'John Doe');
        //     $message->bcc('john@johndoe.com', 'John Doe');
        //     $message->replyTo('john@johndoe.com', 'John Doe');
        //     $message->subject('Subject');
        //     //$message->priority(3);
        //     //$message->attach('pathToFile');
        // });

        //Mail::to('admin@localhost.com')->send(new NotifyAdmin(' This is test mail story '));
        Mail::send(new NewStoryNotification(' new notification test '));

        dd('mail sent');
    }


}
