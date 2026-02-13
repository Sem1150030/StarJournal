<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public bool $show = false;
    public string $title = '';
    public string $maxWidth = 'md';

    protected $listeners = ['openModal', 'closeModal'];

    public function openModal($title = '')
    {
        $this->title = $title;
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
        $this->title = '';
    }

    public function getMaxWidthClass(): string
    {
        return match ($this->maxWidth) {
            'sm' => 'max-w-sm',
            'md' => 'max-w-md',
            'lg' => 'max-w-lg',
            'xl' => 'max-w-xl',
            '2xl' => 'max-w-2xl',
            '3xl' => 'max-w-3xl',
            '4xl' => 'max-w-4xl',
            '5xl' => 'max-w-5xl',
            'full' => 'max-w-full',
            default => 'max-w-md',
        };
    }

    public function render()
    {
        return view('livewire.modal-component');
    }
}

