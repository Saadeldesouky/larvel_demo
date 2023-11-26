<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function getEvents() {
        $events = array('Laravel 10.x Event', 'PHP 8.2 Event', 'Angular 17 Event');
        return view('pages.events', compact('events'));
    }
}
