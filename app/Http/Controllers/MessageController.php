<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        //
        if($request->has('contact_id')) {
          foreach($request->contact_id as $contact_id) {
            $message = Message::create([
              'message' => $request->message,
              'contact_id' => $contact_id
            ]);
          }
        } else {
          $contacts = \App\Models\Contact::get(['id']);

          $contacts->each(function($contact) use ($request) {

            $message = Message::create([
              'message' => $request->message,
              'contact_id' => $contact->id
            ]);
          });
        }
        return redirect('dashboard')->with('status', 'Message SENT!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageRequest  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
        $message->delete();
        return redirect('dashboard')->with('status', 'Message DELETED!');
    }


}
