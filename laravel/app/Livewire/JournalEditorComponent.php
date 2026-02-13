<?php

namespace App\Livewire;

use App\Enums\JournalStatus;
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
    public string $status = 'draft';

    protected function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'description' => 'nullable|max:500',
            'content' => 'required',
            'date' => 'required|date',
            'status' => 'required|in:' . implode(',', array_column(JournalStatus::cases(), 'value')),
        ];
    }

    public function mount(Journal $journal)
    {
        $this->date = now()->format('Y-m-d');
        $this->title = $journal->title;
        $this->description = $journal->description ?? '';
        $this->content = $journal->content ?? '';
        $this->date = $journal->date->format('Y-m-d');
        $this->status = $journal->status ?? 'draft';
    }

    public function save()
    {
        $this->validate();

        $journalService = app(JournalService::class);

        $journalService->updateJournal($this->journal->id, [
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'date' => $this->date,
            'status' => $this->status,
        ]);

        return redirect()->route('index')->with('success', 'Journal entry updated successfully!');
    }

    public function getStatusOptionsProperty(): array
    {
        return JournalStatus::options();
    }

    public function render()
    {
        return view('livewire.journal-editor-component');
    }
}
