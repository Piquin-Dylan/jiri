@props(['number', 'content', 'active' => false])

<div {{ $attributes->class(['flex flex-1 items-center justify-center gap-3']) }} @if($active) aria-current="step" @endif>    <span @class([
        'flex h-8 w-8 shrink-0 text-center items-center justify-center rounded-full text-sm font-semibold transition',
        'bg-[#4a5a87] text-white' => $active,
        'bg-slate-100 text-slate-400' => ! $active,
    ])>
        {{ $number }}
    </span>

    <span @class([
        'text-sm transition',
        'font-semibold text-slate-800' => $active,
        'font-normal text-slate-400' => ! $active,
    ])>
        {{ $content }}
    </span>
</div>
