<?php

namespace App\Http\Controllers;

use App\Events\sendmail;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function adminform(Request $req){
        // dd($req->all());
        $event = new Event;
        $event->title = $req->fname;
        $event->description = $req->lname;
        $event->save();
        return redirect()->back();
    }
    public function index(){
        
        Event::fire(new sendmail(1));
        return view('/home');
    }
}
