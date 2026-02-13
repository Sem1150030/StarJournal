<?php

namespace App\Livewire;

use App\Models\Journal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class JournalEditorComponent extends Component
{
    public $content = '';
    public $date;
    public $journalId = null;

    protected $rules = [
        'content' => 'required',
        'date' => 'required|date',
    ];

    public function mount($journalId = null)
    {
        $this->date = now()->format('Y-m-d');

        if ($journalId) {
            $journal = Journal::where('id', $journalId)
                ->where('user_id', Auth::id())
                ->firstOrFail();

            $this->journalId = $journal->id;
            $this->content = $journal->content;
            $this->date = $journal->date->format('Y-m-d');
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->journalId) {
            $journal = Journal::where('id', $this->journalId)
                ->where('user_id', Auth::id())
                ->firstOrFail();

            $journal->update([
                'content' => $this->content,
                'date' => $this->date,
            ]);
        } else {
            Journal::create([
                'user_id' => Auth::id(),
                'date' => $this->date,
                'content' => $this->content,
            ]);
        }

        return redirect()->route('index')->with('success', 'Journal entry saved successfully!');
    }

    public function render()
    {
        return view('livewire.journal-editor-component');
    }
}
