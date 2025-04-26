@extends('admin.partials.master')

@section('title', 'Gallery')

@section('content')
<div class="row">
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Upload Gallery</h4>

<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="images">Upload Images</label>
        <input type="file" name="images[]" id="images" class="form-control" multiple>
        @error('images')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-2">Upload</button>
</form>

{{-- Gallery Images --}}
@if($images->count())
<div class="row mt-5">
    @foreach($images as $image)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset($image->image_path) }}" alt="Gallery Image" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center p-2">
                    <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@else
    <p class="mt-4">No gallery images uploaded yet.</p>
@endif

</div>
</div>
</div>
</div>   
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Attach event listener to all delete forms
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting immediately
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if user confirms
                }
            });
        });
    });
</script>
@endsection
