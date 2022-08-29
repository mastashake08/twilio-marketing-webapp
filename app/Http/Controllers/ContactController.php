<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ContactImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function import(Request $request)
    {
        Excel::import(new ContactImport, $request->file);

        return redirect('dashboard')->with('status', 'Contacts IMPORTED!');
    }

    public function store(Request $request) {
      $contact = \App\Models\Contact::Create($request->all());
      return redirect('dashboard')->with('status', 'Contact CREATED!');
    }

    public function destroy (Contact $contact) {
      $contact->delete();
      return redirect('dashboard')->with('status', 'Contact DELETED!');
    }
}
