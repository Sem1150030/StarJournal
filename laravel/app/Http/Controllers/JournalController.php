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

    public function edit(Journal $journal)
    {
        abort_if($journal->user_id !== auth()->id(), 403, 'Unauthorized access to this journal.');

        return view('journal.create', [
            'journal' => $journal,
        ]);
    }

    public function show(Journal $journal)
    {
        abort_if($journal->user_id !== auth()->id(), 403, 'Unauthorized access to this journal.');

        return view('journal.show', [
            'journal' => $journal,
        ]);
    }

    public function index(Request $request)
    {
        return view('journal.index');
    }
}
