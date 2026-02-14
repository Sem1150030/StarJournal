<?php

namespace App\Livewire\Journal;

use App\Models\Journal;
use App\Services\JournalService;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class CreateJournalModal extends ModalComponent
{
    public string $title = '';
    public string $description = '';

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'description' => 'nullable|max:500',
    ];

    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public function save()
    {
        $journal = app(JournalService::class)->createJournal($this->validate());

        $this->closeModal();

        return redirect()->route('journal.edit', $journal->id)
            ->with('success', 'Journal created! Start writing your entry.');
    }

    public function render()
    {
        return view('livewire.journal.create-journal-modal');
    }
}
