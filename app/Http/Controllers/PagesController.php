<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class PagesController extends Controller
{
    
    public function getHome() {
        return view('pages.home');
    }

    public function postHome(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);
    
        if ($validator->fails()) {
            return redirect('/#errors')
                        ->withErrors($validator)
                        ->withInput();
        }

        Mail::to('kelly@sullivanforhouse.com')
            ->send(new Volunteer($request));

        return redirect('/')->with('success', 'Thank you, your message has been sent!');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect('contact#errors')
                        ->withErrors($validator)
                        ->withInput();
        }

        Mail::to('kelly@sullivanforhouse.com')
            ->send(new Contact($request));
        
        return redirect('contact')->with('success', 'Thank you, your message has been sent!');
    }
}
