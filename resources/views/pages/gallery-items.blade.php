{{-- partials/gallery-items.blade.php --}}
@foreach($gallery as $index => $image)
<div class="col-lg-4 col-md-6 col-sm-6 gallery-column">
    <div class="gallery-item position-relative overflow-hidden rounded" data-index="{{ $index }}" data-src="{{ asset($image->image_path) }}">
        <img src="{{ asset($image->image_path) }}" class="w-100 h-100 object-fit-cover" loading="lazy">
    </div>
</div>
@endforeach