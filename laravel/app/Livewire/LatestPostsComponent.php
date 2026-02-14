<?php

namespace App\Livewire;

use App\Enums\JournalStatus;
use App\Models\Journal;
use Livewire\Attributes\Computed;
use Livewire\Component;

class LatestPostsComponent extends Component
{
    public function render()
    {
        return view('livewire.latest-posts-component');
    }

    #[Computed]
    public function latestPosts()
    {
        return Journal::query()
            ->where('status', JournalStatus::PUBLISHED)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
    }
}
