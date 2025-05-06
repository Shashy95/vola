@extends('admin.partials.master')

@section('title', $team->exists ? 'Edit Team Member' : 'Add Team Member')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{ $team->exists ? 'Edit Team Member' : 'Add Team Member' }}</h4>

        <form action="{{ $team->exists ? route('teams.update', $team) : route('teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($team->exists)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $team->name) }}" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="name">Position</label>
                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('name', $team->position) }}" required>
                @error('position')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" onchange="previewImage(event)">
                @error('photo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            
                @if(isset($team) && $team->photo)
                <div id="thumbnailPreview" class="mt-2">
                    <img src="{{ asset($team->photo) }}" width="120" class="img-fluid">
                </div>
            @else
                <div id="thumbnailPreview" class="mt-2"></div>
            @endif
            </div>


            <button type="submit" class="btn btn-success">{{ $team->exists ? 'Update' : 'Create' }}</button>
        </form>
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
