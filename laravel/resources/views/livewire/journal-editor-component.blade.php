<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="mb-6">
            <h2 class="font-display text-2xl text-slate-900 mb-2">
                {{ $journalId ? 'Edit Journal Entry' : 'New Journal Entry' }}
            </h2>
            <p class="text-slate-500">Write your thoughts, ideas, and reflections.</p>
        </div>

        <form wire:submit.prevent="save" class="space-y-6">
            {{-- Date Picker --}}
            <div>
                <label for="date" class="block text-sm font-medium text-slate-700 mb-2">Date</label>
                <input
                    type="date"
                    id="date"
                    wire:model="date"
                    class="w-full max-w-xs px-4 py-3 rounded-lg border border-slate-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/20 outline-none transition-all"
                >
                @error('date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- CKEditor --}}
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-2">Content</label>
                <div wire:ignore>
                    <div id="editor" class="min-h-[400px]">{!! $content !!}</div>
                </div>
                <input type="hidden" id="editor-content" wire:model="content">
                @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-between pt-4 border-t border-slate-200">
                <a href="{{ route('index') }}" class="text-slate-600 hover:text-slate-800 transition-colors">
                    ← Back to Home
                </a>
                <button
                    type="submit"
                    class="bg-violet-600 hover:bg-violet-500 text-white px-6 py-3 rounded-full font-medium transition-all hover:shadow-lg hover:shadow-violet-500/25"
                >
                    {{ $journalId ? 'Update Entry' : 'Save Entry' }}
                </button>
            </div>
        </form>
    </div>

    {{-- CKEditor 5 CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <style>
        .ck-editor__editable {
            min-height: 400px;
            border-radius: 0.5rem !important;
        }
        .ck-editor__editable:focus {
            border-color: #8b5cf6 !important;
            box-shadow: 0 0 0 2px rgba(139, 92, 246, 0.2) !important;
        }
        .ck.ck-editor__main > .ck-editor__editable {
            background-color: #fff;
        }
        .ck.ck-toolbar {
            border-radius: 0.5rem 0.5rem 0 0 !important;
            border-color: #cbd5e1 !important;
        }
        .ck.ck-editor__main > .ck-editor__editable:not(.ck-focused) {
            border-color: #cbd5e1;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    toolbar: {
                        items: [
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'underline',
                            'strikethrough',
                            '|',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'blockQuote',
                            'link',
                            '|',
                            'undo',
                            'redo'
                        ]
                    },
                    placeholder: 'Start writing your journal entry...',
                    language: 'en'
                })
                .then(editor => {
                    // Sync content to Livewire on every change
                    editor.model.document.on('change:data', () => {
                        @this.set('content', editor.getData());
                    });

                    // Handle Livewire updates
                    Livewire.on('contentUpdated', (content) => {
                        editor.setData(content);
                    });
                })
                .catch(error => {
                    console.error('CKEditor initialization error:', error);
                });
        });
    </script>
</div>
