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
                    <div id="toolbar-container" class="sticky top-20 z-10 bg-white"></div>
                    <div id="editor" class="min-h-[400px] border border-slate-300 rounded-b-lg p-4">{!! $content !!}</div>
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

    {{-- CKEditor 5 CDN - Decoupled Document Build with image support --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/decoupled-document/ckeditor.js"></script>

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

        /* CKEditor heading styles - override Tailwind reset */
        .ck-editor__editable h1 {
            font-size: 2.25rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 0.75rem;
            margin-top: 1rem;
        }
        .ck-editor__editable h2 {
            font-size: 1.875rem;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 0.75rem;
            margin-top: 1rem;
        }
        .ck-editor__editable h3 {
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 0.5rem;
            margin-top: 0.75rem;
        }
        .ck-editor__editable h4 {
            font-size: 1.25rem;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 0.5rem;
            margin-top: 0.75rem;
        }
        .ck-editor__editable p {
            font-size: 1rem;
            line-height: 1.75;
            margin-bottom: 0.75rem;
        }
        .ck-editor__editable ul,
        .ck-editor__editable ol {
            padding-left: 1.5rem;
            margin-bottom: 0.75rem;
        }
        .ck-editor__editable ul {
            list-style-type: disc;
        }
        .ck-editor__editable ol {
            list-style-type: decimal;
        }
        .ck-editor__editable li {
            margin-bottom: 0.25rem;
        }
        .ck-editor__editable blockquote {
            border-left: 4px solid #8b5cf6;
            padding-left: 1rem;
            margin: 1rem 0;
            font-style: italic;
            color: #64748b;
        }
        .ck-editor__editable a {
            color: #8b5cf6;
            text-decoration: underline;
        }

        /* Image alignment styles */
        .ck-editor__editable .image {
            margin: 1rem 0;
        }
        .ck-editor__editable .image img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
        .ck-editor__editable .image-style-align-left {
            float: left;
            margin-right: 1.5rem;
            margin-bottom: 1rem;
            max-width: 50%;
        }
        .ck-editor__editable .image-style-align-right {
            float: right;
            margin-left: 1.5rem;
            margin-bottom: 1rem;
            max-width: 50%;
        }
        .ck-editor__editable .image-style-align-center {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
        .ck-editor__editable .image.image_resized {
            max-width: 100%;
        }
        .ck-editor__editable .image.image_resized img {
            width: 100%;
        }
        /* Clear floats after images */
        .ck-editor__editable p:after,
        .ck-editor__editable h1:after,
        .ck-editor__editable h2:after,
        .ck-editor__editable h3:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            DecoupledEditor
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
                            'insertImage',
                            'imageStyle:alignLeft',
                            'imageStyle:alignCenter',
                            'imageStyle:alignRight',
                            '|',
                            'undo',
                            'redo'
                        ],
                        shouldNotGroupWhenFull: true
                    },
                    image: {
                        toolbar: [
                            'imageStyle:alignLeft',
                            'imageStyle:alignCenter',
                            'imageStyle:alignRight',
                            '|',
                            'imageTextAlternative'
                        ],
                        styles: [
                            'alignLeft',
                            'alignCenter',
                            'alignRight'
                        ]
                    },
                    placeholder: 'Start writing your journal entry...',
                    language: 'en'
                })
                .then(editor => {
                    // Append the toolbar to the container
                    const toolbarContainer = document.querySelector('#toolbar-container');
                    toolbarContainer.appendChild(editor.ui.view.toolbar.element);

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
