<div>
    @if($show)
        <div
            x-data="{ open: @entangle('show') }"
            x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 overflow-y-auto"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
        >
            {{-- Backdrop --}}
            <div
                class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm transition-opacity"
                @click="$wire.closeModal()"
            ></div>

            {{-- Modal Container --}}
            <div class="flex min-h-full items-center justify-center p-4">
                <div
                    x-show="open"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="relative w-full {{ $this->getMaxWidthClass() }} bg-white rounded-2xl shadow-xl transform transition-all"
                    @click.stop
                >
                    {{-- Header --}}
                    @if($title)
                        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900" id="modal-title">
                                {{ $title }}
                            </h3>
                            <button
                                type="button"
                                wire:click="closeModal"
                                class="text-slate-400 hover:text-slate-600 transition-colors"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    @else
                        <button
                            type="button"
                            wire:click="closeModal"
                            class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 transition-colors z-10"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    @endif

                    {{-- Content --}}
                    <div class="p-6">
                        {{ $slot }}
                    </div>

                    {{-- Footer (optional) --}}
                    @if(isset($footer))
                        <div class="px-6 py-4 border-t border-slate-200 bg-slate-50 rounded-b-2xl">
                            {{ $footer }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>

