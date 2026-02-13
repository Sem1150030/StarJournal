<?php

namespace App\Livewire;

use App\Models\Journal;
use App\Services\JournalService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class JournalEditorComponent extends Component
{
    public $content = '';
    public $date;
    public Journal $journal;
    public string $title = '';
    public string $description = '';

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'description' => 'nullable|max:500',
        'content' => 'required',
        'date' => 'required|date',
    ];

    public function mount(Journal $journal)
    {
        $this->date = now()->format('Y-m-d');
        $this->title = $journal->title;
        $this->description = $journal->description ?? '';
        $this->content = $journal->content ?? '';
        $this->date = $journal->date->format('Y-m-d');

    }

    public function save()
    {
        $this->validate();

        $journalService = app(JournalService::class);

        if ($this->journalId) {
            $journalService->updateJournal($this->journalId, [
                'title' => $this->title,
                'description' => $this->description,
                'content' => $this->content,
                'date' => $this->date,
            ]);
            $message = 'Journal entry updated successfully!';
        } else {
            $journalService->createJournal([
                'title' => $this->title,
                'description' => $this->description,
                'content' => $this->content,
                'date' => $this->date,
            ]);
            $message = 'Journal entry saved successfully!';
        }

        return redirect()->route('index')->with('success', $message);
    }

    public function render()
    {
        return view('livewire.journal-editor-component');
    }
}
