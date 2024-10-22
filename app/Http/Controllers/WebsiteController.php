<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function contact_store(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            "email" => ['required', 'email'],
            "phone" => ['required', 'numeric'],
            "subject" => ['required'],
            "msg" => ['required'],
        ]);

        ContactUs::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "subject" => $request->subject,
            "msg" => $request->msg,
        ]);

        return redirect()->route('contact')->with('successMsg', 'Thank You. Out Team Will Contact You Soon,');
    }
}
