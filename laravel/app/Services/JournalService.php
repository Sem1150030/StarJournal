<?php

namespace App\Services;

use App\Models\Journal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class JournalService
{
    public function createJournal(array $data): Journal
    {
        $validator = Validator::make($data, [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

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
        $validator = Validator::make($data, [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $journal = Journal::where('id', $journalId)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $journal->update([
            'title' => $data['title'] ?? $journal->title,
            'description' => $data['description'] ?? $journal->description,
            'content' => $data['content'] ?? $journal->content,
            'date' => $data['date'] ?? $journal->date,
        ]);

        return $journal->fresh();
    }
}
