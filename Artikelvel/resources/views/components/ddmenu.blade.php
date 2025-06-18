@props([
    'ddOpen' => 0,
    'ddId' => 0,
    'listHeader' => [],
    'listContent' => [],
])

<div x-cloak x-show="ddOpen == {{ $ddId }}" @mouseover="ddOpen = {{ $ddId }}"
    class="min-w-[50vw] max-w-[80%] min-h-16 bg-white absolute top-15 left-[10%] lg:left-[15%] tracking-tight    z-[-1] flex flex-col text-base font-bold py-2 px-5 gap-4 ">
    <section class="flex w-full h-full gap-3 *:pb-2 *:hover:text-yellow-500">
        {{-- <h1 class="w-full border-b-[.5px] border-b-black/25 h-full"></h1> --}}
        @foreach ($listHeader as $header)
            <h1 class="w-full border-b-[.5px] border-b-black/25 h-full">{{ $header }}</h1>
        @endforeach
    </section>
    <section class="w-full flex h-full font-normal text-sm normal-case *:*:hover:text-yellow-500 pb-3 gap-4">
        @foreach ($listContent as $contents)
            <div class="w-full flex flex-col gap-4">
                @foreach ($contents as $content)
                    <a href="{{ $content['link'] }}">{{ $content['name'] }}</a>
                @endforeach
            </div>
        @endforeach
    </section>
</div>