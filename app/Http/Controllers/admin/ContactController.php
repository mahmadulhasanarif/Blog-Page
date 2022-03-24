<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        $this->data['contacts'] = Contact::all();
        return view('admin.admin_all.admin_contact.contact', $this->data);
    }
    
    public function show(Contact $contact)
    {
        $this->data['contact'] = $contact;
        return view('admin.admin_all.admin_contact.view', $this->data);
    }
    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        Session::flash('message', 'Message Deleted Successfully');
        return redirect()->to('/admin/contact');
    }
}
