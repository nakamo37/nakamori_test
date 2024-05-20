<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Contact::all();
        return view('index', ['categories' => $categories]);
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'select', 'detail']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name', 'gender', 'email', 'tell', 'address', 'building','select', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function search(ContactRequest $request)
    {
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();

        return view('admin', compact('contacts'));
    }
}
