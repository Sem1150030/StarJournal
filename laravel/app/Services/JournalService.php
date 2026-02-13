<?php

namespace App\Services;

use App\Models\Journal;
use Illuminate\Support\Facades\Auth;

class JournalService
{
    public function createJournal(array $data): Journal
    {
        return Journal::create([
            'user_id' => Auth::id(),
            'title' => $data['title'],
            'description' => $data['description'] ?? null,
            'content' => $data['content'] ?? null,
            'date' => $data['date'] ?? now(),
            'status' => 'draft',
        ]);
    }

    public function updateJournal(int $journalId, array $data): Journal
    {

        $journal = Journal::where('id', $journalId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $journal->update([
            'title' => $data['title'] ?? $journal->title,
            'description' => $data['description'] ?? $journal->description,
            'content' => $data['content'] ?? $journal->content,
            'date' => $data['date'] ?? $journal->date,
            'status' => $data['status'] ?? $journal->status,
        ]);

        return $journal->fresh();
    }
}
