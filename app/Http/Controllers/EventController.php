<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventList = Event::all();

        return view('Echo', ['eventList' => $eventList]);
    }

    public function showEvent($id)
    {

        $event = Event::find($id);
        return view('events.eventDetail', ['event' => $event]);
    }

    // public function inscribe()
    // {

    //     if (Auth::check()) {

    //         $eventList = Event::all();

    //         return view('./events/events', ['eventList' => $eventList]);
    //     } 
    //     else {

    //         return view('auth.register');
    //     }
    // }

    public function inscribe()
    {

        if (!Auth::check()) {

            return view('auth.register');
        }

        $id = Auth::id();
        $user = User::find($id);
        return view('./users.profile', ['user' => $user]);
    }


    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}