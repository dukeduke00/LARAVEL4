<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("Contact");
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all(); // Isto kao da smo napisali : SELECT * FROM contacts
        return view("allContacts", compact("allContacts"));

    }
}
