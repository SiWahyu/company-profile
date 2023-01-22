<?php

namespace App\Http\Controllers;

use App\Models\Tbl_Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {

        $contact = Tbl_Contact::all();
        dd($contact);
    }
}
