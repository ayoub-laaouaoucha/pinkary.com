@props([
    'link' => null,
    'text' => null,
])

@if ($link !== null && $text !== null)
    <div class="relative h-10 -mb-3 flex items-center">
        <span class="absolute left-8 h-2 top-0 border-2 border-slate-600" aria-hidden="true"></span>
        <span class="absolute left-8 h-6 border-2 border-slate-600 border-dotted" aria-hidden="true"></span>
        <span class="absolute left-8 h-2 bottom-0 border-2 border-slate-600 " aria-hidden="true"></span>
        <a href="{{ $link }}" class="text-sm text-pink-500 ml-12">
            {{ $text }}
        </a>
    </div>
@else
    <div class="relative h-6 -mb-3 flex items-center">
        <span class="absolute left-8 h-full w-1 rounded-full bg-slate-700" aria-hidden="true"></span>
    </div>
@endif

