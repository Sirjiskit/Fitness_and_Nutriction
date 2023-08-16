<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function schedule()
    {
        return view('schedule');
    }
    public function form()
    {
        return view('form');
    }
    public function services()
    {
        return view('services');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function blog()
    {
        return view('blog');
    }
    public function details($details)
    {
        return view('details', compact('details'));
    }
    public function constact(Request $request)
    {
        $save = Contact::create($request->all());
        return back()->with('success', 'Data successfully submited!');
    }
}
