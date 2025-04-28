@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm ']) }} style="list-style:none;padding-left:0px;">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
