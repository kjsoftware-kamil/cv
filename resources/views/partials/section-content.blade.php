<h2 class="text-2xl font-bold tracking-tight mb-2" style="color: var(--text-heading);">{{ $section->trans('title') }}</h2>
@if($section->trans('subtitle'))
    <p class="mb-6" style="color: var(--text-muted);">{{ $section->trans('subtitle') }}</p>
@endif
@if($section->image)
    <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->trans('title') }}" class="rounded-lg mb-6 max-w-full h-auto shadow">
@endif
@if($section->trans('body'))
    <div class="prose dark:prose-invert max-w-none">{!! $section->trans('body') !!}</div>
@endif
