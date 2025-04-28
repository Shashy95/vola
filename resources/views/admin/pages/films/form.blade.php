@extends('admin.partials.master')

@section('title', isset($film) ? 'Edit Film' : 'Create Film')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ isset($film) ? 'Edit Film' : 'Create New Film' }}</h4>

                <form action="{{ isset($film) ? route('films.update', $film->id) : route('films.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($film))
                        @method('PUT')
                    @endif

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title', $film->title ?? '') }}" class="form-control @error('title') is-invalid @enderror" required>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="4">{{ old('description', $film->description ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnailInput" onchange="previewImage(event)">
                        
                        @error('thumbnail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        @if(isset($film) && $film->thumbnail)
                            <div id="thumbnailPreview" class="mt-2">
                                <img src="{{ asset($film->thumbnail) }}" width="120" class="img-fluid">
                            </div>
                        @else
                            <div id="thumbnailPreview" class="mt-2"></div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" name="video_path" class="form-control" value="{{ old('video_path', $film->video_path ?? '') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">{{ isset($film) ? 'Update' : 'Create' }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Function to preview selected image
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const previewContainer = document.getElementById('thumbnailPreview');
            previewContainer.innerHTML = '<img src="' + e.target.result + '" width="120" class="img-fluid">';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
