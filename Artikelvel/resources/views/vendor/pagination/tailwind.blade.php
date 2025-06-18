@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Navigasi Paginasi" class="flex items-center justify-center my-8">
        <ul class="inline-flex items-center gap-1">
            {{-- Tombol Sebelumnya --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="px-4 py-2 rounded-md bg-neutral-200 text-neutral-400 font-bold cursor-not-allowed select-none">Sebelumnya</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 rounded-md bg-white border border-black text-black font-bold transition-colors duration-150 hover:bg-black hover:text-white focus:bg-black focus:text-white active:bg-black active:text-white">Sebelumnya</a>
                </li>
            @endif

            {{-- Nomor Halaman --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <span class="px-4 py-2 text-neutral-400 select-none">{{ $element }}</span>
                    </li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="px-4 py-2 rounded-md bg-black text-white font-bold border border-black select-none">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-4 py-2 rounded-md bg-white border border-black text-black font-bold transition-colors duration-150 hover:bg-black hover:text-white focus:bg-black focus:text-white active:bg-black active:text-white">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Tombol Berikutnya --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 rounded-md bg-white border border-black text-black font-bold transition-colors duration-150 hover:bg-black hover:text-white focus:bg-black focus:text-white active:bg-black active:text-white">Berikutnya</a>
                </li>
            @else
                <li>
                    <span class="px-4 py-2 rounded-md bg-neutral-200 text-neutral-400 font-bold cursor-not-allowed select-none">Berikutnya</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
<style>
    .hover\:text-white:hover { color: #fff !important; }
    .focus\:text-white:focus { color: #fff !important; }
    .active\:text-white:active { color: #fff !important; }
</style>
