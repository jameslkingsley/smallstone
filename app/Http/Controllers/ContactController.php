<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = (object) $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'present',
            'website' => 'present',
            'body' => 'required',
        ]);

        Mail::to($attributes->email)->send(new Contact($attributes));

        return response('', 204);
    }
}
