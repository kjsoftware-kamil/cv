<div class="space-y-4">
    <div class="grid grid-cols-2 gap-4 text-sm">
        <div>
            <span class="font-medium text-gray-500 dark:text-gray-400">From:</span>
            <p class="mt-1">{{ $record->name }}</p>
        </div>
        <div>
            <span class="font-medium text-gray-500 dark:text-gray-400">Email:</span>
            <p class="mt-1"><a href="mailto:{{ $record->email }}" class="text-primary-600 hover:underline">{{ $record->email }}</a></p>
        </div>
    </div>
    @if($record->subject)
        <div class="text-sm">
            <span class="font-medium text-gray-500 dark:text-gray-400">Subject:</span>
            <p class="mt-1">{{ $record->subject }}</p>
        </div>
    @endif
    <div class="text-sm">
        <span class="font-medium text-gray-500 dark:text-gray-400">Message:</span>
        <div class="mt-2 p-4 rounded-lg bg-gray-50 dark:bg-gray-800 whitespace-pre-wrap">{{ $record->message }}</div>
    </div>
    <div class="text-xs text-gray-400">
        Received: {{ $record->created_at->format('M d, Y \a\t H:i') }}
    </div>
</div>
