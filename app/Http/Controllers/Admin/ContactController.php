<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contact = Contact::latest()->first();
        return view('admin.contact.index', compact('contact'));
    }

    public function update(Contact $contact, Request $request)
    {
        Contact::updateOrCreate( [
            'id' => $contact ? $contact->id : null
        ],
            [
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'time' => $request->time
        ]
            );
            return back()->with('success', 'Contact updated successfully!');
    }
}
