@props([
    'label_name',
    'for_label',
    'name',
    'id',
    'options' => [],
])

<div class="mb-4 flex flex-col pt-3">

    <label
        class="pb-2 font-semibold text-[#2F2F2F]"
        for="{{ $for_label }}">
        {{ $label_name }}
    </label>

    <select
        name="{{ $name }}"
        id="{{ $id }}"
        {{ $attributes }}>

        <option value="">
            -- Sélectionner --
        </option>

        @foreach($options as $option)
            @if($option instanceof \UnitEnum)
                <option value="{{$option->value}}">
                    {{ method_exists($option, 'label') ? $option->label() : $option->value }}
                </option>
            @else
                <option value="{{ $option->id }}">
                    {{ $option->name }}
                </option>
            @endif
        @endforeach
    </select>

</div>
