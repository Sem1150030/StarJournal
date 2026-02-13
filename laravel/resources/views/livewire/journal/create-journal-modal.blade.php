<div class="bg-white rounded-2xl">
    {{-- Header --}}
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-violet-100 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-slate-900">Create New Journal</h3>
        </div>
        <button
            type="button"
            wire:click="$dispatch('closeModal')"
            class="text-slate-400 hover:text-slate-600 transition-colors"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    {{-- Form Content --}}
    <form wire:submit.prevent="save" class="p-6 space-y-5">
        {{-- Title --}}
        <div>
            <label for="journalTitle" class="block text-sm font-medium text-slate-700 mb-2">
                Title <span class="text-red-500">*</span>
            </label>
            <input
                type="text"
                id="journalTitle"
                wire:model="title"
                placeholder="My Journey Today..."
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all @error('journalTitle') border-red-500 @enderror"
            >
            @error('title')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description --}}
        <div>
            <label for="description" class="block text-sm font-medium text-slate-700 mb-2">
                Description <span class="text-slate-400 font-normal">(optional)</span>
            </label>
            <textarea
                id="description"
                wire:model="description"
                rows="3"
                placeholder="A brief description of what this journal entry is about..."
                class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all resize-none @error('description') border-red-500 @enderror"
            ></textarea>
            @error('description')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <p class="mt-1 text-xs text-slate-400">{{ strlen($description) }}/500 characters</p>
        </div>

        {{-- Footer Actions --}}
        <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-200">
            <button
                type="button"
                wire:click="$dispatch('closeModal')"
                class="px-4 py-2.5 text-slate-600 hover:text-slate-800 font-medium transition-colors"
            >
                Cancel
            </button>
            <button
                type="submit"
                class="inline-flex items-center gap-2 bg-violet-600 hover:bg-violet-500 text-white px-5 py-2.5 rounded-lg font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create Journal
            </button>
        </div>
    </form>
</div>
