@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative']) }} role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ $status }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.354 5.646a.5.5 0 10-.708-.708L10 9.293 5.354 4.646a.5.5 0 00-.708.708L9.293 10l-4.647 4.646a.5.5 0 10.708.708L10 10.707l4.646 4.647a.5.5 0 00.708-.708L10.707 10l4.647-4.646z" clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
        </span>
    </div>
@endif
