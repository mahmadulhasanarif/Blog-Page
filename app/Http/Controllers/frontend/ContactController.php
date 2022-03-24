<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact.contact');
    }
    
    public function store(Request $request)
    {
        $this->data = $request->all();
        Contact::create($this->data);
        Session::flash('message', 'Message Send Successfully');
        return redirect()->back();
    }
    
}
