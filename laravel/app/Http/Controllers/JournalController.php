<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function create(Journal $journal)
    {
        abort_if($journal->user_id !== auth()->id(), 403, 'Unauthorized access to this journal.');

       return view('journal.create', [
            'journal' => $journal,
       ]);
    }
}
