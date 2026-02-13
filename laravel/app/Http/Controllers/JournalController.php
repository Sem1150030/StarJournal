<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function create()
    {
       return view('journal.create');
    }
}
