<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Use the correct model for contact
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method to show the list of contacts
    public function showAdminList()
    {
        $data = Contact::all(); // Retrieve all contact data
        return view('liste-admin', compact('data')); // Pass data to the view
    }

    // Method to fetch a single contact by ID
    public function getContactId($id)
    {
        $contact = Contact::find($id); // Fetch a single contact by ID
        if (!$contact) {
            return redirect()->route('liste-admin')->with('error', 'Contact not found.');
        }
        return view('modifier-contact', ['data' => $contact]); // Pass the contact to the view
    }

    // Method to update a contact
    public function updateContact(Request $request)
    {
        $contact = Contact::find($request->id); // Find the contact by ID
        if (!$contact) {
            return redirect()->route('liste-admin')->with('error', 'Contact not found.');
        }
        // Update contact details
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save(); // Save changes to the database
        return redirect()->route('liste-admin')->with('message', 'Contact updated successfully.');
    }

    // AdminController.php


    public function showLoginForm()
    {
        return view('userlogin.login'); // Correct path to your login view
    }



    public function authenticate(Request $request)
    {
        // Authentication logic here
    }
}


